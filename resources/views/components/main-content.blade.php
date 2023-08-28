@props(['header'])

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{$header}}</h4>
                    </div>
                </div>
            </div>
            <div class="row project-wrapper">
            {{$slot}}
            </div><!-- end wrapper -->
        </div><!-- end wrapper -->
    </div><!-- end wrapper -->
</div><!-- end wrapper -->