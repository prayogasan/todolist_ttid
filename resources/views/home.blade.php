@extends('layouts.app')

@section('content')
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">



        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Base Controls</h3>
                <a href="{{route('home')}}"><img class="mt-4"
                        src="template/dist/assets/media/svg/icons/Code/Error-circle.svg" /></a>
            </div>
            <!--begin::Form-->
            <form>
                <div class="card-body">
                    <div class="form-group mb-8">
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Kegiatanmu
                            <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" />
                    </div>

                    <div class="form-group mb-1">
                        <label for="activity">Isi Kegiatanmu
                            <span class="text-danger">*</span></label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <!--begin: Code-->
                    <div class="example-code mt-10">
                        <div class="example-highlight">
                            <pre style="height:400px">
<code class="language-html">
&lt;div class="card card-custom"&gt;
&lt;div class="card-header"&gt;
&lt;h3 class="card-title"&gt;
Base Controls
&lt;/h3&gt;
&lt;div class="card-toolbar"&gt;
&lt;div class="example-tools justify-content-center"&gt;
&lt;span class="example-toggle" data-toggle="tooltip" title="View code"&gt;&lt;/span&gt;
&lt;span class="example-copy" data-toggle="tooltip" title="Copy code"&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!--begin::Form--&gt;
&lt;form&gt;
&lt;div class="card-body"&gt;
&lt;div class="form-group mb-8"&gt;
&lt;div class="alert alert-custom alert-default" role="alert"&gt;
&lt;div class="alert-icon"&gt;&lt;i class="flaticon-warning text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
&lt;div class="alert-text"&gt;
The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label&gt;Email address &lt;span class="text-danger"&gt;*&lt;/span&gt;&lt;/label&gt;
&lt;input type="email" class="form-control"  placeholder="Enter email"/&gt;
&lt;span class="form-text text-muted"&gt;We'll never share your email with anyone else.&lt;/span&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label for="exampleInputPassword1"&gt;Password &lt;span class="text-danger"&gt;*&lt;/span&gt;&lt;/label&gt;
&lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"/&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label&gt;Static:&lt;/label&gt;
&lt;p class="form-control-plaintext text-muted"&gt;email@example.com&lt;/p&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label for="exampleSelect1"&gt;Example select &lt;span class="text-danger"&gt;*&lt;/span&gt;&lt;/label&gt;
&lt;select class="form-control" id="exampleSelect1"&gt;
&lt;option&gt;1&lt;/option&gt;
&lt;option&gt;2&lt;/option&gt;
&lt;option&gt;3&lt;/option&gt;
&lt;option&gt;4&lt;/option&gt;
&lt;option&gt;5&lt;/option&gt;
&lt;/select&gt;
&lt;/div&gt;
&lt;div class="form-group"&gt;
&lt;label for="exampleSelect2"&gt;Example multiple select &lt;span class="text-danger"&gt;*&lt;/span&gt;&lt;/label&gt;
&lt;select multiple="" class="form-control" id="exampleSelect2"&gt;
&lt;option&gt;1&lt;/option&gt;
&lt;option&gt;2&lt;/option&gt;
&lt;option&gt;3&lt;/option&gt;
&lt;option&gt;4&lt;/option&gt;
&lt;option&gt;5&lt;/option&gt;
&lt;/select&gt;
&lt;/div&gt;
&lt;div class="form-group mb-1"&gt;
&lt;label for="exampleTextarea"&gt;Example textarea &lt;span class="text-danger"&gt;*&lt;/span&gt;&lt;/label&gt;
&lt;textarea class="form-control" id="exampleTextarea" rows="3"&gt;&lt;/textarea&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="card-footer"&gt;
&lt;button type="reset" class="btn btn-primary mr-2"&gt;Submit&lt;/button&gt;
&lt;button type="reset" class="btn btn-secondary"&gt;Cancel&lt;/button&gt;
&lt;/div&gt;
&lt;/form&gt;
&lt;!--end::Form--&gt;
&lt;/div&gt;
</code>
</pre>
                        </div>
                    </div>
                    <!--end: Code-->
                </div>
                <div class="card-footer">
                    <button type="reset" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div class="row">
    <div class="col-xl-6 m-5">
        <div class="card card-custom ">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        Basic Card
                        <small>sub title</small>
                    </h3>
                </div>
            </div>
            <div class="card-body">
                ...
            </div>
        </div>
    </div>
</div>

@endsection