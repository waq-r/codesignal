<h2>Are Similar</h2>
source: <a href="https://www.codesignal.com/">www.codesignal.com</a>
<hr />
<div><p>Two arrays are called <em>similar</em> if one can be obtained from another by swapping at most one pair of elements in one of the arrays.</p>
<p>Given two arrays <code>a</code> and <code>b</code>, check whether they are <em>similar</em>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>
<p>For <code>a = [1, 2, 3]</code> and <code>b = [1, 2, 3]</code>, the output should be<br>
<code>areSimilar(a, b) = true</code>.</p>
<p>The arrays are equal, no need to swap any elements.</p>
</li>
<li>
<p>For <code>a = [1, 2, 3]</code> and <code>b = [2, 1, 3]</code>, the output should be<br>
<code>areSimilar(a, b) = true</code>.</p>
<p>We can obtain <code>b</code> from <code>a</code> by swapping <code>2</code> and <code>1</code> in <code>b</code>.</p>
</li>
<li>
<p>For <code>a = [1, 2, 2]</code> and <code>b = [2, 1, 1]</code>, the output should be<br>
<code>areSimilar(a, b) = false</code>.</p>
<p>Any swap of any two elements either in <code>a</code> or in <code>b</code> won't make <code>a</code> and <code>b</code> equal.</p>
</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (php)</strong></p>
</li>
<li>
<p><strong>[input] array.integer a</strong></p>
<p>Array of integers.</p>
<p><em>Guaranteed constraints:</em><br>
<code>3 ≤ a.length ≤ 10<sup>5</sup></code>,<br>
<code>1 ≤ a[i] ≤ 1000</code>.</p>
</li>
<li>
<p><strong>[input] array.integer b</strong></p>
<p>Array of integers of the same length as <code>a</code>.</p>
<p><em>Guaranteed constraints:</em><br>
<code>b.length = a.length</code>,<br>
<code>1 ≤ b[i] ≤ 1000</code>.</p>
</li>
<li>
<p><strong>[output] boolean</strong></p>
<ul>
<li><code>true</code> if <code>a</code> and <code>b</code> are similar, <code>false</code> otherwise.</li>
</ul>
</li>
</ul>

</div>
