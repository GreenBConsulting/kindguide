<!-- generated from /kindguide/views/nodes/486-audit-import-tools.blade.php -->
<div id="node{{ $nID }}" class="nodeWrap">
<div class="nodeHalfGap"></div>

<a id="hidivBtnImportAudit" class="btn btn-secondary btn-sm hidivBtn" href="javascript:;">Import Full Audit Structure</a>
<div id="hidivImportAudit" class="disNon pT20">
    <form action="?sub=1" method="post">
    @csrf
    <select name="auditID" class="form-control form-control-lg">
    @forelse ($certs as $i => $cert) 
        <option value="{{ $cert->CertID }}">{{ $cert->CertName }}</option>
    @empty
    @endforelse
    </select>
    <p>&nbsp;</p>
    <p><b>Copy & Paste CSV File, with commas replaced by ";|;" before exporting:</b></p>
    <textarea name="importCsv" class="form-control w100" style="height: 300px;"></textarea>
    <input type="submit" name="IMPORT" class="mT20 btn btn-primary btn-lg">
    </form>
</div>

<div class="nodeHalfGap"></div>
</div>