<!-- generated from /kindguide/views/nodes/493-audit-overview-options.blade.php -->
<div class="row">
    <div class="col-6">
        <a href="?" class="btn btn-block @if ($GLOBALS["SL"]->REQ->has('all')) btn-secondary @else btn-primary @endif "
            >Hide Details</a>
    </div>
    <div class="col-6">
        <a href="?all=1" class="btn btn-block @if ($GLOBALS["SL"]->REQ->has('all')) btn-primary @else btn-secondary @endif "
            >Show Details</a>
    </div>
</div>