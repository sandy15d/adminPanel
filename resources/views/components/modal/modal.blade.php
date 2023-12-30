<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $id }}-title" aria-modal="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div {{$attributes->merge(['class'=>'modal-dialog'])}} role="document">
        <div class="modal-content border-0">
            <div class="modal-header bg-info-subtle p-3">
                <h5 class="modal-title" id="{{ Str::slug($title) }}-title">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <div class="modal-body">
                {{ $body }}
            </div>
            <div class="modal-footer">
                {{ $footer }}
            </div>
        </div>
    </div>
</div>