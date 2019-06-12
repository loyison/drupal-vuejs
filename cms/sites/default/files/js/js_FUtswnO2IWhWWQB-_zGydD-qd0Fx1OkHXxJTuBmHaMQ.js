/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, _, Drupal) {
  Drupal.quickedit.editors.plain_text = Drupal.quickedit.EditorView.extend({
    $textElement: null,

    initialize: function initialize(options) {
      Drupal.quickedit.EditorView.prototype.initialize.call(this, options);

      var editorModel = this.model;
      var fieldModel = this.fieldModel;

      var $fieldItems = this.$el.find('.quickedit-field');
      var $textElement = $fieldItems.length ? $fieldItems.eq(0) : this.$el;
      this.$textElement = $textElement;
      editorModel.set('originalValue', $.trim(this.$textElement.text()));

      var previousText = editorModel.get('originalValue');
      $textElement.on('keyup paste', function (event) {
        var currentText = $.trim($textElement.text());
        if (previousText !== currentText) {
          previousText = currentText;
          editorModel.set('currentValue', currentText);
          fieldModel.set('state', 'changed');
        }
      });
    },
    getEditedElement: function getEditedElement() {
      return this.$textElement;
    },
    stateChange: function stateChange(fieldModel, state, options) {
      var from = fieldModel.previous('state');
      var to = state;
      switch (to) {
        case 'inactive':
          break;

        case 'candidate':
          if (from !== 'inactive') {
            this.$textElement.removeAttr('contenteditable');
          }
          if (from === 'invalid') {
            this.removeValidationErrors();
          }
          break;

        case 'highlighted':
          break;

        case 'activating':
          _.defer(function () {
            fieldModel.set('state', 'active');
          });
          break;

        case 'active':
          this.$textElement.attr('contenteditable', 'true');
          break;

        case 'changed':
          break;

        case 'saving':
          if (from === 'invalid') {
            this.removeValidationErrors();
          }
          this.save(options);
          break;

        case 'saved':
          break;

        case 'invalid':
          this.showValidationErrors();
          break;
      }
    },
    getQuickEditUISettings: function getQuickEditUISettings() {
      return {
        padding: true,
        unifiedToolbar: false,
        fullWidthToolbar: false,
        popup: false
      };
    },
    revert: function revert() {
      this.$textElement.html(this.model.get('originalValue'));
    }
  });
})(jQuery, _, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, _) {
  Drupal.quickedit.editors.form = Drupal.quickedit.EditorView.extend({
    $formContainer: null,

    formSaveAjax: null,

    stateChange: function stateChange(fieldModel, state) {
      var from = fieldModel.previous('state');
      var to = state;
      switch (to) {
        case 'inactive':
          break;

        case 'candidate':
          if (from !== 'inactive') {
            this.removeForm();
          }
          break;

        case 'highlighted':
          break;

        case 'activating':
          if (from !== 'invalid') {
            this.loadForm();
          }
          break;

        case 'active':
          break;

        case 'changed':
          break;

        case 'saving':
          this.save();
          break;

        case 'saved':
          break;

        case 'invalid':
          this.showValidationErrors();
          break;
      }
    },
    getQuickEditUISettings: function getQuickEditUISettings() {
      return {
        padding: true,
        unifiedToolbar: true,
        fullWidthToolbar: true,
        popup: true
      };
    },
    loadForm: function loadForm() {
      var fieldModel = this.fieldModel;

      var id = 'quickedit-form-for-' + fieldModel.id.replace(/[/[\]]/g, '_');

      var $formContainer = $(Drupal.theme('quickeditFormContainer', {
        id: id,
        loadingMsg: Drupal.t('Loading…')
      }));
      this.$formContainer = $formContainer;
      $formContainer.find('.quickedit-form').addClass('quickedit-editable quickedit-highlighted quickedit-editing').attr('role', 'dialog');

      if (this.$el.css('display') === 'inline') {
        $formContainer.prependTo(this.$el.offsetParent());

        var pos = this.$el.position();
        $formContainer.css('left', pos.left).css('top', pos.top);
      } else {
        $formContainer.insertBefore(this.$el);
      }

      var formOptions = {
        fieldID: fieldModel.get('fieldID'),
        $el: this.$el,
        nocssjs: false,

        reset: !fieldModel.get('entity').get('inTempStore')
      };
      Drupal.quickedit.util.form.load(formOptions, function (form, ajax) {
        Drupal.AjaxCommands.prototype.insert(ajax, {
          data: form,
          selector: '#' + id + ' .placeholder'
        });

        $formContainer.on('formUpdated.quickedit', ':input', function (event) {
          var state = fieldModel.get('state');

          if (state === 'invalid') {
            fieldModel.set('state', 'activating');
          } else {
              fieldModel.set('state', 'changed');
            }
        }).on('keypress.quickedit', 'input', function (event) {
          if (event.keyCode === 13) {
            return false;
          }
        });

        fieldModel.set('state', 'active');
      });
    },
    removeForm: function removeForm() {
      if (this.$formContainer === null) {
        return;
      }

      delete this.formSaveAjax;

      Drupal.detachBehaviors(this.$formContainer.get(0), null, 'unload');
      this.$formContainer.off('change.quickedit', ':input').off('keypress.quickedit', 'input').remove();
      this.$formContainer = null;
    },
    save: function save() {
      var $formContainer = this.$formContainer;
      var $submit = $formContainer.find('.quickedit-form-submit');
      var editorModel = this.model;
      var fieldModel = this.fieldModel;

      var formSaveAjax = Drupal.quickedit.util.form.ajaxifySaving({
        nocssjs: false,
        other_view_modes: fieldModel.findOtherViewModes()
      }, $submit);

      function cleanUpAjax() {
        Drupal.quickedit.util.form.unajaxifySaving(formSaveAjax);
        formSaveAjax = null;
      }

      formSaveAjax.commands.quickeditFieldFormSaved = function (ajax, response, status) {
        cleanUpAjax();

        fieldModel.set('state', 'saved');

        fieldModel.set('htmlForOtherViewModes', response.other_view_modes);

        _.defer(function () {
          fieldModel.set('html', response.data);
        });
      };

      formSaveAjax.commands.quickeditFieldFormValidationErrors = function (ajax, response, status) {
        editorModel.set('validationErrors', response.data);
        fieldModel.set('state', 'invalid');
      };

      formSaveAjax.commands.quickeditFieldForm = function (ajax, response, status) {
        Drupal.AjaxCommands.prototype.insert(ajax, {
          data: response.data,
          selector: '#' + $formContainer.attr('id') + ' form'
        });
      };

      $submit.trigger('click.quickedit');
    },
    showValidationErrors: function showValidationErrors() {
      this.$formContainer.find('.quickedit-form').addClass('quickedit-validation-error').find('form').prepend(this.model.get('validationErrors'));
    }
  });
})(jQuery, Drupal, _);;
