@extends('layouts.admin')

@section('title')
    管理
@endsection

@section('content-header')
    <h1>管理概况<small>快速浏览您的系统.</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">管理</a></li>
        <li class="active">首页</li>
    </ol>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box
            @if($version->isLatestPanel())
                box-success
            @else
                box-danger
            @endif
        ">
            <div class="box-header with-border">
                <h3 class="box-title">系统信息</h3>
            </div>
            <div class="box-body">
                @if ($version->isLatestPanel())
                    您正运行的 Pterodactyl-CHINA 面板版本为 <code>{{ config('app.version') }}</code>。您的面板目前是最新的！
                @else
                    您目前使用的面板 <strong>并非最新!</strong> 目前最新版本为 <a href="https://github.com/pterodactyl-china/panel/releases/v{{ $version->getPanel() }}" target="_blank"><code>{{ $version->getPanel() }}</code></a> 您正运行的版本为 <code>{{ config('app.version') }}</code>.
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-6 col-sm-3 text-center">
        <a href="{{ $version->getDiscord() }}"><button class="btn btn-warning" style="width:100%;"><i class="fa fa-fw fa-support"></i> 获取帮助 <small>(翼龙中国社区)</small></button></a>
    </div>
    <div class="col-xs-6 col-sm-3 text-center">
        <a href="https://pterodactyl.top"><button class="btn btn-primary" style="width:100%;"><i class="fa fa-fw fa-link"></i> 翼龙中国文档</button></a>
    </div>
    <div class="clearfix visible-xs-block">&nbsp;</div>
    <div class="col-xs-6 col-sm-3 text-center">
        <a href="https://github.com/pterodactyl-china/panel"><button class="btn btn-primary" style="width:100%;"><i class="fa fa-fw fa-support"></i> Github</button></a>
    </div>
    <div class="col-xs-6 col-sm-3 text-center">
        <a href="{{ $version->getDonations() }}"><button class="btn btn-success" style="width:100%;"><i class="fa fa-fw fa-money"></i> 支持此项目</button></a>
    </div>
</div>
@endsection
