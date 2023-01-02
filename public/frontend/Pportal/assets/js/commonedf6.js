var common = function () { }


common.prototype.ScapeSP = function (e) {
    var k;
    document.all ? k = e.keyCode : k = e.which;
    return (k != 38 && k != 62 && k != 60);
}

common.prototype.ConvertImage = function (b) {
    if (b == null) { return null; }
    var mime;
    var a = b;
    var nb = a.length;
    if (nb < 4)
        mine = null;
    var b0 = a[0];
    var b1 = a[1];
    var b2 = a[2];
    var b3 = a[3];
    if (b0 == 0x89 && b1 == 0x50 && b2 == 0x4E && b3 == 0x47)
        mime = 'image/png';
    else if (b0 == 0xff && b1 == 0xd8)
        mime = 'image/jpeg';
    else if (b0 == 0x47 && b1 == 0x49 && b2 == 0x46)
        mime = 'image/gif';
    else
        mime = null;
    var str = String.fromCharCode.apply(null, b);
    base64 = btoa(str).replace(/.{76}(?=.)/g, '$&\n');
    var k = 'data:' + mime + ';base64,' + base64;
    return k;
}

common.prototype.NumericEvent = function (e) { if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode >= 35 && e.keyCode <= 39)) { return; } if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) { e.preventDefault(); } }
common.prototype.SetNumeric = function (inputid) { $(inputid).keydown(function (e) { if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 || (e.keyCode == 65 && e.ctrlKey === true) || (e.keyCode >= 35 && e.keyCode <= 39)) { return; } if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) { e.preventDefault(); } }); }


common.prototype.AjaxProcessData = function (fun, url, param) {
    $.ajax({
        type: "POST",
        url: url,
        data: param,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data) {
            fun(false, data.d, "");
        },
        error: function (e) {
          
            fun(true, "[]", e.responseJSON.Message);
        }
    });
}




common.prototype.DynamicStoreGrid = function (grid, data, arr) {
    var df = new Array();
    var cl = new Array();
    for (var i = 0; i < arr.length; i++) {
        df.push({ name: arr[i].toString(), type: 'string' });
        cl.push({ text: arr[i].toString(), datafield: arr[i].toString() })
    }
    var source = {
        datatype: "json",
        datafields: df,
        localdata: data, updaterow: function (rowid, rowdata, commit) { commit(true); }
    };
    var dataAdapter = new $.jqx.dataAdapter(source);
    $("#" + grid).jqxGrid({
        source: dataAdapter,
        pageable: true,
        height: 0,
        pagesize: 10,
        columns: cl
    });

}
common.prototype.LoadCombo = function (el, t, placeholder) {
    var s = "";
    
    if (placeholder != null) { s = "<option value=''  >" + placeholder + "</option>"; }
    for (var i = 0; i < t.length; i++) {
        s += "<option value='" + t[i]['Code'] + "'>" + t[i]['Name'] + "</option>";
    }
    $("#" + el).empty().append(s);
}


jQuery.fn.extend({
    AjaxProcess: function (f, u, p) { new common().AjaxProcessData(f, u, p); },
    LoadCombo: function (data, placeholder) { new common().LoadCombo(this[0].id, data, placeholder); },
    SetTempGrid: function (t, a) { new common().DynamicStoreGrid(this[0].id, t, a) },
    BusyLoader: function (pram) { if (pram == 'open') { $('body').addClass('loading'); } else { $('body').removeClass('loading'); } },
    IsValidEmail: function (email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!regex.test(email)) {
            return false;
        } else {
            return true;
        }
    }
});