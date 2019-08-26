<h2>Strings Arrangement</h2>
<p>source: <a href="https://www.codesignal.com/">codesignal.com</a></p>
<div><p>Given an array of equal-length strings, you'd like to know if it's possible to rearrange the order of the elements in such a way that each consecutive pair of strings differ by exactly one character. Return <code>true</code> if it's possible, and <code>false</code> if not.</p>
<p><strong>Note: You're only rearranging the order of the strings, not the order of the letters within the strings!</strong></p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>
<p>For <code>inputArray = ["aba", "bbb", "bab"]</code>, the output should be<br>
<code>stringsRearrangement(inputArray) = false</code>.</p>
<p>There are 6 possible arrangements for these strings:</p>
<ul>
<li><code>["aba", "bbb", "bab"]</code></li>
<li><code>["aba", "bab", "bbb"]</code></li>
<li><code>["bbb", "aba", "bab"]</code></li>
<li><code>["bbb", "bab", "aba"]</code></li>
<li><code>["bab", "bbb", "aba"]</code></li>
<li><code>["bab", "aba", "bbb"]</code></li>
</ul>
<p>None of these satisfy the condition of consecutive strings differing by 1 character, so the answer is <code>false</code>.</p>
</li>
<li>
<p>For <code>inputArray = ["ab", "bb", "aa"]</code>, the output should be<br>
<code>stringsRearrangement(inputArray) = true</code>.</p>
<p>It's possible to arrange these strings in a way that each consecutive pair of strings differ by 1 character (eg: <code>"aa", "ab", "bb"</code> or <code>"bb", "ab", "aa"</code>), so return <code>true</code>.</p>
</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (php)</strong></p>
</li>
<li>
<p><strong>[input] array.string inputArray</strong></p>
<p>A non-empty array of strings of lowercase letters.</p>
<p><em>Guaranteed constraints:</em><br>
<code>2 ≤ inputArray.length ≤ 10</code>,<br>
<code>1 ≤ inputArray[i].length ≤ 15</code>.</p>
</li>
<li>
<p><strong>[output] boolean</strong></p>
<ul>
<li>Return <code>true</code> if the strings can be reordered in such a way that each neighbouring pair of strings differ by exactly one character (<code>false</code> otherwise).</li>
</ul>
</li>
</ul>
</div>