<div class="row row-sm mg-t-20">

    <div class="col-lg-12 mg-t-20 mg-lg-t-0">
        <div class="card shadow-base bd-0">
            <div class="card-header pd-20 bg-transparent">
                <h6 class="card-title tx-uppercase tx-12 mg-b-0">Product Purchases</h6>
            </div><!-- card-header -->
            <div class="row">
                <div class="col-lg-2">
                    <button type="button" class="btn btn-info btn-sm" onclick="listUser()"><i
                            class="fa fa-user-circle"></i> Listar Usuarios</button>
                </div>
                <div class="col-lg-2">
                    <button type="button" class="btn btn-info btn-sm" onclick="makeUser()"><i
                            class="fa fa-user-circle"></i> Registrar Usuario</button>
                </div>
            </div>
            <table class="table table-responsive mg-b-0 tx-12">
                <thead>
                    <tr class="tx-10">
                        {{-- <th class="wd-10p pd-y-5">&nbsp;</th> --}}
                        <th class="pd-y-5">Item Details</th>
                        <th class="pd-y-5 tx-right">Sold</th>
                        <th class="pd-y-5">Gain</th>
                        <th class="pd-y-5 tx-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="pd-l-20">
                            <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                        </td>
                        <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">The Dothraki Shoes</a>
                            <span class="tx-11 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span>
                                20 remaining</span>
                        </td>
                        <td class="valign-middle tx-right">3,345</td>
                        <td class="valign-middle"><span class="tx-success"><i
                                    class="icon ion-android-arrow-up mg-r-5"></i>33.34%</span> from last week</td>
                        <td class="valign-middle tx-center">
                            <a href="" class="tx-gray-600 tx-24"><i
                                    class="icon ion-android-more-horizontal"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="pd-l-20">
                            <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                        </td>
                        <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">Westeros Sneaker</a>
                            <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span>
                                In stock</span>
                        </td>
                        <td class="valign-middle tx-right">720</td>
                        <td class="valign-middle"><span class="tx-danger"><i
                                    class="icon ion-android-arrow-down mg-r-5"></i>21.20%</span> from last week</td>
                        <td class="valign-middle tx-center">
                            <a href="" class="tx-gray-600 tx-24"><i
                                    class="icon ion-android-more-horizontal"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="pd-l-20">
                            <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                        </td>
                        <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">Selonian Hand Bag</a>
                            <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span>
                                In stock</span>
                        </td>
                        <td class="valign-middle tx-right">1,445</td>
                        <td class="valign-middle"><span class="tx-success"><i
                                    class="icon ion-android-arrow-up mg-r-5"></i>23.34%</span> from last week</td>
                        <td class="valign-middle tx-center">
                            <a href="" class="tx-gray-600 tx-24"><i
                                    class="icon ion-android-more-horizontal"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="pd-l-20">
                            <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                        </td>
                        <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">Kel Dor Sunglass</a>
                            <span class="tx-11 d-block"><span class="square-8 bg-warning mg-r-5 rounded-circle"></span>
                                45 remaining</span>
                        </td>
                        <td class="valign-middle tx-right">2,500</td>
                        <td class="valign-middle"><span class="tx-success"><i
                                    class="icon ion-android-arrow-up mg-r-5"></i>28.78%</span> from last week</td>
                        <td class="valign-middle tx-center">
                            <a href="" class="tx-gray-600 tx-24"><i
                                    class="icon ion-android-more-horizontal"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="pd-l-20">
                            <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                        </td>
                        <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">Kubaz Sunglass</a>
                            <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span>
                                In stock</span>
                        </td>
                        <td class="valign-middle tx-14 tx-right">223</td>
                        <td class="valign-middle"><span class="tx-danger"><i
                                    class="icon ion-android-arrow-down mg-r-5"></i>18.18%</span> from last week</td>
                        <td class="valign-middle tx-center">
                            <a href="" class="tx-gray-600 tx-24"><i
                                    class="icon ion-android-more-horizontal"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="card-footer tx-12 pd-y-15 bg-transparent">
                <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Products</a>
            </div><!-- card-footer -->
        </div><!-- card -->
    </div><!-- col-6 -->
</div><!-- row -->

<div id="md_formMakeUser" class="modal fade">
    <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Registrar Usuario</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-25">
                <div class="form-layout form-layout-2">
                    <form onsubmit="event.preventDefault();createUser()" id="formMakeUser">@csrf


                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Nombre de Usuario: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="usu_nombre"
                                        placeholder="*******" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-6 mg-t--1 mg-md-t-0">
                                <div class="form-group mg-md-l--1">
                                    <label class="form-control-label">Empresa: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="usu_empresa"
                                        placeholder="********" required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-6 mg-t--1 mg-md-t-0">
                                <div class="form-group mg-md-l--1">
                                    <label class="form-control-label">Fecha Final : <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="date" name="usu_fechaFinal" placeholder=""
                                        required>
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-md-6">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label">Tipo de Cuenta: <span
                                            class="tx-danger">*</span></label>
                                    <select name="usu_tipoCuenta" id="" class=" form-control">
                                        <option value="cliente">Cliente</option>
                                        <option value="administrador">Administrador</option>
                                    </select>
                                </div>
                            </div><!-- col-8 -->
                            <div class="col-md-6">
                                <div class="form-group bd-t-0-force">
                                    <label class="form-control-label">Codigo: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="usu_codigo"
                                        placeholder="Codigo de Inicio" required>
                                </div>
                            </div><!-- col-8 -->
                            <div class="col-md-6">
                                <div class="form-group mg-md-l--1 bd-t-0-force">
                                    <label class="form-control-label mg-b-0-force">Contraseña: <span
                                            class="tx-danger">*</span></label>
                                    <input class=" form-control" type="password" name="password" required>
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->
                        <div class="form-layout-footer bd pd-20 bd-t-0">
                            <button class="btn btn-info" type="submit">Registrar usuario</button>
                            <button class="btn btn-secondary">Cancelar</button>
                        </div><!-- form-group -->
                    </form>
                </div><!-- form-layout -->
            </div>
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->
