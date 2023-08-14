  <?php

  $array = [
    'nama' => 'Akmal Keisin Alfateh',
    'Umur' => 18,
    'Pendidikan' => 'SMK'
  ];

  $object = (object) $array;
  var_dump($object);

  $arrobject = (array) $object;
  var_dump($arrobject);
  ?>