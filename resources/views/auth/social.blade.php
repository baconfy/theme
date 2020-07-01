@if (1 or Route::has('social-login'))
    <section>
        <div class="divider dot"></div>
        <p class="text-center">{{ __('ui::auth.social.sign-in') }}</p>

        <div class="d-flex">
            <a href="#" class="btn btn-facebook flex-grow-1 mr-1"><i class="fab fa-facebook-f mr-2"></i> Facebook</a>
            <a href="#" class="btn btn-google flex-grow-1 ml-1"><i class="fab fa-google mr-2"></i> Google</a>
        </div>
    </section>
@endif