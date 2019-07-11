"use strict";
"use strict";
define(['uiComponent','ko'], function(Component,ko) {
  
        return Component.extend({
            initialize: function () {
                var self = this;
                self._super();
 
                self.firstname = ko.observable('');
                self.lastname = ko.observable('');
                 
                self.names = ko.observableArray([
                    {firstname : 'Test1' , 'lastname' : 'Test2'},
                    {firstname : 'Test1' , 'lastname' : 'Test2'},
                    {firstname : 'Test1' , 'lastname' : 'Test2'}
                ]);
 
            },
            addName : function(){
                var self = this;
                self.names.push({
                    firstname : self.firstname(),
                    lastname : self.lastname()
                });
                self.firstname('');
                self.lastname('');
            }
        });
});
