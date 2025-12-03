import AdminController from './AdminController'
import ArticleController from './ArticleController'
import ControllerModel from './ControllerModel'
import Settings from './Settings'
import Auth from './Auth'

const Controllers = {
    AdminController: Object.assign(AdminController, AdminController),
    ArticleController: Object.assign(ArticleController, ArticleController),
    ControllerModel: Object.assign(ControllerModel, ControllerModel),
    Settings: Object.assign(Settings, Settings),
    Auth: Object.assign(Auth, Auth),
}

export default Controllers