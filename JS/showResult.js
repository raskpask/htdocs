$(document).ready(function () {
    $("button#year2017").click(function () {
        $("#result").html("");
        $("#result").append('<table id="resultTable">\n' +
            '  <tr>\n' +
            '    <th>Namn</th>\n' +
            '    <th>Paddla (min)</th>\n' +
            '    <th>Simma (min)</th>\n' +
            '    <th>Cykla (min)</th>\n' +
            '    <th>Spring (min)</th>\n' +
            '    <th>Totaltid</th>\n' +
            '    <th>Placering</th>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Fredrik Sone</td>\n' +
            '    <td>23</td>\n' +
            '    <td>15</td>\n' +
            '    <td>39</td>\n' +
            '    <td>22</td>\n' +
            '    <td>1:39</td>\n' +
            '    <td>1</td>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Johan</td>\n' +
            '    <td>21</td>\n' +
            '    <td>14</td>\n' +
            '    <td>43</td>\n' +
            '    <td>32</td>\n' +
            '    <td>1:50:00</td>\n' +
            '    <td>2</td>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Anna</td>\n' +
            '    <td>-</td>\n' +
            '    <td>-</td>\n' +
            '    <td>45</td>\n' +
            '    <td>24</td>\n' +
            '    <td>1:50:30</td>\n' +
            '    <td>3</td>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Pelle</td>\n' +
            '    <td>26</td>\n' +
            '    <td>17</td>\n' +
            '    <td>39</td>\n' +
            '    <td>32</td>\n' +
            '    <td>1:54</td>\n' +
            '    <td>4</td>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Ulla</td>\n' +
            '    <td>25</td>\n' +
            '    <td>16</td>\n' +
            '    <td>47</td>\n' +
            '    <td>27</td>\n' +
            '    <td>1:55</td>\n' +
            '    <td>5</td>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Annika</td>\n' +
            '    <td>26</td>\n' +
            '    <td>14</td>\n' +
            '    <td>47</td>\n' +
            '    <td>30</td>\n' +
            '    <td>1:57</td>\n' +
            '    <td>6</td>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Gustav</td>\n' +
            '    <td>27</td>\n' +
            '    <td>17</td>\n' +
            '    <td>46</td>\n' +
            '    <td>30</td>\n' +
            '    <td>2:00:30</td>\n' +
            '    <td>7</td>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Pär</td>\n' +
            '    <td>32</td>\n' +
            '    <td>13</td>\n' +
            '    <td>47</td>\n' +
            '    <td>32</td>\n' +
            '    <td>2:04</td>\n' +
            '    <td>8</td>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Maje</td>\n' +
            '    <td>29</td>\n' +
            '    <td>16</td>\n' +
            '    <td>46</td>\n' +
            '    <td>34</td>\n' +
            '    <td>2:05:30</td>\n' +
            '    <td>9</td>\n' +
            '  </tr>\n' +
            '</table>' +
            '');


        $("#result").append('<table id="resultTable">\n' +
            '  <tr>\n' +
            '    <th>Lag</th>\n' +
            '    <th>Paddla (min)</th>\n' +
            '    <th>Simma (min)</th>\n' +
            '    <th>Cykla (min)</th>\n' +
            '    <th>Spring (min)</th>\n' +
            '    <th>Totaltid</th>\n' +
            '    <th>Placering</th>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Team Gustavsson</td>\n' +
            '    <td>25</td>\n' +
            '    <td>18</td>\n' +
            '    <td>38</td>\n' +
            '    <td>29</td>\n' +
            '    <td>2:05:00</td>\n' +
            '    <td>1</td>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Team Molin</td>\n' +
            '    <td>19</td>\n' +
            '    <td>17</td>\n' +
            '    <td>44</td>\n' +
            '    <td>31</td>\n' +
            '    <td>2:06:00</td>\n' +
            '    <td>2</td>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>U20</td>\n' +
            '    <td>29</td>\n' +
            '    <td>16</td>\n' +
            '    <td>43</td>\n' +
            '    <td>-</td>\n' +
            '    <td>-</td>\n' +
            '    <td>3</td>\n' +
            '  </tr>\n'
        );


    });
    $("button#year2018").click(function () {
        $("#result").html("");
        $("#result").append('<table id="resultTable">\n' +
            '  <tr>\n' +
            '    <th>Namn</th>\n' +
            '    <th>Paddling (min)</th>\n' +
            '    <th>Sim (min)</th>\n' +
            '    <th>Cykel (min)</th>\n' +
            '    <th>Löpning (min)</th>\n' +
            '    <th>Total</th>\n' +
            '    <th>Placering</th>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Fredrik Stenebo</td>\n' +
            '    <td>41:24</td>\n' +
            '    <td>16:51</td>\n' +
            '    <td>38:44</td>\n' +
            '    <td>24:01</td>\n' +
            '    <td>1:43:42</td>\n' +
            '    <td>1</td>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Pär</td>\n' +
            '    <td>44:58</td>\n' +
            '    <td>-</td>\n' +
            '    <td>-</td>\n' +
            '    <td>-</td>\n' +
            '    <td>1:46:51</td>\n' +
            '    <td>2</td>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Per</td>\n' +
            '    <td>40:49</td>\n' +
            '    <td>20:39</td>\n' +
            '    <td>37:57</td>\n' +
            '    <td>26:39</td>\n' +
            '    <td>1:49:22</td>\n' +
            '    <td>3</td>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Ulla</td>\n' +
            '    <td>39:39</td>\n' +
            '    <td>17:34</td>\n' +
            '    <td>-</td>\n' +
            '    <td>25:32</td>\n' +
            '    <td>2:00:53</td>\n' +
            '    <td>4</td>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Maje</td>\n' +
            '    <td>43:55</td>\n' +
            '    <td>18:55</td>\n' +
            '    <td>44:29</td>\n' +
            '    <td>31:46</td>\n' +
            '    <td>2:04:00</td>\n' +
            '    <td>5</td>\n' +
            '  </tr>\n'
        );
        $("#result").append('<table id="resultTable">\n' +
            '  <tr>\n' +
            '    <th>Lag</th>\n' +
            '    <th>Paddling (min)</th>\n' +
            '    <th>Sim (min)</th>\n' +
            '    <th>Cykel (min)</th>\n' +
            '    <th>Löpning (min)</th>\n' +
            '    <th>Total</th>\n' +
            '    <th>Placering</th>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Johan/Annika</td>\n' +
            '    <td>34:21</td>\n' +
            '    <td>17:21</td>\n' +
            '    <td>38:27</td>\n' +
            '    <td>28:40</td>\n' +
            '    <td>1:39:56</td>\n' +
            '    <td>1</td>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Helena/Fredrik</td>\n' +
            '    <td>41:23</td>\n' +
            '    <td>19:18</td>\n' +
            '    <td>36:17</td>\n' +
            '    <td>27:50</td>\n' +
            '    <td>1:47:52</td>\n' +
            '    <td>2</td>\n' +
            '  </tr>\n' +

            '  <tr>\n' +
            '    <td>Team KLAS</td>\n' +
            '    <td>41:22</td>\n' +
            '    <td>24:16</td>\n' +
            '    <td>38:11</td>\n' +
            '    <td>29:50</td>\n' +
            '    <td>1:54:46</td>\n' +
            '    <td>3</td>\n');
    });

});