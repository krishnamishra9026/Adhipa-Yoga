@extends('layouts.admin')
@section('head')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.css">
<style>
    input {
        text-align: center;
    }
    .select2-selection {
        height: 38px !important;
    }
    .kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
        margin: 0;
        padding: 0;
        border: none;
        box-shadow: none;
        text-align: center;
    }
    .kv-avatar {
        display: inline-block;
    }
    .kv-avatar .file-input {
        display: table-cell;
        width: 237px;
    }
    .kv-reqd {
        color: red;
        font-family: monospace;
        font-weight: normal;
    }
    .input-group.avat {
        display: block;
    }

</style>
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} Text
    </div>
 @include('admin.includes.flashmessage')
    <div class="card-body">              
                <form class="needs-validation clearfix" method="POST" action="{{route('admin.contactus.update',$contactus->id)}}" enctype="multipart/form-data">
                    @csrf
                        {{ method_field('PUT') }}
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="title">Title</label>
                            <div class="input-group">
                                <input type="text" id="title" name="title" value="{{ $contactus->title }}" class="form-control" placeholder="Title" required>
                                <div class="invalid-feedback">
                                    Please Enter a Name.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="name">Name</label>
                            <div class="input-group">
                                <input type="text" id="name" name="name" value="{{ $contactus->name }}" class="form-control" placeholder="Name" required>
                                <div class="invalid-feedback">
                                    Please Enter a Name.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="description">Description</label>
                            <div class="input-group">
                                <textarea rows="8" id="description" name="description" class="form-control" placeholder="Description" required>{{ $contactus->desc }}</textarea>
                                <div class="invalid-feedback">
                                    Please Write Description 
                                </div>
                            </div>
                        </div> 

                        <div class="col-md-4">
                            <label for="address">Address</label>
                            <div class="input-group">
                                <textarea id="address" name="address" class="form-control" placeholder="Description" required style="min-height: 15px;">{{ $contactus->address }}</textarea>
                                <div class="invalid-feedback">
                                    Please Write facebook url 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="phone_no">Phone No</label>
                            <div class="input-group">
                                <input type="text" name="phone_no" class="form-control" value="{{ $contactus->phone_no }}" required="required">
                                <div class="invalid-feedback">
                                    Please Write Phone no
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="say_hello">Say Hello</label>
                            <div class="input-group">
                                <input type="text" name="say_hello" class="form-control" value="{{ $contactus->say_hello }}" required="required">
                                <div class="invalid-feedback">
                                    Please Write Say Hello
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="open_timting">Opening timing</label>
                            <div class="input-group">
                                <textarea id="open_timting" name="open_timting" class="form-control" placeholder="Description" required style="min-height: 15px;">{{ $contactus->open_timting }}</textarea>
                                <div class="invalid-feedback">
                                    Please Write Say Hello
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="description">Facebook Url</label>
                            <div class="input-group">
                                <input type="text" name="facebook" class="form-control" value="{{ $contactus->facebook }}" required="required">
                                <div class="invalid-feedback">
                                    Please Write facebook url 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="description">Facebook Url</label>
                            <div class="input-group">
                                <input type="text" name="facebook" class="form-control" value="{{ $contactus->facebook }}" required="required">
                                <div class="invalid-feedback">
                                    Please Write facebook url 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="description">Twitter Url</label>
                            <div class="input-group">
                                <input type="text" name="twitter" class="form-control" value="{{ $contactus->twitter }}" required="required">
                                <div class="invalid-feedback">
                                    Please Write twitter url 
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="description">Insta Url</label>
                            <div class="input-group">
                                <input type="text" name="insta" class="form-control" value="{{ $contactus->insta }}" required="required">
                                <div class="invalid-feedback">
                                    Please Write insta url 
                                </div>
                            </div>
                        </div>  

                    </div>

                    <div class="row">                  

                        <div class="col-md-4">
                            <label for="validationCustom12">Upload Image</label>
                            <div class="input-group avat">
                                <div class="kv-avatar">
                                    <div class="file-loading">
                                        <input id="avatar-2" name="image" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="kv-avatar-hint">
                                <small>Note: File-size should be less than 3.5 MB</small>
                            </div>
                            <div id="kv-avatar-errors-2" class="center-block mt-3" style="width:336px;display:none"></div>
                        </div>               

                        <div class="col-md-4">
                            <label for="validationCustom12">Upload Image</label>
                            <div class="input-group avat">
                                <div class="kv-avatar">
                                    <div class="file-loading">
                                        <input id="avatar-22" name="image2" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="kv-avatar-hint">
                                <small>Note: File-size should be less than 3.5 MB</small>
                            </div>
                            <div id="kv-avatar-errors-22" class="center-block mt-3" style="width:336px;display:none"></div>
                        </div> 

                        <div class="col-md-4">
                            <label for="validationCustom12">Upload Image</label>
                            <div class="input-group avat">
                                <div class="kv-avatar">
                                    <div class="file-loading">
                                        <input id="avatar-23" name="image3" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="kv-avatar-hint">
                                <small>Note: File-size should be less than 3.5 MB</small>
                            </div>
                            <div id="kv-avatar-errors-23" class="center-block mt-3" style="width:336px;display:none"></div>
                        </div> 
                    </div>
                    <button class="btn btn-primary float-right" type="submit">Save</button>
                </form>

            </div>
        </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/plugins/piexif.min.js" type="text/javascript"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
    This must be loaded before fileinput.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/plugins/sortable.min.js" type="text/javascript"></script>
