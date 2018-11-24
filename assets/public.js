(($) => {
  $(() => {
    const $alertDanger      = $('[data-wpwl-danger]');
    const $alertSuccess     = $('[data-wpwl-success]');
    const $formSubscription = $('[data-wpwl-form]');
    const $inputEmail       = $('[data-wpwl-email]');
    const $buttonSubmit     = $('[data-wpwl-submit]');

    const showAlertDanger = () => {
      $alertDanger.fadeIn();
      $alertSuccess.hide();
    };

    const showAlertSuccess = () => {
      $alertDanger.hide();
      $alertSuccess.fadeIn();
    };

    const onSaveSuccess = (response) => {
      if (false === response.success) {
        console.log(`Failed to save lead.`);
        showAlertDanger();
        return;
      }
      showAlertSuccess();
    };

    const onSaveFail = (xhr, status, error) => {
      console.log(`Failed to save lead. ${error}`);
      showAlertDanger();
    };

    const onSaveComplete = () => {
      $formSubscription[0].reset();
      $buttonSubmit.prop('disabled', false);
    };

    $formSubscription.on('submit', (event) => {
      event.preventDefault()

      $buttonSubmit.prop('disabled', true);

      const email = $.trim($inputEmail.val());

      const saving = $.ajax({
        url: MiniCursoLeads.url,
        method: 'POST',
        dataType: 'json',
        data: {
          email: email,
          guard: MiniCursoLeads.nonce,
          action: 'wpwl_save_lead',
        },
      });

      saving
        .done(onSaveSuccess)
        .fail(onSaveFail)
        .always(onSaveComplete);
    });
  });
})(jQuery);
