<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Odday2S3jEoTavb5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aDtxscmA2fGzz3fL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'website.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pricing-plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'website.pricing-plans',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'website.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'website.',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'website.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'website.doLogin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'website.password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'website.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'website.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'website.verification.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verification-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'website.verification.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'website.password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'website.generated::ve7rsCjSblKf8Ws0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'website.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/change-building' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.change-building',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/search-flat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.search-flat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-provinces-of-country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.provinces-by-country',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-districts-of-province' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.districts-by-province',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-tehsils-of-district' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.tehsils-by-district',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-colonies-by-tehsil' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.colonies-by-tehsil',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-address-by-colony' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.address-by-colony',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-hr-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.hr-details',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-hr-details-for-employee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.hr-details-for-employee',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-picker' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.hr-picker',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-floors-of-building' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.floors-of-building',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-flats-of-floor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.flats-of-floor',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-floor-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.floor-details',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-flat-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.flat-details',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-flat-owners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.flat-owners',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-sales-payment-sub-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.sales-payment-sub-types',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-commodity-sub-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.commodity-sub-types',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/dashboard-data-ajax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.dashboard.data.ajax',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-installment-plan-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.installment-plan-details',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-sales-payment-view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.sales-payment-view',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-sales-commodity-view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.sales-commodity-view',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-flat-revisions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.flat-revisions',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-flat-object' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.flat-object',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/nav-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.nav-search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/brokers-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.brokers-list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sellers-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sellers-list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/buyers-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.buyers-list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/floor-name' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floor-name.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floor-name.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/floor-name/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floor-name.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/floor-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floor-type.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floor-type.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/floor-type/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floor-type.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/flat-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.flat-type.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.flat-type.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/flat-type/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.flat-type.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.service.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.service.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/service/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.service.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/relation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.relation.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.relation.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/relation/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.relation.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-cast' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cast.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cast.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-cast/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cast.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-nationality' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.nationality.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.nationality.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-nationality/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.nationality.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/country' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.country.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.country.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/country/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.country.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/province' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.province.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.province.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/province/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.province.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/district' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.district.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.district.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/district/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.district.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/tehsil' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tehsil.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tehsil.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/tehsil/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tehsil.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/colony' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.colony.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.colony.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/colony/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.colony.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-department' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.department.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.department.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-department/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.department.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-designation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.designation.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.designation.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-designation/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.designation.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-ministry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.ministry.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.ministry.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-ministry/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.ministry.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-employment-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employee-type.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employee-type.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-employment-type/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employee-type.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-profession' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.profession.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.profession.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-profession/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.profession.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-organization' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.organization.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.organization.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-organization/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.organization.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-tax-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tax-type.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tax-type.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-tax-type/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tax-type.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-tax-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tax-status.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tax-status.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-tax-status/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tax-status.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-business' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.hr-business.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.hr-business.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/hr-business/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.hr-business.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/commodity-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.commodity-type.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.commodity-type.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/commodity-type/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.commodity-type.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/device-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-types.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-types.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/device-types/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-types.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/device-makes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-makes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-makes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/device-makes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-makes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/device-models' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-models.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-models.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/device-models/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-models.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/device-classes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-classes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-classes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/device-classes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-classes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/device-locations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-locations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-locations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/device-locations/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-locations.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/device-operating-systems' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-operating-systems.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-operating-systems.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/device-operating-systems/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-operating-systems.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/create-account-head' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.create.account-head',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/save-account-head' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.save.account-head',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/expense-heads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.expense.heads.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.expense.heads.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/expense-heads/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.expense.heads.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/expenses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.expenses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.expenses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/expenses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.expenses.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/mark-expense-paid' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.mark-expense-paid',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employee-loan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employee-loan.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employee-loan.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employee-loan/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employee-loan.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employee-loan-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employee-loan-details',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/seller-ledger' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.seller-ledger',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/buyer-ledger' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.buyer-ledger',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/broker-ledger' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.broker-ledger',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/general-ledger' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.general-ledger',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/general-ledger-sub-heads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.general-ledger-sub-heads',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/buyer-receiving-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.voucher.buyer-receiving',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/save-buyer-receiving-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.voucher.save-buyer-receiving',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sales-invoice-by-flat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.sales-invoice-by-flat',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-sales-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.sales-details',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/buyer-installment-receiving-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.voucher.buyer-installment-receiving',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/save-buyer-installment-receiving-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.voucher.save-buyer-installment-receiving',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/print-buyer-installment-receiving-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.print-buyer-installment-receiving',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-installment-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.installment-details',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/seller-payment-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.voucher.seller-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/save-seller-payment-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.voucher.save-seller-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/broker-payment-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.voucher.broker-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/save-broker-payment-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.voucher.save-broker-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/print-broker-payment-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.print-broker-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-broker-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.broker-details',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/debit-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.voucher.debit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/save-debit-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.voucher.save-debit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/credit-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.voucher.credit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/save-credit-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.voucher.save-credit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/opening-balance-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.voucher.opening-balance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/save-opening-balance-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.voucher.save-opening-balance',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/cashbook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cashbook',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/profit-loss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.profit-loss',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/balance-sheet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.balance-sheet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/broker-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.broker-report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/pending-collections' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.pending-collections',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/flat-shop-wise-profit-loss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.flat-shop-wise-profit-loss',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/broker-wise-sales-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.broker-wise-sales-report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-employee-salary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.employee-salary',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/get-department-employees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.get.department-employees',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/salary-pay-now' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.salary.pay-now',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/salary/advance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.salary.advance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/salary/save-advance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.salary.save-advance',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/salary/calculate-advance-salary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.salary.calculate-advance',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/salary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.salary.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.salary.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/salary/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.salary.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/devices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.devices.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.devices.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/devices/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.devices.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.permissions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.permissions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/permissions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.permissions.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/role-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.role-users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.role-users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/role-users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.role-users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/role-permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.role-permissions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.role-permissions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/role-permissions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.role-permissions.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sync-permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sync-permissions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/human-resource' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.human-resource.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.human-resource.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/human-resource/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.human-resource.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/nominee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.nominee.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.nominee.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/nominee/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.nominee.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/poa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.poa.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.poa.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/poa/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.poa.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employees.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employees.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/employees/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employees.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/add-hr-ajax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.add.hr-ajax',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/buildings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.buildings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.buildings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/buildings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.buildings.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/floors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floors.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floors.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/floors/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floors.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/flats-shops' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.flats-shops.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.flats-shops.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/flats-shops/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.flats-shops.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sales/title-transfer-print' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales.title-transfer-print',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sales/seller-affidavit-print' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales.seller-affidavit-print',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sales/commodity-deal-closings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales.commodity-deal-closings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sales/update-commodity-deal-closings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales.update-commodity-deal-closings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sales/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/installment-plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.installment-plans.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.installment-plans.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/installment-plans/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.installment-plans.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/installment-term' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.installment-term.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.installment-term.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/installment-term/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.installment-term.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/quotations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.quotations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.quotations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/quotations/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.quotations.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/add-installment-plan-ajax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.add.installment-plan-ajax',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/print-installment-plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.print.installment.plans',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/print-flat-owner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.print.flat.owner',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/filter-flat-owner-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.filter.flat.owner.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/print-building' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.print.building',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/filter-building' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.filter.building',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/print-nominee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.print.nominee',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/filter-nominee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.filter.nominee',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/print-hr' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.print.hr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/filter-hr' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.filter.hr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/print-title-transfer-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.print.title.transfer.detail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/print-1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/print-2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::zubXf6mJNArmQM4r',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/print-3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.generated::0BenWkHbIbZtjtUY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.system-settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.system-settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/system-settings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.system-settings.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/business-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.business-settings.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.business-settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/business-settings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.business-settings.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/savePrintTheme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.save.print.theme',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/call-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.call-type.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.call-type.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/call-type/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.call-type.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/complain-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.complain-type.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.complain-type.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/complain-type/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.complain-type.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/source' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.source.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.source.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/source/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.source.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/reference' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.reference.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.reference.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/reference/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.reference.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/purpose' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.purpose.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.purpose.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/purpose/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.purpose.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sales-enquiry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales-enquiry.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales-enquiry.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/sales-enquiry/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales-enquiry.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/visitor-book' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.visitor-book.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.visitor-book.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/visitor-book/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.visitor-book.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/phone-call-log' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.phone-call-log.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.phone-call-log.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/phone-call-log/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.phone-call-log.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/postal-dispatch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.postal-dispatch.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.postal-dispatch.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/postal-dispatch/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.postal-dispatch.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/postal-receive' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.postal-receive.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.postal-receive.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/postal-receive/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.postal-receive.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/complain' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.complain.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.complain.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/complain/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.complain.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/assets-inventory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-inventory.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-inventory.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/assets-inventory/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-inventory.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/assets-unit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-unit.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-unit.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/assets-unit/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-unit.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/assets-location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-location.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-location.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/assets-location/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-location.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.subscriptions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.subscriptions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/subscriptions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.subscriptions.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.plans.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.plans.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/plans/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.plans.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/reset\\-password/([^/]++)(*:106)|/verify\\-email/([^/]++)/([^/]++)(*:146)|/dashboard/(?|fl(?|oor(?|\\-(?|name/([^/]++)(?|(*:200)|/edit(*:213)|(*:221))|type/([^/]++)(?|(*:246)|/edit(*:259)|(*:267)))|s/([^/]++)(?|(*:290)|/edit(*:303)|(*:311)))|at(?|\\-type/([^/]++)(?|(*:344)|/edit(*:357)|(*:365))|s\\-shops/([^/]++)(?|(*:394)|/edit(*:407)|(*:415))))|s(?|ervice/([^/]++)(?|(*:448)|/edit(*:461)|(*:469))|al(?|ary/([^/]++)(?|(*:498)|/edit(*:511)|(*:519))|es(?|/([^/]++)(?|(*:545)|/edit(*:558)|(*:566))|\\-enquiry/([^/]++)(?|(*:596)|/edit(*:609)|(*:617))))|ystem\\-settings/([^/]++)(?|(*:655)|/edit(*:668)|(*:676))|ource/([^/]++)(?|(*:702)|/edit(*:715)|(*:723))|ubscriptions/([^/]++)(?|(*:756)|/edit(*:769)|(*:777)))|r(?|e(?|lation/([^/]++)(?|(*:813)|/edit(*:826)|(*:834))|ference/([^/]++)(?|(*:862)|/edit(*:875)|(*:883)))|ole(?|s/([^/]++)(?|(*:912)|/edit(*:925)|(*:933))|\\-(?|users/([^/]++)(?|(*:964)|/edit(*:977)|(*:985))|permissions/([^/]++)(?|(*:1017)|/edit(*:1031)|(*:1040)))))|h(?|r\\-(?|cast/([^/]++)(?|(*:1079)|/edit(*:1093)|(*:1102))|nationality/([^/]++)(?|(*:1135)|/edit(*:1149)|(*:1158))|de(?|partment/([^/]++)(?|(*:1193)|/edit(*:1207)|(*:1216))|signation/([^/]++)(?|(*:1247)|/edit(*:1261)|(*:1270)))|ministry/([^/]++)(?|(*:1301)|/edit(*:1315)|(*:1324))|employment\\-type/([^/]++)(?|(*:1362)|/edit(*:1376)|(*:1385))|profession/([^/]++)(?|(*:1417)|/edit(*:1431)|(*:1440))|organization/([^/]++)(?|(*:1474)|/edit(*:1488)|(*:1497))|tax\\-(?|type/([^/]++)(?|(*:1531)|/edit(*:1545)|(*:1554))|status/([^/]++)(?|(*:1582)|/edit(*:1596)|(*:1605)))|business/([^/]++)(?|(*:1636)|/edit(*:1650)|(*:1659)))|uman\\-resource/([^/]++)(?|(*:1696)|/edit(*:1710)|(*:1719)))|c(?|o(?|untry/([^/]++)(?|(*:1755)|/edit(*:1769)|(*:1778))|lony/([^/]++)(?|(*:1804)|/edit(*:1818)|(*:1827))|m(?|modity\\-type/([^/]++)(?|(*:1865)|/edit(*:1879)|(*:1888))|plain(?|\\-type/([^/]++)(?|(*:1924)|/edit(*:1938)|(*:1947))|/([^/]++)(?|(*:1969)|/edit(*:1983)|(*:1992)))))|all\\-type/([^/]++)(?|(*:2026)|/edit(*:2040)|(*:2049)))|p(?|rovince/([^/]++)(?|(*:2083)|/edit(*:2097)|(*:2106))|ermissions/([^/]++)(?|(*:2138)|/edit(*:2152)|(*:2161))|o(?|a/([^/]++)(?|(*:2188)|/edit(*:2202)|(*:2211))|stal\\-(?|dispatch/([^/]++)(?|(*:2250)|/edit(*:2264)|(*:2273))|receive/([^/]++)(?|(*:2302)|/edit(*:2316)|(*:2325))))|urpose/([^/]++)(?|(*:2355)|/edit(*:2369)|(*:2378))|hone\\-call\\-log/([^/]++)(?|(*:2415)|/edit(*:2429)|(*:2438))|lans/([^/]++)(?|(*:2464)|/edit(*:2478)|(*:2487)))|d(?|istrict/([^/]++)(?|(*:2521)|/edit(*:2535)|(*:2544))|evice(?|\\-(?|types/([^/]++)(?|(*:2584)|/edit(*:2598)|(*:2607))|m(?|akes/([^/]++)(?|(*:2637)|/edit(*:2651)|(*:2660))|odels/([^/]++)(?|(*:2687)|/edit(*:2701)|(*:2710)))|classes/([^/]++)(?|(*:2740)|/edit(*:2754)|(*:2763))|locations/([^/]++)(?|(*:2794)|/edit(*:2808)|(*:2817))|operating\\-systems/([^/]++)(?|(*:2857)|/edit(*:2871)|(*:2880)))|s/([^/]++)(?|(*:2904)|/edit(*:2918)|(*:2927))))|tehsil/([^/]++)(?|(*:2957)|/edit(*:2971)|(*:2980))|e(?|xpense(?|\\-heads/([^/]++)(?|(*:3022)|/edit(*:3036)|(*:3045))|s/([^/]++)(?|(*:3068)|/edit(*:3082)|(*:3091)))|mployee(?|\\-loan/([^/]++)(?|(*:3130)|/edit(*:3144)|(*:3153))|s/([^/]++)(?|(*:3176)|/edit(*:3190)|(*:3199))))|users/([^/]++)(?|(*:3228)|/edit(*:3242)|(*:3251))|nominee/([^/]++)(?|(*:3280)|/edit(*:3294)|(*:3303))|bu(?|ildings/([^/]++)(?|(*:3337)|/edit(*:3351)|(*:3360))|siness\\-settings/([^/]++)(?|(*:3398)|/edit(*:3412)|(*:3421)))|installment\\-(?|plans/([^/]++)(?|(*:3465)|/edit(*:3479)|(*:3488))|term/([^/]++)(?|(*:3514)|/edit(*:3528)|(*:3537)))|quotations/([^/]++)(?|(*:3570)|/edit(*:3584)|(*:3593))|visitor\\-book/([^/]++)(?|(*:3628)|/edit(*:3642)|(*:3651))|assets\\-(?|inventory/([^/]++)(?|(*:3693)|/edit(*:3707)|(*:3716))|unit/([^/]++)(?|(*:3742)|/edit(*:3756)|(*:3765))|location/([^/]++)(?|(*:3795)|/edit(*:3809)|(*:3818)))))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'website.password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      146 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'website.verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floor-name.show',
          ),
          1 => 
          array (
            0 => 'floor_name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      213 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floor-name.edit',
          ),
          1 => 
          array (
            0 => 'floor_name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      221 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floor-name.update',
          ),
          1 => 
          array (
            0 => 'floor_name',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floor-name.destroy',
          ),
          1 => 
          array (
            0 => 'floor_name',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      246 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floor-type.show',
          ),
          1 => 
          array (
            0 => 'floor_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floor-type.edit',
          ),
          1 => 
          array (
            0 => 'floor_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      267 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floor-type.update',
          ),
          1 => 
          array (
            0 => 'floor_type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floor-type.destroy',
          ),
          1 => 
          array (
            0 => 'floor_type',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floors.show',
          ),
          1 => 
          array (
            0 => 'floor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      303 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floors.edit',
          ),
          1 => 
          array (
            0 => 'floor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floors.update',
          ),
          1 => 
          array (
            0 => 'floor',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.floors.destroy',
          ),
          1 => 
          array (
            0 => 'floor',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.flat-type.show',
          ),
          1 => 
          array (
            0 => 'flat_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      357 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.flat-type.edit',
          ),
          1 => 
          array (
            0 => 'flat_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      365 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.flat-type.update',
          ),
          1 => 
          array (
            0 => 'flat_type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.flat-type.destroy',
          ),
          1 => 
          array (
            0 => 'flat_type',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.flats-shops.show',
          ),
          1 => 
          array (
            0 => 'flats_shop',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.flats-shops.edit',
          ),
          1 => 
          array (
            0 => 'flats_shop',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      415 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.flats-shops.update',
          ),
          1 => 
          array (
            0 => 'flats_shop',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.flats-shops.destroy',
          ),
          1 => 
          array (
            0 => 'flats_shop',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.service.show',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.service.edit',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      469 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.service.update',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.service.destroy',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      498 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.salary.show',
          ),
          1 => 
          array (
            0 => 'salary',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      511 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.salary.edit',
          ),
          1 => 
          array (
            0 => 'salary',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      519 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.salary.update',
          ),
          1 => 
          array (
            0 => 'salary',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.salary.destroy',
          ),
          1 => 
          array (
            0 => 'salary',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales.show',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      558 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales.edit',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      566 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales.update',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales.destroy',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      596 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales-enquiry.show',
          ),
          1 => 
          array (
            0 => 'sales_enquiry',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      609 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales-enquiry.edit',
          ),
          1 => 
          array (
            0 => 'sales_enquiry',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      617 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales-enquiry.update',
          ),
          1 => 
          array (
            0 => 'sales_enquiry',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.sales-enquiry.destroy',
          ),
          1 => 
          array (
            0 => 'sales_enquiry',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.system-settings.show',
          ),
          1 => 
          array (
            0 => 'system_setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      668 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.system-settings.edit',
          ),
          1 => 
          array (
            0 => 'system_setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      676 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.system-settings.update',
          ),
          1 => 
          array (
            0 => 'system_setting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.system-settings.destroy',
          ),
          1 => 
          array (
            0 => 'system_setting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      702 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.source.show',
          ),
          1 => 
          array (
            0 => 'source',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      715 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.source.edit',
          ),
          1 => 
          array (
            0 => 'source',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.source.update',
          ),
          1 => 
          array (
            0 => 'source',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.source.destroy',
          ),
          1 => 
          array (
            0 => 'source',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      756 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.subscriptions.show',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      769 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.subscriptions.edit',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      777 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.subscriptions.update',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.subscriptions.destroy',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      813 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.relation.show',
          ),
          1 => 
          array (
            0 => 'relation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      826 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.relation.edit',
          ),
          1 => 
          array (
            0 => 'relation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      834 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.relation.update',
          ),
          1 => 
          array (
            0 => 'relation',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.relation.destroy',
          ),
          1 => 
          array (
            0 => 'relation',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.reference.show',
          ),
          1 => 
          array (
            0 => 'reference',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      875 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.reference.edit',
          ),
          1 => 
          array (
            0 => 'reference',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      883 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.reference.update',
          ),
          1 => 
          array (
            0 => 'reference',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.reference.destroy',
          ),
          1 => 
          array (
            0 => 'reference',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      912 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      925 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      933 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      964 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.role-users.show',
          ),
          1 => 
          array (
            0 => 'role_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      977 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.role-users.edit',
          ),
          1 => 
          array (
            0 => 'role_user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      985 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.role-users.update',
          ),
          1 => 
          array (
            0 => 'role_user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.role-users.destroy',
          ),
          1 => 
          array (
            0 => 'role_user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1017 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.role-permissions.show',
          ),
          1 => 
          array (
            0 => 'role_permission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1031 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.role-permissions.edit',
          ),
          1 => 
          array (
            0 => 'role_permission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1040 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.role-permissions.update',
          ),
          1 => 
          array (
            0 => 'role_permission',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.role-permissions.destroy',
          ),
          1 => 
          array (
            0 => 'role_permission',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1079 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cast.show',
          ),
          1 => 
          array (
            0 => 'hr_cast',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1093 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cast.edit',
          ),
          1 => 
          array (
            0 => 'hr_cast',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cast.update',
          ),
          1 => 
          array (
            0 => 'hr_cast',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.cast.destroy',
          ),
          1 => 
          array (
            0 => 'hr_cast',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.nationality.show',
          ),
          1 => 
          array (
            0 => 'hr_nationality',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.nationality.edit',
          ),
          1 => 
          array (
            0 => 'hr_nationality',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1158 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.nationality.update',
          ),
          1 => 
          array (
            0 => 'hr_nationality',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.nationality.destroy',
          ),
          1 => 
          array (
            0 => 'hr_nationality',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.department.show',
          ),
          1 => 
          array (
            0 => 'hr_department',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1207 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.department.edit',
          ),
          1 => 
          array (
            0 => 'hr_department',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.department.update',
          ),
          1 => 
          array (
            0 => 'hr_department',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.department.destroy',
          ),
          1 => 
          array (
            0 => 'hr_department',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.designation.show',
          ),
          1 => 
          array (
            0 => 'hr_designation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.designation.edit',
          ),
          1 => 
          array (
            0 => 'hr_designation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.designation.update',
          ),
          1 => 
          array (
            0 => 'hr_designation',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.designation.destroy',
          ),
          1 => 
          array (
            0 => 'hr_designation',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1301 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.ministry.show',
          ),
          1 => 
          array (
            0 => 'hr_ministry',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1315 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.ministry.edit',
          ),
          1 => 
          array (
            0 => 'hr_ministry',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.ministry.update',
          ),
          1 => 
          array (
            0 => 'hr_ministry',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.ministry.destroy',
          ),
          1 => 
          array (
            0 => 'hr_ministry',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employee-type.show',
          ),
          1 => 
          array (
            0 => 'hr_employment_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1376 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employee-type.edit',
          ),
          1 => 
          array (
            0 => 'hr_employment_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1385 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employee-type.update',
          ),
          1 => 
          array (
            0 => 'hr_employment_type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employee-type.destroy',
          ),
          1 => 
          array (
            0 => 'hr_employment_type',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1417 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.profession.show',
          ),
          1 => 
          array (
            0 => 'hr_profession',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.profession.edit',
          ),
          1 => 
          array (
            0 => 'hr_profession',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1440 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.profession.update',
          ),
          1 => 
          array (
            0 => 'hr_profession',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.profession.destroy',
          ),
          1 => 
          array (
            0 => 'hr_profession',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1474 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.organization.show',
          ),
          1 => 
          array (
            0 => 'hr_organization',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1488 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.organization.edit',
          ),
          1 => 
          array (
            0 => 'hr_organization',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1497 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.organization.update',
          ),
          1 => 
          array (
            0 => 'hr_organization',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.organization.destroy',
          ),
          1 => 
          array (
            0 => 'hr_organization',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1531 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tax-type.show',
          ),
          1 => 
          array (
            0 => 'hr_tax_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tax-type.edit',
          ),
          1 => 
          array (
            0 => 'hr_tax_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tax-type.update',
          ),
          1 => 
          array (
            0 => 'hr_tax_type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tax-type.destroy',
          ),
          1 => 
          array (
            0 => 'hr_tax_type',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tax-status.show',
          ),
          1 => 
          array (
            0 => 'hr_tax_status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1596 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tax-status.edit',
          ),
          1 => 
          array (
            0 => 'hr_tax_status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1605 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tax-status.update',
          ),
          1 => 
          array (
            0 => 'hr_tax_status',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tax-status.destroy',
          ),
          1 => 
          array (
            0 => 'hr_tax_status',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.hr-business.show',
          ),
          1 => 
          array (
            0 => 'hr_business',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1650 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.hr-business.edit',
          ),
          1 => 
          array (
            0 => 'hr_business',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1659 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.hr-business.update',
          ),
          1 => 
          array (
            0 => 'hr_business',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.hr-business.destroy',
          ),
          1 => 
          array (
            0 => 'hr_business',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1696 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.human-resource.show',
          ),
          1 => 
          array (
            0 => 'human_resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1710 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.human-resource.edit',
          ),
          1 => 
          array (
            0 => 'human_resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.human-resource.update',
          ),
          1 => 
          array (
            0 => 'human_resource',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.human-resource.destroy',
          ),
          1 => 
          array (
            0 => 'human_resource',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1755 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.country.show',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1769 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.country.edit',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1778 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.country.update',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.country.destroy',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.colony.show',
          ),
          1 => 
          array (
            0 => 'colony',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1818 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.colony.edit',
          ),
          1 => 
          array (
            0 => 'colony',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1827 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.colony.update',
          ),
          1 => 
          array (
            0 => 'colony',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.colony.destroy',
          ),
          1 => 
          array (
            0 => 'colony',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1865 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.commodity-type.show',
          ),
          1 => 
          array (
            0 => 'commodity_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1879 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.commodity-type.edit',
          ),
          1 => 
          array (
            0 => 'commodity_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1888 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.commodity-type.update',
          ),
          1 => 
          array (
            0 => 'commodity_type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.commodity-type.destroy',
          ),
          1 => 
          array (
            0 => 'commodity_type',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1924 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.complain-type.show',
          ),
          1 => 
          array (
            0 => 'complain_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1938 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.complain-type.edit',
          ),
          1 => 
          array (
            0 => 'complain_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1947 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.complain-type.update',
          ),
          1 => 
          array (
            0 => 'complain_type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.complain-type.destroy',
          ),
          1 => 
          array (
            0 => 'complain_type',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1969 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.complain.show',
          ),
          1 => 
          array (
            0 => 'complain',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1983 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.complain.edit',
          ),
          1 => 
          array (
            0 => 'complain',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1992 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.complain.update',
          ),
          1 => 
          array (
            0 => 'complain',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.complain.destroy',
          ),
          1 => 
          array (
            0 => 'complain',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2026 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.call-type.show',
          ),
          1 => 
          array (
            0 => 'call_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2040 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.call-type.edit',
          ),
          1 => 
          array (
            0 => 'call_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2049 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.call-type.update',
          ),
          1 => 
          array (
            0 => 'call_type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.call-type.destroy',
          ),
          1 => 
          array (
            0 => 'call_type',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2083 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.province.show',
          ),
          1 => 
          array (
            0 => 'province',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2097 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.province.edit',
          ),
          1 => 
          array (
            0 => 'province',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.province.update',
          ),
          1 => 
          array (
            0 => 'province',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.province.destroy',
          ),
          1 => 
          array (
            0 => 'province',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2138 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.permissions.show',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.permissions.edit',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.permissions.update',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.permissions.destroy',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.poa.show',
          ),
          1 => 
          array (
            0 => 'poa',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2202 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.poa.edit',
          ),
          1 => 
          array (
            0 => 'poa',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.poa.update',
          ),
          1 => 
          array (
            0 => 'poa',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.poa.destroy',
          ),
          1 => 
          array (
            0 => 'poa',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2250 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.postal-dispatch.show',
          ),
          1 => 
          array (
            0 => 'postal_dispatch',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2264 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.postal-dispatch.edit',
          ),
          1 => 
          array (
            0 => 'postal_dispatch',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.postal-dispatch.update',
          ),
          1 => 
          array (
            0 => 'postal_dispatch',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.postal-dispatch.destroy',
          ),
          1 => 
          array (
            0 => 'postal_dispatch',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2302 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.postal-receive.show',
          ),
          1 => 
          array (
            0 => 'postal_receive',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2316 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.postal-receive.edit',
          ),
          1 => 
          array (
            0 => 'postal_receive',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.postal-receive.update',
          ),
          1 => 
          array (
            0 => 'postal_receive',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.postal-receive.destroy',
          ),
          1 => 
          array (
            0 => 'postal_receive',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2355 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.purpose.show',
          ),
          1 => 
          array (
            0 => 'purpose',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2369 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.purpose.edit',
          ),
          1 => 
          array (
            0 => 'purpose',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2378 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.purpose.update',
          ),
          1 => 
          array (
            0 => 'purpose',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.purpose.destroy',
          ),
          1 => 
          array (
            0 => 'purpose',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2415 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.phone-call-log.show',
          ),
          1 => 
          array (
            0 => 'phone_call_log',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.phone-call-log.edit',
          ),
          1 => 
          array (
            0 => 'phone_call_log',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2438 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.phone-call-log.update',
          ),
          1 => 
          array (
            0 => 'phone_call_log',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.phone-call-log.destroy',
          ),
          1 => 
          array (
            0 => 'phone_call_log',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2464 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.plans.show',
          ),
          1 => 
          array (
            0 => 'plan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2478 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.plans.edit',
          ),
          1 => 
          array (
            0 => 'plan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2487 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.plans.update',
          ),
          1 => 
          array (
            0 => 'plan',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.plans.destroy',
          ),
          1 => 
          array (
            0 => 'plan',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2521 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.district.show',
          ),
          1 => 
          array (
            0 => 'district',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2535 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.district.edit',
          ),
          1 => 
          array (
            0 => 'district',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2544 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.district.update',
          ),
          1 => 
          array (
            0 => 'district',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.district.destroy',
          ),
          1 => 
          array (
            0 => 'district',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-types.show',
          ),
          1 => 
          array (
            0 => 'device_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2598 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-types.edit',
          ),
          1 => 
          array (
            0 => 'device_type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-types.update',
          ),
          1 => 
          array (
            0 => 'device_type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-types.destroy',
          ),
          1 => 
          array (
            0 => 'device_type',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2637 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-makes.show',
          ),
          1 => 
          array (
            0 => 'device_make',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2651 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-makes.edit',
          ),
          1 => 
          array (
            0 => 'device_make',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2660 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-makes.update',
          ),
          1 => 
          array (
            0 => 'device_make',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-makes.destroy',
          ),
          1 => 
          array (
            0 => 'device_make',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-models.show',
          ),
          1 => 
          array (
            0 => 'device_model',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-models.edit',
          ),
          1 => 
          array (
            0 => 'device_model',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2710 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-models.update',
          ),
          1 => 
          array (
            0 => 'device_model',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-models.destroy',
          ),
          1 => 
          array (
            0 => 'device_model',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2740 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-classes.show',
          ),
          1 => 
          array (
            0 => 'device_class',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2754 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-classes.edit',
          ),
          1 => 
          array (
            0 => 'device_class',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2763 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-classes.update',
          ),
          1 => 
          array (
            0 => 'device_class',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-classes.destroy',
          ),
          1 => 
          array (
            0 => 'device_class',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2794 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-locations.show',
          ),
          1 => 
          array (
            0 => 'device_location',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2808 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-locations.edit',
          ),
          1 => 
          array (
            0 => 'device_location',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2817 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-locations.update',
          ),
          1 => 
          array (
            0 => 'device_location',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-locations.destroy',
          ),
          1 => 
          array (
            0 => 'device_location',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2857 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-operating-systems.show',
          ),
          1 => 
          array (
            0 => 'device_operating_system',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2871 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-operating-systems.edit',
          ),
          1 => 
          array (
            0 => 'device_operating_system',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2880 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-operating-systems.update',
          ),
          1 => 
          array (
            0 => 'device_operating_system',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.device-operating-systems.destroy',
          ),
          1 => 
          array (
            0 => 'device_operating_system',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2904 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.devices.show',
          ),
          1 => 
          array (
            0 => 'device',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2918 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.devices.edit',
          ),
          1 => 
          array (
            0 => 'device',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.devices.update',
          ),
          1 => 
          array (
            0 => 'device',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.devices.destroy',
          ),
          1 => 
          array (
            0 => 'device',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2957 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tehsil.show',
          ),
          1 => 
          array (
            0 => 'tehsil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2971 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tehsil.edit',
          ),
          1 => 
          array (
            0 => 'tehsil',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tehsil.update',
          ),
          1 => 
          array (
            0 => 'tehsil',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.tehsil.destroy',
          ),
          1 => 
          array (
            0 => 'tehsil',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3022 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.expense.heads.show',
          ),
          1 => 
          array (
            0 => 'expense_head',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3036 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.expense.heads.edit',
          ),
          1 => 
          array (
            0 => 'expense_head',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3045 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.expense.heads.update',
          ),
          1 => 
          array (
            0 => 'expense_head',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.expense.heads.destroy',
          ),
          1 => 
          array (
            0 => 'expense_head',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3068 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.expenses.show',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3082 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.expenses.edit',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3091 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.expenses.update',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.expenses.destroy',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employee-loan.show',
          ),
          1 => 
          array (
            0 => 'employee_loan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employee-loan.edit',
          ),
          1 => 
          array (
            0 => 'employee_loan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employee-loan.update',
          ),
          1 => 
          array (
            0 => 'employee_loan',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employee-loan.destroy',
          ),
          1 => 
          array (
            0 => 'employee_loan',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employees.show',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employees.edit',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employees.update',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.employees.destroy',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3280 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.nominee.show',
          ),
          1 => 
          array (
            0 => 'nominee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.nominee.edit',
          ),
          1 => 
          array (
            0 => 'nominee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3303 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.nominee.update',
          ),
          1 => 
          array (
            0 => 'nominee',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.nominee.destroy',
          ),
          1 => 
          array (
            0 => 'nominee',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3337 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.buildings.show',
          ),
          1 => 
          array (
            0 => 'building',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.buildings.edit',
          ),
          1 => 
          array (
            0 => 'building',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3360 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.buildings.update',
          ),
          1 => 
          array (
            0 => 'building',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.buildings.destroy',
          ),
          1 => 
          array (
            0 => 'building',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3398 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.business-settings.show',
          ),
          1 => 
          array (
            0 => 'business_setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3412 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.business-settings.edit',
          ),
          1 => 
          array (
            0 => 'business_setting',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3421 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.business-settings.update',
          ),
          1 => 
          array (
            0 => 'business_setting',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.business-settings.destroy',
          ),
          1 => 
          array (
            0 => 'business_setting',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.installment-plans.show',
          ),
          1 => 
          array (
            0 => 'installment_plan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3479 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.installment-plans.edit',
          ),
          1 => 
          array (
            0 => 'installment_plan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3488 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.installment-plans.update',
          ),
          1 => 
          array (
            0 => 'installment_plan',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.installment-plans.destroy',
          ),
          1 => 
          array (
            0 => 'installment_plan',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.installment-term.show',
          ),
          1 => 
          array (
            0 => 'installment_term',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.installment-term.edit',
          ),
          1 => 
          array (
            0 => 'installment_term',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3537 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.installment-term.update',
          ),
          1 => 
          array (
            0 => 'installment_term',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.installment-term.destroy',
          ),
          1 => 
          array (
            0 => 'installment_term',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3570 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.quotations.show',
          ),
          1 => 
          array (
            0 => 'quotation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.quotations.edit',
          ),
          1 => 
          array (
            0 => 'quotation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3593 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.quotations.update',
          ),
          1 => 
          array (
            0 => 'quotation',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.quotations.destroy',
          ),
          1 => 
          array (
            0 => 'quotation',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.visitor-book.show',
          ),
          1 => 
          array (
            0 => 'visitor_book',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3642 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.visitor-book.edit',
          ),
          1 => 
          array (
            0 => 'visitor_book',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3651 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.visitor-book.update',
          ),
          1 => 
          array (
            0 => 'visitor_book',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.visitor-book.destroy',
          ),
          1 => 
          array (
            0 => 'visitor_book',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3693 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-inventory.show',
          ),
          1 => 
          array (
            0 => 'assets_inventory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3707 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-inventory.edit',
          ),
          1 => 
          array (
            0 => 'assets_inventory',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3716 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-inventory.update',
          ),
          1 => 
          array (
            0 => 'assets_inventory',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-inventory.destroy',
          ),
          1 => 
          array (
            0 => 'assets_inventory',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3742 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-unit.show',
          ),
          1 => 
          array (
            0 => 'assets_unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3756 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-unit.edit',
          ),
          1 => 
          array (
            0 => 'assets_unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3765 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-unit.update',
          ),
          1 => 
          array (
            0 => 'assets_unit',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-unit.destroy',
          ),
          1 => 
          array (
            0 => 'assets_unit',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3795 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-location.show',
          ),
          1 => 
          array (
            0 => 'assets_location',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3809 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-location.edit',
          ),
          1 => 
          array (
            0 => 'assets_location',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3818 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-location.update',
          ),
          1 => 
          array (
            0 => 'assets_location',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard.assets-location.destroy',
          ),
          1 => 
          array (
            0 => 'assets_location',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Odday2S3jEoTavb5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::Odday2S3jEoTavb5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aDtxscmA2fGzz3fL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000cc50000000000000000";}";s:4:"hash";s:44:"XFkbrFe9SCUittR/qFWm7qKbrT5AXitLen/mBYgvJd0=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::aDtxscmA2fGzz3fL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'website.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\Website\\HomeController@index',
        'as' => 'website.index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'website.pricing-plans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pricing-plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Website\\HomeController@plans',
        'controller' => 'App\\Http\\Controllers\\Website\\HomeController@plans',
        'as' => 'website.pricing-plans',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'website.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'as' => 'website.register',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'website.' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'as' => 'website.',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'website.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'as' => 'website.login',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'website.doLogin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'as' => 'website.doLogin',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'website.password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'as' => 'website.password.request',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'website.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'as' => 'website.password.email',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'website.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'as' => 'website.password.reset',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'website.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'as' => 'website.password.update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'website.verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'as' => 'website.verification.notice',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'website.verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'signed',
          3 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'as' => 'website.verification.verify',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'website.verification.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email/verification-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'as' => 'website.verification.send',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'website.password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'as' => 'website.password.confirm',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'website.generated::ve7rsCjSblKf8Ws0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'as' => 'website.generated::ve7rsCjSblKf8Ws0',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'website.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'as' => 'website.logout',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\HomeController@index',
        'as' => 'dashboard.index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.change-building' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/change-building',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@changeBuilding',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@changeBuilding',
        'as' => 'dashboard.change-building',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.search-flat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/search-flat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@searchFlat',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@searchFlat',
        'as' => 'dashboard.search-flat',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.provinces-by-country' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-provinces-of-country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CountryController@getProvincesOfCountry',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CountryController@getProvincesOfCountry',
        'as' => 'dashboard.get.provinces-by-country',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.districts-by-province' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-districts-of-province',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ProvinceController@getDistrictsOfProvince',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ProvinceController@getDistrictsOfProvince',
        'as' => 'dashboard.get.districts-by-province',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.tehsils-by-district' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-tehsils-of-district',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\DistrictController@getTehsilsOfDistrict',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\DistrictController@getTehsilsOfDistrict',
        'as' => 'dashboard.get.tehsils-by-district',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.colonies-by-tehsil' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-colonies-by-tehsil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\TehsilController@getColoniesOfTehsil',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\TehsilController@getColoniesOfTehsil',
        'as' => 'dashboard.get.colonies-by-tehsil',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.address-by-colony' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-address-by-colony',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ColonyController@getAddressOfColony',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ColonyController@getAddressOfColony',
        'as' => 'dashboard.get.address-by-colony',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.hr-details' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-hr-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@getHrDetails',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@getHrDetails',
        'as' => 'dashboard.get.hr-details',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.hr-details-for-employee' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-hr-details-for-employee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@getHrDetailsForEmployee',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@getHrDetailsForEmployee',
        'as' => 'dashboard.get.hr-details-for-employee',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.hr-picker' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/hr-picker',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@HrPickerTable',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@HrPickerTable',
        'as' => 'dashboard.hr-picker',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.floors-of-building' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-floors-of-building',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@getFloorsOfBuilding',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@getFloorsOfBuilding',
        'as' => 'dashboard.get.floors-of-building',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.flats-of-floor' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-flats-of-floor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@getFlatsOfFloor',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@getFlatsOfFloor',
        'as' => 'dashboard.get.flats-of-floor',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.floor-details' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-floor-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@getFloorDetails',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@getFloorDetails',
        'as' => 'dashboard.get.floor-details',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.flat-details' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-flat-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@getFlatDetails',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@getFlatDetails',
        'as' => 'dashboard.get.flat-details',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.flat-owners' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-flat-owners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@getFlatOwners',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@getFlatOwners',
        'as' => 'dashboard.get.flat-owners',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.sales-payment-sub-types' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-sales-payment-sub-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@getPaymentSubTypes',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@getPaymentSubTypes',
        'as' => 'dashboard.get.sales-payment-sub-types',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.commodity-sub-types' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-commodity-sub-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CommodityTypeController@getCommoditySubTypes',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CommodityTypeController@getCommoditySubTypes',
        'as' => 'dashboard.get.commodity-sub-types',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.dashboard.data.ajax' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/dashboard-data-ajax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\HomeController@dashboardDataAjax',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\HomeController@dashboardDataAjax',
        'as' => 'dashboard.dashboard.data.ajax',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.installment-plan-details' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-installment-plan-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@getInstallmentPlanDetails',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@getInstallmentPlanDetails',
        'as' => 'dashboard.get.installment-plan-details',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.sales-payment-view' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-sales-payment-view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@getPaymentTypeView',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@getPaymentTypeView',
        'as' => 'dashboard.get.sales-payment-view',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.sales-commodity-view' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-sales-commodity-view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@getCommodityTypeView',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@getCommodityTypeView',
        'as' => 'dashboard.get.sales-commodity-view',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.flat-revisions' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-flat-revisions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@getFlatRevisions',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@getFlatRevisions',
        'as' => 'dashboard.get.flat-revisions',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.flat-object' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-flat-object',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@getFlatObject',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@getFlatObject',
        'as' => 'dashboard.get.flat-object',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.nav-search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/nav-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@navSearch',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@navSearch',
        'as' => 'dashboard.nav-search',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.brokers-list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/brokers-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\ListController@brokerList',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\ListController@brokerList',
        'as' => 'dashboard.brokers-list',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sellers-list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sellers-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\ListController@sellerList',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\ListController@sellerList',
        'as' => 'dashboard.sellers-list',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.buyers-list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/buyers-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\ListController@buyerList',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\ListController@buyerList',
        'as' => 'dashboard.buyers-list',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floor-name.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/floor-name',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floor-name.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorNameController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorNameController@index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floor-name.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/floor-name/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floor-name.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorNameController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorNameController@create',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floor-name.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/floor-name',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floor-name.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorNameController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorNameController@store',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floor-name.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/floor-name/{floor_name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floor-name.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorNameController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorNameController@show',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floor-name.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/floor-name/{floor_name}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floor-name.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorNameController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorNameController@edit',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floor-name.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/floor-name/{floor_name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floor-name.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorNameController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorNameController@update',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floor-name.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/floor-name/{floor_name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floor-name.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorNameController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorNameController@destroy',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floor-type.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/floor-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floor-type.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorTypeController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorTypeController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floor-type.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/floor-type/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floor-type.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorTypeController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorTypeController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floor-type.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/floor-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floor-type.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorTypeController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorTypeController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floor-type.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/floor-type/{floor_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floor-type.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorTypeController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorTypeController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floor-type.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/floor-type/{floor_type}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floor-type.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorTypeController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floor-type.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/floor-type/{floor_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floor-type.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorTypeController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorTypeController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floor-type.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/floor-type/{floor_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floor-type.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FloorTypeController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.flat-type.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/flat-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.flat-type.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FlatTypeController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FlatTypeController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.flat-type.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/flat-type/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.flat-type.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FlatTypeController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FlatTypeController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.flat-type.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/flat-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.flat-type.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FlatTypeController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FlatTypeController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.flat-type.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/flat-type/{flat_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.flat-type.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FlatTypeController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FlatTypeController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.flat-type.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/flat-type/{flat_type}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.flat-type.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FlatTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FlatTypeController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.flat-type.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/flat-type/{flat_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.flat-type.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FlatTypeController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FlatTypeController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.flat-type.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/flat-type/{flat_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.flat-type.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FlatTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\FlatTypeController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.service.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.service.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ServiceController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ServiceController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.service.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/service/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.service.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ServiceController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ServiceController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.service.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.service.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ServiceController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ServiceController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.service.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/service/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.service.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ServiceController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ServiceController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.service.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/service/{service}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.service.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ServiceController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ServiceController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.service.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/service/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.service.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ServiceController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ServiceController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.service.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/service/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.service.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ServiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ServiceController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.relation.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.relation.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\RelationController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\RelationController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.relation.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/relation/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.relation.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\RelationController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\RelationController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.relation.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/relation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.relation.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\RelationController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\RelationController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.relation.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/relation/{relation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.relation.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\RelationController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\RelationController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.relation.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/relation/{relation}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.relation.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\RelationController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\RelationController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.relation.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/relation/{relation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.relation.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\RelationController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\RelationController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.relation.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/relation/{relation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.relation.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\RelationController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\RelationController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cast.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-cast',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.cast.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrCastController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrCastController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cast.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-cast/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.cast.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrCastController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrCastController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cast.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/hr-cast',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.cast.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrCastController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrCastController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cast.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-cast/{hr_cast}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.cast.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrCastController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrCastController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cast.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-cast/{hr_cast}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.cast.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrCastController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrCastController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cast.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/hr-cast/{hr_cast}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.cast.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrCastController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrCastController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cast.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/hr-cast/{hr_cast}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.cast.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrCastController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrCastController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.nationality.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-nationality',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.nationality.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrNationalityController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrNationalityController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.nationality.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-nationality/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.nationality.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrNationalityController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrNationalityController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.nationality.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/hr-nationality',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.nationality.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrNationalityController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrNationalityController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.nationality.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-nationality/{hr_nationality}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.nationality.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrNationalityController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrNationalityController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.nationality.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-nationality/{hr_nationality}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.nationality.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrNationalityController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrNationalityController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.nationality.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/hr-nationality/{hr_nationality}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.nationality.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrNationalityController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrNationalityController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.nationality.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/hr-nationality/{hr_nationality}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.nationality.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrNationalityController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrNationalityController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.country.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.country.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CountryController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CountryController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.country.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/country/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.country.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CountryController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CountryController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.country.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/country',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.country.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CountryController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CountryController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.country.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/country/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.country.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CountryController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CountryController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.country.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/country/{country}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.country.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CountryController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CountryController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.country.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/country/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.country.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CountryController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CountryController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.country.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/country/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.country.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CountryController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CountryController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.province.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/province',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.province.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ProvinceController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ProvinceController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.province.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/province/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.province.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ProvinceController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ProvinceController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.province.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/province',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.province.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ProvinceController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ProvinceController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.province.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/province/{province}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.province.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ProvinceController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ProvinceController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.province.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/province/{province}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.province.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ProvinceController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ProvinceController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.province.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/province/{province}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.province.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ProvinceController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ProvinceController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.province.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/province/{province}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.province.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ProvinceController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ProvinceController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.district.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/district',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.district.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\DistrictController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\DistrictController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.district.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/district/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.district.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\DistrictController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\DistrictController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.district.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/district',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.district.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\DistrictController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\DistrictController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.district.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/district/{district}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.district.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\DistrictController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\DistrictController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.district.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/district/{district}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.district.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\DistrictController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\DistrictController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.district.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/district/{district}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.district.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\DistrictController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\DistrictController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.district.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/district/{district}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.district.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\DistrictController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\DistrictController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tehsil.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/tehsil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tehsil.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\TehsilController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\TehsilController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tehsil.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/tehsil/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tehsil.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\TehsilController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\TehsilController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tehsil.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/tehsil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tehsil.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\TehsilController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\TehsilController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tehsil.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/tehsil/{tehsil}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tehsil.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\TehsilController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\TehsilController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tehsil.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/tehsil/{tehsil}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tehsil.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\TehsilController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\TehsilController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tehsil.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/tehsil/{tehsil}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tehsil.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\TehsilController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\TehsilController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tehsil.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/tehsil/{tehsil}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tehsil.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\TehsilController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\TehsilController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.colony.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/colony',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.colony.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ColonyController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ColonyController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.colony.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/colony/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.colony.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ColonyController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ColonyController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.colony.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/colony',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.colony.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ColonyController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ColonyController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.colony.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/colony/{colony}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.colony.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ColonyController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ColonyController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.colony.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/colony/{colony}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.colony.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ColonyController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ColonyController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.colony.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/colony/{colony}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.colony.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ColonyController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ColonyController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.colony.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/colony/{colony}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.colony.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ColonyController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\ColonyController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.department.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.department.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDepartmentController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDepartmentController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.department.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-department/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.department.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDepartmentController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDepartmentController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.department.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/hr-department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.department.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDepartmentController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDepartmentController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.department.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-department/{hr_department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.department.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDepartmentController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDepartmentController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.department.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-department/{hr_department}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.department.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDepartmentController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDepartmentController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.department.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/hr-department/{hr_department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.department.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDepartmentController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDepartmentController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.department.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/hr-department/{hr_department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.department.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDepartmentController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDepartmentController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.designation.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-designation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.designation.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDesignationController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDesignationController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.designation.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-designation/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.designation.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDesignationController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDesignationController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.designation.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/hr-designation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.designation.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDesignationController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDesignationController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.designation.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-designation/{hr_designation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.designation.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDesignationController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDesignationController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.designation.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-designation/{hr_designation}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.designation.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDesignationController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDesignationController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.designation.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/hr-designation/{hr_designation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.designation.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDesignationController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDesignationController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.designation.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/hr-designation/{hr_designation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.designation.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDesignationController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrDesignationController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.ministry.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-ministry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.ministry.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrMinistryController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrMinistryController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.ministry.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-ministry/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.ministry.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrMinistryController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrMinistryController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.ministry.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/hr-ministry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.ministry.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrMinistryController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrMinistryController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.ministry.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-ministry/{hr_ministry}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.ministry.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrMinistryController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrMinistryController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.ministry.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-ministry/{hr_ministry}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.ministry.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrMinistryController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrMinistryController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.ministry.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/hr-ministry/{hr_ministry}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.ministry.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrMinistryController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrMinistryController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.ministry.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/hr-ministry/{hr_ministry}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.ministry.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrMinistryController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrMinistryController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employee-type.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-employment-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employee-type.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrEmployeeTypeController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrEmployeeTypeController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employee-type.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-employment-type/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employee-type.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrEmployeeTypeController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrEmployeeTypeController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employee-type.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/hr-employment-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employee-type.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrEmployeeTypeController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrEmployeeTypeController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employee-type.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-employment-type/{hr_employment_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employee-type.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrEmployeeTypeController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrEmployeeTypeController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employee-type.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-employment-type/{hr_employment_type}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employee-type.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrEmployeeTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrEmployeeTypeController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employee-type.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/hr-employment-type/{hr_employment_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employee-type.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrEmployeeTypeController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrEmployeeTypeController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employee-type.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/hr-employment-type/{hr_employment_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employee-type.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrEmployeeTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrEmployeeTypeController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.profession.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-profession',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.profession.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrProfessionController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrProfessionController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.profession.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-profession/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.profession.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrProfessionController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrProfessionController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.profession.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/hr-profession',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.profession.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrProfessionController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrProfessionController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.profession.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-profession/{hr_profession}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.profession.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrProfessionController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrProfessionController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.profession.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-profession/{hr_profession}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.profession.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrProfessionController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrProfessionController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.profession.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/hr-profession/{hr_profession}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.profession.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrProfessionController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrProfessionController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.profession.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/hr-profession/{hr_profession}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.profession.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrProfessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrProfessionController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.organization.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-organization',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.organization.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrOrganizationController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrOrganizationController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.organization.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-organization/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.organization.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrOrganizationController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrOrganizationController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.organization.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/hr-organization',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.organization.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrOrganizationController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrOrganizationController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.organization.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-organization/{hr_organization}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.organization.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrOrganizationController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrOrganizationController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.organization.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-organization/{hr_organization}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.organization.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrOrganizationController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrOrganizationController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.organization.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/hr-organization/{hr_organization}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.organization.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrOrganizationController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrOrganizationController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.organization.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/hr-organization/{hr_organization}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.organization.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrOrganizationController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrOrganizationController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tax-type.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-tax-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tax-type.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxTypeController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxTypeController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tax-type.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-tax-type/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tax-type.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxTypeController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxTypeController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tax-type.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/hr-tax-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tax-type.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxTypeController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxTypeController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tax-type.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-tax-type/{hr_tax_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tax-type.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxTypeController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxTypeController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tax-type.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-tax-type/{hr_tax_type}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tax-type.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxTypeController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tax-type.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/hr-tax-type/{hr_tax_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tax-type.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxTypeController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxTypeController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tax-type.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/hr-tax-type/{hr_tax_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tax-type.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxTypeController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tax-status.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-tax-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tax-status.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxStatusController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxStatusController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tax-status.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-tax-status/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tax-status.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxStatusController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxStatusController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tax-status.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/hr-tax-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tax-status.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxStatusController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxStatusController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tax-status.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-tax-status/{hr_tax_status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tax-status.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxStatusController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxStatusController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tax-status.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-tax-status/{hr_tax_status}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tax-status.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxStatusController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxStatusController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tax-status.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/hr-tax-status/{hr_tax_status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tax-status.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxStatusController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxStatusController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.tax-status.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/hr-tax-status/{hr_tax_status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.tax-status.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxStatusController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrTaxStatusController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.hr-business.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.hr-business.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrBusinessController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrBusinessController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.hr-business.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-business/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.hr-business.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrBusinessController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrBusinessController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.hr-business.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/hr-business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.hr-business.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrBusinessController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrBusinessController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.hr-business.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-business/{hr_business}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.hr-business.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrBusinessController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrBusinessController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.hr-business.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/hr-business/{hr_business}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.hr-business.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrBusinessController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrBusinessController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.hr-business.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/hr-business/{hr_business}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.hr-business.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrBusinessController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrBusinessController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.hr-business.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/hr-business/{hr_business}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.hr-business.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrBusinessController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\HrBusinessController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.commodity-type.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/commodity-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.commodity-type.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CommodityTypeController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CommodityTypeController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.commodity-type.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/commodity-type/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.commodity-type.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CommodityTypeController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CommodityTypeController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.commodity-type.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/commodity-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.commodity-type.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CommodityTypeController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CommodityTypeController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.commodity-type.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/commodity-type/{commodity_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.commodity-type.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CommodityTypeController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CommodityTypeController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.commodity-type.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/commodity-type/{commodity_type}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.commodity-type.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CommodityTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CommodityTypeController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.commodity-type.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/commodity-type/{commodity_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.commodity-type.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CommodityTypeController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CommodityTypeController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.commodity-type.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/commodity-type/{commodity_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.commodity-type.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CommodityTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Definition\\CommodityTypeController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-types.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-types.index',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceTypeController@index',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceTypeController@index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-types.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-types/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-types.create',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceTypeController@create',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceTypeController@create',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-types.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/device-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-types.store',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceTypeController@store',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceTypeController@store',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-types.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-types/{device_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-types.show',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceTypeController@show',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceTypeController@show',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-types.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-types/{device_type}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-types.edit',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceTypeController@edit',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-types.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/device-types/{device_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-types.update',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceTypeController@update',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceTypeController@update',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-types.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/device-types/{device_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-types.destroy',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceTypeController@destroy',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-makes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-makes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-makes.index',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceMakeController@index',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceMakeController@index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-makes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-makes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-makes.create',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceMakeController@create',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceMakeController@create',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-makes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/device-makes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-makes.store',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceMakeController@store',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceMakeController@store',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-makes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-makes/{device_make}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-makes.show',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceMakeController@show',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceMakeController@show',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-makes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-makes/{device_make}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-makes.edit',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceMakeController@edit',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceMakeController@edit',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-makes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/device-makes/{device_make}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-makes.update',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceMakeController@update',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceMakeController@update',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-makes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/device-makes/{device_make}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-makes.destroy',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceMakeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceMakeController@destroy',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-models.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-models',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-models.index',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceModelController@index',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceModelController@index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-models.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-models/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-models.create',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceModelController@create',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceModelController@create',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-models.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/device-models',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-models.store',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceModelController@store',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceModelController@store',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-models.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-models/{device_model}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-models.show',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceModelController@show',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceModelController@show',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-models.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-models/{device_model}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-models.edit',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceModelController@edit',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceModelController@edit',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-models.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/device-models/{device_model}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-models.update',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceModelController@update',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceModelController@update',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-models.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/device-models/{device_model}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-models.destroy',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceModelController@destroy',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceModelController@destroy',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-classes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-classes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-classes.index',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceClassController@index',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceClassController@index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-classes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-classes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-classes.create',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceClassController@create',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceClassController@create',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-classes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/device-classes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-classes.store',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceClassController@store',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceClassController@store',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-classes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-classes/{device_class}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-classes.show',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceClassController@show',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceClassController@show',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-classes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-classes/{device_class}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-classes.edit',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceClassController@edit',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceClassController@edit',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-classes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/device-classes/{device_class}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-classes.update',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceClassController@update',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceClassController@update',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-classes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/device-classes/{device_class}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-classes.destroy',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceClassController@destroy',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceClassController@destroy',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-locations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-locations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-locations.index',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceLocationController@index',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceLocationController@index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-locations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-locations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-locations.create',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceLocationController@create',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceLocationController@create',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-locations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/device-locations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-locations.store',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceLocationController@store',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceLocationController@store',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-locations.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-locations/{device_location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-locations.show',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceLocationController@show',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceLocationController@show',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-locations.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-locations/{device_location}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-locations.edit',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceLocationController@edit',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceLocationController@edit',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-locations.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/device-locations/{device_location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-locations.update',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceLocationController@update',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceLocationController@update',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-locations.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/device-locations/{device_location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-locations.destroy',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceLocationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceLocationController@destroy',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-operating-systems.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-operating-systems',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-operating-systems.index',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceOperatingSystemController@index',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceOperatingSystemController@index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-operating-systems.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-operating-systems/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-operating-systems.create',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceOperatingSystemController@create',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceOperatingSystemController@create',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-operating-systems.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/device-operating-systems',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-operating-systems.store',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceOperatingSystemController@store',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceOperatingSystemController@store',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-operating-systems.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-operating-systems/{device_operating_system}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-operating-systems.show',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceOperatingSystemController@show',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceOperatingSystemController@show',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-operating-systems.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/device-operating-systems/{device_operating_system}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-operating-systems.edit',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceOperatingSystemController@edit',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceOperatingSystemController@edit',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-operating-systems.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/device-operating-systems/{device_operating_system}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-operating-systems.update',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceOperatingSystemController@update',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceOperatingSystemController@update',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.device-operating-systems.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/device-operating-systems/{device_operating_system}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.device-operating-systems.destroy',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceOperatingSystemController@destroy',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceOperatingSystemController@destroy',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.create.account-head' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/create-account-head',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@createAccountHead',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@createAccountHead',
        'as' => 'dashboard.create.account-head',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.save.account-head' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/save-account-head',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@saveAccountHead',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@saveAccountHead',
        'as' => 'dashboard.save.account-head',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.expense.heads.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/expense-heads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.expense.heads.index',
        'uses' => 'App\\Http\\Controllers\\Accounts\\ExpenseHeadController@index',
        'controller' => 'App\\Http\\Controllers\\Accounts\\ExpenseHeadController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.expense.heads.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/expense-heads/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.expense.heads.create',
        'uses' => 'App\\Http\\Controllers\\Accounts\\ExpenseHeadController@create',
        'controller' => 'App\\Http\\Controllers\\Accounts\\ExpenseHeadController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.expense.heads.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/expense-heads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.expense.heads.store',
        'uses' => 'App\\Http\\Controllers\\Accounts\\ExpenseHeadController@store',
        'controller' => 'App\\Http\\Controllers\\Accounts\\ExpenseHeadController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.expense.heads.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/expense-heads/{expense_head}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.expense.heads.show',
        'uses' => 'App\\Http\\Controllers\\Accounts\\ExpenseHeadController@show',
        'controller' => 'App\\Http\\Controllers\\Accounts\\ExpenseHeadController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.expense.heads.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/expense-heads/{expense_head}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.expense.heads.edit',
        'uses' => 'App\\Http\\Controllers\\Accounts\\ExpenseHeadController@edit',
        'controller' => 'App\\Http\\Controllers\\Accounts\\ExpenseHeadController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.expense.heads.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/expense-heads/{expense_head}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.expense.heads.update',
        'uses' => 'App\\Http\\Controllers\\Accounts\\ExpenseHeadController@update',
        'controller' => 'App\\Http\\Controllers\\Accounts\\ExpenseHeadController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.expense.heads.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/expense-heads/{expense_head}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.expense.heads.destroy',
        'uses' => 'App\\Http\\Controllers\\Accounts\\ExpenseHeadController@destroy',
        'controller' => 'App\\Http\\Controllers\\Accounts\\ExpenseHeadController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.expenses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.expenses.index',
        'uses' => 'App\\Http\\Controllers\\Accounts\\ExpenseController@index',
        'controller' => 'App\\Http\\Controllers\\Accounts\\ExpenseController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.expenses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/expenses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.expenses.create',
        'uses' => 'App\\Http\\Controllers\\Accounts\\ExpenseController@create',
        'controller' => 'App\\Http\\Controllers\\Accounts\\ExpenseController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.expenses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.expenses.store',
        'uses' => 'App\\Http\\Controllers\\Accounts\\ExpenseController@store',
        'controller' => 'App\\Http\\Controllers\\Accounts\\ExpenseController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.expenses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.expenses.show',
        'uses' => 'App\\Http\\Controllers\\Accounts\\ExpenseController@show',
        'controller' => 'App\\Http\\Controllers\\Accounts\\ExpenseController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.expenses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/expenses/{expense}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.expenses.edit',
        'uses' => 'App\\Http\\Controllers\\Accounts\\ExpenseController@edit',
        'controller' => 'App\\Http\\Controllers\\Accounts\\ExpenseController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.expenses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.expenses.update',
        'uses' => 'App\\Http\\Controllers\\Accounts\\ExpenseController@update',
        'controller' => 'App\\Http\\Controllers\\Accounts\\ExpenseController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.expenses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.expenses.destroy',
        'uses' => 'App\\Http\\Controllers\\Accounts\\ExpenseController@destroy',
        'controller' => 'App\\Http\\Controllers\\Accounts\\ExpenseController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.mark-expense-paid' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/mark-expense-paid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Accounts\\ExpenseController@markAsPaid',
        'controller' => 'App\\Http\\Controllers\\Accounts\\ExpenseController@markAsPaid',
        'as' => 'dashboard.mark-expense-paid',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employee-loan.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employee-loan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employee-loan.index',
        'uses' => 'App\\Http\\Controllers\\Accounts\\EmployeeLoanController@index',
        'controller' => 'App\\Http\\Controllers\\Accounts\\EmployeeLoanController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employee-loan.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employee-loan/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employee-loan.create',
        'uses' => 'App\\Http\\Controllers\\Accounts\\EmployeeLoanController@create',
        'controller' => 'App\\Http\\Controllers\\Accounts\\EmployeeLoanController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employee-loan.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/employee-loan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employee-loan.store',
        'uses' => 'App\\Http\\Controllers\\Accounts\\EmployeeLoanController@store',
        'controller' => 'App\\Http\\Controllers\\Accounts\\EmployeeLoanController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employee-loan.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employee-loan/{employee_loan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employee-loan.show',
        'uses' => 'App\\Http\\Controllers\\Accounts\\EmployeeLoanController@show',
        'controller' => 'App\\Http\\Controllers\\Accounts\\EmployeeLoanController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employee-loan.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employee-loan/{employee_loan}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employee-loan.edit',
        'uses' => 'App\\Http\\Controllers\\Accounts\\EmployeeLoanController@edit',
        'controller' => 'App\\Http\\Controllers\\Accounts\\EmployeeLoanController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employee-loan.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/employee-loan/{employee_loan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employee-loan.update',
        'uses' => 'App\\Http\\Controllers\\Accounts\\EmployeeLoanController@update',
        'controller' => 'App\\Http\\Controllers\\Accounts\\EmployeeLoanController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employee-loan.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/employee-loan/{employee_loan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employee-loan.destroy',
        'uses' => 'App\\Http\\Controllers\\Accounts\\EmployeeLoanController@destroy',
        'controller' => 'App\\Http\\Controllers\\Accounts\\EmployeeLoanController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employee-loan-details' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/employee-loan-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Accounts\\EmployeeLoanController@employeeLoanDetails',
        'controller' => 'App\\Http\\Controllers\\Accounts\\EmployeeLoanController@employeeLoanDetails',
        'as' => 'dashboard.employee-loan-details',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.seller-ledger' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/seller-ledger',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\LedgerController@sellerLedger',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\LedgerController@sellerLedger',
        'as' => 'dashboard.seller-ledger',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.buyer-ledger' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/buyer-ledger',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\LedgerController@buyerLedger',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\LedgerController@buyerLedger',
        'as' => 'dashboard.buyer-ledger',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.broker-ledger' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/broker-ledger',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\LedgerController@brokerLedger',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\LedgerController@brokerLedger',
        'as' => 'dashboard.broker-ledger',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.general-ledger' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/general-ledger',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\LedgerController@generalLedger',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\LedgerController@generalLedger',
        'as' => 'dashboard.general-ledger',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.general-ledger-sub-heads' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/general-ledger-sub-heads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\LedgerController@getTransactionHeadsOfGeneralHead',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\LedgerController@getTransactionHeadsOfGeneralHead',
        'as' => 'dashboard.get.general-ledger-sub-heads',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.voucher.buyer-receiving' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/buyer-receiving-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@buyerCashReceiving',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@buyerCashReceiving',
        'as' => 'dashboard.voucher.buyer-receiving',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.voucher.save-buyer-receiving' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/save-buyer-receiving-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@saveBuyerCashReceiving',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@saveBuyerCashReceiving',
        'as' => 'dashboard.voucher.save-buyer-receiving',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.sales-invoice-by-flat' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/sales-invoice-by-flat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@salesInvoicesByFlat',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@salesInvoicesByFlat',
        'as' => 'dashboard.get.sales-invoice-by-flat',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.sales-details' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-sales-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@salesDetails',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@salesDetails',
        'as' => 'dashboard.get.sales-details',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.voucher.buyer-installment-receiving' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/buyer-installment-receiving-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@buyerInstallmentReceiving',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@buyerInstallmentReceiving',
        'as' => 'dashboard.voucher.buyer-installment-receiving',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.voucher.save-buyer-installment-receiving' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/save-buyer-installment-receiving-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@saveBuyerInstallmentReceiving',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@saveBuyerInstallmentReceiving',
        'as' => 'dashboard.voucher.save-buyer-installment-receiving',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.print-buyer-installment-receiving' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/print-buyer-installment-receiving-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@printBuyerInstallmentReceiving',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@printBuyerInstallmentReceiving',
        'as' => 'dashboard.print-buyer-installment-receiving',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.installment-details' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-installment-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@getInstallmentDetails',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@getInstallmentDetails',
        'as' => 'dashboard.get.installment-details',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.voucher.seller-payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/seller-payment-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@sellerPayment',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@sellerPayment',
        'as' => 'dashboard.voucher.seller-payment',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.voucher.save-seller-payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/save-seller-payment-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@saveSellerPayment',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@saveSellerPayment',
        'as' => 'dashboard.voucher.save-seller-payment',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.voucher.broker-payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/broker-payment-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@brokerPayment',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@brokerPayment',
        'as' => 'dashboard.voucher.broker-payment',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.voucher.save-broker-payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/save-broker-payment-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@saveBrokerPayment',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@saveBrokerPayment',
        'as' => 'dashboard.voucher.save-broker-payment',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.print-broker-payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/print-broker-payment-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@printBrokerPayment',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@printBrokerPayment',
        'as' => 'dashboard.print-broker-payment',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.broker-details' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-broker-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@brokerDetails',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@brokerDetails',
        'as' => 'dashboard.get.broker-details',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.voucher.debit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/debit-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@debitVoucher',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@debitVoucher',
        'as' => 'dashboard.voucher.debit',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.voucher.save-debit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/save-debit-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@saveDebitVoucher',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@saveDebitVoucher',
        'as' => 'dashboard.voucher.save-debit',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.voucher.credit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/credit-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@creditVoucher',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@creditVoucher',
        'as' => 'dashboard.voucher.credit',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.voucher.save-credit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/save-credit-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@saveCreditVoucher',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@saveCreditVoucher',
        'as' => 'dashboard.voucher.save-credit',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.voucher.opening-balance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/opening-balance-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@openingBalanceVoucher',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@openingBalanceVoucher',
        'as' => 'dashboard.voucher.opening-balance',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.voucher.save-opening-balance' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/save-opening-balance-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@saveOpeningBalanceVoucher',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\VoucherController@saveOpeningBalanceVoucher',
        'as' => 'dashboard.voucher.save-opening-balance',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.cashbook' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/cashbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\ReportController@cashBook',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\ReportController@cashBook',
        'as' => 'dashboard.cashbook',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.profit-loss' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/profit-loss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\ReportController@profitLoss',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\ReportController@profitLoss',
        'as' => 'dashboard.profit-loss',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.balance-sheet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/balance-sheet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\ReportController@balanceSheet',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\ReportController@balanceSheet',
        'as' => 'dashboard.balance-sheet',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.broker-report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/broker-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\ReportController@brokerReport',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\ReportController@brokerReport',
        'as' => 'dashboard.broker-report',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.pending-collections' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/pending-collections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\ReportController@pendingCollections',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\ReportController@pendingCollections',
        'as' => 'dashboard.pending-collections',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.flat-shop-wise-profit-loss' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/flat-shop-wise-profit-loss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\ReportController@flatWiseProfitLossReport',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\ReportController@flatWiseProfitLossReport',
        'as' => 'dashboard.flat-shop-wise-profit-loss',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.broker-wise-sales-report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/broker-wise-sales-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\ReportController@brokerWiseSalesReport',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Accounts\\ReportController@brokerWiseSalesReport',
        'as' => 'dashboard.broker-wise-sales-report',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.employee-salary' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-employee-salary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@getEmployeeSalary',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@getEmployeeSalary',
        'as' => 'dashboard.get.employee-salary',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.get.department-employees' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/get-department-employees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@getDepartmentEmployees',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@getDepartmentEmployees',
        'as' => 'dashboard.get.department-employees',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.salary.pay-now' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/salary-pay-now',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Accounts\\SalaryController@salaryPayNow',
        'controller' => 'App\\Http\\Controllers\\Accounts\\SalaryController@salaryPayNow',
        'as' => 'dashboard.salary.pay-now',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.salary.advance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/salary/advance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Accounts\\SalaryController@advanceSalary',
        'controller' => 'App\\Http\\Controllers\\Accounts\\SalaryController@advanceSalary',
        'as' => 'dashboard.salary.advance',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.salary.save-advance' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/salary/save-advance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Accounts\\SalaryController@saveAdvanceSalary',
        'controller' => 'App\\Http\\Controllers\\Accounts\\SalaryController@saveAdvanceSalary',
        'as' => 'dashboard.salary.save-advance',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.salary.calculate-advance' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/salary/calculate-advance-salary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Accounts\\SalaryController@calculateAdvanceSalary',
        'controller' => 'App\\Http\\Controllers\\Accounts\\SalaryController@calculateAdvanceSalary',
        'as' => 'dashboard.salary.calculate-advance',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.salary.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/salary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.salary.index',
        'uses' => 'App\\Http\\Controllers\\Accounts\\SalaryController@index',
        'controller' => 'App\\Http\\Controllers\\Accounts\\SalaryController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.salary.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/salary/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.salary.create',
        'uses' => 'App\\Http\\Controllers\\Accounts\\SalaryController@create',
        'controller' => 'App\\Http\\Controllers\\Accounts\\SalaryController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.salary.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/salary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.salary.store',
        'uses' => 'App\\Http\\Controllers\\Accounts\\SalaryController@store',
        'controller' => 'App\\Http\\Controllers\\Accounts\\SalaryController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.salary.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/salary/{salary}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.salary.show',
        'uses' => 'App\\Http\\Controllers\\Accounts\\SalaryController@show',
        'controller' => 'App\\Http\\Controllers\\Accounts\\SalaryController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.salary.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/salary/{salary}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.salary.edit',
        'uses' => 'App\\Http\\Controllers\\Accounts\\SalaryController@edit',
        'controller' => 'App\\Http\\Controllers\\Accounts\\SalaryController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.salary.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/salary/{salary}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.salary.update',
        'uses' => 'App\\Http\\Controllers\\Accounts\\SalaryController@update',
        'controller' => 'App\\Http\\Controllers\\Accounts\\SalaryController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.salary.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/salary/{salary}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.salary.destroy',
        'uses' => 'App\\Http\\Controllers\\Accounts\\SalaryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Accounts\\SalaryController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.devices.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/devices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.devices.index',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceController@index',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.devices.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/devices/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.devices.create',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceController@create',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.devices.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/devices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.devices.store',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceController@store',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.devices.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/devices/{device}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.devices.show',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceController@show',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.devices.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/devices/{device}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.devices.edit',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceController@edit',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.devices.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/devices/{device}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.devices.update',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceController@update',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.devices.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/devices/{device}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.devices.destroy',
        'uses' => 'App\\Http\\Controllers\\Devices\\DeviceController@destroy',
        'controller' => 'App\\Http\\Controllers\\Devices\\DeviceController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.users.index',
        'uses' => 'App\\Http\\Controllers\\Authorization\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Authorization\\UserController@index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.users.create',
        'uses' => 'App\\Http\\Controllers\\Authorization\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\Authorization\\UserController@create',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.users.store',
        'uses' => 'App\\Http\\Controllers\\Authorization\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\Authorization\\UserController@store',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.users.show',
        'uses' => 'App\\Http\\Controllers\\Authorization\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Authorization\\UserController@show',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.users.edit',
        'uses' => 'App\\Http\\Controllers\\Authorization\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\Authorization\\UserController@edit',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.users.update',
        'uses' => 'App\\Http\\Controllers\\Authorization\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Authorization\\UserController@update',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.users.destroy',
        'uses' => 'App\\Http\\Controllers\\Authorization\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Authorization\\UserController@destroy',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.roles.index',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RoleController@index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.roles.create',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RoleController@create',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.roles.store',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RoleController@store',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.roles.show',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RoleController@show',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RoleController@show',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.roles.edit',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RoleController@edit',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.roles.update',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RoleController@update',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.roles.destroy',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RoleController@destroy',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.permissions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.permissions.index',
        'uses' => 'App\\Http\\Controllers\\Authorization\\PermissionController@index',
        'controller' => 'App\\Http\\Controllers\\Authorization\\PermissionController@index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.permissions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/permissions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.permissions.create',
        'uses' => 'App\\Http\\Controllers\\Authorization\\PermissionController@create',
        'controller' => 'App\\Http\\Controllers\\Authorization\\PermissionController@create',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.permissions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.permissions.store',
        'uses' => 'App\\Http\\Controllers\\Authorization\\PermissionController@store',
        'controller' => 'App\\Http\\Controllers\\Authorization\\PermissionController@store',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.permissions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/permissions/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.permissions.show',
        'uses' => 'App\\Http\\Controllers\\Authorization\\PermissionController@show',
        'controller' => 'App\\Http\\Controllers\\Authorization\\PermissionController@show',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.permissions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/permissions/{permission}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.permissions.edit',
        'uses' => 'App\\Http\\Controllers\\Authorization\\PermissionController@edit',
        'controller' => 'App\\Http\\Controllers\\Authorization\\PermissionController@edit',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.permissions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/permissions/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.permissions.update',
        'uses' => 'App\\Http\\Controllers\\Authorization\\PermissionController@update',
        'controller' => 'App\\Http\\Controllers\\Authorization\\PermissionController@update',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.permissions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/permissions/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.permissions.destroy',
        'uses' => 'App\\Http\\Controllers\\Authorization\\PermissionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Authorization\\PermissionController@destroy',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.role-users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/role-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.role-users.index',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RoleUserController@index',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RoleUserController@index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.role-users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/role-users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.role-users.create',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RoleUserController@create',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RoleUserController@create',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.role-users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/role-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.role-users.store',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RoleUserController@store',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RoleUserController@store',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.role-users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/role-users/{role_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.role-users.show',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RoleUserController@show',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RoleUserController@show',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.role-users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/role-users/{role_user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.role-users.edit',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RoleUserController@edit',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RoleUserController@edit',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.role-users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/role-users/{role_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.role-users.update',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RoleUserController@update',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RoleUserController@update',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.role-users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/role-users/{role_user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.role-users.destroy',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RoleUserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RoleUserController@destroy',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.role-permissions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/role-permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.role-permissions.index',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RolePermissionController@index',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RolePermissionController@index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.role-permissions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/role-permissions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.role-permissions.create',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RolePermissionController@create',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RolePermissionController@create',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.role-permissions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/role-permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.role-permissions.store',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RolePermissionController@store',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RolePermissionController@store',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.role-permissions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/role-permissions/{role_permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.role-permissions.show',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RolePermissionController@show',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RolePermissionController@show',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.role-permissions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/role-permissions/{role_permission}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.role-permissions.edit',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RolePermissionController@edit',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RolePermissionController@edit',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.role-permissions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/role-permissions/{role_permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.role-permissions.update',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RolePermissionController@update',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RolePermissionController@update',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.role-permissions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/role-permissions/{role_permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.role-permissions.destroy',
        'uses' => 'App\\Http\\Controllers\\Authorization\\RolePermissionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Authorization\\RolePermissionController@destroy',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sync-permissions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sync-permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Authorization\\PermissionController@syncPermission',
        'controller' => 'App\\Http\\Controllers\\Authorization\\PermissionController@syncPermission',
        'as' => 'dashboard.sync-permissions.index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.human-resource.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/human-resource',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.human-resource.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.human-resource.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/human-resource/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.human-resource.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.human-resource.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/human-resource',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.human-resource.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.human-resource.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/human-resource/{human_resource}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.human-resource.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.human-resource.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/human-resource/{human_resource}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.human-resource.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.human-resource.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/human-resource/{human_resource}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.human-resource.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.human-resource.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/human-resource/{human_resource}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.human-resource.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.nominee.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/nominee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.nominee.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\NomineeController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\NomineeController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.nominee.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/nominee/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.nominee.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\NomineeController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\NomineeController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.nominee.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/nominee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.nominee.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\NomineeController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\NomineeController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.nominee.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/nominee/{nominee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.nominee.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\NomineeController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\NomineeController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.nominee.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/nominee/{nominee}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.nominee.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\NomineeController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\NomineeController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.nominee.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/nominee/{nominee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.nominee.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\NomineeController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\NomineeController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.nominee.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/nominee/{nominee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.nominee.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\NomineeController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\NomineeController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.poa.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/poa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.poa.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\PowerOfAttorneyController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\PowerOfAttorneyController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.poa.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/poa/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.poa.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\PowerOfAttorneyController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\PowerOfAttorneyController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.poa.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/poa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.poa.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\PowerOfAttorneyController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\PowerOfAttorneyController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.poa.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/poa/{poa}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.poa.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\PowerOfAttorneyController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\PowerOfAttorneyController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.poa.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/poa/{poa}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.poa.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\PowerOfAttorneyController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\PowerOfAttorneyController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.poa.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/poa/{poa}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.poa.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\PowerOfAttorneyController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\PowerOfAttorneyController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.poa.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/poa/{poa}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.poa.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\PowerOfAttorneyController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\PowerOfAttorneyController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employees.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employees.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employees.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employees/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employees.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employees.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/employees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employees.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employees.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employees/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employees.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employees.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/employees/{employee}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employees.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employees.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/employees/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employees.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.employees.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/employees/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.employees.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\EmployeeController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.add.hr-ajax' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/add-hr-ajax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@addHrAjax',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\HumanResource\\HumanResourceController@addHrAjax',
        'as' => 'dashboard.add.hr-ajax',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.buildings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/buildings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.buildings.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.buildings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/buildings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.buildings.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.buildings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/buildings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.buildings.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.buildings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/buildings/{building}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.buildings.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.buildings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/buildings/{building}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.buildings.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.buildings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/buildings/{building}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.buildings.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.buildings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/buildings/{building}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.buildings.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\BuildingsController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/floors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floors.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floors.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/floors/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floors.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/floors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floors.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/floors/{floor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floors.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/floors/{floor}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floors.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/floors/{floor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floors.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.floors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/floors/{floor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.floors.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FloorController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.flats-shops.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/flats-shops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.flats-shops.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.flats-shops.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/flats-shops/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.flats-shops.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.flats-shops.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/flats-shops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.flats-shops.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.flats-shops.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/flats-shops/{flats_shop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.flats-shops.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.flats-shops.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/flats-shops/{flats_shop}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.flats-shops.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.flats-shops.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/flats-shops/{flats_shop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.flats-shops.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.flats-shops.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/flats-shops/{flats_shop}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.flats-shops.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BuildingUnits\\FlatController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales.title-transfer-print' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sales/title-transfer-print',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@titleTransferPrint',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@titleTransferPrint',
        'as' => 'dashboard.sales.title-transfer-print',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales.seller-affidavit-print' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sales/seller-affidavit-print',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@sellerAffidavitPrint',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@sellerAffidavitPrint',
        'as' => 'dashboard.sales.seller-affidavit-print',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales.commodity-deal-closings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sales/commodity-deal-closings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@commodityDealClosings',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@commodityDealClosings',
        'as' => 'dashboard.sales.commodity-deal-closings',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales.update-commodity-deal-closings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sales/update-commodity-deal-closings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@commodityDealClosings',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@commodityDealClosings',
        'as' => 'dashboard.sales.update-commodity-deal-closings',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.sales.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sales/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.sales.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.sales.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sales/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.sales.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sales/{sale}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.sales.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/sales/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.sales.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/sales/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.sales.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\SalesController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.installment-plans.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/installment-plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.installment-plans.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.installment-plans.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/installment-plans/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.installment-plans.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.installment-plans.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/installment-plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.installment-plans.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.installment-plans.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/installment-plans/{installment_plan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.installment-plans.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.installment-plans.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/installment-plans/{installment_plan}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.installment-plans.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.installment-plans.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/installment-plans/{installment_plan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.installment-plans.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.installment-plans.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/installment-plans/{installment_plan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.installment-plans.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.installment-term.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/installment-term',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.installment-term.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentTermController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentTermController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.installment-term.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/installment-term/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.installment-term.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentTermController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentTermController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.installment-term.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/installment-term',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.installment-term.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentTermController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentTermController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.installment-term.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/installment-term/{installment_term}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.installment-term.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentTermController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentTermController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.installment-term.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/installment-term/{installment_term}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.installment-term.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentTermController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentTermController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.installment-term.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/installment-term/{installment_term}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.installment-term.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentTermController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentTermController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.installment-term.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/installment-term/{installment_term}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.installment-term.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentTermController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentTermController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.quotations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/quotations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.quotations.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\QuotationController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\QuotationController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.quotations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/quotations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.quotations.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\QuotationController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\QuotationController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.quotations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/quotations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.quotations.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\QuotationController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\QuotationController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.quotations.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/quotations/{quotation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.quotations.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\QuotationController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\QuotationController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.quotations.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/quotations/{quotation}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.quotations.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\QuotationController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\QuotationController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.quotations.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/quotations/{quotation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.quotations.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\QuotationController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\QuotationController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.quotations.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/quotations/{quotation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.quotations.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\QuotationController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\QuotationController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.add.installment-plan-ajax' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/add-installment-plan-ajax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@addInstallmentPlanAjax',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Sales\\InstallmentPlanController@addInstallmentPlanAjax',
        'as' => 'dashboard.add.installment-plan-ajax',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.print.installment.plans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/print-installment-plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@printInstallmentPlan',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@printInstallmentPlan',
        'as' => 'dashboard.print.installment.plans',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.print.flat.owner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/print-flat-owner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@printFlatOwner',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@printFlatOwner',
        'as' => 'dashboard.print.flat.owner',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.filter.flat.owner.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/filter-flat-owner-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@filterFlatOwner',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@filterFlatOwner',
        'as' => 'dashboard.filter.flat.owner.data',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.print.building' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/print-building',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@printBuilding',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@printBuilding',
        'as' => 'dashboard.print.building',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.filter.building' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/filter-building',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@filterBuilding',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@filterBuilding',
        'as' => 'dashboard.filter.building',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.print.nominee' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/print-nominee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@printNominee',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@printNominee',
        'as' => 'dashboard.print.nominee',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.filter.nominee' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/filter-nominee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@filterNominee',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@filterNominee',
        'as' => 'dashboard.filter.nominee',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.print.hr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/print-hr',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@printHr',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@printHr',
        'as' => 'dashboard.print.hr',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.filter.hr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/filter-hr',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@filterHr',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@filterHr',
        'as' => 'dashboard.filter.hr',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.print.title.transfer.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/print-title-transfer-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@printTitleTransferDetails',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\GeneralController@printTitleTransferDetails',
        'as' => 'dashboard.print.title.transfer.detail',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/print-1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:309:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:91:"function (){
    return \\view(\'dashboard.real-estate.print.print-theme.print-1.print\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000e870000000000000000";}";s:4:"hash";s:44:"uFEV0RCDj9pgSbEAP8F+BK6aA4O+sNym+K43pgljgYE=";}}',
        'as' => 'dashboard.',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::zubXf6mJNArmQM4r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/print-2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:309:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:91:"function (){
    return \\view(\'dashboard.real-estate.print.print-theme.print-2.print\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000e890000000000000000";}";s:4:"hash";s:44:"CCZHs+4/OtdVN4oeRVk/WE+EBAQP66+fMIbRdQJv+J4=";}}',
        'as' => 'dashboard.generated::zubXf6mJNArmQM4r',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.generated::0BenWkHbIbZtjtUY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/print-3',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:309:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:91:"function (){
    return \\view(\'dashboard.real-estate.print.print-theme.print-3.print\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000e8b0000000000000000";}";s:4:"hash";s:44:"FWWXxyLJvRLCrFpo0ZBjnQZgBhOYjepcZ0RiLTRXezk=";}}',
        'as' => 'dashboard.generated::0BenWkHbIbZtjtUY',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.system-settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.system-settings.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Settings\\SettingsController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Settings\\SettingsController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.system-settings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system-settings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.system-settings.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Settings\\SettingsController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Settings\\SettingsController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.system-settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/system-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.system-settings.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Settings\\SettingsController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Settings\\SettingsController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.system-settings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system-settings/{system_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.system-settings.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Settings\\SettingsController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Settings\\SettingsController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.system-settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/system-settings/{system_setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.system-settings.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Settings\\SettingsController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Settings\\SettingsController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.system-settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/system-settings/{system_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.system-settings.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Settings\\SettingsController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Settings\\SettingsController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.system-settings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/system-settings/{system_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.system-settings.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Settings\\SettingsController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Settings\\SettingsController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.business-settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/business-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.business-settings.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BusinessController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BusinessController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.business-settings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/business-settings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.business-settings.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BusinessController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BusinessController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.business-settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/business-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.business-settings.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BusinessController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BusinessController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.business-settings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/business-settings/{business_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.business-settings.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BusinessController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BusinessController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.business-settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/business-settings/{business_setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.business-settings.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BusinessController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BusinessController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.business-settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/business-settings/{business_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.business-settings.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BusinessController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BusinessController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.business-settings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/business-settings/{business_setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.business-settings.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\BusinessController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\BusinessController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.save.print.theme' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/savePrintTheme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RealEstate\\Settings\\SettingsController@savePrintTheme',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\Settings\\SettingsController@savePrintTheme',
        'as' => 'dashboard.save.print.theme',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.call-type.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/call-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.call-type.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\CallTypeController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\CallTypeController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.call-type.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/call-type/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.call-type.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\CallTypeController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\CallTypeController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.call-type.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/call-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.call-type.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\CallTypeController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\CallTypeController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.call-type.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/call-type/{call_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.call-type.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\CallTypeController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\CallTypeController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.call-type.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/call-type/{call_type}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.call-type.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\CallTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\CallTypeController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.call-type.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/call-type/{call_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.call-type.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\CallTypeController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\CallTypeController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.call-type.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/call-type/{call_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.call-type.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\CallTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\CallTypeController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.complain-type.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/complain-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.complain-type.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ComplainTypeController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ComplainTypeController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.complain-type.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/complain-type/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.complain-type.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ComplainTypeController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ComplainTypeController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.complain-type.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/complain-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.complain-type.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ComplainTypeController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ComplainTypeController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.complain-type.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/complain-type/{complain_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.complain-type.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ComplainTypeController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ComplainTypeController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.complain-type.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/complain-type/{complain_type}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.complain-type.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ComplainTypeController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ComplainTypeController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.complain-type.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/complain-type/{complain_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.complain-type.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ComplainTypeController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ComplainTypeController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.complain-type.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/complain-type/{complain_type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.complain-type.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ComplainTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ComplainTypeController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.source.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/source',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.source.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\SourceController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\SourceController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.source.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/source/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.source.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\SourceController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\SourceController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.source.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/source',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.source.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\SourceController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\SourceController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.source.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/source/{source}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.source.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\SourceController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\SourceController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.source.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/source/{source}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.source.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\SourceController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\SourceController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.source.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/source/{source}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.source.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\SourceController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\SourceController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.source.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/source/{source}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.source.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\SourceController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\SourceController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.reference.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reference',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.reference.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ReferenceController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ReferenceController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.reference.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reference/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.reference.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ReferenceController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ReferenceController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.reference.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/reference',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.reference.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ReferenceController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ReferenceController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.reference.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reference/{reference}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.reference.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ReferenceController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ReferenceController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.reference.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/reference/{reference}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.reference.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ReferenceController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ReferenceController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.reference.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/reference/{reference}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.reference.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ReferenceController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ReferenceController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.reference.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/reference/{reference}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.reference.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ReferenceController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\ReferenceController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.purpose.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/purpose',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.purpose.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\PurposeController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\PurposeController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.purpose.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/purpose/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.purpose.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\PurposeController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\PurposeController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.purpose.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/purpose',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.purpose.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\PurposeController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\PurposeController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.purpose.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/purpose/{purpose}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.purpose.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\PurposeController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\PurposeController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.purpose.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/purpose/{purpose}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.purpose.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\PurposeController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\PurposeController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.purpose.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/purpose/{purpose}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.purpose.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\PurposeController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\PurposeController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.purpose.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/purpose/{purpose}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.purpose.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\PurposeController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\FrontDeskSetup\\PurposeController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales-enquiry.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sales-enquiry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.sales-enquiry.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\SaleEnquiryController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\SaleEnquiryController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales-enquiry.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sales-enquiry/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.sales-enquiry.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\SaleEnquiryController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\SaleEnquiryController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales-enquiry.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/sales-enquiry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.sales-enquiry.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\SaleEnquiryController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\SaleEnquiryController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales-enquiry.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sales-enquiry/{sales_enquiry}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.sales-enquiry.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\SaleEnquiryController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\SaleEnquiryController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales-enquiry.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/sales-enquiry/{sales_enquiry}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.sales-enquiry.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\SaleEnquiryController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\SaleEnquiryController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales-enquiry.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/sales-enquiry/{sales_enquiry}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.sales-enquiry.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\SaleEnquiryController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\SaleEnquiryController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.sales-enquiry.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/sales-enquiry/{sales_enquiry}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.sales-enquiry.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\SaleEnquiryController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\SaleEnquiryController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.visitor-book.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/visitor-book',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.visitor-book.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\VisitorBookController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\VisitorBookController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.visitor-book.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/visitor-book/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.visitor-book.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\VisitorBookController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\VisitorBookController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.visitor-book.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/visitor-book',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.visitor-book.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\VisitorBookController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\VisitorBookController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.visitor-book.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/visitor-book/{visitor_book}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.visitor-book.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\VisitorBookController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\VisitorBookController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.visitor-book.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/visitor-book/{visitor_book}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.visitor-book.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\VisitorBookController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\VisitorBookController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.visitor-book.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/visitor-book/{visitor_book}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.visitor-book.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\VisitorBookController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\VisitorBookController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.visitor-book.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/visitor-book/{visitor_book}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.visitor-book.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\VisitorBookController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\VisitorBookController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.phone-call-log.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/phone-call-log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.phone-call-log.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PhoneCallLogController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PhoneCallLogController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.phone-call-log.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/phone-call-log/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.phone-call-log.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PhoneCallLogController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PhoneCallLogController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.phone-call-log.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/phone-call-log',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.phone-call-log.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PhoneCallLogController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PhoneCallLogController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.phone-call-log.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/phone-call-log/{phone_call_log}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.phone-call-log.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PhoneCallLogController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PhoneCallLogController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.phone-call-log.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/phone-call-log/{phone_call_log}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.phone-call-log.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PhoneCallLogController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PhoneCallLogController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.phone-call-log.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/phone-call-log/{phone_call_log}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.phone-call-log.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PhoneCallLogController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PhoneCallLogController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.phone-call-log.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/phone-call-log/{phone_call_log}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.phone-call-log.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PhoneCallLogController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PhoneCallLogController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.postal-dispatch.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/postal-dispatch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.postal-dispatch.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalDispatchController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalDispatchController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.postal-dispatch.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/postal-dispatch/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.postal-dispatch.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalDispatchController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalDispatchController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.postal-dispatch.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/postal-dispatch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.postal-dispatch.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalDispatchController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalDispatchController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.postal-dispatch.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/postal-dispatch/{postal_dispatch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.postal-dispatch.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalDispatchController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalDispatchController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.postal-dispatch.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/postal-dispatch/{postal_dispatch}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.postal-dispatch.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalDispatchController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalDispatchController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.postal-dispatch.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/postal-dispatch/{postal_dispatch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.postal-dispatch.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalDispatchController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalDispatchController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.postal-dispatch.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/postal-dispatch/{postal_dispatch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.postal-dispatch.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalDispatchController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalDispatchController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.postal-receive.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/postal-receive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.postal-receive.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalReceiveController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalReceiveController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.postal-receive.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/postal-receive/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.postal-receive.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalReceiveController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalReceiveController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.postal-receive.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/postal-receive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.postal-receive.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalReceiveController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalReceiveController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.postal-receive.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/postal-receive/{postal_receive}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.postal-receive.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalReceiveController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalReceiveController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.postal-receive.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/postal-receive/{postal_receive}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.postal-receive.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalReceiveController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalReceiveController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.postal-receive.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/postal-receive/{postal_receive}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.postal-receive.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalReceiveController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalReceiveController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.postal-receive.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/postal-receive/{postal_receive}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.postal-receive.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalReceiveController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\PostalReceiveController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.complain.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/complain',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.complain.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\ComplainController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\ComplainController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.complain.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/complain/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.complain.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\ComplainController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\ComplainController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.complain.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/complain',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.complain.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\ComplainController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\ComplainController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.complain.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/complain/{complain}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.complain.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\ComplainController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\ComplainController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.complain.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/complain/{complain}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.complain.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\ComplainController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\ComplainController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.complain.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/complain/{complain}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.complain.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\ComplainController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\ComplainController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.complain.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/complain/{complain}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.complain.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\ComplainController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FrontDesk\\ComplainController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-inventory.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/assets-inventory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-inventory.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsInventoryController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsInventoryController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-inventory.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/assets-inventory/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-inventory.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsInventoryController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsInventoryController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-inventory.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/assets-inventory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-inventory.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsInventoryController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsInventoryController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-inventory.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/assets-inventory/{assets_inventory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-inventory.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsInventoryController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsInventoryController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-inventory.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/assets-inventory/{assets_inventory}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-inventory.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsInventoryController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsInventoryController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-inventory.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/assets-inventory/{assets_inventory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-inventory.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsInventoryController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsInventoryController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-inventory.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/assets-inventory/{assets_inventory}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-inventory.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsInventoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsInventoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-unit.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/assets-unit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-unit.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsUnitController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsUnitController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-unit.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/assets-unit/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-unit.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsUnitController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsUnitController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-unit.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/assets-unit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-unit.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsUnitController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsUnitController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-unit.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/assets-unit/{assets_unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-unit.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsUnitController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsUnitController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-unit.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/assets-unit/{assets_unit}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-unit.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsUnitController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsUnitController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-unit.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/assets-unit/{assets_unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-unit.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsUnitController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsUnitController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-unit.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/assets-unit/{assets_unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-unit.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsUnitController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsUnitController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-location.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/assets-location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-location.index',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsLocationController@index',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsLocationController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-location.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/assets-location/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-location.create',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsLocationController@create',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsLocationController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-location.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/assets-location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-location.store',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsLocationController@store',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsLocationController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-location.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/assets-location/{assets_location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-location.show',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsLocationController@show',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsLocationController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-location.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/assets-location/{assets_location}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-location.edit',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsLocationController@edit',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsLocationController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-location.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/assets-location/{assets_location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-location.update',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsLocationController@update',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsLocationController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.assets-location.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/assets-location/{assets_location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.assets-location.destroy',
        'uses' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsLocationController@destroy',
        'controller' => 'App\\Http\\Controllers\\RealEstate\\FixedAssets\\AssetsLocationController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.subscriptions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.subscriptions.index',
        'uses' => 'App\\Http\\Controllers\\Plan\\SubscriptionController@index',
        'controller' => 'App\\Http\\Controllers\\Plan\\SubscriptionController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.subscriptions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subscriptions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.subscriptions.create',
        'uses' => 'App\\Http\\Controllers\\Plan\\SubscriptionController@create',
        'controller' => 'App\\Http\\Controllers\\Plan\\SubscriptionController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.subscriptions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.subscriptions.store',
        'uses' => 'App\\Http\\Controllers\\Plan\\SubscriptionController@store',
        'controller' => 'App\\Http\\Controllers\\Plan\\SubscriptionController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.subscriptions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.subscriptions.show',
        'uses' => 'App\\Http\\Controllers\\Plan\\SubscriptionController@show',
        'controller' => 'App\\Http\\Controllers\\Plan\\SubscriptionController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.subscriptions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/subscriptions/{subscription}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.subscriptions.edit',
        'uses' => 'App\\Http\\Controllers\\Plan\\SubscriptionController@edit',
        'controller' => 'App\\Http\\Controllers\\Plan\\SubscriptionController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.subscriptions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.subscriptions.update',
        'uses' => 'App\\Http\\Controllers\\Plan\\SubscriptionController@update',
        'controller' => 'App\\Http\\Controllers\\Plan\\SubscriptionController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.subscriptions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.subscriptions.destroy',
        'uses' => 'App\\Http\\Controllers\\Plan\\SubscriptionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Plan\\SubscriptionController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.plans.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.plans.index',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Plans\\PlanController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Plans\\PlanController@index',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.plans.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/plans/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.plans.create',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Plans\\PlanController@create',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Plans\\PlanController@create',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.plans.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.plans.store',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Plans\\PlanController@store',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Plans\\PlanController@store',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.plans.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/plans/{plan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.plans.show',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Plans\\PlanController@show',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Plans\\PlanController@show',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.plans.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/plans/{plan}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.plans.edit',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Plans\\PlanController@edit',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Plans\\PlanController@edit',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.plans.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'dashboard/plans/{plan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.plans.update',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Plans\\PlanController@update',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Plans\\PlanController@update',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard.plans.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/plans/{plan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'dashboard.plans.destroy',
        'uses' => 'App\\Http\\Controllers\\Dashboard\\Plans\\PlanController@destroy',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\Plans\\PlanController@destroy',
        'namespace' => NULL,
        'prefix' => 'dashboard/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
