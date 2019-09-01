<h2>Is Beautiful String</h2>
<p>source: <a href="https://www.codesignal.com/">codesignal.com</a>
<div><p>A string is said to be <em>beautiful</em> if each letter of the alphabet appears at most as many times as than the previous letter; ie: <code>b</code> occurs no more times than <code>a</code>; <code>c</code> occurs no more times than <code>b</code>; etc.</p>
<p>Given a string, check whether it is <em>beautiful</em>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>
<p>For <code>inputString = "bbbaacdafe"</code>, the output should be<br>
<code>isBeautifulString(inputString) = true</code>;</p>
<p>This string contains 3 <code>a</code>s, 3 <code>b</code>s, 1 <code>c</code>, 1 <code>d</code>, 1 <code>e</code>, and 1 <code>f</code> (and 0 of every other letter), so since there aren't any letters that appear more frequently than the previous letter, this string qualifies as beautiful.</p>
</li>
<li>
<p>For <code>inputString = "aabbb"</code>, the output should be<br>
<code>isBeautifulString(inputString) = false</code>;</p>
<p>Since there are more <code>b</code>s than <code>a</code>s, this string is not beautiful.</p>
</li>
<li>
<p>For <code>inputString = "bbc"</code>, the output should be<br>
<code>isBeautifulString(inputString) = false</code>.</p>
<p>Although there are more <code>b</code>s than <code>c</code>s, this string is not beautiful because there are no <code>a</code>s, so therefore there are more <code>b</code>s than <code>a</code>s.</p>
</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] string inputString</strong></p>
<p>A string of lowercase English letters.</p>
<p><em>Guaranteed constraints:</em><br>
<code>3 ≤ inputString.length ≤ 50</code>.</p>
</li>
<li>
</div>