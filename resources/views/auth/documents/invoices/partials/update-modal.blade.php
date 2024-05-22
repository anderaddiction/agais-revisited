<div class="modal fade" id="updateInvoiceModal" tabindex="-1" aria-labelledby="addInvoiceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addInvoiceModalLabel">Add Invoice</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form>
                    @include('auth.documents.invoices.partials._form')
                </form>
            </div>
        </div>
    </div>
</div>
