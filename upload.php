<?php
    //��ȡ�ύ����
    $a = $_POST["key"];
    $b = $_POST["key2"];

    echo $_FILES['file']['name'];
    if (isset($_FILES['file']))
    {
        //���ļ�������������Ŀ¼��
        $Up_Path = $_FILES['file']['name'];
        $tmpname = $_FILES['file']['tmp_name'];
        //ת����ʱ�ļ�
        if(move_uploaded_file($tmpname,$Up_Path)){
            echo "�ϴ��ɹ�";
        }else{
            echo "�ϴ�ʧ��";
        }
    }
?>