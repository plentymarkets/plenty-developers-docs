var NotificationService = require('services/NotificationService');
var WaitScreenService = require('services/WaitScreenService');

module.exports = (function($) {

    var _token;

    return {
        get:    _get,
        put:    _put,
        post:   _post,
        delete: _delete,
        send:   _send,
        setToken: _setToken,
        getToken: _getToken
    };

    function _get( url, data, config )
    {
        config = config || {};
        config.method = 'GET';
        return _send( url, data, config );
    }

    ...
}