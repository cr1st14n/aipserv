<div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="index.html">Contenido</a>
        <span class="breadcrumb-item active">Pag1</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div>
            <button class="btn btn-danger" onclick="data_list()">Listart Contenido <i class=" fa fa-recycle"></i></button>
        </div>
        <div class="bd bd-gray-300 rounded table-responsive">
            <table class="table table-striped mg-b-0">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Fecha Publicación</th>
                        <th>Descripción</th>
                        <th>Archivo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="tableBody_list_1">

                </tbody>
            </table>
        </div><!-- bd -->
    </div><!-- br-section-wrapper -->
</div><!-- br-pagebody -->

<div id="md_showPDF" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
          <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body pd-20">
          <h4 class=" lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Why We Use Electoral College, Not Popular Vote</a></h4>
          <p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
        </div><!-- modal-body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary tx-size-xs">Save changes</button>
          <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div><!-- modal-dialog -->
  </div><!-- modal -->