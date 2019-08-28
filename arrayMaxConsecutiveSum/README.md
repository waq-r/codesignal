<h2>Array Max Consective Sum</h2>
<p>source: <a href="https://www.codesignal.com/">codesignal.com</a>
<div><p>Given array of integers, find the maximal possible sum of some of its <code>k</code> consecutive elements.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For <code>inputArray = [2, 3, 5, 1, 6]</code> and <code>k = 2</code>, the output should be<br>
<code>arrayMaxConsecutiveSum(inputArray, k) = 8</code>.<br>
All possible sums of <code>2</code> consecutive elements are:</p>
<ul>
<li><code>2 + 3 = 5</code>;</li>
<li><code>3 + 5 = 8</code>;</li>
<li><code>5 + 1 = 6</code>;</li>
<li><code>1 + 6 = 7</code>.<br>
Thus, the answer is <code>8</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (php)</strong></p>
</li>
<li>
<p><strong>[input] array.integer inputArray</strong></p>
<p>Array of positive integers.</p>
<p><em>Guaranteed constraints:</em><br>
<code>3 ≤ inputArray.length ≤ 10<sup>5</sup></code>,<br>
<code>1 ≤ inputArray[i] ≤ 1000</code>.</p>
</li>
<li>
<p><strong>[input] integer k</strong></p>
<p>An integer (not greater than the length of <code>inputArray</code>).</p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ k ≤ inputArray.length</code>.</p>
</li>
<li>
<p><strong>[output] integer</strong></p>
<ul>
<li>The maximal possible sum.</li>
</ul>
</li>
</ul>
</div>