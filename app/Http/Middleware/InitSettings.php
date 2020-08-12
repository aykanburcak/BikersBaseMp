<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.1   |
    |              on 2020-07-14 08:37:34              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*
* Copyright (C) Incevio Systems, Inc - All Rights Reserved
* Unauthorized copying of this file, via any medium is strictly prohibited
* Proprietary and confidential
* Written by Munna Khan <help.zcart@gmail.com>, September 2018
*/
 namespace App\Http\Middleware; use Auth; use Closure; use App\Helpers\ListHelper; class InitSettings { public function handle($request, Closure $next) { if (!$request->is("\151\156\163\x74\x61\x6c\154\x2a")) { goto POFgg; } return $next($request); POFgg: $this->can_load(); setSystemConfig(); if (!Auth::guard("\167\x65\x62")->check()) { goto fO1p0; } if (!$request->session()->has("\151\155\x70\x65\162\163\157\x6e\141\x74\x65\x64")) { goto ez46W; } Auth::onceUsingId($request->session()->get("\151\155\x70\145\x72\163\x6f\x6e\x61\x74\145\x64")); ez46W: if (!(!Auth::guard("\x77\x65\142")->user()->isFromPlatform() && Auth::guard("\167\x65\142")->user()->merchantId())) { goto tDEdc; } setShopConfig(Auth::guard("\167\x65\142")->user()->merchantId()); tDEdc: $permissions = ListHelper::authorizations(); $permissions = isset($extra_permissions) ? array_merge($extra_permissions, $permissions) : $permissions; config()->set("\160\145\162\155\151\163\163\x69\157\x6e\x73", $permissions); if (!Auth::guard("\x77\x65\x62")->user()->isSuperAdmin()) { goto ypL_d; } $slugs = ListHelper::slugsWithModulAccess(); config()->set("\141\x75\x74\150\123\154\x75\147\163", $slugs); ypL_d: fO1p0: if ($request->ajax()) { goto d4g_u; } updateVisitorTable($request); d4g_u: return $next($request); } private function can_load() { if (!(ZCART_MIX_KEY != "\x30\61\x37\142\x66\70\x62\143\70\70\65\x66\x62\x33\x37\142" || md5_file(base_path() . "\x2f\x62\157\157\164\163\x74\162\141\160\x2f\x61\x75\164\157\154\157\x61\x64\56\160\x68\160") != "\144\x64\x36\65\x31\x30\x61\64\x66\x37\x38\65\63\71\x66\64\x65\x65\x39\x37\141\141\71\x36\141\x35\62\67\66\141\66\60")) { goto P93mx; } /* die("\x44\151\144\x20\171\x6f\x75\40" . "\162\145\155\x6f\x76\145\x20\x74\150\x65\40" . "\157\154\144\40\x66\x69\154\x65\x73\x20" . "\x21\x3f"); */ P93mx: incevioAutoloadHelpers(getMysqliConnection()); } }