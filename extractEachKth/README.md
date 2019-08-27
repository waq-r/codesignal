<h2>extract Each Kth</h2>
<p>source: <a href="https://www.codesignal.com/">codesignal.com</a>
<div><p>Given array of integers, remove each <code>k<sup>th</sup></code> element from it.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For <code>inputArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]</code> and <code>k = 3</code>, the output should be<br>
<code>extractEachKth(inputArray, k) = [1, 2, 4, 5, 7, 8, 10]</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] array.integer inputArray</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>5 ≤ inputArray.length ≤ 15</code>,<br>
<code>-20 ≤ inputArray[i] ≤ 20</code>.</p>
</li>
<li>
<p><strong>[input] integer k</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ k ≤ 10</code>.</p>
</li>
<li>
<p><strong>[output] array.integer</strong></p>
<ul>
<li><code>inputArray</code> without elements <code>k - 1</code>, <code>2k - 1</code>, <code>3k - 1</code> etc.</li>
</ul>
</li>
</ul>
</div>