@if (isset($nonprofit->NonName) && trim($nonprofit->NonName) != '')
<!-- generated from /kindguide/views/nonprofit-report-preview.blade.php -->
<div class="row mB10">
    <div class="col-md-5">
        {!! $nonprofit->NonName !!}
    </div>
    <div class="col-md-5">
        {!! $GLOBALS["SL"]->swapURLwrap($nonprofit->NonWebsite, false) !!}
    </div>
    <div class="col-md-2">
        @if ($isAdmin)
            {!! $nonprofit->NonName !!}
        @endif
    </div>
</div>
@endif