@extends('admin.layouts.master')

@section('page-title', 'Create article')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">文章管理</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">新增文章</li>
    </ol>
    <div class="alert alert-danger alert-dismissible" role="alert" id="liveAlert">
        <strong>錯誤！</strong> 請修正以下問題：
        <ul>
            <li>錯誤 1</li>
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <form action="/admin/posts" method="POST" role="form">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">文章標題</label>
            <input id="title" name="title" type="text" class="form-control" value="{{old('title')}}" placeholder="請輸入文章標題">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">文章內容</label>
            <textarea id="content" name="content" class="form-control" rows="10" value="{{old('title')}}" placeholder="請輸入文章內容"></textarea>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary btn-sm" type="submit">儲存</button>
        </div>

        <div class="from-group">
            <label for=" is_feature " class="form-label">精選？</label> 
            <select id=" is_feature " name="is_feature" class="form-control"> 
                <option value="0">否</option> 
                <option value="1">是</option> 
            </select> 
        </div>

    </form>
</div>
@endsection
