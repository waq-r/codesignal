String longestDigitsPrefix(String inputString) {
    
    Pattern pattern = Pattern.compile("^\\d*");
    Matcher matcher = pattern.matcher(inputString);
    String r = "";
    while(matcher.find()){
        r = inputString.substring(matcher.start(), matcher.end());
    }
    return r;
}
