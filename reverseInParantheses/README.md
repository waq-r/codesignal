<h2>reverseInParentheses</h2>
<a href="https://www.codesignal.com/">www.codesignal.com</a>
<hr />
<div><p>Write a function that reverses characters in (possibly nested) parentheses in the input string.</p>
<p>Input strings will always be well-formed with matching <code>()</code>s.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>inputString = "(bar)"</code>, the output should be<br>
<code>reverseInParentheses(inputString) = "rab"</code>;</li>
<li>For <code>inputString = "foo(bar(baz))blim"</code>, the output should be<br>
<code>reverseInParentheses(inputString) = "foobazrabblim"</code>.<br>
Because <code>"foo(bar(baz))blim"</code> becomes <code>"foo(barzab)blim"</code> and then <code>"foobazrabblim"</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (php)</strong></p>
</li>
<li>
<p><strong>[input] string inputString</strong></p>
<p>A string consisting of lowercase English letters and the characters <code>(</code> and <code>)</code>. It is guaranteed that all parentheses in <code>inputString</code> form a <a href="keyword://regular-bracket-sequence" target="_blank">regular bracket sequence</a>.</p>
<p><em>Guaranteed constraints:</em><br>
<code>0 ≤ inputString.length ≤ 50</code>.</p>
</li>
<li>
<p><strong>[output] string</strong></p>
<ul>
<li>Return <code>inputString</code>, with all the characters that were in parentheses reversed.</li>
</ul>
</li>
</ul>
</div>
