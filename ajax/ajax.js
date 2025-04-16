$(document).ready(function () {
  $("#new_enty_form").submit(function (e) {
    e.preventDefault();
    //get form data
    const form_data = new FormData(e.target);
    const {
      importer_name,
      goods_name,
      quantity,
      pkg_code,
      vessel,
      bl_no,
      container_no,
      container_size,
      container_location,
      lc_no,
      lc_date,
      gross_weight,
      arivel_date,
    } = Object.fromEntries(form_data);

    //form valadition
    if (!importer_name) {
      Swal.fire("all fields are requerd !");
    } else {
      $.ajax({
        url: "./ajax/ajax.php?action=new_enty",
        method: "POST",
        data: new FormData(e.target),
        success: (data) => {
          console.log(data);
        },
        error: (data) => {
          console.log(data);
        },
      });
    }
  });
});
