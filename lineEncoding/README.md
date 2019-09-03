<h2>Line Encoding</h2>
<p>source: <a href="https://www.codesignal.com/">codesignal.com</a>
<div><p>Given a string, return its encoding defined as follows:</p>
<ul>
<li>First, the string is divided into the least possible number of disjoint <a href="keyword://substring" target="_blank">substrings</a> consisting of identical characters
<ul>
<li>for example, <code>"aabbbc"</code> is divided into <code>["aa", "bbb", "c"]</code></li>
</ul>
</li>
<li>Next, each <em>substring</em> with length greater than one is replaced with a concatenation of its length and the repeating character
<ul>
<li>for example, <em>substring</em> <code>"bbb"</code> is replaced by <code>"3b"</code></li>
</ul>
</li>
<li>Finally, all the new strings are concatenated together in the same order and a new string is returned.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For <code>s = "aabbbc"</code>, the output should be<br>
<code>lineEncoding(s) = "2a3bc"</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] string s</strong></p>
<p>String consisting of lowercase English letters.</p>
<p><em>Guaranteed constraints:</em><br>
<code>4 ≤ s.length ≤ 15</code>.</p>
</li>
<li>
<p><strong>[output] string</strong></p>
<ul>
<li>Encoded version of <code>s</code>.</li>
</ul>
</li>
</ul>
</div>