var adminGroupDditorForm           = document.getElementById("admin-group-editor");
var adminGroupDditorFormSubmit     = document.getElementById("admin-group-editor-submit");
var adminGroupDditorFormEditCancel = document.getElementById("admin-group-editor-edit-cancel");
var groupTitleInput                = document.getElementById("group_title");
var messageBaner                   = document.getElementById("message-baner");
var groupContainer                 = document.getElementById("group-container");

//State style
messageBaner.style.display                           = "none";
adminGroupDditorFormEditCancel.style.display         = "none";

var groupId                  = null;
var groupCollectionReferance = [];



var renderGroup = function() {
   Ajax.getJSON('groups', function(collection){
    groupCollectionReferance = collection; 
    
    renderGroupContainer(groupCollectionReferance);
}); 
};

var renderGroupContainer = function(collection){
    
    var tamplateCollection = [];
    for(var index = 0; index < collection.length; index++){
        
    var element  = collection[index];    
    var template = `<div class="mt-3">
    
                        <div class="container">
                            <div class ="row">
                                <div class = "col-sm">
                                    <span>${element.title}</span>
                                </div>
                                <div class="col-sm">
                                    <button class="btn btn-primary" noclick="editGroup(${$index})">Edit</button>
                                    <button class="btn btn-danget" noclick="deleteGroup(${$index})">Delete</button>
                                </div>
                            </div>
                        </div>    
                   </div>`;
    tamplateCollection.push(template);
    }
    groupContainer.innerHTML =tamplateCollection.join('');  
};


var editGroup = function(index) {
    groupTitleInput.value                        = groupCollectionReferance[index].title;
    groupId                                      = groupCollectionReferance[index].id;
    adminGroupDditorFormSubmit.value             = "EDIT";
    adminGroupDditorFormEditCancel.style.display = "inline-block";
};

var deleteGroup = function(index) {
    // groupId                                      = groupCollectionReferance[index].id;
    
    var URLEncodedRequest = {
        group_id    : groupCollectionReferance[index].id
    };
    
    Ajax.post('groups/delete', URLEncodedRequest, function() {
        renderGroup();
    }, function() {
        console.log("Error");
    });
};

renderGroup();

adminGroupDditorFormEditCancel.addEventListener('click', function(){
    
   adminGroupDditorFormSubmit.value                  = "submit"; 
   adminGroupDditorFormEditCancel.style.display      = "none";
   groupId                                           = null;
});

adminGroupDditorForm.addEventListener('submit', function(e) {
    
     e.preventDefault();
    
    var groupTitleInputValue = groupTitleInput.value;
    
    if(groupTitleInputValue.length < 3) {
        alert("You must enter at least 3 characters");
        return;
    }
//    // Ajax request
//    var requestBody = {
//        group_title : groupTitleInput.value
//    };
//    
//    // Build string version of JSON OBJECT "{'key' : 'value'}"
//    var JSONRequest = JSON.stringify(requestBody);
//    var URLEncodedRequest = `group_title=${groupTitleInput.value}`;
    
    var URLEncodedRequest = requestTransform({
        group_id    : groupId,
        group_title : groupTitleInputValue
    });
    
    if(groupId) {
        
       Ajax.post('groups/update', URLEncodedRequest, function(collection) {
                
        // success message
        messageBaner.style.display  = "block";
        groupTitleInput.value       = "";
        // render group collection data
        groupCollectionReferance.push(collection[0]);
        renderGroupContainer(groupCollectionReferance);

        // fade out 
        setTimeout(function() {
            messageBaner.style.display  = "none";
        }, 3000);                
    }, function() {
        console.log("Error");
    }); 
        
    }
    else {
        
        Ajax.postJSON('groups/create', URLEncodedRequest, function(collection) {
                
        // success message
        messageBaner.style.display  = "block";
        groupTitleInput.value       = "";
        // render group collection data
        groupCollectionReferance.push(collection[0]);
        renderGroupContainer(groupCollectionReferance);

        // fade out 
        setTimeout(function() {
            messageBaner.style.display  = "none";
        }, 3000);                
    }, function() {
        console.log("Error");
    });
        
    }
    
    
   
});


