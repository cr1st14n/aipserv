function view_home_user() {
    fetch("user/view")
        .catch((error) => console.log(error))
        .then((response) => response.text())
        .then((data) => showViewuser(data));
}

let showViewuser = (data) => {
    $("#IndexView").html(data);
};

let listUser = () => {};

let makeUser = () => {
    $("#md_formMakeUser").modal("show");
};
let createUser = () => {
    data = $("#formMakeUser").serialize();

    $.ajax({
        type: "post",
        url: "user/makeUser",
        data: data,
        success: function (response) {
            console.log(response.est == "success");
            if (response.est == "success") {
                console.log("success");
                $("#formMakeUser").trigger("reset");
                $("#md_formMakeUser").modal("hide");

                return;
            }
            console.log("error de data");
        },
    });
};

let querylistUser = () => {
    fetch("user/list_1")
        .catch((error) => console.log(error))
        .then((res) => res.json())
        .then((data) => show_tbodUser(data));
};

let show_tbodUser = (data) => {
    html = data
        .map((e, i) => {
            return tbFilaUser(e, i);
        })
        .join(" ");
    $("#tbodyUser").html(html);
};

let tbFilaUser = (e, i) => {
    return (fila = `
    <tr>
        <td>
            <a href="#" class="tx-inverse tx-14 tx-medium d-block">${e.usu_nombre}</a>
            <span class="tx-11 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span>
                ${e.usu_empreas}</span>
        </td>
        <td class="valign-middle tx-right">${e.usu_codigo}</td>
        <td class="valign-middle"><span class="tx-success"><i
                    class="icon ion-android-arrow-up mg-r-5"></i>/*.*</span> Actividad en la Pagina</td>
        <td class="valign-middle tx-center">
            <a href="" class="tx-gray-600 tx-24"><i
                    class="icon ion-android-more-horizontal"></i></a>
        </td>
    </tr>
    
    `);
};


 $("#btn_logout").click(function (e) {
    e.preventDefault();
    $.ajax({
        type: "post",
        url: "logout",
        data: { _token: $("meta[name=csrf-token]").attr("content") },
        // dataType: "dataType",
        success: function (response) {
            if (response) {
                location.reload();
            }
        },
    });
});