<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for 
    HTML files. This must be loaded before fileinput.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/plugins/purify.min.js" type="text/javascript"></script>
    <!-- the main fileinput plugin file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/js/fileinput.min.js"></script>
    <!-- optionally if you need a theme like font awesome theme you can include it as mentioned below -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.2/themes/fas/theme.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js"></script>
    <script>
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
            $("#avatar-2").fileinput({
            theme:'fas',
            overwriteInitial: false,
            maxFileSize: 1500,
            showClose: false,
            showCaption: false,
            showBrowse: false,
            browseOnZoneClick: true,
            removeLabel: '',
            removeIcon: '<i class="flaticon-trash"></i> Remove Image',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-2',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src="/backend/assets/img/media.png" alt="Your Avatar"><h6 class="text-muted">Upload Image</h6>',
            layoutTemplates: {main2: '{preview} {remove} {browse}'},
            allowedFileExtensions: ["jpg", "png", "gif"],
            @if(isset($contactus->image))
            initialPreview: [
            "{{asset('uploads/contactus/'.$contactus->image)}}"
            ],
             initialPreviewAsData: true, // defaults markup

    initialPreviewFileType: 'image', // image is the default and can be overridden in config below
    initialPreviewConfig: [
    {caption: "{{$contactus->image}}", url: "{{route('admin.contactus-image-delete',$contactus->id)}}", key: {{$contactus->id}} }
    ],
    @endif
});

                        $("#avatar-22").fileinput({
            theme:'fas',
            overwriteInitial: false,
            maxFileSize: 1500,
            showClose: false,
            showCaption: false,
            showBrowse: false,
            browseOnZoneClick: true,
            removeLabel: '',
            removeIcon: '<i class="flaticon-trash"></i> Remove Image',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-22',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src="/backend/assets/img/media.png" alt="Your Avatar"><h6 class="text-muted">Upload Image</h6>',
            layoutTemplates: {main2: '{preview} {remove} {browse}'},
            allowedFileExtensions: ["jpg", "png", "gif"],
            @if(isset($contactus->image2))
            initialPreview: [
            "{{asset('uploads/contactus/'.$contactus->image2)}}"
            ],
             initialPreviewAsData: true, // defaults markup

    initialPreviewFileType: 'image', // image2 is the default and can be overridden in config below
    initialPreviewConfig: [
    {caption: "{{$contactus->image2}}", url: "{{route('admin.contactus-image2-delete',$contactus->id)}}", key: {{$contactus->id}} }
    ],
    @endif
});

                                    $("#avatar-23").fileinput({
            theme:'fas',
            overwriteInitial: false,
            maxFileSize: 1500,
            showClose: false,
            showCaption: false,
            showBrowse: false,
            browseOnZoneClick: true,
            removeLabel: '',
            removeIcon: '<i class="flaticon-trash"></i> Remove Image',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-23',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src="/backend/assets/img/media.png" alt="Your Avatar"><h6 class="text-muted">Upload Image</h6>',
            layoutTemplates: {main2: '{preview} {remove} {browse}'},
            allowedFileExtensions: ["jpg", "png", "gif"],
            @if(isset($contactus->image3))
            initialPreview: [
            "{{asset('uploads/contactus/'.$contactus->image3)}}"
            ],
             initialPreviewAsData: true, // defaults markup

    initialPreviewFileType: 'image', // image3 is the default and can be overridden in config below
    initialPreviewConfig: [
    {caption: "{{$contactus->image3}}", url: "{{route('admin.contactus-image3-delete',$contactus->id)}}", key: {{$contactus->id}} }
    ],
    @endif
});

    $("#avatar-24").fileinput({
            theme:'fas',
            overwriteInitial: false,
            maxFileSize: 1500,
            showClose: false,
            showCaption: false,
            showBrowse: false,
            browseOnZoneClick: true,
            removeLabel: '',
            removeIcon: '<i class="flaticon-trash"></i> Remove Image',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-24',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src="/backend/assets/img/media.png" alt="Your Avatar"><h6 class="text-muted">Upload Image</h6>',
            layoutTemplates: {main2: '{preview} {remove} {browse}'},
            allowedFileExtensions: ["jpg", "png", "gif"],
            @if(isset($contactus->image4))
            initialPreview: [
            "{{asset('uploads/contactus/'.$contactus->image4)}}"
            ],
             initialPreviewAsData: true, // defaults markup

    initialPreviewFileType: 'image', // image is the default and can be overridden in config below
    initialPreviewConfig: [
    {caption: "{{$contactus->image4}}", url: "{{route('admin.contactus-image4-delete',$contactus->id)}}", key: {{$contactus->id}} }
    ],
    @endif
});
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });
    });
</script>
    @endsection