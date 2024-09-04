const faqs = document.querySelector('#custom-product-info .faqs-section');

const productFields = function productFields() {
    console.log('function running');
  if (!faqs) return;

  faqs.addEventListener('click', function(e) {
    console.log('product fields clicked');

    let btn = e.target.closest('.faq-btn');

    if (!btn) return;

    let content = btn.nextElementSibling;

    btn.classList.contains('faq-btn--active') ? btn.classList.remove('faq-btn--active') : btn.classList.add('faq-btn--active');

    if (content.style.maxHeight) {
      content.style.maxHeight = null;
      content.style.padding = null;
    } else {
      content.style.maxHeight = `${content.scrollHeight + 96}px`;

    }
  })
}();

export default productFields;