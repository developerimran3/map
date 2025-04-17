$(document).ready(function () {
  /**
   * New Data enty
   */
  $("#new_enty_form").submit(function (e) {
    e.preventDefault();
    //get form data
    const form_data = new FormData(e.target);
    const {
      importer_name,
      goods_name,
      quantity,
      pkg_code,
      vassel_name,
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
    if (!importer_name || !goods_name || !quantity) {
      Swal.fire("Fields Are Requerd !");
    } else {
      $.ajax({
        url: "./ajax/ajax.php?action=entydata",
        method: "POST",
        data: form_data,
        contentType: false,
        processData: false,
        success: (data) => {
          Swal.fire({
            position: "top-center",
            icon: "success",
            title: "Data Create Sucessful",
            showConfirmButton: false,
            timer: 2000,
          });
          e.target.reset();
        },
      });
    }
  });

  /**
   * received Data enty
   */
  $("#received").submit(function (e) {
    e.preventDefault();
    //get form data
    const forms_data = new FormData(e.target);
    const {
      document_received,
      invoice_value,
      invoice_no,
      invoice_date,
      net_weight,
    } = Object.fromEntries(forms_data);

    //form valadition
    if (
      !document_received ||
      !invoice_value ||
      !invoice_no ||
      !invoice_date ||
      !net_weight
    ) {
      Swal.fire("Fields Are Requerd !");
    } else {
      $.ajax({
        url: "./ajax/ajax.php?action=received",
        method: "POST",
        data: forms_data,
        contentType: false,
        processData: false,
        success: (data) => {
          Swal.fire({
            position: "top-center",
            icon: "success",
            title: "Data Create Sucessful",
            showConfirmButton: false,
            timer: 2000,
          });
          e.target.reset();
        },
      });
    }
  });

  /**
   * register Data enty
   */
  $("#register").submit(function (e) {
    e.preventDefault();
    //get form data
    const forms_data = new FormData(e.target);
    const { be_no, be_date, be_lane } = Object.fromEntries(forms_data);

    //form valadition
    if (!be_no || !be_date || !be_lane) {
      Swal.fire("Fields Are Requerd !");
    } else {
      $.ajax({
        url: "./ajax/ajax.php?action=register",
        method: "POST",
        data: forms_data,
        contentType: false,
        processData: false,
        success: (data) => {
          Swal.fire({
            position: "top-center",
            icon: "success",
            title: "Data Create Sucessful",
            showConfirmButton: false,
            timer: 2000,
          });
          e.target.reset();
        },
      });
    }
  });
  /**
   * assessment Data enty
   */

  $("#assessment").submit(function (e) {
    e.preventDefault();
    //get form data
    const forms_data = new FormData(e.target);
    const { assessment_date, r_no, x_no, scann_document } =
      Object.fromEntries(forms_data);

    //form valadition
    if (!assessment_date || !r_no || !x_no || !scann_document) {
      Swal.fire("Fields Are Requerd !");
    } else {
      $.ajax({
        url: "./ajax/ajax.php?action=assessment",
        method: "POST",
        data: forms_data,
        contentType: false,
        processData: false,
        success: (data) => {
          Swal.fire({
            position: "top-center",
            icon: "success",
            title: "Data Create Sucessful",
            showConfirmButton: false,
            timer: 2000,
          });
          e.target.reset();
        },
      });
    }
  });

  $("#new_enty").click(function () {
    $.ajax({
      url: "/new_enty.php",
      success: (data) => {
        $("#all-page").html(data);
      },
    });
  });
});
