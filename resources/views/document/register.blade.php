<div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="index.html">Contenido</a>
        <span class="breadcrumb-item active">Pag1</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-t-80 mg-b-10">Bordered Form Group Wrapper</h6>
        <p class="mg-b-30 tx-gray-600">A bordered form group wrapper with a label on top of each form control.</p>
        <form onsubmit=" event.preventDefault();register_data()" id="form_1">
            <div class="form-layout form-layout-2">
                <div class="row no-gutters">
                    <div class="col-md-4 mg-t--1 mg-md-t-0">
                        <div class="form-group mg-md-l--1">
                            <label class="form-control-label">Descripción: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="descripcion" id="descripcion"
                                value="McDoe" placeholder="Enter lastname">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-md-4 mg-t--1 mg-md-t-0">
                        <div class="form-group mg-md-l--1">
                            <label class="form-control-label">Docuemento: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="file" id="pdf" name="pdf" accept=".pdf">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-md-4">
                        <div class="form-group mg-md-l--1 bd-t-0-force">
                            <label class="form-control-label mg-b-0-force">Estado: <span
                                    class="tx-danger">*</span></label>
                            <select id="tipo" name="tipo" class="form-control"
                                data-placeholder="Choose country">
                                <option value="Pr" selected>Privado</option>
                                <option value="Pu" selected>Publico</option>
                            </select>
                        </div>
                    </div><!-- col-4 -->
                </div><!-- row -->
                <div class="form-layout-footer bd pd-20 bd-t-0">
                    <button class="btn btn-info" type="submit">Registrar</button>
                    {{-- <button class="btn btn-secondary"></button> --}}
                </div><!-- form-group -->
            </div><!-- form-layout -->
        </form>
    </div><!-- br-section-wrapper -->
</div><!-- br-pagebody -->


