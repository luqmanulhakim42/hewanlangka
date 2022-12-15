function showmenu(layout, page) {
  var url = "http://localhost/hewanlangka/";
  var form = $(
    '<form action="' +
      url +
      '" method="post">' +
      '<input type="hidden" name="layout" value="' +
      layout +
      '" />' +
      '<input type="hidden" name="page" value="' +
      page +
      '" />' +
      "</form>"
  );
  $("body").append(form);
  form.submit();
}

function showmenuwithparam(layout, page, params) {
  var url = "http://localhost/hewanlangka/";
  var arrparams = params.split(";");
  var parameter = "";
  arrparams.forEach((element) => {
    partparam = element.split("-");
    parameter =
      '<input type="hidden" name="' +
      partparam[0] +
      '" value="' +
      partparam[1] +
      '" />';
  });
  var form = $(
    '<form action="' +
      url +
      '" method="post">' +
      '<input type="hidden" name="layout" value="' +
      layout +
      '" />' +
      '<input type="hidden" name="page" value="' +
      page +
      '" />' +
      parameter +
      "</form>"
  );
  $("body").append(form);
  form.submit();
}

function savehewan() {
  var action = "add";
  var nama = document.getElementById("nama_hewan").value;
  var habitat = document.getElementById("habitat_hewan").value;
  var ciri = document.getElementById("ciri_hewan").value;
  var karakteristik = document.getElementById("karakteristik_hewan").value;
  var jenis = document.getElementById("jenis_hewan").value;
  var makanan = document.getElementById("makanan_hewan").value;
  var foto = document.getElementById("foto_hewan");
  var fotohewan = foto.files;

  if (!nama) {
    alert("Nama hewan harus diisi!");
    return false;
  }
  if (!habitat) {
    alert("Habitat hewan harus diisi!");
    return false;
  }
  if (!ciri) {
    alert("Ciri-ciri hewan harus diisi!");
    return false;
  }
  if (!karakteristik) {
    alert("Karakteristik hewan harus diisi!");
    return false;
  }
  if (!jenis) {
    alert("Jenis hewan harus diisi!");
    return false;
  }
  if (!makanan) {
    alert("Makanan hewan harus diisi!");
    return false;
  }
  if (!fotohewan[0]) {
    alert("Foto Hewan Tidak Boleh Kosong!");
    return false;
  }

  var formData = new FormData();

  formData.append("action", action);
  formData.append("nama", nama);
  formData.append("habitat", habitat);
  formData.append("ciri", ciri);
  formData.append("karakteristik", karakteristik);
  formData.append("jenis", jenis);
  formData.append("makanan", makanan);
  formData.append("fotohewan", fotohewan[0], fotohewan[0].name);

  var xhr = new XMLHttpRequest();

  xhr.open("POST", "fungsi/hewan.php", true);

  xhr.onload = function () {
    var response = JSON.parse(xhr.responseText);
    if (response.status) {
      alert(response.message);
      showmenu("admin", "hewan");
    } else {
      alert(response.message);
      return false;
    }
  };

  xhr.send(formData);
}

function updatehewan() {
  var action = "update";
  var id = document.getElementById("id").value;
  var nama = document.getElementById("nama_hewan").value;
  var habitat = document.getElementById("habitat_hewan").value;
  var ciri = document.getElementById("ciri_hewan").value;
  var karakteristik = document.getElementById("karakteristik_hewan").value;
  var jenis = document.getElementById("jenis_hewan").value;
  var makanan = document.getElementById("makanan_hewan").value;
  var foto = document.getElementById("foto_hewan");
  var fotohewan = foto.files;

  if (!nama) {
    alert("Nama hewan harus diisi!");
    return false;
  }
  if (!habitat) {
    alert("Habitat hewan harus diisi!");
    return false;
  }
  if (!ciri) {
    alert("Ciri-ciri hewan harus diisi!");
    return false;
  }
  if (!karakteristik) {
    alert("Karakteristik hewan harus diisi!");
    return false;
  }
  if (!jenis) {
    alert("Jenis hewan harus diisi!");
    return false;
  }
  if (!makanan) {
    alert("Makanan hewan harus diisi!");
    return false;
  }
  var formData = new FormData();

  formData.append("id", id);
  formData.append("action", action);
  formData.append("nama", nama);
  formData.append("habitat", habitat);
  formData.append("ciri", ciri);
  formData.append("karakteristik", karakteristik);
  formData.append("jenis", jenis);
  formData.append("makanan", makanan);
  if (fotohewan[0]) {
    formData.append("fotohewan", fotohewan[0], fotohewan[0].name);
  }

  var xhr = new XMLHttpRequest();

  xhr.open("POST", "fungsi/hewan.php", true);

  xhr.onload = function () {
    var response = JSON.parse(xhr.responseText);
    if (response.status) {
      alert(response.message);
      showmenu("admin", "hewan");
    } else {
      alert(response.message);
      return false;
    }
  };

  xhr.send(formData);
}

function deletehewan(id = null) {
  if (confirm("Are you sure to delete this data?") == true) {
    var action = "delete";
    var formData = new FormData();

    formData.append("action", action);
    formData.append("id", id);
    var xhr = new XMLHttpRequest();

    xhr.open("POST", "fungsi/hewan.php", true);

    xhr.onload = function () {
      var response = JSON.parse(xhr.responseText);
      if (response.status) {
        alert(response.message);
        showmenu("admin", "hewan");
      } else {
        alert(response.message);
        return false;
      }
    };

    xhr.send(formData);
  } else {
    return false;
  }
}

$(document).ready(function () {
  $("#foto_hewan").change(function () {
    let reader = new FileReader();

    reader.onload = (e) => {
      $("#preview_image").attr("src", e.target.result);
    };

    reader.readAsDataURL(this.files[0]);
  });
});
