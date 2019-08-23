function variableName(name) {
return name.split('')[0].match(/^[a-zA-Z_]/g) != null && (name.length == 1 || name.slice(1).match(/^\w+$/mg) != null);
}
