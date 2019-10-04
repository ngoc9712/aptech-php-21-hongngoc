function loadDoc() {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function (){
    if (http.readyState == 4 && http.status == 200) {
        //nhận dữ liệu trả về từ máy chủ,link url
        var duLieutrave = http.responseText;
        http.responseText;
        // gán dữ liệu trả về dưới dạng text vào biến dữ liệu trả về
        console.log(duLieutrave);
        // in dữ liệu trả về lên console
        var kieuduLieutrave = typeof (duLieutrave);
        // function typeof lấy kiểu của biến dữ liệu trả về và gán vào biến kiểu dữ liệu trả về
        console.log(kieuduLieutrave);
        // in kiểu dữ liệu trả về lên console
        var chuyenJSONthanhObject = JSON.parse(duLieutrave);
        // sử dụng Object JSON và function parse của nó, để chuyển đổi kiểu dữ liệu trả về thành Object, sau đó gán vào biến chuyenJSONthanhOBject 
        console.log(chuyenJSONthanhObject);
        // in giá trị trong biến chuyenJSONthanhObject ra console
        var kieucuachuyenJSONthanhObject = typeof (chuyenJSONthanhObject);
        // gán kiểu chuyenJSONthanhObject lên kieucuachuyenJSONthanhObject
        console.log(kieucuachuyenJSONthanhObject);
        // in kiểu của chuyenJSONthanhObject
        console.log(chuyenJSONthanhObject.users[0].id);
        // BAT table body dua tren id
        var tableBody = document.getElementById('ban');
        for (var i = 0; i < chuyenJSONthanhObject.users.length; i++) {
            // Tao table tr
            var tableRow = document.createElement('tr');
            tableBody.appendChild(tableRow);

            var tableDataID = document.createElement('td');
            tableDataID.innerHTML = chuyenJSONthanhObject.users[i].id;
            tableRow.appendChild(tableDataID);

            var tableDataname = document.createElement('td');
            tableDataname.innerHTML = chuyenJSONthanhObject.users[i].name;
            tableRow.appendChild(tableDataname);

            var tableDataEmail = document.createElement('td');
            tableDataEmail.innerHTML = chuyenJSONthanhObject.users[i].email;
            tableRow.appendChild(tableDataEmail);

            var tableDataPass = document.createElement('td');
            tableDataPass.innerHTML = chuyenJSONthanhObject.users[i].password;
            tableRow.appendChild(tableDataPass);
        }
    }
};
http.open("GET", "https://namcoi.com/aptech-demo/user-crud-laravel/public/api/users", true);
http.send();
}
