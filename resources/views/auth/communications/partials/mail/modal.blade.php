<div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="composemodalTitle">{{ __('New Message') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('mail.store') }}" method="POST" id="mail-form" rol="form" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <select class="form-control" name="recipient_id[]" id="recipient_id" placeholder="{{ __('To') }}" data-trigger multiple>
                            <option value="">{{ ('To') }}</option>
                            @foreach ($users as $contact)
                            <option value="{{ $contact->id }}">{{ $contact->name }}</option>
                            @endforeach
                        </select>
                        <div class="pristine-error text-danger"></div>
                    </div>

                    <div class="mb-3">
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                        <div class="pristine-error text-danger"></div>
                    </div>
                    <div class="mb-3">
                        {{-- <div id="email-editor"></div> --}}
                        <textarea class="form-control" name="body" id="body" cols="30" rows="10" placeholder="{{ __('Body') }}"></textarea>
                        <div class="pristine-error text-danger"></div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="send-email" name="send-emai" class="btn btn-primary">Send <i class="fab fa-telegram-plane ms-1"></i></button>
            </div>
        </div>
    </div>
</div>