<?php declare(strict_types = 1);

// odsl-/var/www/app
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v1-enums',
   'data' => 
  array (
    '/var/www/app/Contracts/Repositories/BaseRepositoryInterface.php' => 
    array (
      0 => '47ce0559b2e77db9dda5f79a9dcfd82a0a9109ded53f6a79b341865d945df073',
      1 => 
      array (
        0 => 'app\\contracts\\repositories\\baserepositoryinterface',
      ),
      2 => 
      array (
        0 => 'app\\contracts\\repositories\\query',
        1 => 'app\\contracts\\repositories\\all',
        2 => 'app\\contracts\\repositories\\paginate',
        3 => 'app\\contracts\\repositories\\find',
        4 => 'app\\contracts\\repositories\\create',
        5 => 'app\\contracts\\repositories\\update',
        6 => 'app\\contracts\\repositories\\delete',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Contracts/Repositories/PermissionRepositoryInterface.php' => 
    array (
      0 => '38a7271a612bf70c135c6f9446f01a97b44feddd3e5c359b537b414659a5401d',
      1 => 
      array (
        0 => 'app\\contracts\\repositories\\permissionrepositoryinterface',
      ),
      2 => 
      array (
        0 => 'app\\contracts\\repositories\\ordered',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Contracts/Repositories/RoleRepositoryInterface.php' => 
    array (
      0 => 'd93d621e12931759e3e35741c7dd904d1c94a020f863b90bccfa0afdc24d8789',
      1 => 
      array (
        0 => 'app\\contracts\\repositories\\rolerepositoryinterface',
      ),
      2 => 
      array (
        0 => 'app\\contracts\\repositories\\orderedpermissions',
        1 => 'app\\contracts\\repositories\\syncpermissions',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Contracts/Repositories/UserRepositoryInterface.php' => 
    array (
      0 => '9c9e8326461788544ec9b42afd34ecafdfc65f608ef5fa35794a13a19c007492',
      1 => 
      array (
        0 => 'app\\contracts\\repositories\\userrepositoryinterface',
      ),
      2 => 
      array (
        0 => 'app\\contracts\\repositories\\rolesavailablefor',
        1 => 'app\\contracts\\repositories\\permissionsavailablefor',
        2 => 'app\\contracts\\repositories\\permissionidsfromroles',
        3 => 'app\\contracts\\repositories\\syncrolesandpermissions',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Enums/CrudListIcon.php' => 
    array (
      0 => '1da9e3ff1de7b288539c524dc2c0d81857f30bf8b54d5a4c0c5122beacf158b6',
      1 => 
      array (
        0 => 'app\\enums\\crudlisticon',
      ),
      2 => 
      array (
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Http/Controllers/Admin/PermissionCrudController.php' => 
    array (
      0 => 'f71a6e193783c08ed24dfcf290ea2233891df70573f43ffabda92a4ffaa40759',
      1 => 
      array (
        0 => 'app\\http\\controllers\\admin\\permissioncrudcontroller',
      ),
      2 => 
      array (
        0 => 'app\\http\\controllers\\admin\\__construct',
        1 => 'app\\http\\controllers\\admin\\setup',
        2 => 'app\\http\\controllers\\admin\\setuplistoperation',
        3 => 'app\\http\\controllers\\admin\\setupcreateoperation',
        4 => 'app\\http\\controllers\\admin\\setupupdateoperation',
        5 => 'app\\http\\controllers\\admin\\addfields',
        6 => 'app\\http\\controllers\\admin\\getguardtypes',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Http/Controllers/Admin/RoleCrudController.php' => 
    array (
      0 => '6e111e3de0ef6b0bfc04b9c910a13879d413ee5e3ddb2f3fcb2923b61af78711',
      1 => 
      array (
        0 => 'app\\http\\controllers\\admin\\rolecrudcontroller',
      ),
      2 => 
      array (
        0 => 'app\\http\\controllers\\admin\\__construct',
        1 => 'app\\http\\controllers\\admin\\setup',
        2 => 'app\\http\\controllers\\admin\\setuplistoperation',
        3 => 'app\\http\\controllers\\admin\\setupcreateoperation',
        4 => 'app\\http\\controllers\\admin\\setupupdateoperation',
        5 => 'app\\http\\controllers\\admin\\store',
        6 => 'app\\http\\controllers\\admin\\update',
        7 => 'app\\http\\controllers\\admin\\addfields',
        8 => 'app\\http\\controllers\\admin\\setuproleformdata',
        9 => 'app\\http\\controllers\\admin\\roleservice',
        10 => 'app\\http\\controllers\\admin\\getguardtypes',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Http/Controllers/Admin/UserCrudController.php' => 
    array (
      0 => '92d42f0ab5cb9933e0fa9581756d0974ed2ad7fec9b3a06e7fa125fc7f606c99',
      1 => 
      array (
        0 => 'app\\http\\controllers\\admin\\usercrudcontroller',
      ),
      2 => 
      array (
        0 => 'app\\http\\controllers\\admin\\__construct',
        1 => 'app\\http\\controllers\\admin\\setup',
        2 => 'app\\http\\controllers\\admin\\setuplistoperation',
        3 => 'app\\http\\controllers\\admin\\setupcreateoperation',
        4 => 'app\\http\\controllers\\admin\\setupupdateoperation',
        5 => 'app\\http\\controllers\\admin\\setupshowoperation',
        6 => 'app\\http\\controllers\\admin\\store',
        7 => 'app\\http\\controllers\\admin\\update',
        8 => 'app\\http\\controllers\\admin\\adduserfields',
        9 => 'app\\http\\controllers\\admin\\setupuserformdata',
        10 => 'app\\http\\controllers\\admin\\setupuserlistfilters',
        11 => 'app\\http\\controllers\\admin\\applyuservisibilityscope',
        12 => 'app\\http\\controllers\\admin\\userservice',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Http/Controllers/Controller.php' => 
    array (
      0 => '25d1c1ef8e6cc8a376553faacfba2b07d9dfaee9bdbb84f14f77517580e9deb1',
      1 => 
      array (
        0 => 'app\\http\\controllers\\controller',
      ),
      2 => 
      array (
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Http/Middleware/CheckIfAdmin.php' => 
    array (
      0 => '9cae9119461116f0302471581ab8842b9057945c36f1943efa7c35d26c5196f2',
      1 => 
      array (
        0 => 'app\\http\\middleware\\checkifadmin',
      ),
      2 => 
      array (
        0 => 'app\\http\\middleware\\checkifuserisadmin',
        1 => 'app\\http\\middleware\\respondtounauthorizedrequest',
        2 => 'app\\http\\middleware\\handle',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Http/Middleware/CheckPermissionFromRoute.php' => 
    array (
      0 => 'a0be4fc4b45e72d1fb74208f0790626de17533e594ff108c8a60542891c663e1',
      1 => 
      array (
        0 => 'app\\http\\middleware\\checkpermissionfromroute',
      ),
      2 => 
      array (
        0 => 'app\\http\\middleware\\handle',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Models/Permission.php' => 
    array (
      0 => 'f584c124c91c8e182775256fdbf3093f4da0bcc8873af09e337a94dc0fe97079',
      1 => 
      array (
        0 => 'app\\models\\permission',
      ),
      2 => 
      array (
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Models/Role.php' => 
    array (
      0 => '14b44e8786f8c4e28dad5b723ba13ee55efd65a6566511e21c92f4537046bd1f',
      1 => 
      array (
        0 => 'app\\models\\role',
      ),
      2 => 
      array (
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Models/User.php' => 
    array (
      0 => '468f0d7f3d5ea9c63b28e73710b5bc19dd26c499262a175441871571d469057f',
      1 => 
      array (
        0 => 'app\\models\\user',
      ),
      2 => 
      array (
        0 => 'app\\models\\casts',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Providers/AppServiceProvider.php' => 
    array (
      0 => '0484c9ab3e3bfe483c24f6d50ae405cb777dbb643db3c0066dae978b36a186e9',
      1 => 
      array (
        0 => 'app\\providers\\appserviceprovider',
      ),
      2 => 
      array (
        0 => 'app\\providers\\register',
        1 => 'app\\providers\\boot',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Providers/HorizonServiceProvider.php' => 
    array (
      0 => '2552d1f0844bf11e64ab6c68c357d71d32f980cadfdf2553c7727d563c3bfb77',
      1 => 
      array (
        0 => 'app\\providers\\horizonserviceprovider',
      ),
      2 => 
      array (
        0 => 'app\\providers\\boot',
        1 => 'app\\providers\\gate',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Repositories/BaseRepository.php' => 
    array (
      0 => '5c83f8a2a57ba4f2248d2d1c4383bc39beaf4ba9c89b40531b95275afcdb7654',
      1 => 
      array (
        0 => 'app\\repositories\\baserepository',
      ),
      2 => 
      array (
        0 => 'app\\repositories\\query',
        1 => 'app\\repositories\\all',
        2 => 'app\\repositories\\paginate',
        3 => 'app\\repositories\\find',
        4 => 'app\\repositories\\create',
        5 => 'app\\repositories\\update',
        6 => 'app\\repositories\\delete',
        7 => 'app\\repositories\\modelclass',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Repositories/PermissionRepository.php' => 
    array (
      0 => '0be84046e920ba4870a116668160758cebe1056fcac6dc3f7bb0ee0dd305f274',
      1 => 
      array (
        0 => 'app\\repositories\\permissionrepository',
      ),
      2 => 
      array (
        0 => 'app\\repositories\\modelclass',
        1 => 'app\\repositories\\ordered',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Repositories/RoleRepository.php' => 
    array (
      0 => 'd6bf423aecadce49726433ba59072c218e1c58b00b4291e00f19573f6fb64c5d',
      1 => 
      array (
        0 => 'app\\repositories\\rolerepository',
      ),
      2 => 
      array (
        0 => 'app\\repositories\\modelclass',
        1 => 'app\\repositories\\orderedpermissions',
        2 => 'app\\repositories\\syncpermissions',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Repositories/UserRepository.php' => 
    array (
      0 => '246f45f1ba079f605fe770cfb8c073f4f54389c45c42625e7a7cbd49dcd215a9',
      1 => 
      array (
        0 => 'app\\repositories\\userrepository',
      ),
      2 => 
      array (
        0 => 'app\\repositories\\modelclass',
        1 => 'app\\repositories\\rolesavailablefor',
        2 => 'app\\repositories\\permissionsavailablefor',
        3 => 'app\\repositories\\permissionidsfromroles',
        4 => 'app\\repositories\\syncrolesandpermissions',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Services/PermissionService.php' => 
    array (
      0 => '6393afaa4aca42aba3bb8476a630c4c8460f1736fe2800f5f507dd0f82846f18',
      1 => 
      array (
        0 => 'app\\services\\permissionservice',
      ),
      2 => 
      array (
        0 => 'app\\services\\__construct',
        1 => 'app\\services\\ordered',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Services/RoleService.php' => 
    array (
      0 => '45a44ee22e20e7a61a2c0fbb85ad0471fdebc5a50c06f5162ec0c50c967adef0',
      1 => 
      array (
        0 => 'app\\services\\roleservice',
      ),
      2 => 
      array (
        0 => 'app\\services\\__construct',
        1 => 'app\\services\\permissionsforform',
        2 => 'app\\services\\syncpermissions',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Services/UserService.php' => 
    array (
      0 => 'ce7cc1a8acc5073b1344fc6d14a29410de129d18467739c86868c05233b2b227',
      1 => 
      array (
        0 => 'app\\services\\userservice',
      ),
      2 => 
      array (
        0 => 'app\\services\\__construct',
        1 => 'app\\services\\formdata',
        2 => 'app\\services\\preparerequestforsave',
        3 => 'app\\services\\syncrolesandpermissions',
        4 => 'app\\services\\normalizeids',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Support/CustomPathGenerator.php' => 
    array (
      0 => '141b40c63c6df588d9d09bed656ec63a0c22b30b728a7d24ffa61a46c1d339b5',
      1 => 
      array (
        0 => 'app\\support\\custompathgenerator',
      ),
      2 => 
      array (
        0 => 'app\\support\\getpath',
        1 => 'app\\support\\getpathforconversions',
        2 => 'app\\support\\getpathforresponsiveimages',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Traits/HasCrudListFilters.php' => 
    array (
      0 => '31cd6d3f3736710d135321ec3da23eaeae0b4325e3d23ca17997a101df2e9550',
      1 => 
      array (
        0 => 'app\\traits\\hascrudlistfilters',
      ),
      2 => 
      array (
        0 => 'app\\traits\\addcrudlistfilter',
        1 => 'app\\traits\\applycrudlistfilters',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Traits/HasCrudRoutePermissions.php' => 
    array (
      0 => '285fd02ce3bb2eb0fe1318d09fae9b695316abdc21299de0706eb94abb729144',
      1 => 
      array (
        0 => 'app\\traits\\hascrudroutepermissions',
      ),
      2 => 
      array (
        0 => 'app\\traits\\applycrudroutepermissions',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Traits/HasCrudUiPermissions.php' => 
    array (
      0 => '2c47bd05bb818feb305cfacb74021c3e32bc1126261d3f9ad6e77765b8004006',
      1 => 
      array (
        0 => 'app\\traits\\hascruduipermissions',
      ),
      2 => 
      array (
        0 => 'app\\traits\\applycruduipermissions',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Http/Controllers/Admin/ActivityLogCrudController.php' => 
    array (
      0 => 'f434420d5f2920635f70c1e6674845b1a8fc3b5c96d14af1854658577d1382ad',
      1 => 
      array (
        0 => 'app\\http\\controllers\\admin\\activitylogcrudcontroller',
      ),
      2 => 
      array (
        0 => 'app\\http\\controllers\\admin\\__construct',
        1 => 'app\\http\\controllers\\admin\\setup',
        2 => 'app\\http\\controllers\\admin\\setuplistoperation',
        3 => 'app\\http\\controllers\\admin\\setupshowoperation',
      ),
      3 => 
      array (
      ),
    ),
    '/var/www/app/Models/ActivityLog.php' => 
    array (
      0 => 'fde2a131986a459328e80fed199fbd783ee6798f159261cacb98b730f733f099',
      1 => 
      array (
        0 => 'app\\models\\activitylog',
      ),
      2 => 
      array (
      ),
      3 => 
      array (
      ),
    ),
  ),
));