function display(){
    j=1;
    list=xmlDoc.documentElement.childNodes;
    list=xmlDoc.getElementsbyTagName("sinhvien");
    str="<h3>danh sach sinh vien</h3>";
    for(i=0; i<list.length; i++){
        maso=list[i].getAttribute("mssv");
        hoten=list[i].getAttribute("hoten");
        lop=list[i].getAttribute("lop");
        diachi=list[i].getAttribute("diachi");
        str += j+":"+maso+"-"+hoten+"-"+lop+"-"+diachi+"<br>";
        j++; 
    }
    document.getElementById("kq").innerHTML=str;
    load();
}

function load(){
    var xml = new XMLHttpRequest();
    xml.open("GET","SinhVienCNTT.xml",false);
    xml.send(null);
    xmlDoc = xml.responseXML;
}

function bangdiem(){
    // in ra bang diem cua sinh vien, nhap ma so
    element = find(prompt('nhap ma so sinh vien'));
    if(element!=null){
        list = element.childNodes;
        j=1;
        str="<h3>Bảng điểm của sinh viên</h3>";
        str +=hoten+","+lop+"<br><br>";
        for(i=0;i<list.length;i++){
            if(list[i].nodeType==1){
                monhoc=list[i].getAttribute("tenmh");
                diem=list[i].textContent;
                str +=j+"-"+monhoc+"-"+diem+"<br/>";
                j++;
            }
        }
        document.getElementById("kq").innerHTML=str;
    }else{
        clear(); 
        alert("Không có thành viên này");
    }
}

function clear() {
    document.getElementById("kq").innerHTML="";
}

function find(code) {
    // tìm node sinhvien biết mã số sinh viên
    node = null;
    list = xmlDoc.getElementsbyTagName("sinhvien");
    for (var i = 0; i < list.length; i++) {
        if(list[i].getAttribute("mssv")==code){
            node = list[i];
            hoten = node.getAttribute("hoten");
            lop = node.getAttribute("lop");
            break;
        }
    }
    return node;
}