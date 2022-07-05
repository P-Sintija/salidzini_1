require('./bootstrap')
// @ts-ignore
import Router from '@adminModules/router.ts';

Router.on('LoginController@index', 'login/index.ts');
Router.on('RegistrationController@index', 'registration/index.ts');
Router.run();

