var fs = require('fs');

function mergeValues(values, content) {
    //cycle over the keys
    for(var key in values) {
        //replace all {{key}} with the values from the values object   
        content = content.replace('{{' + key + '}}', values[key]);
    }
    return content;
}

function view(templateName, values, response) {
    //read from the template files 
    var fileContents = fs.readFileSync('./views/' + templateName + '.html', {encoding: 'utf8'});
    
    fileContents = mergeValues(values, fileContents);
    
    response.write(fileContents);
    
}

module.exports.view = view;