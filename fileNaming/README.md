<h2>File Naming</h2>
<p>source: <a href="https://www.codesignal.com/">codesignal.com</a>
<div><p>You are given an array of desired filenames in the order of their creation. Since two files cannot have equal names, the one which comes later will have an addition to its name in a form of <code>(k)</code>, where <code>k</code> is the smallest positive integer such that the obtained name is not used yet.</p>
<p>Return an array of names that will be given to the files.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For <code>names = ["doc", "doc", "image", "doc(1)", "doc"]</code>, the output should be<br>
<code>fileNaming(names) = ["doc", "doc(1)", "image", "doc(1)(1)", "doc(2)"]</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] array.string names</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>5 ≤ names.length ≤ 1000</code>,<br>
<code>1 ≤ names[i].length ≤ 15</code>.</p>
</li>
<li>
<p><strong>[output] array.string</strong></p>
</li>
</ul>
</div>