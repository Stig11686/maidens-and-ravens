const displayModal = function displayModal() {
  let btn,
      dataAttr,
      modal;

  document.addEventListener('click', function(e) {


    btn = e.target.closest('[data-modal]');

    console.log(btn);

    if ( !btn ) { return; }

    e.preventDefault();

    dataAttr = btn.hasAttribute('data-modal') ? btn.getAttribute('data-modal') : null;

    console.log(dataAttr);

    if ( !dataAttr ) { return; }

    modal = document.querySelector(`#${dataAttr}`);

    console.log(modal);

    if ( !modal ) { return; }

    modal.classList.toggle('modal--active');

  });

}();

export default displayModal;