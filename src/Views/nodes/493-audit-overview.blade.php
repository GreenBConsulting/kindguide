<!-- generated from /kindguide/views/nodes/493-audit-overview.blade.php -->

        </div> <!-- end node494kids -->
    </div> <!-- end node494 -->
</div> <!-- end treeWrap494 -->

<div id="treeWrap494b" class="w100">
    <div id="node494b" class="nodeWrap w100">
        <div id="node494kidsb" class="w100">
            
            <div id="node{{ $nID }}" class="w100">
                <div class="nodeHalfGap"></div>
                <div class="nodeHalfGap"></div>
                <div class="nodeHalfGap"></div>

@forelse ($doms as $d => $dom)
    <div class="domainWrap" style="background: {{ $dom->color }};">
        <div class="row">
            <div class="col-12 n494"><h4 style="color: #FFF">{{ $dom->name }}</h4></div>
        </div>
        <div class="bgWht">
            @forelse ($dom->sections as $s => $sect)
                <div class="nodeAnchor"><a id="itm{{ $sect->ref }}" name="itm{{ $sect->ref }}"></a></div>
                <div class="row" style="margin-top: 60px;">
                    <div class="col-1 n494"><h5>{{ $sect->ref }}</h5></div>
                    <div class="col-11 n494"><h5>{{ $sect->name }}</h5></div>
                </div>
                @forelse ($sect->subs as $ss => $sub)
                    <div class="nodeAnchor"><a id="itm{{ $sect->ref . $sub->ref
                        }}" name="itm{{ $sect->ref . $sub->ref }}"></a></div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col-2 n494"><h6>{{ $sect->ref . $sub->ref }}</h6></div>
                        <div class="col-10 n494"><h6>{{ $sub->name }}</h6></div>
                    </div>
                    @forelse ($sub->items as $i => $item)
                        <div class="nodeAnchor"><a id="itm{{ $sect->ref . $sub->ref . $item->ref
                            }}" name="itm{{ $sect->ref . $sub->ref . $item->ref }}"></a></div>
                        <a id="audItmWrp{{ $item->id }}" href="javascript:;" class="
                            @if ($GLOBALS["SL"]->REQ->has('all')) audItmWrpAct @else audItmWrp @endif "
                            ><div class="row n494C">
                            <div class="col-3 n494">
                                <div class="relDiv">
                                    <div class="absDiv" style="left: -30px;">
                                        <div id="audItmOpn{{ $item->id }}" href="javascript:;" class="slGrey 
                                            @if ($GLOBALS["SL"]->REQ->has('all')) disNon @else disBlo @endif "
                                            ><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                                        <div id="audItmCls{{ $item->id }}" href="javascript:;" class="
                                            @if ($GLOBALS["SL"]->REQ->has('all')) disBlo @else disNon @endif "
                                            ><i class="fa fa-angle-up" aria-hidden="true"></i></div>
                                    </div>
                                    {{ $sect->ref . $sub->ref . $item->ref }}
                                </div>
                            </div>
                            <div class="col-9 n494">{{ $item->name }}</div>
                        </div></a>
                        <div id="audItm{{ $item->id }}" class="audItmDeets
                            @if ($GLOBALS["SL"]->REQ->has('all')) disBlo @else disNon @endif ">
                            <div class="row">
                                <div class="col-lg-3 col-md-4"><div class="pL15">
                                    <select name="audSts{{ $item->id }}" id="audSts{{ $item->id }}ID" data-aud-itm="{{ $item->id }}"
                                        class="form-control slTab ntrStp" autocomplete="off">
                                        <option class="slGrey" value="" @if (true) SELECTED @endif >item status...</option>
                                    @foreach ($GLOBALS["SL"]->def->getSet('TCC Standards Audit Item Status') as $def)
                                        <option value="{{ $def->DefID }}" @if (false) SELECTED @endif >{{ $def->DefValue }}</option>
                                    @endforeach
                                    </select>
                                    <div class="slGrey fPerc80 mT5 mBn5">Notes:</div>
                                    <textarea name="audNot{{ $item->id }}" id="audNot{{ $item->id }}ID" data-aud-itm="{{ $item->id }}" 
                                        class="form-control slTab"></textarea>
                                </div></div>
                                <div class="col-lg-9 col-md-8">
                                    <p><b>{{ $item->getCatName() }}, {{ $item->getFoundIns() }}</b></p>
                                    @if (sizeof($item->bullets) > 0)
                                        <ul>
                                        @foreach ($item->bullets as $b => $bullet)
                                            <li>{!! $bullet !!}</li>
                                        @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                @empty
                @endforelse
            @empty
            @endforelse
        </div>
    </div>
@empty <i>No standards found for this certification</i>
@endforelse

                <div class="nodeHalfGap"></div>
            </div>
