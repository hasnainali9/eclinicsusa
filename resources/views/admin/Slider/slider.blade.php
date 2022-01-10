@extends('layouts.admin')

@section('content')
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<div class="card">
					<div class="card-header d-sm-flex d-block">
						<div class="me-auto mb-sm-0 mb-3">
							<h4 class="card-title mb-2">Home Page Sliders</h4>
						</div>
						<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#addSliderModal" class="btn btn-info">+ Add Slider</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table style-1" id="ListDatatableView">
								<thead>
									<tr>
										<th>#</th>
										<th>Title</th>
                                        <th>Status</th>
										<th>ACTION</th>
									</tr>
								</thead>
								<tbody>
									
									
									
									@foreach ($Sliders as $key=>$slider)
                                    <tr role="row" class="odd">
                                            <td class="sorting_1">
                                                <h6>{{($key+1)}}.</h6>
                                            </td>
                                            <td>
                                                <div class="style-1">
                                                    {{$slider->title}}
                                                </div>
                                            </td>
                                            <td>
                                                @if($slider->status)
                                                    <a href="{{route('home.sliders.status.update',['status'=>base64_encode('In-Active'),'id'=>base64_encode($slider->id)])}}"><span class="badge badge-success">Active</span></a>
                                                @else
                                                <a href="{{route('home.sliders.status.update',['status'=>base64_encode('Active'),'id'=>base64_encode($slider->id)])}}" ><span class="badge badge-danger">In-Active</span></a>                                                    
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex action-button">
                                                    <a href="javascript:void(0);"  data-id="{{base64_encode($slider->id)}}" data-title="{{$slider->title}}" data-content="{{urldecode($slider->description)}}" data-image="{{$slider->image}}" class="btn btn-info btn-xs light px-2 edit_data">
                                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                    <a href="{{route('home.sliders.delete',['id'=>base64_encode($slider->id)])}}" class="ms-2 btn btn-xs px-2 light btn-danger">
                                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>

                                                    </a>
                                                </div>
                                            </td>
                                    </tr>

                                    @endforeach
									
									
									
									
									
									
									
									
									
									
								
                                </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!--**********************************
            Content body End
        ***********************************-->
 <!--**********************************
            Model Add Start
        ***********************************-->
        <div class="modal fade " id="addSliderModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Slider</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <form action="{{route('home.sliders.store')}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                                @csrf
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" required name="title" class="form-control" placeholder="Title of Slider">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Content</label>
                                    <div class="col-sm-9">
                                        <textarea name="content" id="ckeditor"><p></p></textarea>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Upload Image</span>
                                    <div class="form-file">
                                        <input type="file" required name="image" class="form-file-input form-control">
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
 <!--**********************************
            Model Add End
        ***********************************-->
        
 <!--**********************************
            Model Edit Start
        ***********************************-->
        <div class="modal fade" id="editSliderModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Slider</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <form action="{{route('home.sliders.update')}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                                @csrf
                                <input type="hidden" id="edit_id" name="id">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="title_edit" required name="title" class="form-control" placeholder="Title of Slider">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Content</label>
                                    <div class="col-sm-9">
                                        <textarea name="content" id="ckeditor1"></textarea>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Upload Image</span>
                                    <div class="form-file">
                                        <input type="file" name="image" class="form-file-input form-control">
                                    </div>
                                </div>
                                <img src="" alt="Previous Uploaded Image" id="edit_image">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
 <!--**********************************
            Model Edit End
        ***********************************-->
@endsection

@section('scripts')
    <script>
        $(function(){
            if(jQuery("#ckeditor").length>0) {
                ClassicEditor
                .create( document.querySelector( '#ckeditor' ), {
                    // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
                } )
                .then( editor => {
                    window.editor = editor;
                } )
                .catch( err => {
                    console.error( err.stack );
                } );
            }
            if(jQuery("#ckeditor1").length>0) {
                ClassicEditor
                .create( document.querySelector( '#ckeditor1' ), {
                    // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
                } )
                .then( editor => {
                    window.editor = editor;
                } )
                .catch( err => {
                    console.error( err.stack );
                } );
            }

            $('body').delegate('.edit_data','click',function(){
                    $('#edit_id').val($(this).attr('data-id'));
                    $('#edit_title').val($(this).attr('data-title'));
                    $('#ckeditor1').code($(this).attr('data-content'));
                    $('#edit_image').attr('src',$(this).attr('data-image'));
                    $("#editSliderModal").modal('toggle');
            });

        });
    </script>
@endsection