<div id="book-appt-modal" class="modal">
  <div class="modal-inner bg-white rounded shadow-secondary">
    <button class="modal-close" aria-label="close" data-modal="send-info"></button>
    <div class="modal-content px-6 md:px-8">
      <div class="center-content">
        <h2 class="text-center mt-8">Info for Employers</h2>
        <p class="text-center mb-8">Thinking of hiring an apprentice? Fill in your details and we’ll send you some info.</p>
      </div>
      <div class="">
        <form action="thanks-send-info" netlify name="send-info-modal" netlify-honeypot="tcg-h0ney-p0t" method="POST">
          <fieldset>
            <label for="tcg-h0ney-pot" class="sr-only">Don't fill this in if you're human</label>
            <input type="hidden" id="tcg-h0ney-p0t" name="tcg-h0ney-p0t" />
            <div class="mb-4">
              <label class="form-label sr-only" for="send-name">Full name</label>
              <input id="send-name" class="form-input-field rounded block w-full py-2 px-3 border-1 placeholder-black" type="name" placeholder="Full name" name="_name" required="">
            </div>
            <div class="mb-4">
              <label class="form-label sr-only" for="send-email">Your email</label>
              <input id="send-email" class="form-input-field rounded block w-full py-2 px-3 border-1 placeholder-black" type="email" placeholder="Your work email" name="_replyto" required="">
            </div>
            <div class="">
              <div class="mt-8">
                <button class="rounded font-heading font-bold w-full block py-2 px-6 border border-transparent text-white bg-blue-200 hover:bg-blue-100 focus:border-blue-100 active:bg-blue-100 transition duration-150 ease-in-out">Send</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="my-8 text-center">
        <p class="mb-4">Looking to become a developer instead?</p>
        <a href="https://forms.gle/HWEdypZ5uuNzbGNJ9" target="_parent" class="inline-block text-md leading-sm text-white bg-blue-200 py-2 px-4 font-heading font-bold rounded whitespace-no-wrap">Apply here<i class="fas fa-angle-right text-md leading-sm text-white ml-2" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</div>