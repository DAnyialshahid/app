function viewall() {
    window.location.href = "/search/?q=" + $("#top-search").val()
}

function getUrlParameter(t) {
    var e, n, i = window.location.search.substring(1).split("&");
    for (n = 0; n < i.length; n++)
        if ((e = i[n].split("="))[0] === t) return void 0 === e[1] || e[1]
}! function(t, e) {
    "use strict";
    "object" == typeof module && "object" == typeof module.exports ? module.exports = t.document ? e(t, !0) : function(t) {
        if (!t.document) throw new Error("jQuery requires a window with a document");
        return e(t)
    } : e(t)
}("undefined" != typeof window ? window : this, function(_, t) {
    "use strict";
    var e = [],
        $ = _.document,
        i = Object.getPrototypeOf,
        a = e.slice,
        g = e.concat,
        l = e.push,
        s = e.indexOf,
        n = {},
        o = n.toString,
        f = n.hasOwnProperty,
        r = f.toString,
        c = r.call(Object),
        m = {};

    function v(t, e) {
        var n = (e = e || $).createElement("script");
        n.text = t, e.head.appendChild(n).parentNode.removeChild(n)
    }
    var u = "3.2.1",
        k = function(t, e) {
            return new k.fn.init(t, e)
        },
        h = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
        d = /^-ms-/,
        p = /-([a-z])/g,
        y = function(t, e) {
            return e.toUpperCase()
        };

    function b(t) {
        var e = !!t && "length" in t && t.length,
            n = k.type(t);
        return "function" !== n && !k.isWindow(t) && ("array" === n || 0 === e || "number" == typeof e && 0 < e && e - 1 in t)
    }
    k.fn = k.prototype = {
        jquery: u,
        constructor: k,
        length: 0,
        toArray: function() {
            return a.call(this)
        },
        get: function(t) {
            return null == t ? a.call(this) : t < 0 ? this[t + this.length] : this[t]
        },
        pushStack: function(t) {
            var e = k.merge(this.constructor(), t);
            return e.prevObject = this, e
        },
        each: function(t) {
            return k.each(this, t)
        },
        map: function(n) {
            return this.pushStack(k.map(this, function(t, e) {
                return n.call(t, e, t)
            }))
        },
        slice: function() {
            return this.pushStack(a.apply(this, arguments))
        },
        first: function() {
            return this.eq(0)
        },
        last: function() {
            return this.eq(-1)
        },
        eq: function(t) {
            var e = this.length,
                n = +t + (t < 0 ? e : 0);
            return this.pushStack(0 <= n && n < e ? [this[n]] : [])
        },
        end: function() {
            return this.prevObject || this.constructor()
        },
        push: l,
        sort: e.sort,
        splice: e.splice
    }, k.extend = k.fn.extend = function() {
        var t, e, n, i, s, o, r = arguments[0] || {},
            a = 1,
            l = arguments.length,
            c = !1;
        for ("boolean" == typeof r && (c = r, r = arguments[a] || {}, a++), "object" == typeof r || k.isFunction(r) || (r = {}), a === l && (r = this, a--); a < l; a++)
            if (null != (t = arguments[a]))
                for (e in t) n = r[e], r !== (i = t[e]) && (c && i && (k.isPlainObject(i) || (s = Array.isArray(i))) ? (s ? (s = !1, o = n && Array.isArray(n) ? n : []) : o = n && k.isPlainObject(n) ? n : {}, r[e] = k.extend(c, o, i)) : void 0 !== i && (r[e] = i));
        return r
    }, k.extend({
        expando: "jQuery" + (u + Math.random()).replace(/\D/g, ""),
        isReady: !0,
        error: function(t) {
            throw new Error(t)
        },
        noop: function() {},
        isFunction: function(t) {
            return "function" === k.type(t)
        },
        isWindow: function(t) {
            return null != t && t === t.window
        },
        isNumeric: function(t) {
            var e = k.type(t);
            return ("number" === e || "string" === e) && !isNaN(t - parseFloat(t))
        },
        isPlainObject: function(t) {
            var e, n;
            return !(!t || "[object Object]" !== o.call(t) || (e = i(t)) && ("function" != typeof(n = f.call(e, "constructor") && e.constructor) || r.call(n) !== c))
        },
        isEmptyObject: function(t) {
            var e;
            for (e in t) return !1;
            return !0
        },
        type: function(t) {
            return null == t ? t + "" : "object" == typeof t || "function" == typeof t ? n[o.call(t)] || "object" : typeof t
        },
        globalEval: function(t) {
            v(t)
        },
        camelCase: function(t) {
            return t.replace(d, "ms-").replace(p, y)
        },
        each: function(t, e) {
            var n, i = 0;
            if (b(t))
                for (n = t.length; i < n && !1 !== e.call(t[i], i, t[i]); i++);
            else
                for (i in t)
                    if (!1 === e.call(t[i], i, t[i])) break;
            return t
        },
        trim: function(t) {
            return null == t ? "" : (t + "").replace(h, "")
        },
        makeArray: function(t, e) {
            var n = e || [];
            return null != t && (b(Object(t)) ? k.merge(n, "string" == typeof t ? [t] : t) : l.call(n, t)), n
        },
        inArray: function(t, e, n) {
            return null == e ? -1 : s.call(e, t, n)
        },
        merge: function(t, e) {
            for (var n = +e.length, i = 0, s = t.length; i < n; i++) t[s++] = e[i];
            return t.length = s, t
        },
        grep: function(t, e, n) {
            for (var i = [], s = 0, o = t.length, r = !n; s < o; s++) !e(t[s], s) !== r && i.push(t[s]);
            return i
        },
        map: function(t, e, n) {
            var i, s, o = 0,
                r = [];
            if (b(t))
                for (i = t.length; o < i; o++) null != (s = e(t[o], o, n)) && r.push(s);
            else
                for (o in t) null != (s = e(t[o], o, n)) && r.push(s);
            return g.apply([], r)
        },
        guid: 1,
        proxy: function(t, e) {
            var n, i, s;
            if ("string" == typeof e && (n = t[e], e = t, t = n), k.isFunction(t)) return i = a.call(arguments, 2), (s = function() {
                return t.apply(e || this, i.concat(a.call(arguments)))
            }).guid = t.guid = t.guid || k.guid++, s
        },
        now: Date.now,
        support: m
    }), "function" == typeof Symbol && (k.fn[Symbol.iterator] = e[Symbol.iterator]), k.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function(t, e) {
        n["[object " + e + "]"] = e.toLowerCase()
    });
    var x = function(n) {
        var t, p, x, o, s, f, h, g, w, l, c, C, _, r, $, m, a, u, v, k = "sizzle" + 1 * new Date,
            y = n.document,
            T = 0,
            i = 0,
            d = rt(),
            b = rt(),
            S = rt(),
            D = function(t, e) {
                return t === e && (c = !0), 0
            },
            E = {}.hasOwnProperty,
            e = [],
            A = e.pop,
            P = e.push,
            M = e.push,
            q = e.slice,
            R = function(t, e) {
                for (var n = 0, i = t.length; n < i; n++)
                    if (t[n] === e) return n;
                return -1
            },
            L = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            F = "[\\x20\\t\\r\\n\\f]",
            j = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
            I = "\\[" + F + "*(" + j + ")(?:" + F + "*([*^$|!~]?=)" + F + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + j + "))|)" + F + "*\\]",
            N = ":(" + j + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + I + ")*)|.*)\\)|)",
            H = new RegExp(F + "+", "g"),
            O = new RegExp("^" + F + "+|((?:^|[^\\\\])(?:\\\\.)*)" + F + "+$", "g"),
            z = new RegExp("^" + F + "*," + F + "*"),
            B = new RegExp("^" + F + "*([>+~]|" + F + ")" + F + "*"),
            V = new RegExp("=" + F + "*([^\\]'\"]*?)" + F + "*\\]", "g"),
            W = new RegExp(N),
            U = new RegExp("^" + j + "$"),
            Y = {
                ID: new RegExp("^#(" + j + ")"),
                CLASS: new RegExp("^\\.(" + j + ")"),
                TAG: new RegExp("^(" + j + "|[*])"),
                ATTR: new RegExp("^" + I),
                PSEUDO: new RegExp("^" + N),
                CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + F + "*(even|odd|(([+-]|)(\\d*)n|)" + F + "*(?:([+-]|)" + F + "*(\\d+)|))" + F + "*\\)|)", "i"),
                bool: new RegExp("^(?:" + L + ")$", "i"),
                needsContext: new RegExp("^" + F + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + F + "*((?:-\\d)?\\d*)" + F + "*\\)|)(?=[^-]|$)", "i")
            },
            Q = /^(?:input|select|textarea|button)$/i,
            X = /^h\d$/i,
            K = /^[^{]+\{\s*\[native \w/,
            Z = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
            G = /[+~]/,
            J = new RegExp("\\\\([\\da-f]{1,6}" + F + "?|(" + F + ")|.)", "ig"),
            tt = function(t, e, n) {
                var i = "0x" + e - 65536;
                return i != i || n ? e : i < 0 ? String.fromCharCode(i + 65536) : String.fromCharCode(i >> 10 | 55296, 1023 & i | 56320)
            },
            et = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
            nt = function(t, e) {
                return e ? "\0" === t ? "ï¿½" : t.slice(0, -1) + "\\" + t.charCodeAt(t.length - 1).toString(16) + " " : "\\" + t
            },
            it = function() {
                C()
            },
            st = yt(function(t) {
                return !0 === t.disabled && ("form" in t || "label" in t)
            }, {
                dir: "parentNode",
                next: "legend"
            });
        try {
            M.apply(e = q.call(y.childNodes), y.childNodes), e[y.childNodes.length].nodeType
        } catch (t) {
            M = {
                apply: e.length ? function(t, e) {
                    P.apply(t, q.call(e))
                } : function(t, e) {
                    for (var n = t.length, i = 0; t[n++] = e[i++];);
                    t.length = n - 1
                }
            }
        }

        function ot(t, e, n, i) {
            var s, o, r, a, l, c, u, h = e && e.ownerDocument,
                d = e ? e.nodeType : 9;
            if (n = n || [], "string" != typeof t || !t || 1 !== d && 9 !== d && 11 !== d) return n;
            if (!i && ((e ? e.ownerDocument || e : y) !== _ && C(e), e = e || _, $)) {
                if (11 !== d && (l = Z.exec(t)))
                    if (s = l[1]) {
                        if (9 === d) {
                            if (!(r = e.getElementById(s))) return n;
                            if (r.id === s) return n.push(r), n
                        } else if (h && (r = h.getElementById(s)) && v(e, r) && r.id === s) return n.push(r), n
                    } else {
                        if (l[2]) return M.apply(n, e.getElementsByTagName(t)), n;
                        if ((s = l[3]) && p.getElementsByClassName && e.getElementsByClassName) return M.apply(n, e.getElementsByClassName(s)), n
                    } if (p.qsa && !S[t + " "] && (!m || !m.test(t))) {
                    if (1 !== d) h = e, u = t;
                    else if ("object" !== e.nodeName.toLowerCase()) {
                        for ((a = e.getAttribute("id")) ? a = a.replace(et, nt) : e.setAttribute("id", a = k), o = (c = f(t)).length; o--;) c[o] = "#" + a + " " + vt(c[o]);
                        u = c.join(","), h = G.test(t) && gt(e.parentNode) || e
                    }
                    if (u) try {
                        return M.apply(n, h.querySelectorAll(u)), n
                    } catch (t) {} finally {
                        a === k && e.removeAttribute("id")
                    }
                }
            }
            return g(t.replace(O, "$1"), e, n, i)
        }

        function rt() {
            var i = [];
            return function t(e, n) {
                return i.push(e + " ") > x.cacheLength && delete t[i.shift()], t[e + " "] = n
            }
        }

        function at(t) {
            return t[k] = !0, t
        }

        function lt(t) {
            var e = _.createElement("fieldset");
            try {
                return !!t(e)
            } catch (t) {
                return !1
            } finally {
                e.parentNode && e.parentNode.removeChild(e), e = null
            }
        }

        function ct(t, e) {
            for (var n = t.split("|"), i = n.length; i--;) x.attrHandle[n[i]] = e
        }

        function ut(t, e) {
            var n = e && t,
                i = n && 1 === t.nodeType && 1 === e.nodeType && t.sourceIndex - e.sourceIndex;
            if (i) return i;
            if (n)
                for (; n = n.nextSibling;)
                    if (n === e) return -1;
            return t ? 1 : -1
        }

        function ht(e) {
            return function(t) {
                return "input" === t.nodeName.toLowerCase() && t.type === e
            }
        }

        function dt(n) {
            return function(t) {
                var e = t.nodeName.toLowerCase();
                return ("input" === e || "button" === e) && t.type === n
            }
        }

        function pt(e) {
            return function(t) {
                return "form" in t ? t.parentNode && !1 === t.disabled ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === e : t.disabled === e : t.isDisabled === e || t.isDisabled !== !e && st(t) === e : t.disabled === e : "label" in t && t.disabled === e
            }
        }

        function ft(r) {
            return at(function(o) {
                return o = +o, at(function(t, e) {
                    for (var n, i = r([], t.length, o), s = i.length; s--;) t[n = i[s]] && (t[n] = !(e[n] = t[n]))
                })
            })
        }

        function gt(t) {
            return t && void 0 !== t.getElementsByTagName && t
        }
        for (t in p = ot.support = {}, s = ot.isXML = function(t) {
                var e = t && (t.ownerDocument || t).documentElement;
                return !!e && "HTML" !== e.nodeName
            }, C = ot.setDocument = function(t) {
                var e, n, i = t ? t.ownerDocument || t : y;
                return i !== _ && 9 === i.nodeType && i.documentElement && (r = (_ = i).documentElement, $ = !s(_), y !== _ && (n = _.defaultView) && n.top !== n && (n.addEventListener ? n.addEventListener("unload", it, !1) : n.attachEvent && n.attachEvent("onunload", it)), p.attributes = lt(function(t) {
                    return t.className = "i", !t.getAttribute("className")
                }), p.getElementsByTagName = lt(function(t) {
                    return t.appendChild(_.createComment("")), !t.getElementsByTagName("*").length
                }), p.getElementsByClassName = K.test(_.getElementsByClassName), p.getById = lt(function(t) {
                    return r.appendChild(t).id = k, !_.getElementsByName || !_.getElementsByName(k).length
                }), p.getById ? (x.filter.ID = function(t) {
                    var e = t.replace(J, tt);
                    return function(t) {
                        return t.getAttribute("id") === e
                    }
                }, x.find.ID = function(t, e) {
                    if (void 0 !== e.getElementById && $) {
                        var n = e.getElementById(t);
                        return n ? [n] : []
                    }
                }) : (x.filter.ID = function(t) {
                    var n = t.replace(J, tt);
                    return function(t) {
                        var e = void 0 !== t.getAttributeNode && t.getAttributeNode("id");
                        return e && e.value === n
                    }
                }, x.find.ID = function(t, e) {
                    if (void 0 !== e.getElementById && $) {
                        var n, i, s, o = e.getElementById(t);
                        if (o) {
                            if ((n = o.getAttributeNode("id")) && n.value === t) return [o];
                            for (s = e.getElementsByName(t), i = 0; o = s[i++];)
                                if ((n = o.getAttributeNode("id")) && n.value === t) return [o]
                        }
                        return []
                    }
                }), x.find.TAG = p.getElementsByTagName ? function(t, e) {
                    return void 0 !== e.getElementsByTagName ? e.getElementsByTagName(t) : p.qsa ? e.querySelectorAll(t) : void 0
                } : function(t, e) {
                    var n, i = [],
                        s = 0,
                        o = e.getElementsByTagName(t);
                    if ("*" === t) {
                        for (; n = o[s++];) 1 === n.nodeType && i.push(n);
                        return i
                    }
                    return o
                }, x.find.CLASS = p.getElementsByClassName && function(t, e) {
                    if (void 0 !== e.getElementsByClassName && $) return e.getElementsByClassName(t)
                }, a = [], m = [], (p.qsa = K.test(_.querySelectorAll)) && (lt(function(t) {
                    r.appendChild(t).innerHTML = "<a id='" + k + "'></a><select id='" + k + "-\r\\' msallowcapture=''><option selected=''></option></select>", t.querySelectorAll("[msallowcapture^='']").length && m.push("[*^$]=" + F + "*(?:''|\"\")"), t.querySelectorAll("[selected]").length || m.push("\\[" + F + "*(?:value|" + L + ")"), t.querySelectorAll("[id~=" + k + "-]").length || m.push("~="), t.querySelectorAll(":checked").length || m.push(":checked"), t.querySelectorAll("a#" + k + "+*").length || m.push(".#.+[+~]")
                }), lt(function(t) {
                    t.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                    var e = _.createElement("input");
                    e.setAttribute("type", "hidden"), t.appendChild(e).setAttribute("name", "D"), t.querySelectorAll("[name=d]").length && m.push("name" + F + "*[*^$|!~]?="), 2 !== t.querySelectorAll(":enabled").length && m.push(":enabled", ":disabled"), r.appendChild(t).disabled = !0, 2 !== t.querySelectorAll(":disabled").length && m.push(":enabled", ":disabled"), t.querySelectorAll("*,:x"), m.push(",.*:")
                })), (p.matchesSelector = K.test(u = r.matches || r.webkitMatchesSelector || r.mozMatchesSelector || r.oMatchesSelector || r.msMatchesSelector)) && lt(function(t) {
                    p.disconnectedMatch = u.call(t, "*"), u.call(t, "[s!='']:x"), a.push("!=", N)
                }), m = m.length && new RegExp(m.join("|")), a = a.length && new RegExp(a.join("|")), e = K.test(r.compareDocumentPosition), v = e || K.test(r.contains) ? function(t, e) {
                    var n = 9 === t.nodeType ? t.documentElement : t,
                        i = e && e.parentNode;
                    return t === i || !(!i || 1 !== i.nodeType || !(n.contains ? n.contains(i) : t.compareDocumentPosition && 16 & t.compareDocumentPosition(i)))
                } : function(t, e) {
                    if (e)
                        for (; e = e.parentNode;)
                            if (e === t) return !0;
                    return !1
                }, D = e ? function(t, e) {
                    if (t === e) return c = !0, 0;
                    var n = !t.compareDocumentPosition - !e.compareDocumentPosition;
                    return n || (1 & (n = (t.ownerDocument || t) === (e.ownerDocument || e) ? t.compareDocumentPosition(e) : 1) || !p.sortDetached && e.compareDocumentPosition(t) === n ? t === _ || t.ownerDocument === y && v(y, t) ? -1 : e === _ || e.ownerDocument === y && v(y, e) ? 1 : l ? R(l, t) - R(l, e) : 0 : 4 & n ? -1 : 1)
                } : function(t, e) {
                    if (t === e) return c = !0, 0;
                    var n, i = 0,
                        s = t.parentNode,
                        o = e.parentNode,
                        r = [t],
                        a = [e];
                    if (!s || !o) return t === _ ? -1 : e === _ ? 1 : s ? -1 : o ? 1 : l ? R(l, t) - R(l, e) : 0;
                    if (s === o) return ut(t, e);
                    for (n = t; n = n.parentNode;) r.unshift(n);
                    for (n = e; n = n.parentNode;) a.unshift(n);
                    for (; r[i] === a[i];) i++;
                    return i ? ut(r[i], a[i]) : r[i] === y ? -1 : a[i] === y ? 1 : 0
                }), _
            }, ot.matches = function(t, e) {
                return ot(t, null, null, e)
            }, ot.matchesSelector = function(t, e) {
                if ((t.ownerDocument || t) !== _ && C(t), e = e.replace(V, "='$1']"), p.matchesSelector && $ && !S[e + " "] && (!a || !a.test(e)) && (!m || !m.test(e))) try {
                    var n = u.call(t, e);
                    if (n || p.disconnectedMatch || t.document && 11 !== t.document.nodeType) return n
                } catch (t) {}
                return 0 < ot(e, _, null, [t]).length
            }, ot.contains = function(t, e) {
                return (t.ownerDocument || t) !== _ && C(t), v(t, e)
            }, ot.attr = function(t, e) {
                (t.ownerDocument || t) !== _ && C(t);
                var n = x.attrHandle[e.toLowerCase()],
                    i = n && E.call(x.attrHandle, e.toLowerCase()) ? n(t, e, !$) : void 0;
                return void 0 !== i ? i : p.attributes || !$ ? t.getAttribute(e) : (i = t.getAttributeNode(e)) && i.specified ? i.value : null
            }, ot.escape = function(t) {
                return (t + "").replace(et, nt)
            }, ot.error = function(t) {
                throw new Error("Syntax error, unrecognized expression: " + t)
            }, ot.uniqueSort = function(t) {
                var e, n = [],
                    i = 0,
                    s = 0;
                if (c = !p.detectDuplicates, l = !p.sortStable && t.slice(0), t.sort(D), c) {
                    for (; e = t[s++];) e === t[s] && (i = n.push(s));
                    for (; i--;) t.splice(n[i], 1)
                }
                return l = null, t
            }, o = ot.getText = function(t) {
                var e, n = "",
                    i = 0,
                    s = t.nodeType;
                if (s) {
                    if (1 === s || 9 === s || 11 === s) {
                        if ("string" == typeof t.textContent) return t.textContent;
                        for (t = t.firstChild; t; t = t.nextSibling) n += o(t)
                    } else if (3 === s || 4 === s) return t.nodeValue
                } else
                    for (; e = t[i++];) n += o(e);
                return n
            }, (x = ot.selectors = {
                cacheLength: 50,
                createPseudo: at,
                match: Y,
                attrHandle: {},
                find: {},
                relative: {
                    ">": {
                        dir: "parentNode",
                        first: !0
                    },
                    " ": {
                        dir: "parentNode"
                    },
                    "+": {
                        dir: "previousSibling",
                        first: !0
                    },
                    "~": {
                        dir: "previousSibling"
                    }
                },
                preFilter: {
                    ATTR: function(t) {
                        return t[1] = t[1].replace(J, tt), t[3] = (t[3] || t[4] || t[5] || "").replace(J, tt), "~=" === t[2] && (t[3] = " " + t[3] + " "), t.slice(0, 4)
                    },
                    CHILD: function(t) {
                        return t[1] = t[1].toLowerCase(), "nth" === t[1].slice(0, 3) ? (t[3] || ot.error(t[0]), t[4] = +(t[4] ? t[5] + (t[6] || 1) : 2 * ("even" === t[3] || "odd" === t[3])), t[5] = +(t[7] + t[8] || "odd" === t[3])) : t[3] && ot.error(t[0]), t
                    },
                    PSEUDO: function(t) {
                        var e, n = !t[6] && t[2];
                        return Y.CHILD.test(t[0]) ? null : (t[3] ? t[2] = t[4] || t[5] || "" : n && W.test(n) && (e = f(n, !0)) && (e = n.indexOf(")", n.length - e) - n.length) && (t[0] = t[0].slice(0, e), t[2] = n.slice(0, e)), t.slice(0, 3))
                    }
                },
                filter: {
                    TAG: function(t) {
                        var e = t.replace(J, tt).toLowerCase();
                        return "*" === t ? function() {
                            return !0
                        } : function(t) {
                            return t.nodeName && t.nodeName.toLowerCase() === e
                        }
                    },
                    CLASS: function(t) {
                        var e = d[t + " "];
                        return e || (e = new RegExp("(^|" + F + ")" + t + "(" + F + "|$)")) && d(t, function(t) {
                            return e.test("string" == typeof t.className && t.className || void 0 !== t.getAttribute && t.getAttribute("class") || "")
                        })
                    },
                    ATTR: function(n, i, s) {
                        return function(t) {
                            var e = ot.attr(t, n);
                            return null == e ? "!=" === i : !i || (e += "", "=" === i ? e === s : "!=" === i ? e !== s : "^=" === i ? s && 0 === e.indexOf(s) : "*=" === i ? s && -1 < e.indexOf(s) : "$=" === i ? s && e.slice(-s.length) === s : "~=" === i ? -1 < (" " + e.replace(H, " ") + " ").indexOf(s) : "|=" === i && (e === s || e.slice(0, s.length + 1) === s + "-"))
                        }
                    },
                    CHILD: function(f, t, e, g, m) {
                        var v = "nth" !== f.slice(0, 3),
                            y = "last" !== f.slice(-4),
                            b = "of-type" === t;
                        return 1 === g && 0 === m ? function(t) {
                            return !!t.parentNode
                        } : function(t, e, n) {
                            var i, s, o, r, a, l, c = v !== y ? "nextSibling" : "previousSibling",
                                u = t.parentNode,
                                h = b && t.nodeName.toLowerCase(),
                                d = !n && !b,
                                p = !1;
                            if (u) {
                                if (v) {
                                    for (; c;) {
                                        for (r = t; r = r[c];)
                                            if (b ? r.nodeName.toLowerCase() === h : 1 === r.nodeType) return !1;
                                        l = c = "only" === f && !l && "nextSibling"
                                    }
                                    return !0
                                }
                                if (l = [y ? u.firstChild : u.lastChild], y && d) {
                                    for (p = (a = (i = (s = (o = (r = u)[k] || (r[k] = {}))[r.uniqueID] || (o[r.uniqueID] = {}))[f] || [])[0] === T && i[1]) && i[2], r = a && u.childNodes[a]; r = ++a && r && r[c] || (p = a = 0) || l.pop();)
                                        if (1 === r.nodeType && ++p && r === t) {
                                            s[f] = [T, a, p];
                                            break
                                        }
                                } else if (d && (p = a = (i = (s = (o = (r = t)[k] || (r[k] = {}))[r.uniqueID] || (o[r.uniqueID] = {}))[f] || [])[0] === T && i[1]), !1 === p)
                                    for (;
                                        (r = ++a && r && r[c] || (p = a = 0) || l.pop()) && ((b ? r.nodeName.toLowerCase() !== h : 1 !== r.nodeType) || !++p || (d && ((s = (o = r[k] || (r[k] = {}))[r.uniqueID] || (o[r.uniqueID] = {}))[f] = [T, p]), r !== t)););
                                return (p -= m) === g || p % g == 0 && 0 <= p / g
                            }
                        }
                    },
                    PSEUDO: function(t, o) {
                        var e, r = x.pseudos[t] || x.setFilters[t.toLowerCase()] || ot.error("unsupported pseudo: " + t);
                        return r[k] ? r(o) : 1 < r.length ? (e = [t, t, "", o], x.setFilters.hasOwnProperty(t.toLowerCase()) ? at(function(t, e) {
                            for (var n, i = r(t, o), s = i.length; s--;) t[n = R(t, i[s])] = !(e[n] = i[s])
                        }) : function(t) {
                            return r(t, 0, e)
                        }) : r
                    }
                },
                pseudos: {
                    not: at(function(t) {
                        var i = [],
                            s = [],
                            a = h(t.replace(O, "$1"));
                        return a[k] ? at(function(t, e, n, i) {
                            for (var s, o = a(t, null, i, []), r = t.length; r--;)(s = o[r]) && (t[r] = !(e[r] = s))
                        }) : function(t, e, n) {
                            return i[0] = t, a(i, null, n, s), i[0] = null, !s.pop()
                        }
                    }),
                    has: at(function(e) {
                        return function(t) {
                            return 0 < ot(e, t).length
                        }
                    }),
                    contains: at(function(e) {
                        return e = e.replace(J, tt),
                            function(t) {
                                return -1 < (t.textContent || t.innerText || o(t)).indexOf(e)
                            }
                    }),
                    lang: at(function(n) {
                        return U.test(n || "") || ot.error("unsupported lang: " + n), n = n.replace(J, tt).toLowerCase(),
                            function(t) {
                                var e;
                                do {
                                    if (e = $ ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (e = e.toLowerCase()) === n || 0 === e.indexOf(n + "-")
                                } while ((t = t.parentNode) && 1 === t.nodeType);
                                return !1
                            }
                    }),
                    target: function(t) {
                        var e = n.location && n.location.hash;
                        return e && e.slice(1) === t.id
                    },
                    root: function(t) {
                        return t === r
                    },
                    focus: function(t) {
                        return t === _.activeElement && (!_.hasFocus || _.hasFocus()) && !!(t.type || t.href || ~t.tabIndex)
                    },
                    enabled: pt(!1),
                    disabled: pt(!0),
                    checked: function(t) {
                        var e = t.nodeName.toLowerCase();
                        return "input" === e && !!t.checked || "option" === e && !!t.selected
                    },
                    selected: function(t) {
                        return t.parentNode && t.parentNode.selectedIndex, !0 === t.selected
                    },
                    empty: function(t) {
                        for (t = t.firstChild; t; t = t.nextSibling)
                            if (t.nodeType < 6) return !1;
                        return !0
                    },
                    parent: function(t) {
                        return !x.pseudos.empty(t)
                    },
                    header: function(t) {
                        return X.test(t.nodeName)
                    },
                    input: function(t) {
                        return Q.test(t.nodeName)
                    },
                    button: function(t) {
                        var e = t.nodeName.toLowerCase();
                        return "input" === e && "button" === t.type || "button" === e
                    },
                    text: function(t) {
                        var e;
                        return "input" === t.nodeName.toLowerCase() && "text" === t.type && (null == (e = t.getAttribute("type")) || "text" === e.toLowerCase())
                    },
                    first: ft(function() {
                        return [0]
                    }),
                    last: ft(function(t, e) {
                        return [e - 1]
                    }),
                    eq: ft(function(t, e, n) {
                        return [n < 0 ? n + e : n]
                    }),
                    even: ft(function(t, e) {
                        for (var n = 0; n < e; n += 2) t.push(n);
                        return t
                    }),
                    odd: ft(function(t, e) {
                        for (var n = 1; n < e; n += 2) t.push(n);
                        return t
                    }),
                    lt: ft(function(t, e, n) {
                        for (var i = n < 0 ? n + e : n; 0 <= --i;) t.push(i);
                        return t
                    }),
                    gt: ft(function(t, e, n) {
                        for (var i = n < 0 ? n + e : n; ++i < e;) t.push(i);
                        return t
                    })
                }
            }).pseudos.nth = x.pseudos.eq, {
                radio: !0,
                checkbox: !0,
                file: !0,
                password: !0,
                image: !0
            }) x.pseudos[t] = ht(t);
        for (t in {
                submit: !0,
                reset: !0
            }) x.pseudos[t] = dt(t);

        function mt() {}

        function vt(t) {
            for (var e = 0, n = t.length, i = ""; e < n; e++) i += t[e].value;
            return i
        }

        function yt(a, t, e) {
            var l = t.dir,
                c = t.next,
                u = c || l,
                h = e && "parentNode" === u,
                d = i++;
            return t.first ? function(t, e, n) {
                for (; t = t[l];)
                    if (1 === t.nodeType || h) return a(t, e, n);
                return !1
            } : function(t, e, n) {
                var i, s, o, r = [T, d];
                if (n) {
                    for (; t = t[l];)
                        if ((1 === t.nodeType || h) && a(t, e, n)) return !0
                } else
                    for (; t = t[l];)
                        if (1 === t.nodeType || h)
                            if (s = (o = t[k] || (t[k] = {}))[t.uniqueID] || (o[t.uniqueID] = {}), c && c === t.nodeName.toLowerCase()) t = t[l] || t;
                            else {
                                if ((i = s[u]) && i[0] === T && i[1] === d) return r[2] = i[2];
                                if ((s[u] = r)[2] = a(t, e, n)) return !0
                            } return !1
            }
        }

        function bt(s) {
            return 1 < s.length ? function(t, e, n) {
                for (var i = s.length; i--;)
                    if (!s[i](t, e, n)) return !1;
                return !0
            } : s[0]
        }

        function xt(t, e, n, i, s) {
            for (var o, r = [], a = 0, l = t.length, c = null != e; a < l; a++)(o = t[a]) && (n && !n(o, i, s) || (r.push(o), c && e.push(a)));
            return r
        }

        function wt(p, f, g, m, v, t) {
            return m && !m[k] && (m = wt(m)), v && !v[k] && (v = wt(v, t)), at(function(t, e, n, i) {
                var s, o, r, a = [],
                    l = [],
                    c = e.length,
                    u = t || function(t, e, n) {
                        for (var i = 0, s = e.length; i < s; i++) ot(t, e[i], n);
                        return n
                    }(f || "*", n.nodeType ? [n] : n, []),
                    h = !p || !t && f ? u : xt(u, a, p, n, i),
                    d = g ? v || (t ? p : c || m) ? [] : e : h;
                if (g && g(h, d, n, i), m)
                    for (s = xt(d, l), m(s, [], n, i), o = s.length; o--;)(r = s[o]) && (d[l[o]] = !(h[l[o]] = r));
                if (t) {
                    if (v || p) {
                        if (v) {
                            for (s = [], o = d.length; o--;)(r = d[o]) && s.push(h[o] = r);
                            v(null, d = [], s, i)
                        }
                        for (o = d.length; o--;)(r = d[o]) && -1 < (s = v ? R(t, r) : a[o]) && (t[s] = !(e[s] = r))
                    }
                } else d = xt(d === e ? d.splice(c, d.length) : d), v ? v(null, e, d, i) : M.apply(e, d)
            })
        }

        function Ct(t) {
            for (var s, e, n, i = t.length, o = x.relative[t[0].type], r = o || x.relative[" "], a = o ? 1 : 0, l = yt(function(t) {
                    return t === s
                }, r, !0), c = yt(function(t) {
                    return -1 < R(s, t)
                }, r, !0), u = [function(t, e, n) {
                    var i = !o && (n || e !== w) || ((s = e).nodeType ? l(t, e, n) : c(t, e, n));
                    return s = null, i
                }]; a < i; a++)
                if (e = x.relative[t[a].type]) u = [yt(bt(u), e)];
                else {
                    if ((e = x.filter[t[a].type].apply(null, t[a].matches))[k]) {
                        for (n = ++a; n < i && !x.relative[t[n].type]; n++);
                        return wt(1 < a && bt(u), 1 < a && vt(t.slice(0, a - 1).concat({
                            value: " " === t[a - 2].type ? "*" : ""
                        })).replace(O, "$1"), e, a < n && Ct(t.slice(a, n)), n < i && Ct(t = t.slice(n)), n < i && vt(t))
                    }
                    u.push(e)
                } return bt(u)
        }
        return mt.prototype = x.filters = x.pseudos, x.setFilters = new mt, f = ot.tokenize = function(t, e) {
            var n, i, s, o, r, a, l, c = b[t + " "];
            if (c) return e ? 0 : c.slice(0);
            for (r = t, a = [], l = x.preFilter; r;) {
                for (o in n && !(i = z.exec(r)) || (i && (r = r.slice(i[0].length) || r), a.push(s = [])), n = !1, (i = B.exec(r)) && (n = i.shift(), s.push({
                        value: n,
                        type: i[0].replace(O, " ")
                    }), r = r.slice(n.length)), x.filter) !(i = Y[o].exec(r)) || l[o] && !(i = l[o](i)) || (n = i.shift(), s.push({
                    value: n,
                    type: o,
                    matches: i
                }), r = r.slice(n.length));
                if (!n) break
            }
            return e ? r.length : r ? ot.error(t) : b(t, a).slice(0)
        }, h = ot.compile = function(t, e) {
            var n, m, v, y, b, i, s = [],
                o = [],
                r = S[t + " "];
            if (!r) {
                for (e || (e = f(t)), n = e.length; n--;)(r = Ct(e[n]))[k] ? s.push(r) : o.push(r);
                (r = S(t, (m = o, y = 0 < (v = s).length, b = 0 < m.length, i = function(t, e, n, i, s) {
                    var o, r, a, l = 0,
                        c = "0",
                        u = t && [],
                        h = [],
                        d = w,
                        p = t || b && x.find.TAG("*", s),
                        f = T += null == d ? 1 : Math.random() || .1,
                        g = p.length;
                    for (s && (w = e === _ || e || s); c !== g && null != (o = p[c]); c++) {
                        if (b && o) {
                            for (r = 0, e || o.ownerDocument === _ || (C(o), n = !$); a = m[r++];)
                                if (a(o, e || _, n)) {
                                    i.push(o);
                                    break
                                } s && (T = f)
                        }
                        y && ((o = !a && o) && l--, t && u.push(o))
                    }
                    if (l += c, y && c !== l) {
                        for (r = 0; a = v[r++];) a(u, h, e, n);
                        if (t) {
                            if (0 < l)
                                for (; c--;) u[c] || h[c] || (h[c] = A.call(i));
                            h = xt(h)
                        }
                        M.apply(i, h), s && !t && 0 < h.length && 1 < l + v.length && ot.uniqueSort(i)
                    }
                    return s && (T = f, w = d), u
                }, y ? at(i) : i))).selector = t
            }
            return r
        }, g = ot.select = function(t, e, n, i) {
            var s, o, r, a, l, c = "function" == typeof t && t,
                u = !i && f(t = c.selector || t);
            if (n = n || [], 1 === u.length) {
                if (2 < (o = u[0] = u[0].slice(0)).length && "ID" === (r = o[0]).type && 9 === e.nodeType && $ && x.relative[o[1].type]) {
                    if (!(e = (x.find.ID(r.matches[0].replace(J, tt), e) || [])[0])) return n;
                    c && (e = e.parentNode), t = t.slice(o.shift().value.length)
                }
                for (s = Y.needsContext.test(t) ? 0 : o.length; s-- && (r = o[s], !x.relative[a = r.type]);)
                    if ((l = x.find[a]) && (i = l(r.matches[0].replace(J, tt), G.test(o[0].type) && gt(e.parentNode) || e))) {
                        if (o.splice(s, 1), !(t = i.length && vt(o))) return M.apply(n, i), n;
                        break
                    }
            }
            return (c || h(t, u))(i, e, !$, n, !e || G.test(t) && gt(e.parentNode) || e), n
        }, p.sortStable = k.split("").sort(D).join("") === k, p.detectDuplicates = !!c, C(), p.sortDetached = lt(function(t) {
            return 1 & t.compareDocumentPosition(_.createElement("fieldset"))
        }), lt(function(t) {
            return t.innerHTML = "<a href='#'></a>", "#" === t.firstChild.getAttribute("href")
        }) || ct("type|href|height|width", function(t, e, n) {
            if (!n) return t.getAttribute(e, "type" === e.toLowerCase() ? 1 : 2)
        }), p.attributes && lt(function(t) {
            return t.innerHTML = "<input/>", t.firstChild.setAttribute("value", ""), "" === t.firstChild.getAttribute("value")
        }) || ct("value", function(t, e, n) {
            if (!n && "input" === t.nodeName.toLowerCase()) return t.defaultValue
        }), lt(function(t) {
            return null == t.getAttribute("disabled")
        }) || ct(L, function(t, e, n) {
            var i;
            if (!n) return !0 === t[e] ? e.toLowerCase() : (i = t.getAttributeNode(e)) && i.specified ? i.value : null
        }), ot
    }(_);
    k.find = x, k.expr = x.selectors, k.expr[":"] = k.expr.pseudos, k.uniqueSort = k.unique = x.uniqueSort, k.text = x.getText, k.isXMLDoc = x.isXML, k.contains = x.contains, k.escapeSelector = x.escape;
    var w = function(t, e, n) {
            for (var i = [], s = void 0 !== n;
                (t = t[e]) && 9 !== t.nodeType;)
                if (1 === t.nodeType) {
                    if (s && k(t).is(n)) break;
                    i.push(t)
                } return i
        },
        C = function(t, e) {
            for (var n = []; t; t = t.nextSibling) 1 === t.nodeType && t !== e && n.push(t);
            return n
        },
        T = k.expr.match.needsContext;

    function S(t, e) {
        return t.nodeName && t.nodeName.toLowerCase() === e.toLowerCase()
    }
    var D = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i,
        E = /^.[^:#\[\.,]*$/;

    function A(t, n, i) {
        return k.isFunction(n) ? k.grep(t, function(t, e) {
            return !!n.call(t, e, t) !== i
        }) : n.nodeType ? k.grep(t, function(t) {
            return t === n !== i
        }) : "string" != typeof n ? k.grep(t, function(t) {
            return -1 < s.call(n, t) !== i
        }) : E.test(n) ? k.filter(n, t, i) : (n = k.filter(n, t), k.grep(t, function(t) {
            return -1 < s.call(n, t) !== i && 1 === t.nodeType
        }))
    }
    k.filter = function(t, e, n) {
        var i = e[0];
        return n && (t = ":not(" + t + ")"), 1 === e.length && 1 === i.nodeType ? k.find.matchesSelector(i, t) ? [i] : [] : k.find.matches(t, k.grep(e, function(t) {
            return 1 === t.nodeType
        }))
    }, k.fn.extend({
        find: function(t) {
            var e, n, i = this.length,
                s = this;
            if ("string" != typeof t) return this.pushStack(k(t).filter(function() {
                for (e = 0; e < i; e++)
                    if (k.contains(s[e], this)) return !0
            }));
            for (n = this.pushStack([]), e = 0; e < i; e++) k.find(t, s[e], n);
            return 1 < i ? k.uniqueSort(n) : n
        },
        filter: function(t) {
            return this.pushStack(A(this, t || [], !1))
        },
        not: function(t) {
            return this.pushStack(A(this, t || [], !0))
        },
        is: function(t) {
            return !!A(this, "string" == typeof t && T.test(t) ? k(t) : t || [], !1).length
        }
    });
    var P, M = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
    (k.fn.init = function(t, e, n) {
        var i, s;
        if (!t) return this;
        if (n = n || P, "string" == typeof t) {
            if (!(i = "<" === t[0] && ">" === t[t.length - 1] && 3 <= t.length ? [null, t, null] : M.exec(t)) || !i[1] && e) return !e || e.jquery ? (e || n).find(t) : this.constructor(e).find(t);
            if (i[1]) {
                if (e = e instanceof k ? e[0] : e, k.merge(this, k.parseHTML(i[1], e && e.nodeType ? e.ownerDocument || e : $, !0)), D.test(i[1]) && k.isPlainObject(e))
                    for (i in e) k.isFunction(this[i]) ? this[i](e[i]) : this.attr(i, e[i]);
                return this
            }
            return (s = $.getElementById(i[2])) && (this[0] = s, this.length = 1), this
        }
        return t.nodeType ? (this[0] = t, this.length = 1, this) : k.isFunction(t) ? void 0 !== n.ready ? n.ready(t) : t(k) : k.makeArray(t, this)
    }).prototype = k.fn, P = k($);
    var q = /^(?:parents|prev(?:Until|All))/,
        R = {
            children: !0,
            contents: !0,
            next: !0,
            prev: !0
        };

    function L(t, e) {
        for (;
            (t = t[e]) && 1 !== t.nodeType;);
        return t
    }
    k.fn.extend({
        has: function(t) {
            var e = k(t, this),
                n = e.length;
            return this.filter(function() {
                for (var t = 0; t < n; t++)
                    if (k.contains(this, e[t])) return !0
            })
        },
        closest: function(t, e) {
            var n, i = 0,
                s = this.length,
                o = [],
                r = "string" != typeof t && k(t);
            if (!T.test(t))
                for (; i < s; i++)
                    for (n = this[i]; n && n !== e; n = n.parentNode)
                        if (n.nodeType < 11 && (r ? -1 < r.index(n) : 1 === n.nodeType && k.find.matchesSelector(n, t))) {
                            o.push(n);
                            break
                        } return this.pushStack(1 < o.length ? k.uniqueSort(o) : o)
        },
        index: function(t) {
            return t ? "string" == typeof t ? s.call(k(t), this[0]) : s.call(this, t.jquery ? t[0] : t) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
        },
        add: function(t, e) {
            return this.pushStack(k.uniqueSort(k.merge(this.get(), k(t, e))))
        },
        addBack: function(t) {
            return this.add(null == t ? this.prevObject : this.prevObject.filter(t))
        }
    }), k.each({
        parent: function(t) {
            var e = t.parentNode;
            return e && 11 !== e.nodeType ? e : null
        },
        parents: function(t) {
            return w(t, "parentNode")
        },
        parentsUntil: function(t, e, n) {
            return w(t, "parentNode", n)
        },
        next: function(t) {
            return L(t, "nextSibling")
        },
        prev: function(t) {
            return L(t, "previousSibling")
        },
        nextAll: function(t) {
            return w(t, "nextSibling")
        },
        prevAll: function(t) {
            return w(t, "previousSibling")
        },
        nextUntil: function(t, e, n) {
            return w(t, "nextSibling", n)
        },
        prevUntil: function(t, e, n) {
            return w(t, "previousSibling", n)
        },
        siblings: function(t) {
            return C((t.parentNode || {}).firstChild, t)
        },
        children: function(t) {
            return C(t.firstChild)
        },
        contents: function(t) {
            return S(t, "iframe") ? t.contentDocument : (S(t, "template") && (t = t.content || t), k.merge([], t.childNodes))
        }
    }, function(i, s) {
        k.fn[i] = function(t, e) {
            var n = k.map(this, s, t);
            return "Until" !== i.slice(-5) && (e = t), e && "string" == typeof e && (n = k.filter(e, n)), 1 < this.length && (R[i] || k.uniqueSort(n), q.test(i) && n.reverse()), this.pushStack(n)
        }
    });
    var F = /[^\x20\t\r\n\f]+/g;

    function j(t) {
        return t
    }

    function I(t) {
        throw t
    }

    function N(t, e, n, i) {
        var s;
        try {
            t && k.isFunction(s = t.promise) ? s.call(t).done(e).fail(n) : t && k.isFunction(s = t.then) ? s.call(t, e, n) : e.apply(void 0, [t].slice(i))
        } catch (t) {
            n.apply(void 0, [t])
        }
    }
    k.Callbacks = function(i) {
        var t, n;
        i = "string" == typeof i ? (t = i, n = {}, k.each(t.match(F) || [], function(t, e) {
            n[e] = !0
        }), n) : k.extend({}, i);
        var s, e, o, r, a = [],
            l = [],
            c = -1,
            u = function() {
                for (r = r || i.once, o = s = !0; l.length; c = -1)
                    for (e = l.shift(); ++c < a.length;) !1 === a[c].apply(e[0], e[1]) && i.stopOnFalse && (c = a.length, e = !1);
                i.memory || (e = !1), s = !1, r && (a = e ? [] : "")
            },
            h = {
                add: function() {
                    return a && (e && !s && (c = a.length - 1, l.push(e)), function n(t) {
                        k.each(t, function(t, e) {
                            k.isFunction(e) ? i.unique && h.has(e) || a.push(e) : e && e.length && "string" !== k.type(e) && n(e)
                        })
                    }(arguments), e && !s && u()), this
                },
                remove: function() {
                    return k.each(arguments, function(t, e) {
                        for (var n; - 1 < (n = k.inArray(e, a, n));) a.splice(n, 1), n <= c && c--
                    }), this
                },
                has: function(t) {
                    return t ? -1 < k.inArray(t, a) : 0 < a.length
                },
                empty: function() {
                    return a && (a = []), this
                },
                disable: function() {
                    return r = l = [], a = e = "", this
                },
                disabled: function() {
                    return !a
                },
                lock: function() {
                    return r = l = [], e || s || (a = e = ""), this
                },
                locked: function() {
                    return !!r
                },
                fireWith: function(t, e) {
                    return r || (e = [t, (e = e || []).slice ? e.slice() : e], l.push(e), s || u()), this
                },
                fire: function() {
                    return h.fireWith(this, arguments), this
                },
                fired: function() {
                    return !!o
                }
            };
        return h
    }, k.extend({
        Deferred: function(t) {
            var o = [
                    ["notify", "progress", k.Callbacks("memory"), k.Callbacks("memory"), 2],
                    ["resolve", "done", k.Callbacks("once memory"), k.Callbacks("once memory"), 0, "resolved"],
                    ["reject", "fail", k.Callbacks("once memory"), k.Callbacks("once memory"), 1, "rejected"]
                ],
                s = "pending",
                r = {
                    state: function() {
                        return s
                    },
                    always: function() {
                        return a.done(arguments).fail(arguments), this
                    },
                    catch: function(t) {
                        return r.then(null, t)
                    },
                    pipe: function() {
                        var s = arguments;
                        return k.Deferred(function(i) {
                            k.each(o, function(t, e) {
                                var n = k.isFunction(s[e[4]]) && s[e[4]];
                                a[e[1]](function() {
                                    var t = n && n.apply(this, arguments);
                                    t && k.isFunction(t.promise) ? t.promise().progress(i.notify).done(i.resolve).fail(i.reject) : i[e[0] + "With"](this, n ? [t] : arguments)
                                })
                            }), s = null
                        }).promise()
                    },
                    then: function(e, n, i) {
                        var l = 0;

                        function c(s, o, r, a) {
                            return function() {
                                var n = this,
                                    i = arguments,
                                    t = function() {
                                        var t, e;
                                        if (!(s < l)) {
                                            if ((t = r.apply(n, i)) === o.promise()) throw new TypeError("Thenable self-resolution");
                                            e = t && ("object" == typeof t || "function" == typeof t) && t.then, k.isFunction(e) ? a ? e.call(t, c(l, o, j, a), c(l, o, I, a)) : (l++, e.call(t, c(l, o, j, a), c(l, o, I, a), c(l, o, j, o.notifyWith))) : (r !== j && (n = void 0, i = [t]), (a || o.resolveWith)(n, i))
                                        }
                                    },
                                    e = a ? t : function() {
                                        try {
                                            t()
                                        } catch (t) {
                                            k.Deferred.exceptionHook && k.Deferred.exceptionHook(t, e.stackTrace), l <= s + 1 && (r !== I && (n = void 0, i = [t]), o.rejectWith(n, i))
                                        }
                                    };
                                s ? e() : (k.Deferred.getStackHook && (e.stackTrace = k.Deferred.getStackHook()), _.setTimeout(e))
                            }
                        }
                        return k.Deferred(function(t) {
                            o[0][3].add(c(0, t, k.isFunction(i) ? i : j, t.notifyWith)), o[1][3].add(c(0, t, k.isFunction(e) ? e : j)), o[2][3].add(c(0, t, k.isFunction(n) ? n : I))
                        }).promise()
                    },
                    promise: function(t) {
                        return null != t ? k.extend(t, r) : r
                    }
                },
                a = {};
            return k.each(o, function(t, e) {
                var n = e[2],
                    i = e[5];
                r[e[1]] = n.add, i && n.add(function() {
                    s = i
                }, o[3 - t][2].disable, o[0][2].lock), n.add(e[3].fire), a[e[0]] = function() {
                    return a[e[0] + "With"](this === a ? void 0 : this, arguments), this
                }, a[e[0] + "With"] = n.fireWith
            }), r.promise(a), t && t.call(a, a), a
        },
        when: function(t) {
            var n = arguments.length,
                e = n,
                i = Array(e),
                s = a.call(arguments),
                o = k.Deferred(),
                r = function(e) {
                    return function(t) {
                        i[e] = this, s[e] = 1 < arguments.length ? a.call(arguments) : t, --n || o.resolveWith(i, s)
                    }
                };
            if (n <= 1 && (N(t, o.done(r(e)).resolve, o.reject, !n), "pending" === o.state() || k.isFunction(s[e] && s[e].then))) return o.then();
            for (; e--;) N(s[e], r(e), o.reject);
            return o.promise()
        }
    });
    var H = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
    k.Deferred.exceptionHook = function(t, e) {
        _.console && _.console.warn && t && H.test(t.name) && _.console.warn("jQuery.Deferred exception: " + t.message, t.stack, e)
    }, k.readyException = function(t) {
        _.setTimeout(function() {
            throw t
        })
    };
    var O = k.Deferred();

    function z() {
        $.removeEventListener("DOMContentLoaded", z), _.removeEventListener("load", z), k.ready()
    }
    k.fn.ready = function(t) {
        return O.then(t).catch(function(t) {
            k.readyException(t)
        }), this
    }, k.extend({
        isReady: !1,
        readyWait: 1,
        ready: function(t) {
            (!0 === t ? --k.readyWait : k.isReady) || ((k.isReady = !0) !== t && 0 < --k.readyWait || O.resolveWith($, [k]))
        }
    }), k.ready.then = O.then, "complete" === $.readyState || "loading" !== $.readyState && !$.documentElement.doScroll ? _.setTimeout(k.ready) : ($.addEventListener("DOMContentLoaded", z), _.addEventListener("load", z));
    var B = function(t, e, n, i, s, o, r) {
            var a = 0,
                l = t.length,
                c = null == n;
            if ("object" === k.type(n))
                for (a in s = !0, n) B(t, e, a, n[a], !0, o, r);
            else if (void 0 !== i && (s = !0, k.isFunction(i) || (r = !0), c && (r ? (e.call(t, i), e = null) : (c = e, e = function(t, e, n) {
                    return c.call(k(t), n)
                })), e))
                for (; a < l; a++) e(t[a], n, r ? i : i.call(t[a], a, e(t[a], n)));
            return s ? t : c ? e.call(t) : l ? e(t[0], n) : o
        },
        V = function(t) {
            return 1 === t.nodeType || 9 === t.nodeType || !+t.nodeType
        };

    function W() {
        this.expando = k.expando + W.uid++
    }
    W.uid = 1, W.prototype = {
        cache: function(t) {
            var e = t[this.expando];
            return e || (e = {}, V(t) && (t.nodeType ? t[this.expando] = e : Object.defineProperty(t, this.expando, {
                value: e,
                configurable: !0
            }))), e
        },
        set: function(t, e, n) {
            var i, s = this.cache(t);
            if ("string" == typeof e) s[k.camelCase(e)] = n;
            else
                for (i in e) s[k.camelCase(i)] = e[i];
            return s
        },
        get: function(t, e) {
            return void 0 === e ? this.cache(t) : t[this.expando] && t[this.expando][k.camelCase(e)]
        },
        access: function(t, e, n) {
            return void 0 === e || e && "string" == typeof e && void 0 === n ? this.get(t, e) : (this.set(t, e, n), void 0 !== n ? n : e)
        },
        remove: function(t, e) {
            var n, i = t[this.expando];
            if (void 0 !== i) {
                if (void 0 !== e) {
                    Array.isArray(e) ? e = e.map(k.camelCase) : e = (e = k.camelCase(e)) in i ? [e] : e.match(F) || [], n = e.length;
                    for (; n--;) delete i[e[n]]
                }(void 0 === e || k.isEmptyObject(i)) && (t.nodeType ? t[this.expando] = void 0 : delete t[this.expando])
            }
        },
        hasData: function(t) {
            var e = t[this.expando];
            return void 0 !== e && !k.isEmptyObject(e)
        }
    };
    var U = new W,
        Y = new W,
        Q = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
        X = /[A-Z]/g;

    function K(t, e, n) {
        var i, s;
        if (void 0 === n && 1 === t.nodeType)
            if (i = "data-" + e.replace(X, "-$&").toLowerCase(), "string" == typeof(n = t.getAttribute(i))) {
                try {
                    n = "true" === (s = n) || "false" !== s && ("null" === s ? null : s === +s + "" ? +s : Q.test(s) ? JSON.parse(s) : s)
                } catch (t) {}
                Y.set(t, e, n)
            } else n = void 0;
        return n
    }
    k.extend({
        hasData: function(t) {
            return Y.hasData(t) || U.hasData(t)
        },
        data: function(t, e, n) {
            return Y.access(t, e, n)
        },
        removeData: function(t, e) {
            Y.remove(t, e)
        },
        _data: function(t, e, n) {
            return U.access(t, e, n)
        },
        _removeData: function(t, e) {
            U.remove(t, e)
        }
    }), k.fn.extend({
        data: function(n, t) {
            var e, i, s, o = this[0],
                r = o && o.attributes;
            if (void 0 === n) {
                if (this.length && (s = Y.get(o), 1 === o.nodeType && !U.get(o, "hasDataAttrs"))) {
                    for (e = r.length; e--;) r[e] && (0 === (i = r[e].name).indexOf("data-") && (i = k.camelCase(i.slice(5)), K(o, i, s[i])));
                    U.set(o, "hasDataAttrs", !0)
                }
                return s
            }
            return "object" == typeof n ? this.each(function() {
                Y.set(this, n)
            }) : B(this, function(t) {
                var e;
                if (o && void 0 === t) {
                    if (void 0 !== (e = Y.get(o, n))) return e;
                    if (void 0 !== (e = K(o, n))) return e
                } else this.each(function() {
                    Y.set(this, n, t)
                })
            }, null, t, 1 < arguments.length, null, !0)
        },
        removeData: function(t) {
            return this.each(function() {
                Y.remove(this, t)
            })
        }
    }), k.extend({
        queue: function(t, e, n) {
            var i;
            if (t) return e = (e || "fx") + "queue", i = U.get(t, e), n && (!i || Array.isArray(n) ? i = U.access(t, e, k.makeArray(n)) : i.push(n)), i || []
        },
        dequeue: function(t, e) {
            e = e || "fx";
            var n = k.queue(t, e),
                i = n.length,
                s = n.shift(),
                o = k._queueHooks(t, e);
            "inprogress" === s && (s = n.shift(), i--), s && ("fx" === e && n.unshift("inprogress"), delete o.stop, s.call(t, function() {
                k.dequeue(t, e)
            }, o)), !i && o && o.empty.fire()
        },
        _queueHooks: function(t, e) {
            var n = e + "queueHooks";
            return U.get(t, n) || U.access(t, n, {
                empty: k.Callbacks("once memory").add(function() {
                    U.remove(t, [e + "queue", n])
                })
            })
        }
    }), k.fn.extend({
        queue: function(e, n) {
            var t = 2;
            return "string" != typeof e && (n = e, e = "fx", t--), arguments.length < t ? k.queue(this[0], e) : void 0 === n ? this : this.each(function() {
                var t = k.queue(this, e, n);
                k._queueHooks(this, e), "fx" === e && "inprogress" !== t[0] && k.dequeue(this, e)
            })
        },
        dequeue: function(t) {
            return this.each(function() {
                k.dequeue(this, t)
            })
        },
        clearQueue: function(t) {
            return this.queue(t || "fx", [])
        },
        promise: function(t, e) {
            var n, i = 1,
                s = k.Deferred(),
                o = this,
                r = this.length,
                a = function() {
                    --i || s.resolveWith(o, [o])
                };
            for ("string" != typeof t && (e = t, t = void 0), t = t || "fx"; r--;)(n = U.get(o[r], t + "queueHooks")) && n.empty && (i++, n.empty.add(a));
            return a(), s.promise(e)
        }
    });
    var Z = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
        G = new RegExp("^(?:([+-])=|)(" + Z + ")([a-z%]*)$", "i"),
        J = ["Top", "Right", "Bottom", "Left"],
        tt = function(t, e) {
            return "none" === (t = e || t).style.display || "" === t.style.display && k.contains(t.ownerDocument, t) && "none" === k.css(t, "display")
        },
        et = function(t, e, n, i) {
            var s, o, r = {};
            for (o in e) r[o] = t.style[o], t.style[o] = e[o];
            for (o in s = n.apply(t, i || []), e) t.style[o] = r[o];
            return s
        };

    function nt(t, e, n, i) {
        var s, o = 1,
            r = 20,
            a = i ? function() {
                return i.cur()
            } : function() {
                return k.css(t, e, "")
            },
            l = a(),
            c = n && n[3] || (k.cssNumber[e] ? "" : "px"),
            u = (k.cssNumber[e] || "px" !== c && +l) && G.exec(k.css(t, e));
        if (u && u[3] !== c)
            for (c = c || u[3], n = n || [], u = +l || 1; u /= o = o || ".5", k.style(t, e, u + c), o !== (o = a() / l) && 1 !== o && --r;);
        return n && (u = +u || +l || 0, s = n[1] ? u + (n[1] + 1) * n[2] : +n[2], i && (i.unit = c, i.start = u, i.end = s)), s
    }
    var it = {};

    function st(t, e) {
        for (var n, i, s = [], o = 0, r = t.length; o < r; o++)(i = t[o]).style && (n = i.style.display, e ? ("none" === n && (s[o] = U.get(i, "display") || null, s[o] || (i.style.display = "")), "" === i.style.display && tt(i) && (s[o] = (h = c = l = void 0, c = (a = i).ownerDocument, u = a.nodeName, (h = it[u]) || (l = c.body.appendChild(c.createElement(u)), h = k.css(l, "display"), l.parentNode.removeChild(l), "none" === h && (h = "block"), it[u] = h)))) : "none" !== n && (s[o] = "none", U.set(i, "display", n)));
        var a, l, c, u, h;
        for (o = 0; o < r; o++) null != s[o] && (t[o].style.display = s[o]);
        return t
    }
    k.fn.extend({
        show: function() {
            return st(this, !0)
        },
        hide: function() {
            return st(this)
        },
        toggle: function(t) {
            return "boolean" == typeof t ? t ? this.show() : this.hide() : this.each(function() {
                tt(this) ? k(this).show() : k(this).hide()
            })
        }
    });
    var ot = /^(?:checkbox|radio)$/i,
        rt = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i,
        at = /^$|\/(?:java|ecma)script/i,
        lt = {
            option: [1, "<select multiple='multiple'>", "</select>"],
            thead: [1, "<table>", "</table>"],
            col: [2, "<table><colgroup>", "</colgroup></table>"],
            tr: [2, "<table><tbody>", "</tbody></table>"],
            td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
            _default: [0, "", ""]
        };

    function ct(t, e) {
        var n;
        return n = void 0 !== t.getElementsByTagName ? t.getElementsByTagName(e || "*") : void 0 !== t.querySelectorAll ? t.querySelectorAll(e || "*") : [], void 0 === e || e && S(t, e) ? k.merge([t], n) : n
    }

    function ut(t, e) {
        for (var n = 0, i = t.length; n < i; n++) U.set(t[n], "globalEval", !e || U.get(e[n], "globalEval"))
    }
    lt.optgroup = lt.option, lt.tbody = lt.tfoot = lt.colgroup = lt.caption = lt.thead, lt.th = lt.td;
    var ht, dt, pt = /<|&#?\w+;/;

    function ft(t, e, n, i, s) {
        for (var o, r, a, l, c, u, h = e.createDocumentFragment(), d = [], p = 0, f = t.length; p < f; p++)
            if ((o = t[p]) || 0 === o)
                if ("object" === k.type(o)) k.merge(d, o.nodeType ? [o] : o);
                else if (pt.test(o)) {
            for (r = r || h.appendChild(e.createElement("div")), a = (rt.exec(o) || ["", ""])[1].toLowerCase(), l = lt[a] || lt._default, r.innerHTML = l[1] + k.htmlPrefilter(o) + l[2], u = l[0]; u--;) r = r.lastChild;
            k.merge(d, r.childNodes), (r = h.firstChild).textContent = ""
        } else d.push(e.createTextNode(o));
        for (h.textContent = "", p = 0; o = d[p++];)
            if (i && -1 < k.inArray(o, i)) s && s.push(o);
            else if (c = k.contains(o.ownerDocument, o), r = ct(h.appendChild(o), "script"), c && ut(r), n)
            for (u = 0; o = r[u++];) at.test(o.type || "") && n.push(o);
        return h
    }
    ht = $.createDocumentFragment().appendChild($.createElement("div")), (dt = $.createElement("input")).setAttribute("type", "radio"), dt.setAttribute("checked", "checked"), dt.setAttribute("name", "t"), ht.appendChild(dt), m.checkClone = ht.cloneNode(!0).cloneNode(!0).lastChild.checked, ht.innerHTML = "<textarea>x</textarea>", m.noCloneChecked = !!ht.cloneNode(!0).lastChild.defaultValue;
    var gt = $.documentElement,
        mt = /^key/,
        vt = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
        yt = /^([^.]*)(?:\.(.+)|)/;

    function bt() {
        return !0
    }

    function xt() {
        return !1
    }

    function wt() {
        try {
            return $.activeElement
        } catch (t) {}
    }

    function Ct(t, e, n, i, s, o) {
        var r, a;
        if ("object" == typeof e) {
            for (a in "string" != typeof n && (i = i || n, n = void 0), e) Ct(t, a, n, i, e[a], o);
            return t
        }
        if (null == i && null == s ? (s = n, i = n = void 0) : null == s && ("string" == typeof n ? (s = i, i = void 0) : (s = i, i = n, n = void 0)), !1 === s) s = xt;
        else if (!s) return t;
        return 1 === o && (r = s, (s = function(t) {
            return k().off(t), r.apply(this, arguments)
        }).guid = r.guid || (r.guid = k.guid++)), t.each(function() {
            k.event.add(this, e, s, i, n)
        })
    }
    k.event = {
        global: {},
        add: function(e, t, n, i, s) {
            var o, r, a, l, c, u, h, d, p, f, g, m = U.get(e);
            if (m)
                for (n.handler && (n = (o = n).handler, s = o.selector), s && k.find.matchesSelector(gt, s), n.guid || (n.guid = k.guid++), (l = m.events) || (l = m.events = {}), (r = m.handle) || (r = m.handle = function(t) {
                        return void 0 !== k && k.event.triggered !== t.type ? k.event.dispatch.apply(e, arguments) : void 0
                    }), c = (t = (t || "").match(F) || [""]).length; c--;) p = g = (a = yt.exec(t[c]) || [])[1], f = (a[2] || "").split(".").sort(), p && (h = k.event.special[p] || {}, p = (s ? h.delegateType : h.bindType) || p, h = k.event.special[p] || {}, u = k.extend({
                    type: p,
                    origType: g,
                    data: i,
                    handler: n,
                    guid: n.guid,
                    selector: s,
                    needsContext: s && k.expr.match.needsContext.test(s),
                    namespace: f.join(".")
                }, o), (d = l[p]) || ((d = l[p] = []).delegateCount = 0, h.setup && !1 !== h.setup.call(e, i, f, r) || e.addEventListener && e.addEventListener(p, r)), h.add && (h.add.call(e, u), u.handler.guid || (u.handler.guid = n.guid)), s ? d.splice(d.delegateCount++, 0, u) : d.push(u), k.event.global[p] = !0)
        },
        remove: function(t, e, n, i, s) {
            var o, r, a, l, c, u, h, d, p, f, g, m = U.hasData(t) && U.get(t);
            if (m && (l = m.events)) {
                for (c = (e = (e || "").match(F) || [""]).length; c--;)
                    if (p = g = (a = yt.exec(e[c]) || [])[1], f = (a[2] || "").split(".").sort(), p) {
                        for (h = k.event.special[p] || {}, d = l[p = (i ? h.delegateType : h.bindType) || p] || [], a = a[2] && new RegExp("(^|\\.)" + f.join("\\.(?:.*\\.|)") + "(\\.|$)"), r = o = d.length; o--;) u = d[o], !s && g !== u.origType || n && n.guid !== u.guid || a && !a.test(u.namespace) || i && i !== u.selector && ("**" !== i || !u.selector) || (d.splice(o, 1), u.selector && d.delegateCount--, h.remove && h.remove.call(t, u));
                        r && !d.length && (h.teardown && !1 !== h.teardown.call(t, f, m.handle) || k.removeEvent(t, p, m.handle), delete l[p])
                    } else
                        for (p in l) k.event.remove(t, p + e[c], n, i, !0);
                k.isEmptyObject(l) && U.remove(t, "handle events")
            }
        },
        dispatch: function(t) {
            var e, n, i, s, o, r, a = k.event.fix(t),
                l = new Array(arguments.length),
                c = (U.get(this, "events") || {})[a.type] || [],
                u = k.event.special[a.type] || {};
            for (l[0] = a, e = 1; e < arguments.length; e++) l[e] = arguments[e];
            if (a.delegateTarget = this, !u.preDispatch || !1 !== u.preDispatch.call(this, a)) {
                for (r = k.event.handlers.call(this, a, c), e = 0;
                    (s = r[e++]) && !a.isPropagationStopped();)
                    for (a.currentTarget = s.elem, n = 0;
                        (o = s.handlers[n++]) && !a.isImmediatePropagationStopped();) a.rnamespace && !a.rnamespace.test(o.namespace) || (a.handleObj = o, a.data = o.data, void 0 !== (i = ((k.event.special[o.origType] || {}).handle || o.handler).apply(s.elem, l)) && !1 === (a.result = i) && (a.preventDefault(), a.stopPropagation()));
                return u.postDispatch && u.postDispatch.call(this, a), a.result
            }
        },
        handlers: function(t, e) {
            var n, i, s, o, r, a = [],
                l = e.delegateCount,
                c = t.target;
            if (l && c.nodeType && !("click" === t.type && 1 <= t.button))
                for (; c !== this; c = c.parentNode || this)
                    if (1 === c.nodeType && ("click" !== t.type || !0 !== c.disabled)) {
                        for (o = [], r = {}, n = 0; n < l; n++) void 0 === r[s = (i = e[n]).selector + " "] && (r[s] = i.needsContext ? -1 < k(s, this).index(c) : k.find(s, this, null, [c]).length), r[s] && o.push(i);
                        o.length && a.push({
                            elem: c,
                            handlers: o
                        })
                    } return c = this, l < e.length && a.push({
                elem: c,
                handlers: e.slice(l)
            }), a
        },
        addProp: function(e, t) {
            Object.defineProperty(k.Event.prototype, e, {
                enumerable: !0,
                configurable: !0,
                get: k.isFunction(t) ? function() {
                    if (this.originalEvent) return t(this.originalEvent)
                } : function() {
                    if (this.originalEvent) return this.originalEvent[e]
                },
                set: function(t) {
                    Object.defineProperty(this, e, {
                        enumerable: !0,
                        configurable: !0,
                        writable: !0,
                        value: t
                    })
                }
            })
        },
        fix: function(t) {
            return t[k.expando] ? t : new k.Event(t)
        },
        special: {
            load: {
                noBubble: !0
            },
            focus: {
                trigger: function() {
                    if (this !== wt() && this.focus) return this.focus(), !1
                },
                delegateType: "focusin"
            },
            blur: {
                trigger: function() {
                    if (this === wt() && this.blur) return this.blur(), !1
                },
                delegateType: "focusout"
            },
            click: {
                trigger: function() {
                    if ("checkbox" === this.type && this.click && S(this, "input")) return this.click(), !1
                },
                _default: function(t) {
                    return S(t.target, "a")
                }
            },
            beforeunload: {
                postDispatch: function(t) {
                    void 0 !== t.result && t.originalEvent && (t.originalEvent.returnValue = t.result)
                }
            }
        }
    }, k.removeEvent = function(t, e, n) {
        t.removeEventListener && t.removeEventListener(e, n)
    }, k.Event = function(t, e) {
        return this instanceof k.Event ? (t && t.type ? (this.originalEvent = t, this.type = t.type, this.isDefaultPrevented = t.defaultPrevented || void 0 === t.defaultPrevented && !1 === t.returnValue ? bt : xt, this.target = t.target && 3 === t.target.nodeType ? t.target.parentNode : t.target, this.currentTarget = t.currentTarget, this.relatedTarget = t.relatedTarget) : this.type = t, e && k.extend(this, e), this.timeStamp = t && t.timeStamp || k.now(), void(this[k.expando] = !0)) : new k.Event(t, e)
    }, k.Event.prototype = {
        constructor: k.Event,
        isDefaultPrevented: xt,
        isPropagationStopped: xt,
        isImmediatePropagationStopped: xt,
        isSimulated: !1,
        preventDefault: function() {
            var t = this.originalEvent;
            this.isDefaultPrevented = bt, t && !this.isSimulated && t.preventDefault()
        },
        stopPropagation: function() {
            var t = this.originalEvent;
            this.isPropagationStopped = bt, t && !this.isSimulated && t.stopPropagation()
        },
        stopImmediatePropagation: function() {
            var t = this.originalEvent;
            this.isImmediatePropagationStopped = bt, t && !this.isSimulated && t.stopImmediatePropagation(), this.stopPropagation()
        }
    }, k.each({
        altKey: !0,
        bubbles: !0,
        cancelable: !0,
        changedTouches: !0,
        ctrlKey: !0,
        detail: !0,
        eventPhase: !0,
        metaKey: !0,
        pageX: !0,
        pageY: !0,
        shiftKey: !0,
        view: !0,
        char: !0,
        charCode: !0,
        key: !0,
        keyCode: !0,
        button: !0,
        buttons: !0,
        clientX: !0,
        clientY: !0,
        offsetX: !0,
        offsetY: !0,
        pointerId: !0,
        pointerType: !0,
        screenX: !0,
        screenY: !0,
        targetTouches: !0,
        toElement: !0,
        touches: !0,
        which: function(t) {
            var e = t.button;
            return null == t.which && mt.test(t.type) ? null != t.charCode ? t.charCode : t.keyCode : !t.which && void 0 !== e && vt.test(t.type) ? 1 & e ? 1 : 2 & e ? 3 : 4 & e ? 2 : 0 : t.which
        }
    }, k.event.addProp), k.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout"
    }, function(t, s) {
        k.event.special[t] = {
            delegateType: s,
            bindType: s,
            handle: function(t) {
                var e, n = t.relatedTarget,
                    i = t.handleObj;
                return n && (n === this || k.contains(this, n)) || (t.type = i.origType, e = i.handler.apply(this, arguments), t.type = s), e
            }
        }
    }), k.fn.extend({
        on: function(t, e, n, i) {
            return Ct(this, t, e, n, i)
        },
        one: function(t, e, n, i) {
            return Ct(this, t, e, n, i, 1)
        },
        off: function(t, e, n) {
            var i, s;
            if (t && t.preventDefault && t.handleObj) return i = t.handleObj, k(t.delegateTarget).off(i.namespace ? i.origType + "." + i.namespace : i.origType, i.selector, i.handler), this;
            if ("object" == typeof t) {
                for (s in t) this.off(s, e, t[s]);
                return this
            }
            return !1 !== e && "function" != typeof e || (n = e, e = void 0), !1 === n && (n = xt), this.each(function() {
                k.event.remove(this, t, n, e)
            })
        }
    });
    var _t = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
        $t = /<script|<style|<link/i,
        kt = /checked\s*(?:[^=]|=\s*.checked.)/i,
        Tt = /^true\/(.*)/,
        St = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

    function Dt(t, e) {
        return S(t, "table") && S(11 !== e.nodeType ? e : e.firstChild, "tr") && k(">tbody", t)[0] || t
    }

    function Et(t) {
        return t.type = (null !== t.getAttribute("type")) + "/" + t.type, t
    }

    function At(t) {
        var e = Tt.exec(t.type);
        return e ? t.type = e[1] : t.removeAttribute("type"), t
    }

    function Pt(t, e) {
        var n, i, s, o, r, a, l, c;
        if (1 === e.nodeType) {
            if (U.hasData(t) && (o = U.access(t), r = U.set(e, o), c = o.events))
                for (s in delete r.handle, r.events = {}, c)
                    for (n = 0, i = c[s].length; n < i; n++) k.event.add(e, s, c[s][n]);
            Y.hasData(t) && (a = Y.access(t), l = k.extend({}, a), Y.set(e, l))
        }
    }

    function Mt(n, i, s, o) {
        i = g.apply([], i);
        var t, e, r, a, l, c, u = 0,
            h = n.length,
            d = h - 1,
            p = i[0],
            f = k.isFunction(p);
        if (f || 1 < h && "string" == typeof p && !m.checkClone && kt.test(p)) return n.each(function(t) {
            var e = n.eq(t);
            f && (i[0] = p.call(this, t, e.html())), Mt(e, i, s, o)
        });
        if (h && (e = (t = ft(i, n[0].ownerDocument, !1, n, o)).firstChild, 1 === t.childNodes.length && (t = e), e || o)) {
            for (a = (r = k.map(ct(t, "script"), Et)).length; u < h; u++) l = t, u !== d && (l = k.clone(l, !0, !0), a && k.merge(r, ct(l, "script"))), s.call(n[u], l, u);
            if (a)
                for (c = r[r.length - 1].ownerDocument, k.map(r, At), u = 0; u < a; u++) l = r[u], at.test(l.type || "") && !U.access(l, "globalEval") && k.contains(c, l) && (l.src ? k._evalUrl && k._evalUrl(l.src) : v(l.textContent.replace(St, ""), c))
        }
        return n
    }

    function qt(t, e, n) {
        for (var i, s = e ? k.filter(e, t) : t, o = 0; null != (i = s[o]); o++) n || 1 !== i.nodeType || k.cleanData(ct(i)), i.parentNode && (n && k.contains(i.ownerDocument, i) && ut(ct(i, "script")), i.parentNode.removeChild(i));
        return t
    }
    k.extend({
        htmlPrefilter: function(t) {
            return t.replace(_t, "<$1></$2>")
        },
        clone: function(t, e, n) {
            var i, s, o, r, a, l, c, u = t.cloneNode(!0),
                h = k.contains(t.ownerDocument, t);
            if (!(m.noCloneChecked || 1 !== t.nodeType && 11 !== t.nodeType || k.isXMLDoc(t)))
                for (r = ct(u), i = 0, s = (o = ct(t)).length; i < s; i++) a = o[i], l = r[i], void 0, "input" === (c = l.nodeName.toLowerCase()) && ot.test(a.type) ? l.checked = a.checked : "input" !== c && "textarea" !== c || (l.defaultValue = a.defaultValue);
            if (e)
                if (n)
                    for (o = o || ct(t), r = r || ct(u), i = 0, s = o.length; i < s; i++) Pt(o[i], r[i]);
                else Pt(t, u);
            return 0 < (r = ct(u, "script")).length && ut(r, !h && ct(t, "script")), u
        },
        cleanData: function(t) {
            for (var e, n, i, s = k.event.special, o = 0; void 0 !== (n = t[o]); o++)
                if (V(n)) {
                    if (e = n[U.expando]) {
                        if (e.events)
                            for (i in e.events) s[i] ? k.event.remove(n, i) : k.removeEvent(n, i, e.handle);
                        n[U.expando] = void 0
                    }
                    n[Y.expando] && (n[Y.expando] = void 0)
                }
        }
    }), k.fn.extend({
        detach: function(t) {
            return qt(this, t, !0)
        },
        remove: function(t) {
            return qt(this, t)
        },
        text: function(t) {
            return B(this, function(t) {
                return void 0 === t ? k.text(this) : this.empty().each(function() {
                    1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = t)
                })
            }, null, t, arguments.length)
        },
        append: function() {
            return Mt(this, arguments, function(t) {
                1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || Dt(this, t).appendChild(t)
            })
        },
        prepend: function() {
            return Mt(this, arguments, function(t) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var e = Dt(this, t);
                    e.insertBefore(t, e.firstChild)
                }
            })
        },
        before: function() {
            return Mt(this, arguments, function(t) {
                this.parentNode && this.parentNode.insertBefore(t, this)
            })
        },
        after: function() {
            return Mt(this, arguments, function(t) {
                this.parentNode && this.parentNode.insertBefore(t, this.nextSibling)
            })
        },
        empty: function() {
            for (var t, e = 0; null != (t = this[e]); e++) 1 === t.nodeType && (k.cleanData(ct(t, !1)), t.textContent = "");
            return this
        },
        clone: function(t, e) {
            return t = null != t && t, e = null == e ? t : e, this.map(function() {
                return k.clone(this, t, e)
            })
        },
        html: function(t) {
            return B(this, function(t) {
                var e = this[0] || {},
                    n = 0,
                    i = this.length;
                if (void 0 === t && 1 === e.nodeType) return e.innerHTML;
                if ("string" == typeof t && !$t.test(t) && !lt[(rt.exec(t) || ["", ""])[1].toLowerCase()]) {
                    t = k.htmlPrefilter(t);
                    try {
                        for (; n < i; n++) 1 === (e = this[n] || {}).nodeType && (k.cleanData(ct(e, !1)), e.innerHTML = t);
                        e = 0
                    } catch (t) {}
                }
                e && this.empty().append(t)
            }, null, t, arguments.length)
        },
        replaceWith: function() {
            var n = [];
            return Mt(this, arguments, function(t) {
                var e = this.parentNode;
                k.inArray(this, n) < 0 && (k.cleanData(ct(this)), e && e.replaceChild(t, this))
            }, n)
        }
    }), k.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function(t, r) {
        k.fn[t] = function(t) {
            for (var e, n = [], i = k(t), s = i.length - 1, o = 0; o <= s; o++) e = o === s ? this : this.clone(!0), k(i[o])[r](e), l.apply(n, e.get());
            return this.pushStack(n)
        }
    });
    var Rt = /^margin/,
        Lt = new RegExp("^(" + Z + ")(?!px)[a-z%]+$", "i"),
        Ft = function(t) {
            var e = t.ownerDocument.defaultView;
            return e && e.opener || (e = _), e.getComputedStyle(t)
        };

    function jt(t, e, n) {
        var i, s, o, r, a = t.style;
        return (n = n || Ft(t)) && ("" !== (r = n.getPropertyValue(e) || n[e]) || k.contains(t.ownerDocument, t) || (r = k.style(t, e)), !m.pixelMarginRight() && Lt.test(r) && Rt.test(e) && (i = a.width, s = a.minWidth, o = a.maxWidth, a.minWidth = a.maxWidth = a.width = r, r = n.width, a.width = i, a.minWidth = s, a.maxWidth = o)), void 0 !== r ? r + "" : r
    }

    function It(t, e) {
        return {
            get: function() {
                return t() ? void delete this.get : (this.get = e).apply(this, arguments)
            }
        }
    }! function() {
        function t() {
            if (r) {
                r.style.cssText = "box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%", r.innerHTML = "", gt.appendChild(o);
                var t = _.getComputedStyle(r);
                e = "1%" !== t.top, s = "2px" === t.marginLeft, n = "4px" === t.width, r.style.marginRight = "50%", i = "4px" === t.marginRight, gt.removeChild(o), r = null
            }
        }
        var e, n, i, s, o = $.createElement("div"),
            r = $.createElement("div");
        r.style && (r.style.backgroundClip = "content-box", r.cloneNode(!0).style.backgroundClip = "", m.clearCloneStyle = "content-box" === r.style.backgroundClip, o.style.cssText = "border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute", o.appendChild(r), k.extend(m, {
            pixelPosition: function() {
                return t(), e
            },
            boxSizingReliable: function() {
                return t(), n
            },
            pixelMarginRight: function() {
                return t(), i
            },
            reliableMarginLeft: function() {
                return t(), s
            }
        }))
    }();
    var Nt = /^(none|table(?!-c[ea]).+)/,
        Ht = /^--/,
        Ot = {
            position: "absolute",
            visibility: "hidden",
            display: "block"
        },
        zt = {
            letterSpacing: "0",
            fontWeight: "400"
        },
        Bt = ["Webkit", "Moz", "ms"],
        Vt = $.createElement("div").style;

    function Wt(t) {
        var e = k.cssProps[t];
        return e || (e = k.cssProps[t] = function(t) {
            if (t in Vt) return t;
            for (var e = t[0].toUpperCase() + t.slice(1), n = Bt.length; n--;)
                if ((t = Bt[n] + e) in Vt) return t
        }(t) || t), e
    }

    function Ut(t, e, n) {
        var i = G.exec(e);
        return i ? Math.max(0, i[2] - (n || 0)) + (i[3] || "px") : e
    }

    function Yt(t, e, n, i, s) {
        var o, r = 0;
        for (o = n === (i ? "border" : "content") ? 4 : "width" === e ? 1 : 0; o < 4; o += 2) "margin" === n && (r += k.css(t, n + J[o], !0, s)), i ? ("content" === n && (r -= k.css(t, "padding" + J[o], !0, s)), "margin" !== n && (r -= k.css(t, "border" + J[o] + "Width", !0, s))) : (r += k.css(t, "padding" + J[o], !0, s), "padding" !== n && (r += k.css(t, "border" + J[o] + "Width", !0, s)));
        return r
    }

    function Qt(t, e, n) {
        var i, s = Ft(t),
            o = jt(t, e, s),
            r = "border-box" === k.css(t, "boxSizing", !1, s);
        return Lt.test(o) ? o : (i = r && (m.boxSizingReliable() || o === t.style[e]), "auto" === o && (o = t["offset" + e[0].toUpperCase() + e.slice(1)]), (o = parseFloat(o) || 0) + Yt(t, e, n || (r ? "border" : "content"), i, s) + "px")
    }

    function Xt(t, e, n, i, s) {
        return new Xt.prototype.init(t, e, n, i, s)
    }
    k.extend({
        cssHooks: {
            opacity: {
                get: function(t, e) {
                    if (e) {
                        var n = jt(t, "opacity");
                        return "" === n ? "1" : n
                    }
                }
            }
        },
        cssNumber: {
            animationIterationCount: !0,
            columnCount: !0,
            fillOpacity: !0,
            flexGrow: !0,
            flexShrink: !0,
            fontWeight: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0
        },
        cssProps: {
            float: "cssFloat"
        },
        style: function(t, e, n, i) {
            if (t && 3 !== t.nodeType && 8 !== t.nodeType && t.style) {
                var s, o, r, a = k.camelCase(e),
                    l = Ht.test(e),
                    c = t.style;
                return l || (e = Wt(a)), r = k.cssHooks[e] || k.cssHooks[a], void 0 === n ? r && "get" in r && void 0 !== (s = r.get(t, !1, i)) ? s : c[e] : ("string" === (o = typeof n) && (s = G.exec(n)) && s[1] && (n = nt(t, e, s), o = "number"), void(null != n && n == n && ("number" === o && (n += s && s[3] || (k.cssNumber[a] ? "" : "px")), m.clearCloneStyle || "" !== n || 0 !== e.indexOf("background") || (c[e] = "inherit"), r && "set" in r && void 0 === (n = r.set(t, n, i)) || (l ? c.setProperty(e, n) : c[e] = n))))
            }
        },
        css: function(t, e, n, i) {
            var s, o, r, a = k.camelCase(e);
            return Ht.test(e) || (e = Wt(a)), (r = k.cssHooks[e] || k.cssHooks[a]) && "get" in r && (s = r.get(t, !0, n)), void 0 === s && (s = jt(t, e, i)), "normal" === s && e in zt && (s = zt[e]), "" === n || n ? (o = parseFloat(s), !0 === n || isFinite(o) ? o || 0 : s) : s
        }
    }), k.each(["height", "width"], function(t, r) {
        k.cssHooks[r] = {
            get: function(t, e, n) {
                if (e) return !Nt.test(k.css(t, "display")) || t.getClientRects().length && t.getBoundingClientRect().width ? Qt(t, r, n) : et(t, Ot, function() {
                    return Qt(t, r, n)
                })
            },
            set: function(t, e, n) {
                var i, s = n && Ft(t),
                    o = n && Yt(t, r, n, "border-box" === k.css(t, "boxSizing", !1, s), s);
                return o && (i = G.exec(e)) && "px" !== (i[3] || "px") && (t.style[r] = e, e = k.css(t, r)), Ut(0, e, o)
            }
        }
    }), k.cssHooks.marginLeft = It(m.reliableMarginLeft, function(t, e) {
        if (e) return (parseFloat(jt(t, "marginLeft")) || t.getBoundingClientRect().left - et(t, {
            marginLeft: 0
        }, function() {
            return t.getBoundingClientRect().left
        })) + "px"
    }), k.each({
        margin: "",
        padding: "",
        border: "Width"
    }, function(s, o) {
        k.cssHooks[s + o] = {
            expand: function(t) {
                for (var e = 0, n = {}, i = "string" == typeof t ? t.split(" ") : [t]; e < 4; e++) n[s + J[e] + o] = i[e] || i[e - 2] || i[0];
                return n
            }
        }, Rt.test(s) || (k.cssHooks[s + o].set = Ut)
    }), k.fn.extend({
        css: function(t, e) {
            return B(this, function(t, e, n) {
                var i, s, o = {},
                    r = 0;
                if (Array.isArray(e)) {
                    for (i = Ft(t), s = e.length; r < s; r++) o[e[r]] = k.css(t, e[r], !1, i);
                    return o
                }
                return void 0 !== n ? k.style(t, e, n) : k.css(t, e)
            }, t, e, 1 < arguments.length)
        }
    }), ((k.Tween = Xt).prototype = {
        constructor: Xt,
        init: function(t, e, n, i, s, o) {
            this.elem = t, this.prop = n, this.easing = s || k.easing._default, this.options = e, this.start = this.now = this.cur(), this.end = i, this.unit = o || (k.cssNumber[n] ? "" : "px")
        },
        cur: function() {
            var t = Xt.propHooks[this.prop];
            return t && t.get ? t.get(this) : Xt.propHooks._default.get(this)
        },
        run: function(t) {
            var e, n = Xt.propHooks[this.prop];
            return this.options.duration ? this.pos = e = k.easing[this.easing](t, this.options.duration * t, 0, 1, this.options.duration) : this.pos = e = t, this.now = (this.end - this.start) * e + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : Xt.propHooks._default.set(this), this
        }
    }).init.prototype = Xt.prototype, (Xt.propHooks = {
        _default: {
            get: function(t) {
                var e;
                return 1 !== t.elem.nodeType || null != t.elem[t.prop] && null == t.elem.style[t.prop] ? t.elem[t.prop] : (e = k.css(t.elem, t.prop, "")) && "auto" !== e ? e : 0
            },
            set: function(t) {
                k.fx.step[t.prop] ? k.fx.step[t.prop](t) : 1 !== t.elem.nodeType || null == t.elem.style[k.cssProps[t.prop]] && !k.cssHooks[t.prop] ? t.elem[t.prop] = t.now : k.style(t.elem, t.prop, t.now + t.unit)
            }
        }
    }).scrollTop = Xt.propHooks.scrollLeft = {
        set: function(t) {
            t.elem.nodeType && t.elem.parentNode && (t.elem[t.prop] = t.now)
        }
    }, k.easing = {
        linear: function(t) {
            return t
        },
        swing: function(t) {
            return .5 - Math.cos(t * Math.PI) / 2
        },
        _default: "swing"
    }, k.fx = Xt.prototype.init, k.fx.step = {};
    var Kt, Zt, Gt, Jt, te = /^(?:toggle|show|hide)$/,
        ee = /queueHooks$/;

    function ne() {
        Zt && (!1 === $.hidden && _.requestAnimationFrame ? _.requestAnimationFrame(ne) : _.setTimeout(ne, k.fx.interval), k.fx.tick())
    }

    function ie() {
        return _.setTimeout(function() {
            Kt = void 0
        }), Kt = k.now()
    }

    function se(t, e) {
        var n, i = 0,
            s = {
                height: t
            };
        for (e = e ? 1 : 0; i < 4; i += 2 - e) s["margin" + (n = J[i])] = s["padding" + n] = t;
        return e && (s.opacity = s.width = t), s
    }

    function oe(t, e, n) {
        for (var i, s = (re.tweeners[e] || []).concat(re.tweeners["*"]), o = 0, r = s.length; o < r; o++)
            if (i = s[o].call(n, e, t)) return i
    }

    function re(o, t, e) {
        var n, r, i = 0,
            s = re.prefilters.length,
            a = k.Deferred().always(function() {
                delete l.elem
            }),
            l = function() {
                if (r) return !1;
                for (var t = Kt || ie(), e = Math.max(0, c.startTime + c.duration - t), n = 1 - (e / c.duration || 0), i = 0, s = c.tweens.length; i < s; i++) c.tweens[i].run(n);
                return a.notifyWith(o, [c, n, e]), n < 1 && s ? e : (s || a.notifyWith(o, [c, 1, 0]), a.resolveWith(o, [c]), !1)
            },
            c = a.promise({
                elem: o,
                props: k.extend({}, t),
                opts: k.extend(!0, {
                    specialEasing: {},
                    easing: k.easing._default
                }, e),
                originalProperties: t,
                originalOptions: e,
                startTime: Kt || ie(),
                duration: e.duration,
                tweens: [],
                createTween: function(t, e) {
                    var n = k.Tween(o, c.opts, t, e, c.opts.specialEasing[t] || c.opts.easing);
                    return c.tweens.push(n), n
                },
                stop: function(t) {
                    var e = 0,
                        n = t ? c.tweens.length : 0;
                    if (r) return this;
                    for (r = !0; e < n; e++) c.tweens[e].run(1);
                    return t ? (a.notifyWith(o, [c, 1, 0]), a.resolveWith(o, [c, t])) : a.rejectWith(o, [c, t]), this
                }
            }),
            u = c.props;
        for (function(t, e) {
                var n, i, s, o, r;
                for (n in t)
                    if (s = e[i = k.camelCase(n)], o = t[n], Array.isArray(o) && (s = o[1], o = t[n] = o[0]), n !== i && (t[i] = o, delete t[n]), (r = k.cssHooks[i]) && "expand" in r)
                        for (n in o = r.expand(o), delete t[i], o) n in t || (t[n] = o[n], e[n] = s);
                    else e[i] = s
            }(u, c.opts.specialEasing); i < s; i++)
            if (n = re.prefilters[i].call(c, o, u, c.opts)) return k.isFunction(n.stop) && (k._queueHooks(c.elem, c.opts.queue).stop = k.proxy(n.stop, n)), n;
        return k.map(u, oe, c), k.isFunction(c.opts.start) && c.opts.start.call(o, c), c.progress(c.opts.progress).done(c.opts.done, c.opts.complete).fail(c.opts.fail).always(c.opts.always), k.fx.timer(k.extend(l, {
            elem: o,
            anim: c,
            queue: c.opts.queue
        })), c
    }
    k.Animation = k.extend(re, {
        tweeners: {
            "*": [function(t, e) {
                var n = this.createTween(t, e);
                return nt(n.elem, t, G.exec(e), n), n
            }]
        },
        tweener: function(t, e) {
            k.isFunction(t) ? (e = t, t = ["*"]) : t = t.match(F);
            for (var n, i = 0, s = t.length; i < s; i++) n = t[i], re.tweeners[n] = re.tweeners[n] || [], re.tweeners[n].unshift(e)
        },
        prefilters: [function(t, e, n) {
            var i, s, o, r, a, l, c, u, h = "width" in e || "height" in e,
                d = this,
                p = {},
                f = t.style,
                g = t.nodeType && tt(t),
                m = U.get(t, "fxshow");
            for (i in n.queue || (null == (r = k._queueHooks(t, "fx")).unqueued && (r.unqueued = 0, a = r.empty.fire, r.empty.fire = function() {
                    r.unqueued || a()
                }), r.unqueued++, d.always(function() {
                    d.always(function() {
                        r.unqueued--, k.queue(t, "fx").length || r.empty.fire()
                    })
                })), e)
                if (s = e[i], te.test(s)) {
                    if (delete e[i], o = o || "toggle" === s, s === (g ? "hide" : "show")) {
                        if ("show" !== s || !m || void 0 === m[i]) continue;
                        g = !0
                    }
                    p[i] = m && m[i] || k.style(t, i)
                } if ((l = !k.isEmptyObject(e)) || !k.isEmptyObject(p))
                for (i in h && 1 === t.nodeType && (n.overflow = [f.overflow, f.overflowX, f.overflowY], null == (c = m && m.display) && (c = U.get(t, "display")), "none" === (u = k.css(t, "display")) && (c ? u = c : (st([t], !0), c = t.style.display || c, u = k.css(t, "display"), st([t]))), ("inline" === u || "inline-block" === u && null != c) && "none" === k.css(t, "float") && (l || (d.done(function() {
                        f.display = c
                    }), null == c && (u = f.display, c = "none" === u ? "" : u)), f.display = "inline-block")), n.overflow && (f.overflow = "hidden", d.always(function() {
                        f.overflow = n.overflow[0], f.overflowX = n.overflow[1], f.overflowY = n.overflow[2]
                    })), l = !1, p) l || (m ? "hidden" in m && (g = m.hidden) : m = U.access(t, "fxshow", {
                    display: c
                }), o && (m.hidden = !g), g && st([t], !0), d.done(function() {
                    for (i in g || st([t]), U.remove(t, "fxshow"), p) k.style(t, i, p[i])
                })), l = oe(g ? m[i] : 0, i, d), i in m || (m[i] = l.start, g && (l.end = l.start, l.start = 0))
        }],
        prefilter: function(t, e) {
            e ? re.prefilters.unshift(t) : re.prefilters.push(t)
        }
    }), k.speed = function(t, e, n) {
        var i = t && "object" == typeof t ? k.extend({}, t) : {
            complete: n || !n && e || k.isFunction(t) && t,
            duration: t,
            easing: n && e || e && !k.isFunction(e) && e
        };
        return k.fx.off ? i.duration = 0 : "number" != typeof i.duration && (i.duration in k.fx.speeds ? i.duration = k.fx.speeds[i.duration] : i.duration = k.fx.speeds._default), null != i.queue && !0 !== i.queue || (i.queue = "fx"), i.old = i.complete, i.complete = function() {
            k.isFunction(i.old) && i.old.call(this), i.queue && k.dequeue(this, i.queue)
        }, i
    }, k.fn.extend({
        fadeTo: function(t, e, n, i) {
            return this.filter(tt).css("opacity", 0).show().end().animate({
                opacity: e
            }, t, n, i)
        },
        animate: function(e, t, n, i) {
            var s = k.isEmptyObject(e),
                o = k.speed(t, n, i),
                r = function() {
                    var t = re(this, k.extend({}, e), o);
                    (s || U.get(this, "finish")) && t.stop(!0)
                };
            return r.finish = r, s || !1 === o.queue ? this.each(r) : this.queue(o.queue, r)
        },
        stop: function(s, t, o) {
            var r = function(t) {
                var e = t.stop;
                delete t.stop, e(o)
            };
            return "string" != typeof s && (o = t, t = s, s = void 0), t && !1 !== s && this.queue(s || "fx", []), this.each(function() {
                var t = !0,
                    e = null != s && s + "queueHooks",
                    n = k.timers,
                    i = U.get(this);
                if (e) i[e] && i[e].stop && r(i[e]);
                else
                    for (e in i) i[e] && i[e].stop && ee.test(e) && r(i[e]);
                for (e = n.length; e--;) n[e].elem !== this || null != s && n[e].queue !== s || (n[e].anim.stop(o), t = !1, n.splice(e, 1));
                !t && o || k.dequeue(this, s)
            })
        },
        finish: function(r) {
            return !1 !== r && (r = r || "fx"), this.each(function() {
                var t, e = U.get(this),
                    n = e[r + "queue"],
                    i = e[r + "queueHooks"],
                    s = k.timers,
                    o = n ? n.length : 0;
                for (e.finish = !0, k.queue(this, r, []), i && i.stop && i.stop.call(this, !0), t = s.length; t--;) s[t].elem === this && s[t].queue === r && (s[t].anim.stop(!0), s.splice(t, 1));
                for (t = 0; t < o; t++) n[t] && n[t].finish && n[t].finish.call(this);
                delete e.finish
            })
        }
    }), k.each(["toggle", "show", "hide"], function(t, i) {
        var s = k.fn[i];
        k.fn[i] = function(t, e, n) {
            return null == t || "boolean" == typeof t ? s.apply(this, arguments) : this.animate(se(i, !0), t, e, n)
        }
    }), k.each({
        slideDown: se("show"),
        slideUp: se("hide"),
        slideToggle: se("toggle"),
        fadeIn: {
            opacity: "show"
        },
        fadeOut: {
            opacity: "hide"
        },
        fadeToggle: {
            opacity: "toggle"
        }
    }, function(t, i) {
        k.fn[t] = function(t, e, n) {
            return this.animate(i, t, e, n)
        }
    }), k.timers = [], k.fx.tick = function() {
        var t, e = 0,
            n = k.timers;
        for (Kt = k.now(); e < n.length; e++)(t = n[e])() || n[e] !== t || n.splice(e--, 1);
        n.length || k.fx.stop(), Kt = void 0
    }, k.fx.timer = function(t) {
        k.timers.push(t), k.fx.start()
    }, k.fx.interval = 13, k.fx.start = function() {
        Zt || (Zt = !0, ne())
    }, k.fx.stop = function() {
        Zt = null
    }, k.fx.speeds = {
        slow: 600,
        fast: 200,
        _default: 400
    }, k.fn.delay = function(i, t) {
        return i = k.fx && k.fx.speeds[i] || i, t = t || "fx", this.queue(t, function(t, e) {
            var n = _.setTimeout(t, i);
            e.stop = function() {
                _.clearTimeout(n)
            }
        })
    }, Gt = $.createElement("input"), Jt = $.createElement("select").appendChild($.createElement("option")), Gt.type = "checkbox", m.checkOn = "" !== Gt.value, m.optSelected = Jt.selected, (Gt = $.createElement("input")).value = "t", Gt.type = "radio", m.radioValue = "t" === Gt.value;
    var ae, le = k.expr.attrHandle;
    k.fn.extend({
        attr: function(t, e) {
            return B(this, k.attr, t, e, 1 < arguments.length)
        },
        removeAttr: function(t) {
            return this.each(function() {
                k.removeAttr(this, t)
            })
        }
    }), k.extend({
        attr: function(t, e, n) {
            var i, s, o = t.nodeType;
            if (3 !== o && 8 !== o && 2 !== o) return void 0 === t.getAttribute ? k.prop(t, e, n) : (1 === o && k.isXMLDoc(t) || (s = k.attrHooks[e.toLowerCase()] || (k.expr.match.bool.test(e) ? ae : void 0)), void 0 !== n ? null === n ? void k.removeAttr(t, e) : s && "set" in s && void 0 !== (i = s.set(t, n, e)) ? i : (t.setAttribute(e, n + ""), n) : s && "get" in s && null !== (i = s.get(t, e)) ? i : null == (i = k.find.attr(t, e)) ? void 0 : i)
        },
        attrHooks: {
            type: {
                set: function(t, e) {
                    if (!m.radioValue && "radio" === e && S(t, "input")) {
                        var n = t.value;
                        return t.setAttribute("type", e), n && (t.value = n), e
                    }
                }
            }
        },
        removeAttr: function(t, e) {
            var n, i = 0,
                s = e && e.match(F);
            if (s && 1 === t.nodeType)
                for (; n = s[i++];) t.removeAttribute(n)
        }
    }), ae = {
        set: function(t, e, n) {
            return !1 === e ? k.removeAttr(t, n) : t.setAttribute(n, n), n
        }
    }, k.each(k.expr.match.bool.source.match(/\w+/g), function(t, e) {
        var r = le[e] || k.find.attr;
        le[e] = function(t, e, n) {
            var i, s, o = e.toLowerCase();
            return n || (s = le[o], le[o] = i, i = null != r(t, e, n) ? o : null, le[o] = s), i
        }
    });
    var ce = /^(?:input|select|textarea|button)$/i,
        ue = /^(?:a|area)$/i;

    function he(t) {
        return (t.match(F) || []).join(" ")
    }

    function de(t) {
        return t.getAttribute && t.getAttribute("class") || ""
    }
    k.fn.extend({
        prop: function(t, e) {
            return B(this, k.prop, t, e, 1 < arguments.length)
        },
        removeProp: function(t) {
            return this.each(function() {
                delete this[k.propFix[t] || t]
            })
        }
    }), k.extend({
        prop: function(t, e, n) {
            var i, s, o = t.nodeType;
            if (3 !== o && 8 !== o && 2 !== o) return 1 === o && k.isXMLDoc(t) || (e = k.propFix[e] || e, s = k.propHooks[e]), void 0 !== n ? s && "set" in s && void 0 !== (i = s.set(t, n, e)) ? i : t[e] = n : s && "get" in s && null !== (i = s.get(t, e)) ? i : t[e]
        },
        propHooks: {
            tabIndex: {
                get: function(t) {
                    var e = k.find.attr(t, "tabindex");
                    return e ? parseInt(e, 10) : ce.test(t.nodeName) || ue.test(t.nodeName) && t.href ? 0 : -1
                }
            }
        },
        propFix: {
            for: "htmlFor",
            class: "className"
        }
    }), m.optSelected || (k.propHooks.selected = {
        get: function(t) {
            var e = t.parentNode;
            return e && e.parentNode && e.parentNode.selectedIndex, null
        },
        set: function(t) {
            var e = t.parentNode;
            e && (e.selectedIndex, e.parentNode && e.parentNode.selectedIndex)
        }
    }), k.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
        k.propFix[this.toLowerCase()] = this
    }), k.fn.extend({
        addClass: function(e) {
            var t, n, i, s, o, r, a, l = 0;
            if (k.isFunction(e)) return this.each(function(t) {
                k(this).addClass(e.call(this, t, de(this)))
            });
            if ("string" == typeof e && e)
                for (t = e.match(F) || []; n = this[l++];)
                    if (s = de(n), i = 1 === n.nodeType && " " + he(s) + " ") {
                        for (r = 0; o = t[r++];) i.indexOf(" " + o + " ") < 0 && (i += o + " ");
                        s !== (a = he(i)) && n.setAttribute("class", a)
                    } return this
        },
        removeClass: function(e) {
            var t, n, i, s, o, r, a, l = 0;
            if (k.isFunction(e)) return this.each(function(t) {
                k(this).removeClass(e.call(this, t, de(this)))
            });
            if (!arguments.length) return this.attr("class", "");
            if ("string" == typeof e && e)
                for (t = e.match(F) || []; n = this[l++];)
                    if (s = de(n), i = 1 === n.nodeType && " " + he(s) + " ") {
                        for (r = 0; o = t[r++];)
                            for (; - 1 < i.indexOf(" " + o + " ");) i = i.replace(" " + o + " ", " ");
                        s !== (a = he(i)) && n.setAttribute("class", a)
                    } return this
        },
        toggleClass: function(s, e) {
            var o = typeof s;
            return "boolean" == typeof e && "string" === o ? e ? this.addClass(s) : this.removeClass(s) : k.isFunction(s) ? this.each(function(t) {
                k(this).toggleClass(s.call(this, t, de(this), e), e)
            }) : this.each(function() {
                var t, e, n, i;
                if ("string" === o)
                    for (e = 0, n = k(this), i = s.match(F) || []; t = i[e++];) n.hasClass(t) ? n.removeClass(t) : n.addClass(t);
                else void 0 !== s && "boolean" !== o || ((t = de(this)) && U.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === s ? "" : U.get(this, "__className__") || ""))
            })
        },
        hasClass: function(t) {
            var e, n, i = 0;
            for (e = " " + t + " "; n = this[i++];)
                if (1 === n.nodeType && -1 < (" " + he(de(n)) + " ").indexOf(e)) return !0;
            return !1
        }
    });
    var pe = /\r/g;
    k.fn.extend({
        val: function(n) {
            var i, t, s, e = this[0];
            return arguments.length ? (s = k.isFunction(n), this.each(function(t) {
                var e;
                1 === this.nodeType && (null == (e = s ? n.call(this, t, k(this).val()) : n) ? e = "" : "number" == typeof e ? e += "" : Array.isArray(e) && (e = k.map(e, function(t) {
                    return null == t ? "" : t + ""
                })), (i = k.valHooks[this.type] || k.valHooks[this.nodeName.toLowerCase()]) && "set" in i && void 0 !== i.set(this, e, "value") || (this.value = e))
            })) : e ? (i = k.valHooks[e.type] || k.valHooks[e.nodeName.toLowerCase()]) && "get" in i && void 0 !== (t = i.get(e, "value")) ? t : "string" == typeof(t = e.value) ? t.replace(pe, "") : null == t ? "" : t : void 0
        }
    }), k.extend({
        valHooks: {
            option: {
                get: function(t) {
                    var e = k.find.attr(t, "value");
                    return null != e ? e : he(k.text(t))
                }
            },
            select: {
                get: function(t) {
                    var e, n, i, s = t.options,
                        o = t.selectedIndex,
                        r = "select-one" === t.type,
                        a = r ? null : [],
                        l = r ? o + 1 : s.length;
                    for (i = o < 0 ? l : r ? o : 0; i < l; i++)
                        if (((n = s[i]).selected || i === o) && !n.disabled && (!n.parentNode.disabled || !S(n.parentNode, "optgroup"))) {
                            if (e = k(n).val(), r) return e;
                            a.push(e)
                        } return a
                },
                set: function(t, e) {
                    for (var n, i, s = t.options, o = k.makeArray(e), r = s.length; r--;)((i = s[r]).selected = -1 < k.inArray(k.valHooks.option.get(i), o)) && (n = !0);
                    return n || (t.selectedIndex = -1), o
                }
            }
        }
    }), k.each(["radio", "checkbox"], function() {
        k.valHooks[this] = {
            set: function(t, e) {
                if (Array.isArray(e)) return t.checked = -1 < k.inArray(k(t).val(), e)
            }
        }, m.checkOn || (k.valHooks[this].get = function(t) {
            return null === t.getAttribute("value") ? "on" : t.value
        })
    });
    var fe = /^(?:focusinfocus|focusoutblur)$/;
    k.extend(k.event, {
        trigger: function(t, e, n, i) {
            var s, o, r, a, l, c, u, h = [n || $],
                d = f.call(t, "type") ? t.type : t,
                p = f.call(t, "namespace") ? t.namespace.split(".") : [];
            if (o = r = n = n || $, 3 !== n.nodeType && 8 !== n.nodeType && !fe.test(d + k.event.triggered) && (-1 < d.indexOf(".") && (d = (p = d.split(".")).shift(), p.sort()), l = d.indexOf(":") < 0 && "on" + d, (t = t[k.expando] ? t : new k.Event(d, "object" == typeof t && t)).isTrigger = i ? 2 : 3, t.namespace = p.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = n), e = null == e ? [t] : k.makeArray(e, [t]), u = k.event.special[d] || {}, i || !u.trigger || !1 !== u.trigger.apply(n, e))) {
                if (!i && !u.noBubble && !k.isWindow(n)) {
                    for (a = u.delegateType || d, fe.test(a + d) || (o = o.parentNode); o; o = o.parentNode) h.push(o), r = o;
                    r === (n.ownerDocument || $) && h.push(r.defaultView || r.parentWindow || _)
                }
                for (s = 0;
                    (o = h[s++]) && !t.isPropagationStopped();) t.type = 1 < s ? a : u.bindType || d, (c = (U.get(o, "events") || {})[t.type] && U.get(o, "handle")) && c.apply(o, e), (c = l && o[l]) && c.apply && V(o) && (t.result = c.apply(o, e), !1 === t.result && t.preventDefault());
                return t.type = d, i || t.isDefaultPrevented() || u._default && !1 !== u._default.apply(h.pop(), e) || !V(n) || l && k.isFunction(n[d]) && !k.isWindow(n) && ((r = n[l]) && (n[l] = null), n[k.event.triggered = d](), k.event.triggered = void 0, r && (n[l] = r)), t.result
            }
        },
        simulate: function(t, e, n) {
            var i = k.extend(new k.Event, n, {
                type: t,
                isSimulated: !0
            });
            k.event.trigger(i, null, e)
        }
    }), k.fn.extend({
        trigger: function(t, e) {
            return this.each(function() {
                k.event.trigger(t, e, this)
            })
        },
        triggerHandler: function(t, e) {
            var n = this[0];
            if (n) return k.event.trigger(t, e, n, !0)
        }
    }), k.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function(t, n) {
        k.fn[n] = function(t, e) {
            return 0 < arguments.length ? this.on(n, null, t, e) : this.trigger(n)
        }
    }), k.fn.extend({
        hover: function(t, e) {
            return this.mouseenter(t).mouseleave(e || t)
        }
    }), m.focusin = "onfocusin" in _, m.focusin || k.each({
        focus: "focusin",
        blur: "focusout"
    }, function(n, i) {
        var s = function(t) {
            k.event.simulate(i, t.target, k.event.fix(t))
        };
        k.event.special[i] = {
            setup: function() {
                var t = this.ownerDocument || this,
                    e = U.access(t, i);
                e || t.addEventListener(n, s, !0), U.access(t, i, (e || 0) + 1)
            },
            teardown: function() {
                var t = this.ownerDocument || this,
                    e = U.access(t, i) - 1;
                e ? U.access(t, i, e) : (t.removeEventListener(n, s, !0), U.remove(t, i))
            }
        }
    });
    var ge = _.location,
        me = k.now(),
        ve = /\?/;
    k.parseXML = function(t) {
        var e;
        if (!t || "string" != typeof t) return null;
        try {
            e = (new _.DOMParser).parseFromString(t, "text/xml")
        } catch (t) {
            e = void 0
        }
        return e && !e.getElementsByTagName("parsererror").length || k.error("Invalid XML: " + t), e
    };
    var ye = /\[\]$/,
        be = /\r?\n/g,
        xe = /^(?:submit|button|image|reset|file)$/i,
        we = /^(?:input|select|textarea|keygen)/i;

    function Ce(n, t, i, s) {
        var e;
        if (Array.isArray(t)) k.each(t, function(t, e) {
            i || ye.test(n) ? s(n, e) : Ce(n + "[" + ("object" == typeof e && null != e ? t : "") + "]", e, i, s)
        });
        else if (i || "object" !== k.type(t)) s(n, t);
        else
            for (e in t) Ce(n + "[" + e + "]", t[e], i, s)
    }
    k.param = function(t, e) {
        var n, i = [],
            s = function(t, e) {
                var n = k.isFunction(e) ? e() : e;
                i[i.length] = encodeURIComponent(t) + "=" + encodeURIComponent(null == n ? "" : n)
            };
        if (Array.isArray(t) || t.jquery && !k.isPlainObject(t)) k.each(t, function() {
            s(this.name, this.value)
        });
        else
            for (n in t) Ce(n, t[n], e, s);
        return i.join("&")
    }, k.fn.extend({
        serialize: function() {
            return k.param(this.serializeArray())
        },
        serializeArray: function() {
            return this.map(function() {
                var t = k.prop(this, "elements");
                return t ? k.makeArray(t) : this
            }).filter(function() {
                var t = this.type;
                return this.name && !k(this).is(":disabled") && we.test(this.nodeName) && !xe.test(t) && (this.checked || !ot.test(t))
            }).map(function(t, e) {
                var n = k(this).val();
                return null == n ? null : Array.isArray(n) ? k.map(n, function(t) {
                    return {
                        name: e.name,
                        value: t.replace(be, "\r\n")
                    }
                }) : {
                    name: e.name,
                    value: n.replace(be, "\r\n")
                }
            }).get()
        }
    });
    var _e = /%20/g,
        $e = /#.*$/,
        ke = /([?&])_=[^&]*/,
        Te = /^(.*?):[ \t]*([^\r\n]*)$/gm,
        Se = /^(?:GET|HEAD)$/,
        De = /^\/\//,
        Ee = {},
        Ae = {},
        Pe = "*/".concat("*"),
        Me = $.createElement("a");

    function qe(o) {
        return function(t, e) {
            "string" != typeof t && (e = t, t = "*");
            var n, i = 0,
                s = t.toLowerCase().match(F) || [];
            if (k.isFunction(e))
                for (; n = s[i++];) "+" === n[0] ? (n = n.slice(1) || "*", (o[n] = o[n] || []).unshift(e)) : (o[n] = o[n] || []).push(e)
        }
    }

    function Re(e, s, o, r) {
        var a = {},
            l = e === Ae;

        function c(t) {
            var i;
            return a[t] = !0, k.each(e[t] || [], function(t, e) {
                var n = e(s, o, r);
                return "string" != typeof n || l || a[n] ? l ? !(i = n) : void 0 : (s.dataTypes.unshift(n), c(n), !1)
            }), i
        }
        return c(s.dataTypes[0]) || !a["*"] && c("*")
    }

    function Le(t, e) {
        var n, i, s = k.ajaxSettings.flatOptions || {};
        for (n in e) void 0 !== e[n] && ((s[n] ? t : i || (i = {}))[n] = e[n]);
        return i && k.extend(!0, t, i), t
    }
    Me.href = ge.href, k.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
            url: ge.href,
            type: "GET",
            isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(ge.protocol),
            global: !0,
            processData: !0,
            async: !0,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            accepts: {
                "*": Pe,
                text: "text/plain",
                html: "text/html",
                xml: "application/xml, text/xml",
                json: "application/json, text/javascript"
            },
            contents: {
                xml: /\bxml\b/,
                html: /\bhtml/,
                json: /\bjson\b/
            },
            responseFields: {
                xml: "responseXML",
                text: "responseText",
                json: "responseJSON"
            },
            converters: {
                "* text": String,
                "text html": !0,
                "text json": JSON.parse,
                "text xml": k.parseXML
            },
            flatOptions: {
                url: !0,
                context: !0
            }
        },
        ajaxSetup: function(t, e) {
            return e ? Le(Le(t, k.ajaxSettings), e) : Le(k.ajaxSettings, t)
        },
        ajaxPrefilter: qe(Ee),
        ajaxTransport: qe(Ae),
        ajax: function(t, e) {
            "object" == typeof t && (e = t, t = void 0), e = e || {};
            var u, h, d, n, p, i, f, g, s, o, m = k.ajaxSetup({}, e),
                v = m.context || m,
                y = m.context && (v.nodeType || v.jquery) ? k(v) : k.event,
                b = k.Deferred(),
                x = k.Callbacks("once memory"),
                w = m.statusCode || {},
                r = {},
                a = {},
                l = "canceled",
                C = {
                    readyState: 0,
                    getResponseHeader: function(t) {
                        var e;
                        if (f) {
                            if (!n)
                                for (n = {}; e = Te.exec(d);) n[e[1].toLowerCase()] = e[2];
                            e = n[t.toLowerCase()]
                        }
                        return null == e ? null : e
                    },
                    getAllResponseHeaders: function() {
                        return f ? d : null
                    },
                    setRequestHeader: function(t, e) {
                        return null == f && (t = a[t.toLowerCase()] = a[t.toLowerCase()] || t, r[t] = e), this
                    },
                    overrideMimeType: function(t) {
                        return null == f && (m.mimeType = t), this
                    },
                    statusCode: function(t) {
                        var e;
                        if (t)
                            if (f) C.always(t[C.status]);
                            else
                                for (e in t) w[e] = [w[e], t[e]];
                        return this
                    },
                    abort: function(t) {
                        var e = t || l;
                        return u && u.abort(e), c(0, e), this
                    }
                };
            if (b.promise(C), m.url = ((t || m.url || ge.href) + "").replace(De, ge.protocol + "//"), m.type = e.method || e.type || m.method || m.type, m.dataTypes = (m.dataType || "*").toLowerCase().match(F) || [""], null == m.crossDomain) {
                i = $.createElement("a");
                try {
                    i.href = m.url, i.href = i.href, m.crossDomain = Me.protocol + "//" + Me.host != i.protocol + "//" + i.host
                } catch (t) {
                    m.crossDomain = !0
                }
            }
            if (m.data && m.processData && "string" != typeof m.data && (m.data = k.param(m.data, m.traditional)), Re(Ee, m, e, C), f) return C;
            for (s in (g = k.event && m.global) && 0 == k.active++ && k.event.trigger("ajaxStart"), m.type = m.type.toUpperCase(), m.hasContent = !Se.test(m.type), h = m.url.replace($e, ""), m.hasContent ? m.data && m.processData && 0 === (m.contentType || "").indexOf("application/x-www-form-urlencoded") && (m.data = m.data.replace(_e, "+")) : (o = m.url.slice(h.length), m.data && (h += (ve.test(h) ? "&" : "?") + m.data, delete m.data), !1 === m.cache && (h = h.replace(ke, "$1"), o = (ve.test(h) ? "&" : "?") + "_=" + me++ + o), m.url = h + o), m.ifModified && (k.lastModified[h] && C.setRequestHeader("If-Modified-Since", k.lastModified[h]), k.etag[h] && C.setRequestHeader("If-None-Match", k.etag[h])), (m.data && m.hasContent && !1 !== m.contentType || e.contentType) && C.setRequestHeader("Content-Type", m.contentType), C.setRequestHeader("Accept", m.dataTypes[0] && m.accepts[m.dataTypes[0]] ? m.accepts[m.dataTypes[0]] + ("*" !== m.dataTypes[0] ? ", " + Pe + "; q=0.01" : "") : m.accepts["*"]), m.headers) C.setRequestHeader(s, m.headers[s]);
            if (m.beforeSend && (!1 === m.beforeSend.call(v, C, m) || f)) return C.abort();
            if (l = "abort", x.add(m.complete), C.done(m.success), C.fail(m.error), u = Re(Ae, m, e, C)) {
                if (C.readyState = 1, g && y.trigger("ajaxSend", [C, m]), f) return C;
                m.async && 0 < m.timeout && (p = _.setTimeout(function() {
                    C.abort("timeout")
                }, m.timeout));
                try {
                    f = !1, u.send(r, c)
                } catch (t) {
                    if (f) throw t;
                    c(-1, t)
                }
            } else c(-1, "No Transport");

            function c(t, e, n, i) {
                var s, o, r, a, l, c = e;
                f || (f = !0, p && _.clearTimeout(p), u = void 0, d = i || "", C.readyState = 0 < t ? 4 : 0, s = 200 <= t && t < 300 || 304 === t, n && (a = function(t, e, n) {
                    for (var i, s, o, r, a = t.contents, l = t.dataTypes;
                        "*" === l[0];) l.shift(), void 0 === i && (i = t.mimeType || e.getResponseHeader("Content-Type"));
                    if (i)
                        for (s in a)
                            if (a[s] && a[s].test(i)) {
                                l.unshift(s);
                                break
                            } if (l[0] in n) o = l[0];
                    else {
                        for (s in n) {
                            if (!l[0] || t.converters[s + " " + l[0]]) {
                                o = s;
                                break
                            }
                            r || (r = s)
                        }
                        o = o || r
                    }
                    if (o) return o !== l[0] && l.unshift(o), n[o]
                }(m, C, n)), a = function(t, e, n, i) {
                    var s, o, r, a, l, c = {},
                        u = t.dataTypes.slice();
                    if (u[1])
                        for (r in t.converters) c[r.toLowerCase()] = t.converters[r];
                    for (o = u.shift(); o;)
                        if (t.responseFields[o] && (n[t.responseFields[o]] = e), !l && i && t.dataFilter && (e = t.dataFilter(e, t.dataType)), l = o, o = u.shift())
                            if ("*" === o) o = l;
                            else if ("*" !== l && l !== o) {
                        if (!(r = c[l + " " + o] || c["* " + o]))
                            for (s in c)
                                if ((a = s.split(" "))[1] === o && (r = c[l + " " + a[0]] || c["* " + a[0]])) {
                                    !0 === r ? r = c[s] : !0 !== c[s] && (o = a[0], u.unshift(a[1]));
                                    break
                                } if (!0 !== r)
                            if (r && t.throws) e = r(e);
                            else try {
                                e = r(e)
                            } catch (t) {
                                return {
                                    state: "parsererror",
                                    error: r ? t : "No conversion from " + l + " to " + o
                                }
                            }
                    }
                    return {
                        state: "success",
                        data: e
                    }
                }(m, a, C, s), s ? (m.ifModified && ((l = C.getResponseHeader("Last-Modified")) && (k.lastModified[h] = l), (l = C.getResponseHeader("etag")) && (k.etag[h] = l)), 204 === t || "HEAD" === m.type ? c = "nocontent" : 304 === t ? c = "notmodified" : (c = a.state, o = a.data, s = !(r = a.error))) : (r = c, !t && c || (c = "error", t < 0 && (t = 0))), C.status = t, C.statusText = (e || c) + "", s ? b.resolveWith(v, [o, c, C]) : b.rejectWith(v, [C, c, r]), C.statusCode(w), w = void 0, g && y.trigger(s ? "ajaxSuccess" : "ajaxError", [C, m, s ? o : r]), x.fireWith(v, [C, c]), g && (y.trigger("ajaxComplete", [C, m]), --k.active || k.event.trigger("ajaxStop")))
            }
            return C
        },
        getJSON: function(t, e, n) {
            return k.get(t, e, n, "json")
        },
        getScript: function(t, e) {
            return k.get(t, void 0, e, "script")
        }
    }), k.each(["get", "post"], function(t, s) {
        k[s] = function(t, e, n, i) {
            return k.isFunction(e) && (i = i || n, n = e, e = void 0), k.ajax(k.extend({
                url: t,
                type: s,
                dataType: i,
                data: e,
                success: n
            }, k.isPlainObject(t) && t))
        }
    }), k._evalUrl = function(t) {
        return k.ajax({
            url: t,
            type: "GET",
            dataType: "script",
            cache: !0,
            async: !1,
            global: !1,
            throws: !0
        })
    }, k.fn.extend({
        wrapAll: function(t) {
            var e;
            return this[0] && (k.isFunction(t) && (t = t.call(this[0])), e = k(t, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && e.insertBefore(this[0]), e.map(function() {
                for (var t = this; t.firstElementChild;) t = t.firstElementChild;
                return t
            }).append(this)), this
        },
        wrapInner: function(n) {
            return k.isFunction(n) ? this.each(function(t) {
                k(this).wrapInner(n.call(this, t))
            }) : this.each(function() {
                var t = k(this),
                    e = t.contents();
                e.length ? e.wrapAll(n) : t.append(n)
            })
        },
        wrap: function(e) {
            var n = k.isFunction(e);
            return this.each(function(t) {
                k(this).wrapAll(n ? e.call(this, t) : e)
            })
        },
        unwrap: function(t) {
            return this.parent(t).not("body").each(function() {
                k(this).replaceWith(this.childNodes)
            }), this
        }
    }), k.expr.pseudos.hidden = function(t) {
        return !k.expr.pseudos.visible(t)
    }, k.expr.pseudos.visible = function(t) {
        return !!(t.offsetWidth || t.offsetHeight || t.getClientRects().length)
    }, k.ajaxSettings.xhr = function() {
        try {
            return new _.XMLHttpRequest
        } catch (t) {}
    };
    var Fe = {
            0: 200,
            1223: 204
        },
        je = k.ajaxSettings.xhr();
    m.cors = !!je && "withCredentials" in je, m.ajax = je = !!je, k.ajaxTransport(function(s) {
        var o, r;
        if (m.cors || je && !s.crossDomain) return {
            send: function(t, e) {
                var n, i = s.xhr();
                if (i.open(s.type, s.url, s.async, s.username, s.password), s.xhrFields)
                    for (n in s.xhrFields) i[n] = s.xhrFields[n];
                for (n in s.mimeType && i.overrideMimeType && i.overrideMimeType(s.mimeType), s.crossDomain || t["X-Requested-With"] || (t["X-Requested-With"] = "XMLHttpRequest"), t) i.setRequestHeader(n, t[n]);
                o = function(t) {
                    return function() {
                        o && (o = r = i.onload = i.onerror = i.onabort = i.onreadystatechange = null, "abort" === t ? i.abort() : "error" === t ? "number" != typeof i.status ? e(0, "error") : e(i.status, i.statusText) : e(Fe[i.status] || i.status, i.statusText, "text" !== (i.responseType || "text") || "string" != typeof i.responseText ? {
                            binary: i.response
                        } : {
                            text: i.responseText
                        }, i.getAllResponseHeaders()))
                    }
                }, i.onload = o(), r = i.onerror = o("error"), void 0 !== i.onabort ? i.onabort = r : i.onreadystatechange = function() {
                    4 === i.readyState && _.setTimeout(function() {
                        o && r()
                    })
                }, o = o("abort");
                try {
                    i.send(s.hasContent && s.data || null)
                } catch (t) {
                    if (o) throw t
                }
            },
            abort: function() {
                o && o()
            }
        }
    }), k.ajaxPrefilter(function(t) {
        t.crossDomain && (t.contents.script = !1)
    }), k.ajaxSetup({
        accepts: {
            script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
        },
        contents: {
            script: /\b(?:java|ecma)script\b/
        },
        converters: {
            "text script": function(t) {
                return k.globalEval(t), t
            }
        }
    }), k.ajaxPrefilter("script", function(t) {
        void 0 === t.cache && (t.cache = !1), t.crossDomain && (t.type = "GET")
    }), k.ajaxTransport("script", function(n) {
        var i, s;
        if (n.crossDomain) return {
            send: function(t, e) {
                i = k("<script>").prop({
                    charset: n.scriptCharset,
                    src: n.url
                }).on("load error", s = function(t) {
                    i.remove(), s = null, t && e("error" === t.type ? 404 : 200, t.type)
                }), $.head.appendChild(i[0])
            },
            abort: function() {
                s && s()
            }
        }
    });
    var Ie, Ne = [],
        He = /(=)\?(?=&|$)|\?\?/;
    k.ajaxSetup({
        jsonp: "callback",
        jsonpCallback: function() {
            var t = Ne.pop() || k.expando + "_" + me++;
            return this[t] = !0, t
        }
    }), k.ajaxPrefilter("json jsonp", function(t, e, n) {
        var i, s, o, r = !1 !== t.jsonp && (He.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && He.test(t.data) && "data");
        if (r || "jsonp" === t.dataTypes[0]) return i = t.jsonpCallback = k.isFunction(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, r ? t[r] = t[r].replace(He, "$1" + i) : !1 !== t.jsonp && (t.url += (ve.test(t.url) ? "&" : "?") + t.jsonp + "=" + i), t.converters["script json"] = function() {
            return o || k.error(i + " was not called"), o[0]
        }, t.dataTypes[0] = "json", s = _[i], _[i] = function() {
            o = arguments
        }, n.always(function() {
            void 0 === s ? k(_).removeProp(i) : _[i] = s, t[i] && (t.jsonpCallback = e.jsonpCallback, Ne.push(i)), o && k.isFunction(s) && s(o[0]), o = s = void 0
        }), "script"
    }), m.createHTMLDocument = ((Ie = $.implementation.createHTMLDocument("").body).innerHTML = "<form></form><form></form>", 2 === Ie.childNodes.length), k.parseHTML = function(t, e, n) {
        return "string" != typeof t ? [] : ("boolean" == typeof e && (n = e, e = !1), e || (m.createHTMLDocument ? ((i = (e = $.implementation.createHTMLDocument("")).createElement("base")).href = $.location.href, e.head.appendChild(i)) : e = $), o = !n && [], (s = D.exec(t)) ? [e.createElement(s[1])] : (s = ft([t], e, o), o && o.length && k(o).remove(), k.merge([], s.childNodes)));
        var i, s, o
    }, k.fn.load = function(t, e, n) {
        var i, s, o, r = this,
            a = t.indexOf(" ");
        return -1 < a && (i = he(t.slice(a)), t = t.slice(0, a)), k.isFunction(e) ? (n = e, e = void 0) : e && "object" == typeof e && (s = "POST"), 0 < r.length && k.ajax({
            url: t,
            type: s || "GET",
            dataType: "html",
            data: e
        }).done(function(t) {
            o = arguments, r.html(i ? k("<div>").append(k.parseHTML(t)).find(i) : t)
        }).always(n && function(t, e) {
            r.each(function() {
                n.apply(this, o || [t.responseText, e, t])
            })
        }), this
    }, k.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(t, e) {
        k.fn[e] = function(t) {
            return this.on(e, t)
        }
    }), k.expr.pseudos.animated = function(e) {
        return k.grep(k.timers, function(t) {
            return e === t.elem
        }).length
    }, k.offset = {
        setOffset: function(t, e, n) {
            var i, s, o, r, a, l, c = k.css(t, "position"),
                u = k(t),
                h = {};
            "static" === c && (t.style.position = "relative"), a = u.offset(), o = k.css(t, "top"), l = k.css(t, "left"), ("absolute" === c || "fixed" === c) && -1 < (o + l).indexOf("auto") ? (r = (i = u.position()).top, s = i.left) : (r = parseFloat(o) || 0, s = parseFloat(l) || 0), k.isFunction(e) && (e = e.call(t, n, k.extend({}, a))), null != e.top && (h.top = e.top - a.top + r), null != e.left && (h.left = e.left - a.left + s), "using" in e ? e.using.call(t, h) : u.css(h)
        }
    }, k.fn.extend({
        offset: function(e) {
            if (arguments.length) return void 0 === e ? this : this.each(function(t) {
                k.offset.setOffset(this, e, t)
            });
            var t, n, i, s, o = this[0];
            return o ? o.getClientRects().length ? (i = o.getBoundingClientRect(), n = (t = o.ownerDocument).documentElement, s = t.defaultView, {
                top: i.top + s.pageYOffset - n.clientTop,
                left: i.left + s.pageXOffset - n.clientLeft
            }) : {
                top: 0,
                left: 0
            } : void 0
        },
        position: function() {
            if (this[0]) {
                var t, e, n = this[0],
                    i = {
                        top: 0,
                        left: 0
                    };
                return "fixed" === k.css(n, "position") ? e = n.getBoundingClientRect() : (t = this.offsetParent(), e = this.offset(), S(t[0], "html") || (i = t.offset()), i = {
                    top: i.top + k.css(t[0], "borderTopWidth", !0),
                    left: i.left + k.css(t[0], "borderLeftWidth", !0)
                }), {
                    top: e.top - i.top - k.css(n, "marginTop", !0),
                    left: e.left - i.left - k.css(n, "marginLeft", !0)
                }
            }
        },
        offsetParent: function() {
            return this.map(function() {
                for (var t = this.offsetParent; t && "static" === k.css(t, "position");) t = t.offsetParent;
                return t || gt
            })
        }
    }), k.each({
        scrollLeft: "pageXOffset",
        scrollTop: "pageYOffset"
    }, function(e, s) {
        var o = "pageYOffset" === s;
        k.fn[e] = function(t) {
            return B(this, function(t, e, n) {
                var i;
                return k.isWindow(t) ? i = t : 9 === t.nodeType && (i = t.defaultView), void 0 === n ? i ? i[s] : t[e] : void(i ? i.scrollTo(o ? i.pageXOffset : n, o ? n : i.pageYOffset) : t[e] = n)
            }, e, t, arguments.length)
        }
    }), k.each(["top", "left"], function(t, n) {
        k.cssHooks[n] = It(m.pixelPosition, function(t, e) {
            if (e) return e = jt(t, n), Lt.test(e) ? k(t).position()[n] + "px" : e
        })
    }), k.each({
        Height: "height",
        Width: "width"
    }, function(r, a) {
        k.each({
            padding: "inner" + r,
            content: a,
            "": "outer" + r
        }, function(i, o) {
            k.fn[o] = function(t, e) {
                var n = arguments.length && (i || "boolean" != typeof t),
                    s = i || (!0 === t || !0 === e ? "margin" : "border");
                return B(this, function(t, e, n) {
                    var i;
                    return k.isWindow(t) ? 0 === o.indexOf("outer") ? t["inner" + r] : t.document.documentElement["client" + r] : 9 === t.nodeType ? (i = t.documentElement, Math.max(t.body["scroll" + r], i["scroll" + r], t.body["offset" + r], i["offset" + r], i["client" + r])) : void 0 === n ? k.css(t, e, s) : k.style(t, e, n, s)
                }, a, n ? t : void 0, n)
            }
        })
    }), k.fn.extend({
        bind: function(t, e, n) {
            return this.on(t, null, e, n)
        },
        unbind: function(t, e) {
            return this.off(t, null, e)
        },
        delegate: function(t, e, n, i) {
            return this.on(e, t, n, i)
        },
        undelegate: function(t, e, n) {
            return 1 === arguments.length ? this.off(t, "**") : this.off(e, t || "**", n)
        }
    }), k.holdReady = function(t) {
        t ? k.readyWait++ : k.ready(!0)
    }, k.isArray = Array.isArray, k.parseJSON = JSON.parse, k.nodeName = S, "function" == typeof define && define.amd && define("jquery", [], function() {
        return k
    });
    var Oe = _.jQuery,
        ze = _.$;
    return k.noConflict = function(t) {
        return _.$ === k && (_.$ = ze), t && _.jQuery === k && (_.jQuery = Oe), k
    }, t || (_.jQuery = _.$ = k), k
}),
function(e, n) {
    "function" == typeof define && define.amd ? define("bloodhound", ["jquery"], function(t) {
        return e.Bloodhound = n(t)
    }) : "object" == typeof exports ? module.exports = n(require("jquery")) : e.Bloodhound = n(jQuery)
}(this, function(p) {
    var f = function() {
            "use strict";
            return {
                isMsie: function() {
                    return !!/(msie|trident)/i.test(navigator.userAgent) && navigator.userAgent.match(/(msie |rv:)(\d+(.\d+)?)/i)[2]
                },
                isBlankString: function(t) {
                    return !t || /^\s*$/.test(t)
                },
                escapeRegExChars: function(t) {
                    return t.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&")
                },
                isString: function(t) {
                    return "string" == typeof t
                },
                isNumber: function(t) {
                    return "number" == typeof t
                },
                isArray: p.isArray,
                isFunction: p.isFunction,
                isObject: p.isPlainObject,
                isUndefined: function(t) {
                    return void 0 === t
                },
                isElement: function(t) {
                    return !(!t || 1 !== t.nodeType)
                },
                isJQuery: function(t) {
                    return t instanceof p
                },
                toStr: function(t) {
                    return f.isUndefined(t) || null === t ? "" : t + ""
                },
                bind: p.proxy,
                each: function(t, n) {
                    p.each(t, function(t, e) {
                        return n(e, t)
                    })
                },
                map: p.map,
                filter: p.grep,
                every: function(n, i) {
                    var s = !0;
                    return n ? (p.each(n, function(t, e) {
                        return !!(s = i.call(null, e, t, n)) && void 0
                    }), !!s) : s
                },
                some: function(n, i) {
                    var s = !1;
                    return n ? (p.each(n, function(t, e) {
                        return !(s = i.call(null, e, t, n)) && void 0
                    }), !!s) : s
                },
                mixin: p.extend,
                identity: function(t) {
                    return t
                },
                clone: function(t) {
                    return p.extend(!0, {}, t)
                },
                getIdGenerator: function() {
                    var t = 0;
                    return function() {
                        return t++
                    }
                },
                templatify: function(t) {
                    return p.isFunction(t) ? t : function() {
                        return String(t)
                    }
                },
                defer: function(t) {
                    setTimeout(t, 0)
                },
                debounce: function(s, o, r) {
                    var a, l;
                    return function() {
                        var t, e, n = this,
                            i = arguments;
                        return t = function() {
                            a = null, r || (l = s.apply(n, i))
                        }, e = r && !a, clearTimeout(a), a = setTimeout(t, o), e && (l = s.apply(n, i)), l
                    }
                },
                throttle: function(n, i) {
                    var s, o, r, a, l, c;
                    return l = 0, c = function() {
                            l = new Date, r = null, a = n.apply(s, o)
                        },
                        function() {
                            var t = new Date,
                                e = i - (t - l);
                            return s = this, o = arguments, e <= 0 ? (clearTimeout(r), r = null, l = t, a = n.apply(s, o)) : r || (r = setTimeout(c, e)), a
                        }
                },
                stringify: function(t) {
                    return f.isString(t) ? t : JSON.stringify(t)
                },
                noop: function() {}
            }
        }(),
        r = "0.11.1",
        n = function() {
            "use strict";

            function t(t) {
                return (t = f.toStr(t)) ? t.split(/\s+/) : []
            }

            function e(t) {
                return (t = f.toStr(t)) ? t.split(/\W+/) : []
            }

            function n(i) {
                return function(t) {
                    return t = f.isArray(t) ? t : [].slice.call(arguments, 0),
                        function(e) {
                            var n = [];
                            return f.each(t, function(t) {
                                n = n.concat(i(f.toStr(e[t])))
                            }), n
                        }
                }
            }
            return {
                nonword: e,
                whitespace: t,
                obj: {
                    nonword: n(e),
                    whitespace: n(t)
                }
            }
        }(),
        i = function() {
            "use strict";

            function t(t) {
                this.maxSize = f.isNumber(t) ? t : 100, this.reset(), this.maxSize <= 0 && (this.set = this.get = p.noop)
            }

            function e() {
                this.head = this.tail = null
            }
            return f.mixin(t.prototype, {
                set: function(t, e) {
                    var n, i = this.list.tail;
                    this.size >= this.maxSize && (this.list.remove(i), delete this.hash[i.key], this.size--), (n = this.hash[t]) ? (n.val = e, this.list.moveToFront(n)) : (n = new function(t, e) {
                        this.key = t, this.val = e, this.prev = this.next = null
                    }(t, e), this.list.add(n), this.hash[t] = n, this.size++)
                },
                get: function(t) {
                    var e = this.hash[t];
                    return e ? (this.list.moveToFront(e), e.val) : void 0
                },
                reset: function() {
                    this.size = 0, this.hash = {}, this.list = new e
                }
            }), f.mixin(e.prototype, {
                add: function(t) {
                    this.head && (t.next = this.head, this.head.prev = t), this.head = t, this.tail = this.tail || t
                },
                remove: function(t) {
                    t.prev ? t.prev.next = t.next : this.head = t.next, t.next ? t.next.prev = t.prev : this.tail = t.prev
                },
                moveToFront: function(t) {
                    this.remove(t), this.add(t)
                }
            }), t
        }(),
        e = function() {
            "use strict";

            function t(t, e) {
                this.prefix = ["__", t, "__"].join(""), this.ttlKey = "__ttl__", this.keyMatcher = new RegExp("^" + f.escapeRegExChars(this.prefix)), this.ls = e || o, !this.ls && this._noop()
            }

            function i() {
                return (new Date).getTime()
            }

            function s(t) {
                return JSON.stringify(f.isUndefined(t) ? null : t)
            }

            function n(t) {
                return p.parseJSON(t)
            }
            var o;
            try {
                (o = window.localStorage).setItem("~~~", "!"), o.removeItem("~~~")
            } catch (t) {
                o = null
            }
            return f.mixin(t.prototype, {
                _prefix: function(t) {
                    return this.prefix + t
                },
                _ttlKey: function(t) {
                    return this._prefix(t) + this.ttlKey
                },
                _noop: function() {
                    this.get = this.set = this.remove = this.clear = this.isExpired = f.noop
                },
                _safeSet: function(t, e) {
                    try {
                        this.ls.setItem(t, e)
                    } catch (t) {
                        "QuotaExceededError" === t.name && (this.clear(), this._noop())
                    }
                },
                get: function(t) {
                    return this.isExpired(t) && this.remove(t), n(this.ls.getItem(this._prefix(t)))
                },
                set: function(t, e, n) {
                    return f.isNumber(n) ? this._safeSet(this._ttlKey(t), s(i() + n)) : this.ls.removeItem(this._ttlKey(t)), this._safeSet(this._prefix(t), s(e))
                },
                remove: function(t) {
                    return this.ls.removeItem(this._ttlKey(t)), this.ls.removeItem(this._prefix(t)), this
                },
                clear: function() {
                    var t, e = function(t) {
                        var e, n, i = [],
                            s = o.length;
                        for (e = 0; e < s; e++)(n = o.key(e)).match(t) && i.push(n.replace(t, ""));
                        return i
                    }(this.keyMatcher);
                    for (t = e.length; t--;) this.remove(e[t]);
                    return this
                },
                isExpired: function(t) {
                    var e = n(this.ls.getItem(this._ttlKey(t)));
                    return !!(f.isNumber(e) && i() > e)
                }
            }), t
        }(),
        s = function() {
            "use strict";

            function t(t) {
                t = t || {}, this.cancelled = !1, this.lastReq = null, this._send = t.transport, this._get = t.limiter ? t.limiter(this._get) : this._get, this._cache = !1 === t.cache ? new i(0) : e
            }
            var a = 0,
                l = {},
                c = 6,
                e = new i(10);
            return t.setMaxPendingRequests = function(t) {
                c = t
            }, t.resetCache = function() {
                e.reset()
            }, f.mixin(t.prototype, {
                _fingerprint: function(t) {
                    return (t = t || {}).url + t.type + p.param(t.data || {})
                },
                _get: function(t, e) {
                    function n(t) {
                        e(null, t), r._cache.set(s, t)
                    }

                    function i() {
                        e(!0)
                    }
                    var s, o, r = this;
                    s = this._fingerprint(t), this.cancelled || s !== this.lastReq || ((o = l[s]) ? o.done(n).fail(i) : a < c ? (a++, l[s] = this._send(t).done(n).fail(i).always(function() {
                        a--, delete l[s], r.onDeckRequestArgs && (r._get.apply(r, r.onDeckRequestArgs), r.onDeckRequestArgs = null)
                    })) : this.onDeckRequestArgs = [].slice.call(arguments, 0))
                },
                get: function(t, e) {
                    var n, i;
                    e = e || p.noop, t = f.isString(t) ? {
                        url: t
                    } : t || {}, i = this._fingerprint(t), this.cancelled = !1, this.lastReq = i, (n = this._cache.get(i)) ? e(null, n) : this._get(t, e)
                },
                cancel: function() {
                    this.cancelled = !0
                }
            }), t
        }(),
        o = window.SearchIndex = function() {
            "use strict";

            function t(t) {
                (t = t || {}).datumTokenizer && t.queryTokenizer || p.error("datumTokenizer and queryTokenizer are both required"), this.identify = t.identify || f.stringify, this.datumTokenizer = t.datumTokenizer, this.queryTokenizer = t.queryTokenizer, this.reset()
            }

            function n(t) {
                return t = f.filter(t, function(t) {
                    return !!t
                }), f.map(t, function(t) {
                    return t.toLowerCase()
                })
            }

            function r() {
                var t = {};
                return t[l] = [], t[a] = {}, t
            }
            var a = "c",
                l = "i";
            return f.mixin(t.prototype, {
                bootstrap: function(t) {
                    this.datums = t.datums, this.trie = t.trie
                },
                add: function(t) {
                    var o = this;
                    t = f.isArray(t) ? t : [t], f.each(t, function(t) {
                        var s, e;
                        o.datums[s = o.identify(t)] = t, e = n(o.datumTokenizer(t)), f.each(e, function(t) {
                            var e, n, i;
                            for (e = o.trie, n = t.split(""); i = n.shift();)(e = e[a][i] || (e[a][i] = r()))[l].push(s)
                        })
                    })
                },
                get: function(t) {
                    var e = this;
                    return f.map(t, function(t) {
                        return e.datums[t]
                    })
                },
                search: function(t) {
                    var e, o, r = this;
                    return e = n(this.queryTokenizer(t)), f.each(e, function(t) {
                        var e, n, i, s;
                        if (o && 0 === o.length) return !1;
                        for (e = r.trie, n = t.split(""); e && (i = n.shift());) e = e[a][i];
                        return e && 0 === n.length ? (s = e[l].slice(0), void(o = o ? function(t, e) {
                            var n = 0,
                                i = 0,
                                s = [];
                            t = t.sort(), e = e.sort();
                            for (var o = t.length, r = e.length; n < o && i < r;) t[n] < e[i] ? n++ : (t[n] > e[i] || (s.push(t[n]), n++), i++);
                            return s
                        }(o, s) : s)) : !(o = [])
                    }), o ? f.map(function(t) {
                        for (var e = {}, n = [], i = 0, s = t.length; i < s; i++) e[t[i]] || (e[t[i]] = !0, n.push(t[i]));
                        return n
                    }(o), function(t) {
                        return r.datums[t]
                    }) : []
                },
                all: function() {
                    var t = [];
                    for (var e in this.datums) t.push(this.datums[e]);
                    return t
                },
                reset: function() {
                    this.datums = {}, this.trie = r()
                },
                serialize: function() {
                    return {
                        datums: this.datums,
                        trie: this.trie
                    }
                }
            }), t
        }(),
        a = function() {
            "use strict";

            function t(t) {
                this.url = t.url, this.ttl = t.ttl, this.cache = t.cache, this.prepare = t.prepare, this.transform = t.transform, this.transport = t.transport, this.thumbprint = t.thumbprint, this.storage = new e(t.cacheKey)
            }
            var n;
            return n = {
                data: "data",
                protocol: "protocol",
                thumbprint: "thumbprint"
            }, f.mixin(t.prototype, {
                _settings: function() {
                    return {
                        url: this.url,
                        type: "GET",
                        dataType: "json"
                    }
                },
                store: function(t) {
                    this.cache && (this.storage.set(n.data, t, this.ttl), this.storage.set(n.protocol, location.protocol, this.ttl), this.storage.set(n.thumbprint, this.thumbprint, this.ttl))
                },
                fromCache: function() {
                    var t, e = {};
                    return this.cache ? (e.data = this.storage.get(n.data), e.protocol = this.storage.get(n.protocol), e.thumbprint = this.storage.get(n.thumbprint), t = e.thumbprint !== this.thumbprint || e.protocol !== location.protocol, e.data && !t ? e.data : null) : null
                },
                fromNetwork: function(e) {
                    var t, n = this;
                    e && (t = this.prepare(this._settings()), this.transport(t).fail(function() {
                        e(!0)
                    }).done(function(t) {
                        e(null, n.transform(t))
                    }))
                },
                clear: function() {
                    return this.storage.clear(), this
                }
            }), t
        }(),
        l = function() {
            "use strict";

            function t(t) {
                this.url = t.url, this.prepare = t.prepare, this.transform = t.transform, this.transport = new s({
                    cache: t.cache,
                    limiter: t.limiter,
                    transport: t.transport
                })
            }
            return f.mixin(t.prototype, {
                _settings: function() {
                    return {
                        url: this.url,
                        type: "GET",
                        dataType: "json"
                    }
                },
                get: function(t, n) {
                    var e, i = this;
                    if (n) return t = t || "", e = this.prepare(t, this._settings()), this.transport.get(e, function(t, e) {
                        n(t ? [] : i.transform(e))
                    })
                },
                cancelLastRequest: function() {
                    this.transport.cancel()
                }
            }), t
        }(),
        c = function() {
            "use strict";

            function o(t) {
                var e, n, i, s, o, r, a, l, c, u, h;
                if (t) return e = {
                    url: null,
                    cache: !0,
                    prepare: null,
                    replace: null,
                    wildcard: null,
                    limiter: null,
                    rateLimitBy: "debounce",
                    rateLimitWait: 300,
                    transform: f.identity,
                    transport: null
                }, t = f.isString(t) ? {
                    url: t
                } : t, !(t = f.mixin(e, t)).url && p.error("remote requires url to be set"), t.transform = t.filter || t.transform, t.prepare = (c = (l = t).prepare, u = l.replace, h = l.wildcard, c || (c = u ? function(t, e) {
                    return e.url = u(e.url, t), e
                } : l.wildcard ? function(t, e) {
                    return e.url = e.url.replace(h, encodeURIComponent(t)), e
                } : function(t, e) {
                    return e
                })), t.limiter = (i = (n = t).limiter, s = n.rateLimitBy, o = n.rateLimitWait, i || (i = /^throttle$/i.test(s) ? (a = o, function(t) {
                    return f.throttle(t, a)
                }) : (r = o, function(t) {
                    return f.debounce(t, r)
                })), i), t.transport = t.transport ? d(t.transport) : p.ajax, delete t.replace, delete t.wildcard, delete t.rateLimitBy, delete t.rateLimitWait, t
            }

            function d(n) {
                return function(t) {
                    var e = p.Deferred();
                    return n(t, function(t) {
                        f.defer(function() {
                            e.resolve(t)
                        })
                    }, function(t) {
                        f.defer(function() {
                            e.reject(t)
                        })
                    }), e
                }
            }
            return function(t) {
                var e, n, i, s;
                return e = {
                    initialize: !0,
                    identify: f.stringify,
                    datumTokenizer: null,
                    queryTokenizer: null,
                    sufficient: 5,
                    sorter: null,
                    local: [],
                    prefetch: null,
                    remote: null
                }, !(t = f.mixin(e, t || {})).datumTokenizer && p.error("datumTokenizer is required"), !t.queryTokenizer && p.error("queryTokenizer is required"), n = t.sorter, t.sorter = n ? function(t) {
                    return t.sort(n)
                } : f.identity, t.local = f.isFunction(t.local) ? t.local() : t.local, t.prefetch = (i = t.prefetch) ? (s = {
                    url: null,
                    ttl: 864e5,
                    cache: !0,
                    cacheKey: null,
                    thumbprint: "",
                    prepare: f.identity,
                    transform: f.identity,
                    transport: null
                }, i = f.isString(i) ? {
                    url: i
                } : i, !(i = f.mixin(s, i)).url && p.error("prefetch requires url to be set"), i.transform = i.filter || i.transform, i.cacheKey = i.cacheKey || i.url, i.thumbprint = r + i.thumbprint, i.transport = i.transport ? d(i.transport) : p.ajax, i) : null, t.remote = o(t.remote), t
            }
        }();
    return function() {
        "use strict";

        function t(t) {
            t = c(t), this.sorter = t.sorter, this.identify = t.identify, this.sufficient = t.sufficient, this.local = t.local, this.remote = t.remote ? new l(t.remote) : null, this.prefetch = t.prefetch ? new a(t.prefetch) : null, this.index = new o({
                identify: this.identify,
                datumTokenizer: t.datumTokenizer,
                queryTokenizer: t.queryTokenizer
            }), !1 !== t.initialize && this.initialize()
        }
        var e;
        return e = window && window.Bloodhound, t.noConflict = function() {
            return window && (window.Bloodhound = e), t
        }, t.tokenizers = n, f.mixin(t.prototype, {
            __ttAdapter: function() {
                var i = this;
                return this.remote ? function(t, e, n) {
                    return i.search(t, e, n)
                } : function(t, e) {
                    return i.search(t, e)
                }
            },
            _loadPrefetch: function() {
                var n, t, i = this;
                return n = p.Deferred(), this.prefetch ? (t = this.prefetch.fromCache()) ? (this.index.bootstrap(t), n.resolve()) : this.prefetch.fromNetwork(function(t, e) {
                    return t ? n.reject() : (i.add(e), i.prefetch.store(i.index.serialize()), void n.resolve())
                }) : n.resolve(), n.promise()
            },
            _initialize: function() {
                var t = this;
                return this.clear(), (this.initPromise = this._loadPrefetch()).done(function() {
                    t.add(t.local)
                }), this.initPromise
            },
            initialize: function(t) {
                return !this.initPromise || t ? this._initialize() : this.initPromise
            },
            add: function(t) {
                return this.index.add(t), this
            },
            get: function(t) {
                return t = f.isArray(t) ? t : [].slice.call(arguments), this.index.get(t)
            },
            search: function(t, e, i) {
                var s, o = this;
                return s = this.sorter(this.index.search(t)), e(this.remote ? s.slice() : s), this.remote && s.length < this.sufficient ? this.remote.get(t, function(t) {
                    var n = [];
                    f.each(t, function(e) {
                        !f.some(s, function(t) {
                            return o.identify(e) === o.identify(t)
                        }) && n.push(e)
                    }), i && i(n)
                }) : this.remote && this.remote.cancelLastRequest(), this
            },
            all: function() {
                return this.index.all()
            },
            clear: function() {
                return this.index.reset(), this
            },
            clearPrefetchCache: function() {
                return this.prefetch && this.prefetch.clear(), this
            },
            clearRemoteCache: function() {
                return s.resetCache(), this
            },
            ttAdapter: function() {
                return this.__ttAdapter()
            }
        }), t
    }()
}),
function(t, e) {
    "function" == typeof define && define.amd ? define("typeahead.js", ["jquery"], function(t) {
        return e(t)
    }) : "object" == typeof exports ? module.exports = e(require("jquery")) : e(jQuery)
}(0, function(b) {
    var x = function() {
            "use strict";
            return {
                isMsie: function() {
                    return !!/(msie|trident)/i.test(navigator.userAgent) && navigator.userAgent.match(/(msie |rv:)(\d+(.\d+)?)/i)[2]
                },
                isBlankString: function(t) {
                    return !t || /^\s*$/.test(t)
                },
                escapeRegExChars: function(t) {
                    return t.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&")
                },
                isString: function(t) {
                    return "string" == typeof t
                },
                isNumber: function(t) {
                    return "number" == typeof t
                },
                isArray: b.isArray,
                isFunction: b.isFunction,
                isObject: b.isPlainObject,
                isUndefined: function(t) {
                    return void 0 === t
                },
                isElement: function(t) {
                    return !(!t || 1 !== t.nodeType)
                },
                isJQuery: function(t) {
                    return t instanceof b
                },
                toStr: function(t) {
                    return x.isUndefined(t) || null === t ? "" : t + ""
                },
                bind: b.proxy,
                each: function(t, n) {
                    b.each(t, function(t, e) {
                        return n(e, t)
                    })
                },
                map: b.map,
                filter: b.grep,
                every: function(n, i) {
                    var s = !0;
                    return n ? (b.each(n, function(t, e) {
                        return !!(s = i.call(null, e, t, n)) && void 0
                    }), !!s) : s
                },
                some: function(n, i) {
                    var s = !1;
                    return n ? (b.each(n, function(t, e) {
                        return !(s = i.call(null, e, t, n)) && void 0
                    }), !!s) : s
                },
                mixin: b.extend,
                identity: function(t) {
                    return t
                },
                clone: function(t) {
                    return b.extend(!0, {}, t)
                },
                getIdGenerator: function() {
                    var t = 0;
                    return function() {
                        return t++
                    }
                },
                templatify: function(t) {
                    return b.isFunction(t) ? t : function() {
                        return String(t)
                    }
                },
                defer: function(t) {
                    setTimeout(t, 0)
                },
                debounce: function(s, o, r) {
                    var a, l;
                    return function() {
                        var t, e, n = this,
                            i = arguments;
                        return t = function() {
                            a = null, r || (l = s.apply(n, i))
                        }, e = r && !a, clearTimeout(a), a = setTimeout(t, o), e && (l = s.apply(n, i)), l
                    }
                },
                throttle: function(n, i) {
                    var s, o, r, a, l, c;
                    return l = 0, c = function() {
                            l = new Date, r = null, a = n.apply(s, o)
                        },
                        function() {
                            var t = new Date,
                                e = i - (t - l);
                            return s = this, o = arguments, e <= 0 ? (clearTimeout(r), r = null, l = t, a = n.apply(s, o)) : r || (r = setTimeout(c, e)), a
                        }
                },
                stringify: function(t) {
                    return x.isString(t) ? t : JSON.stringify(t)
                },
                noop: function() {}
            }
        }(),
        n = function() {
            "use strict";
            var a = {
                wrapper: "twitter-typeahead",
                input: "tt-input",
                hint: "tt-hint",
                menu: "tt-menu",
                dataset: "tt-dataset",
                suggestion: "tt-suggestion",
                selectable: "tt-selectable",
                empty: "tt-empty",
                open: "tt-open",
                cursor: "tt-cursor",
                highlight: "tt-highlight"
            };
            return function(t) {
                var e, n, i, s, o, r;
                return n = x.mixin({}, a, t), {
                    css: (e = {
                        css: (r = {
                            wrapper: {
                                position: "relative",
                                display: "inline-block"
                            },
                            hint: {
                                position: "absolute",
                                top: "0",
                                left: "0",
                                borderColor: "transparent",
                                boxShadow: "none",
                                opacity: "1"
                            },
                            input: {
                                position: "relative",
                                verticalAlign: "top",
                                backgroundColor: "transparent"
                            },
                            inputWithNoHint: {
                                position: "relative",
                                verticalAlign: "top"
                            },
                            menu: {
                                position: "absolute",
                                top: "100%",
                                left: "0",
                                zIndex: "100",
                                display: "none"
                            },
                            ltr: {
                                left: "0",
                                right: "auto"
                            },
                            rtl: {
                                left: "auto",
                                right: " 0"
                            }
                        }, x.isMsie() && x.mixin(r.input, {
                            backgroundImage: "url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7)"
                        }), r),
                        classes: n,
                        html: (o = n, {
                            wrapper: '<span class="' + o.wrapper + '"></span>',
                            menu: '<div class="' + o.menu + '"></div>'
                        }),
                        selectors: (i = n, s = {}, x.each(i, function(t, e) {
                            s[e] = "." + t
                        }), s)
                    }).css,
                    html: e.html,
                    classes: e.classes,
                    selectors: e.selectors,
                    mixin: function(t) {
                        x.mixin(t, e)
                    }
                }
            }
        }(),
        w = function() {
            "use strict";

            function t(t) {
                t && t.el || b.error("EventBus initialized without el"), this.$el = b(t.el)
            }
            var n;
            return "typeahead:", n = {
                render: "rendered",
                cursorchange: "cursorchanged",
                select: "selected",
                autocomplete: "autocompleted"
            }, x.mixin(t.prototype, {
                _trigger: function(t, e) {
                    var n;
                    return n = b.Event("typeahead:" + t), (e = e || []).unshift(n), this.$el.trigger.apply(this.$el, e), n
                },
                before: function(t) {
                    var e;
                    return e = [].slice.call(arguments, 1), this._trigger("before" + t, e).isDefaultPrevented()
                },
                trigger: function(t) {
                    var e;
                    this._trigger(t, [].slice.call(arguments, 1)), (e = n[t]) && this._trigger(e, [].slice.call(arguments, 1))
                }
            }), t
        }(),
        e = function() {
            "use strict";

            function i(t, e, n, i) {
                var s;
                if (!n) return this;
                for (e = e.split(a), n = i ? function(t, e) {
                        return t.bind ? t.bind(e) : function() {
                            t.apply(e, [].slice.call(arguments, 0))
                        }
                    }(n, i) : n, this._callbacks = this._callbacks || {}; s = e.shift();) this._callbacks[s] = this._callbacks[s] || {
                    sync: [],
                    async: []
                }, this._callbacks[s][t].push(n);
                return this
            }

            function r(i, s, o) {
                return function() {
                    for (var t, e = 0, n = i.length; !t && e < n; e += 1) t = !1 === i[e].apply(s, o);
                    return !t
                }
            }
            var a = /\s+/,
                l = window.setImmediate ? function(t) {
                    setImmediate(function() {
                        t()
                    })
                } : function(t) {
                    setTimeout(function() {
                        t()
                    }, 0)
                };
            return {
                onSync: function(t, e, n) {
                    return i.call(this, "sync", t, e, n)
                },
                onAsync: function(t, e, n) {
                    return i.call(this, "async", t, e, n)
                },
                off: function(t) {
                    var e;
                    if (!this._callbacks) return this;
                    for (t = t.split(a); e = t.shift();) delete this._callbacks[e];
                    return this
                },
                trigger: function(t) {
                    var e, n, i, s, o;
                    if (!this._callbacks) return this;
                    for (t = t.split(a), i = [].slice.call(arguments, 1);
                        (e = t.shift()) && (n = this._callbacks[e]);) s = r(n.sync, this, [e].concat(i)), o = r(n.async, this, [e].concat(i)), s() && l(o);
                    return this
                }
            }
        }(),
        l = function(r) {
            "use strict";
            var t = {
                node: null,
                pattern: null,
                tagName: "strong",
                className: null,
                wordsOnly: !1,
                caseSensitive: !1
            };
            return function(s) {
                var o;
                (s = x.mixin({}, t, s)).node && s.pattern && (s.pattern = x.isArray(s.pattern) ? s.pattern : [s.pattern], o = function(t, e, n) {
                    for (var i, s = [], o = 0, r = t.length; o < r; o++) s.push(x.escapeRegExChars(t[o]));
                    return i = n ? "\\b(" + s.join("|") + ")\\b" : "(" + s.join("|") + ")", e ? new RegExp(i) : new RegExp(i, "i")
                }(s.pattern, s.caseSensitive, s.wordsOnly), function t(e, n) {
                    for (var i, s = 0; s < e.childNodes.length; s++) 3 === (i = e.childNodes[s]).nodeType ? s += n(i) ? 1 : 0 : t(i, n)
                }(s.node, function(t) {
                    var e, n, i;
                    return (e = o.exec(t.data)) && (i = r.createElement(s.tagName), s.className && (i.className = s.className), (n = t.splitText(e.index)).splitText(e[0].length), i.appendChild(n.cloneNode(!0)), t.parentNode.replaceChild(i, n)), !!e
                }))
            }
        }(window.document),
        C = function() {
            "use strict";

            function r(t, e) {
                var n;
                (t = t || {}).input || b.error("input is missing"), e.mixin(this), this.$hint = b(t.hint), this.$input = b(t.input), this.query = this.$input.val(), this.queryWhenFocused = this.hasFocus() ? this.query : null, this.$overflowHelper = (n = this.$input, b('<pre aria-hidden="true"></pre>').css({
                    position: "absolute",
                    visibility: "hidden",
                    whiteSpace: "pre",
                    fontFamily: n.css("font-family"),
                    fontSize: n.css("font-size"),
                    fontStyle: n.css("font-style"),
                    fontVariant: n.css("font-variant"),
                    fontWeight: n.css("font-weight"),
                    wordSpacing: n.css("word-spacing"),
                    letterSpacing: n.css("letter-spacing"),
                    textIndent: n.css("text-indent"),
                    textRendering: n.css("text-rendering"),
                    textTransform: n.css("text-transform")
                }).insertAfter(n)), this._checkLanguageDirection(), 0 === this.$hint.length && (this.setHint = this.getHint = this.clearHint = this.clearHintIfInvalid = x.noop)
            }

            function i(t) {
                return t.altKey || t.ctrlKey || t.metaKey || t.shiftKey
            }
            var o;
            return o = {
                9: "tab",
                27: "esc",
                37: "left",
                39: "right",
                13: "enter",
                38: "up",
                40: "down"
            }, r.normalizeQuery = function(t) {
                return x.toStr(t).replace(/^\s*/g, "").replace(/\s{2,}/g, " ")
            }, x.mixin(r.prototype, e, {
                _onBlur: function() {
                    this.resetInputValue(), this.trigger("blurred")
                },
                _onFocus: function() {
                    this.queryWhenFocused = this.query, this.trigger("focused")
                },
                _onKeydown: function(t) {
                    var e = o[t.which || t.keyCode];
                    this._managePreventDefault(e, t), e && this._shouldTrigger(e, t) && this.trigger(e + "Keyed", t)
                },
                _onInput: function() {
                    this._setQuery(this.getInputValue()), this.clearHintIfInvalid(), this._checkLanguageDirection()
                },
                _managePreventDefault: function(t, e) {
                    var n;
                    switch (t) {
                        case "up":
                        case "down":
                            n = !i(e);
                            break;
                        default:
                            n = !1
                    }
                    n && e.preventDefault()
                },
                _shouldTrigger: function(t, e) {
                    var n;
                    switch (t) {
                        case "tab":
                            n = !i(e);
                            break;
                        default:
                            n = !0
                    }
                    return n
                },
                _checkLanguageDirection: function() {
                    var t = (this.$input.css("direction") || "ltr").toLowerCase();
                    this.dir !== t && (this.dir = t, this.$hint.attr("dir", t), this.trigger("langDirChanged", t))
                },
                _setQuery: function(t, e) {
                    var n, i, s, o;
                    s = t, o = this.query, i = !!(n = r.normalizeQuery(s) === r.normalizeQuery(o)) && this.query.length !== t.length, this.query = t, e || n ? !e && i && this.trigger("whitespaceChanged", this.query) : this.trigger("queryChanged", this.query)
                },
                bind: function() {
                    var t, e, n, i, s = this;
                    return t = x.bind(this._onBlur, this), e = x.bind(this._onFocus, this), n = x.bind(this._onKeydown, this), i = x.bind(this._onInput, this), this.$input.on("blur.tt", t).on("focus.tt", e).on("keydown.tt", n), !x.isMsie() || 9 < x.isMsie() ? this.$input.on("input.tt", i) : this.$input.on("keydown.tt keypress.tt cut.tt paste.tt", function(t) {
                        o[t.which || t.keyCode] || x.defer(x.bind(s._onInput, s, t))
                    }), this
                },
                focus: function() {
                    this.$input.focus()
                },
                blur: function() {
                    this.$input.blur()
                },
                getLangDir: function() {
                    return this.dir
                },
                getQuery: function() {
                    return this.query || ""
                },
                setQuery: function(t, e) {
                    this.setInputValue(t), this._setQuery(t, e)
                },
                hasQueryChangedSinceLastFocus: function() {
                    return this.query !== this.queryWhenFocused
                },
                getInputValue: function() {
                    return this.$input.val()
                },
                setInputValue: function(t) {
                    this.$input.val(t), this.clearHintIfInvalid(), this._checkLanguageDirection()
                },
                resetInputValue: function() {
                    this.setInputValue(this.query)
                },
                getHint: function() {
                    return this.$hint.val()
                },
                setHint: function(t) {
                    this.$hint.val(t)
                },
                clearHint: function() {
                    this.setHint("")
                },
                clearHintIfInvalid: function() {
                    var t, e, n;
                    n = (t = this.getInputValue()) !== (e = this.getHint()) && 0 === e.indexOf(t), !("" !== t && n && !this.hasOverflow()) && this.clearHint()
                },
                hasFocus: function() {
                    return this.$input.is(":focus")
                },
                hasOverflow: function() {
                    var t = this.$input.width() - 2;
                    return this.$overflowHelper.text(this.getInputValue()), this.$overflowHelper.width() >= t
                },
                isCursorAtEnd: function() {
                    var t, e, n;
                    return t = this.$input.val().length, e = this.$input[0].selectionStart, x.isNumber(e) ? e === t : !document.selection || ((n = document.selection.createRange()).moveStart("character", -t), t === n.text.length)
                },
                destroy: function() {
                    this.$hint.off(".tt"), this.$input.off(".tt"), this.$overflowHelper.remove(), this.$hint = this.$input = this.$overflowHelper = b("<div>")
                }
            }), r
        }(),
        s = function() {
            "use strict";

            function t(t, e) {
                var n, i, s, o;
                (t = t || {}).templates = t.templates || {}, t.templates.notFound = t.templates.notFound || t.templates.empty, t.source || b.error("missing source"), t.node || b.error("missing node"), t.name && (o = t.name, !/^[_a-zA-Z0-9-]+$/.test(o)) && b.error("invalid dataset name: " + t.name), e.mixin(this), this.highlight = !!t.highlight, this.name = t.name || a(), this.limit = t.limit || 5, this.displayFn = (s = (s = t.display || t.displayKey) || x.stringify, x.isFunction(s) ? s : function(t) {
                    return t[s]
                }), this.templates = (n = t.templates, i = this.displayFn, {
                    notFound: n.notFound && x.templatify(n.notFound),
                    pending: n.pending && x.templatify(n.pending),
                    header: n.header && x.templatify(n.header),
                    footer: n.footer && x.templatify(n.footer),
                    suggestion: n.suggestion || function(t) {
                        return b("<div>").text(i(t))
                    }
                }), this.source = t.source.__ttAdapter ? t.source.__ttAdapter() : t.source, this.async = x.isUndefined(t.async) ? 2 < this.source.length : !!t.async, this._resetLastSuggestion(), this.$el = b(t.node).addClass(this.classes.dataset).addClass(this.classes.dataset + "-" + this.name)
            }
            var r, a;
            return r = {
                val: "tt-selectable-display",
                obj: "tt-selectable-object"
            }, a = x.getIdGenerator(), t.extractData = function(t) {
                var e = b(t);
                return e.data(r.obj) ? {
                    val: e.data(r.val) || "",
                    obj: e.data(r.obj) || null
                } : null
            }, x.mixin(t.prototype, e, {
                _overwrite: function(t, e) {
                    (e = e || []).length ? this._renderSuggestions(t, e) : this.async && this.templates.pending ? this._renderPending(t) : !this.async && this.templates.notFound ? this._renderNotFound(t) : this._empty(), this.trigger("rendered", this.name, e, !1)
                },
                _append: function(t, e) {
                    (e = e || []).length && this.$lastSuggestion.length ? this._appendSuggestions(t, e) : e.length ? this._renderSuggestions(t, e) : !this.$lastSuggestion.length && this.templates.notFound && this._renderNotFound(t), this.trigger("rendered", this.name, e, !0)
                },
                _renderSuggestions: function(t, e) {
                    var n;
                    n = this._getSuggestionsFragment(t, e), this.$lastSuggestion = n.children().last(), this.$el.html(n).prepend(this._getHeader(t, e)).append(this._getFooter(t, e))
                },
                _appendSuggestions: function(t, e) {
                    var n, i;
                    i = (n = this._getSuggestionsFragment(t, e)).children().last(), this.$lastSuggestion.after(n), this.$lastSuggestion = i
                },
                _renderPending: function(t) {
                    var e = this.templates.pending;
                    this._resetLastSuggestion(), e && this.$el.html(e({
                        query: t,
                        dataset: this.name
                    }))
                },
                _renderNotFound: function(t) {
                    var e = this.templates.notFound;
                    this._resetLastSuggestion(), e && this.$el.html(e({
                        query: t,
                        dataset: this.name
                    }))
                },
                _empty: function() {
                    this.$el.empty(), this._resetLastSuggestion()
                },
                _getSuggestionsFragment: function(i, t) {
                    var s, o = this;
                    return s = document.createDocumentFragment(), x.each(t, function(t) {
                        var e, n;
                        n = o._injectQuery(i, t), e = b(o.templates.suggestion(n)).data(r.obj, t).data(r.val, o.displayFn(t)).addClass(o.classes.suggestion + " " + o.classes.selectable), s.appendChild(e[0])
                    }), this.highlight && l({
                        className: this.classes.highlight,
                        node: s,
                        pattern: i
                    }), b(s)
                },
                _getFooter: function(t, e) {
                    return this.templates.footer ? this.templates.footer({
                        query: t,
                        suggestions: e,
                        dataset: this.name
                    }) : null
                },
                _getHeader: function(t, e) {
                    return this.templates.header ? this.templates.header({
                        query: t,
                        suggestions: e,
                        dataset: this.name
                    }) : null
                },
                _resetLastSuggestion: function() {
                    this.$lastSuggestion = b()
                },
                _injectQuery: function(t, e) {
                    return x.isObject(e) ? x.mixin({
                        _query: t
                    }, e) : e
                },
                update: function(e) {
                    function t(t) {
                        s || (s = !0, t = (t || []).slice(0, n.limit), o = t.length, n._overwrite(e, t), o < n.limit && n.async && n.trigger("asyncRequested", e))
                    }
                    var n = this,
                        i = !1,
                        s = !1,
                        o = 0;
                    this.cancel(), this.cancel = function() {
                        i = !0, n.cancel = b.noop, n.async && n.trigger("asyncCanceled", e)
                    }, this.source(e, t, function(t) {
                        t = t || [], !i && o < n.limit && (n.cancel = b.noop, o += t.length, n._append(e, t.slice(0, n.limit - o)), n.async && n.trigger("asyncReceived", e))
                    }), !s && t([])
                },
                cancel: b.noop,
                clear: function() {
                    this._empty(), this.cancel(), this.trigger("cleared")
                },
                isEmpty: function() {
                    return this.$el.is(":empty")
                },
                destroy: function() {
                    this.$el = b("<div>")
                }
            }), t
        }(),
        _ = function() {
            "use strict";

            function t(t, n) {
                var i = this;
                (t = t || {}).node || b.error("node is required"), n.mixin(this), this.$node = b(t.node), this.query = null, this.datasets = x.map(t.datasets, function(t) {
                    var e = i.$node.find(t.node).first();
                    return t.node = e.length ? e : b("<div>").appendTo(i.$node), new s(t, n)
                })
            }
            return x.mixin(t.prototype, e, {
                _onSelectableClick: function(t) {
                    this.trigger("selectableClicked", b(t.currentTarget))
                },
                _onRendered: function(t, e, n, i) {
                    this.$node.toggleClass(this.classes.empty, this._allDatasetsEmpty()), this.trigger("datasetRendered", e, n, i)
                },
                _onCleared: function() {
                    this.$node.toggleClass(this.classes.empty, this._allDatasetsEmpty()), this.trigger("datasetCleared")
                },
                _propagate: function() {
                    this.trigger.apply(this, arguments)
                },
                _allDatasetsEmpty: function() {
                    return x.every(this.datasets, function(t) {
                        return t.isEmpty()
                    })
                },
                _getSelectables: function() {
                    return this.$node.find(this.selectors.selectable)
                },
                _removeCursor: function() {
                    var t = this.getActiveSelectable();
                    t && t.removeClass(this.classes.cursor)
                },
                _ensureVisible: function(t) {
                    var e, n, i, s;
                    n = (e = t.position().top) + t.outerHeight(!0), i = this.$node.scrollTop(), s = this.$node.height() + parseInt(this.$node.css("paddingTop"), 10) + parseInt(this.$node.css("paddingBottom"), 10), e < 0 ? this.$node.scrollTop(i + e) : s < n && this.$node.scrollTop(i + (n - s))
                },
                bind: function() {
                    var t, e = this;
                    return t = x.bind(this._onSelectableClick, this), this.$node.on("click.tt", this.selectors.selectable, t), x.each(this.datasets, function(t) {
                        t.onSync("asyncRequested", e._propagate, e).onSync("asyncCanceled", e._propagate, e).onSync("asyncReceived", e._propagate, e).onSync("rendered", e._onRendered, e).onSync("cleared", e._onCleared, e)
                    }), this
                },
                isOpen: function() {
                    return this.$node.hasClass(this.classes.open)
                },
                open: function() {
                    this.$node.addClass(this.classes.open)
                },
                close: function() {
                    this.$node.removeClass(this.classes.open), this._removeCursor()
                },
                setLanguageDirection: function(t) {
                    this.$node.attr("dir", t)
                },
                selectableRelativeToCursor: function(t) {
                    var e, n, i;
                    return n = this.getActiveSelectable(), e = this._getSelectables(), -1 === (i = (i = ((i = (n ? e.index(n) : -1) + t) + 1) % (e.length + 1) - 1) < -1 ? e.length - 1 : i) ? null : e.eq(i)
                },
                setCursor: function(t) {
                    this._removeCursor(), (t = t && t.first()) && (t.addClass(this.classes.cursor), this._ensureVisible(t))
                },
                getSelectableData: function(t) {
                    return t && t.length ? s.extractData(t) : null
                },
                getActiveSelectable: function() {
                    var t = this._getSelectables().filter(this.selectors.cursor).first();
                    return t.length ? t : null
                },
                getTopSelectable: function() {
                    var t = this._getSelectables().first();
                    return t.length ? t : null
                },
                update: function(e) {
                    var t = e !== this.query;
                    return t && (this.query = e, x.each(this.datasets, function(t) {
                        t.update(e)
                    })), t
                },
                empty: function() {
                    x.each(this.datasets, function(t) {
                        t.clear()
                    }), this.query = null, this.$node.addClass(this.classes.empty)
                },
                destroy: function() {
                    this.$node.off(".tt"), this.$node = b("<div>"), x.each(this.datasets, function(t) {
                        t.destroy()
                    })
                }
            }), t
        }(),
        $ = function() {
            "use strict";

            function t() {
                _.apply(this, [].slice.call(arguments, 0))
            }
            var e = _.prototype;
            return x.mixin(t.prototype, _.prototype, {
                open: function() {
                    return !this._allDatasetsEmpty() && this._show(), e.open.apply(this, [].slice.call(arguments, 0))
                },
                close: function() {
                    return this._hide(), e.close.apply(this, [].slice.call(arguments, 0))
                },
                _onRendered: function() {
                    return this._allDatasetsEmpty() ? this._hide() : this.isOpen() && this._show(), e._onRendered.apply(this, [].slice.call(arguments, 0))
                },
                _onCleared: function() {
                    return this._allDatasetsEmpty() ? this._hide() : this.isOpen() && this._show(), e._onCleared.apply(this, [].slice.call(arguments, 0))
                },
                setLanguageDirection: function(t) {
                    return this.$node.css("ltr" === t ? this.css.ltr : this.css.rtl), e.setLanguageDirection.apply(this, [].slice.call(arguments, 0))
                },
                _hide: function() {
                    this.$node.hide()
                },
                _show: function() {
                    this.$node.css("display", "block")
                }
            }), t
        }(),
        k = function() {
            "use strict";

            function t(t, e) {
                var n, i, s, o, r, a, l, c, u, h, d;
                (t = t || {}).input || b.error("missing input"), t.menu || b.error("missing menu"), t.eventBus || b.error("missing event bus"), e.mixin(this), this.eventBus = t.eventBus, this.minLength = x.isNumber(t.minLength) ? t.minLength : 1, this.input = t.input, this.menu = t.menu, this.enabled = !0, this.active = !1, this.input.hasFocus() && this.activate(), this.dir = this.input.getLangDir(), this._hacks(), this.menu.bind().onSync("selectableClicked", this._onSelectableClicked, this).onSync("asyncRequested", this._onAsyncRequested, this).onSync("asyncCanceled", this._onAsyncCanceled, this).onSync("asyncReceived", this._onAsyncReceived, this).onSync("datasetRendered", this._onDatasetRendered, this).onSync("datasetCleared", this._onDatasetCleared, this), n = p(this, "activate", "open", "_onFocused"), i = p(this, "deactivate", "_onBlurred"), s = p(this, "isActive", "isOpen", "_onEnterKeyed"), o = p(this, "isActive", "isOpen", "_onTabKeyed"), r = p(this, "isActive", "_onEscKeyed"), a = p(this, "isActive", "open", "_onUpKeyed"), l = p(this, "isActive", "open", "_onDownKeyed"), c = p(this, "isActive", "isOpen", "_onLeftKeyed"), u = p(this, "isActive", "isOpen", "_onRightKeyed"), h = p(this, "_openIfActive", "_onQueryChanged"), d = p(this, "_openIfActive", "_onWhitespaceChanged"), this.input.bind().onSync("focused", n, this).onSync("blurred", i, this).onSync("enterKeyed", s, this).onSync("tabKeyed", o, this).onSync("escKeyed", r, this).onSync("upKeyed", a, this).onSync("downKeyed", l, this).onSync("leftKeyed", c, this).onSync("rightKeyed", u, this).onSync("queryChanged", h, this).onSync("whitespaceChanged", d, this).onSync("langDirChanged", this._onLangDirChanged, this)
            }

            function p(n) {
                var t = [].slice.call(arguments, 1);
                return function() {
                    var e = [].slice.call(arguments);
                    x.each(t, function(t) {
                        return n[t].apply(n, e)
                    })
                }
            }
            return x.mixin(t.prototype, {
                _hacks: function() {
                    var s, o;
                    s = this.input.$input || b("<div>"), o = this.menu.$node || b("<div>"), s.on("blur.tt", function(t) {
                        var e, n, i;
                        e = document.activeElement, n = o.is(e), i = 0 < o.has(e).length, x.isMsie() && (n || i) && (t.preventDefault(), t.stopImmediatePropagation(), x.defer(function() {
                            s.focus()
                        }))
                    }), o.on("mousedown.tt", function(t) {
                        t.preventDefault()
                    })
                },
                _onSelectableClicked: function(t, e) {
                    this.select(e)
                },
                _onDatasetCleared: function() {
                    this._updateHint()
                },
                _onDatasetRendered: function(t, e, n, i) {
                    this._updateHint(), this.eventBus.trigger("render", n, i, e)
                },
                _onAsyncRequested: function(t, e, n) {
                    this.eventBus.trigger("asyncrequest", n, e)
                },
                _onAsyncCanceled: function(t, e, n) {
                    this.eventBus.trigger("asynccancel", n, e)
                },
                _onAsyncReceived: function(t, e, n) {
                    this.eventBus.trigger("asyncreceive", n, e)
                },
                _onFocused: function() {
                    this._minLengthMet() && this.menu.update(this.input.getQuery())
                },
                _onBlurred: function() {
                    this.input.hasQueryChangedSinceLastFocus() && this.eventBus.trigger("change", this.input.getQuery())
                },
                _onEnterKeyed: function(t, e) {
                    var n;
                    (n = this.menu.getActiveSelectable()) && this.select(n) && e.preventDefault()
                },
                _onTabKeyed: function(t, e) {
                    var n;
                    (n = this.menu.getActiveSelectable()) ? this.select(n) && e.preventDefault(): (n = this.menu.getTopSelectable()) && this.autocomplete(n) && e.preventDefault()
                },
                _onEscKeyed: function() {
                    this.close()
                },
                _onUpKeyed: function() {
                    this.moveCursor(-1)
                },
                _onDownKeyed: function() {
                    this.moveCursor(1)
                },
                _onLeftKeyed: function() {
                    "rtl" === this.dir && this.input.isCursorAtEnd() && this.autocomplete(this.menu.getTopSelectable())
                },
                _onRightKeyed: function() {
                    "ltr" === this.dir && this.input.isCursorAtEnd() && this.autocomplete(this.menu.getTopSelectable())
                },
                _onQueryChanged: function(t, e) {
                    this._minLengthMet(e) ? this.menu.update(e) : this.menu.empty()
                },
                _onWhitespaceChanged: function() {
                    this._updateHint()
                },
                _onLangDirChanged: function(t, e) {
                    this.dir !== e && (this.dir = e, this.menu.setLanguageDirection(e))
                },
                _openIfActive: function() {
                    this.isActive() && this.open()
                },
                _minLengthMet: function(t) {
                    return (t = x.isString(t) ? t : this.input.getQuery() || "").length >= this.minLength
                },
                _updateHint: function() {
                    var t, e, n, i, s, o;
                    t = this.menu.getTopSelectable(), e = this.menu.getSelectableData(t), n = this.input.getInputValue(), !e || x.isBlankString(n) || this.input.hasOverflow() ? this.input.clearHint() : (i = C.normalizeQuery(n), s = x.escapeRegExChars(i), (o = new RegExp("^(?:" + s + ")(.+$)", "i").exec(e.val)) && this.input.setHint(n + o[1]))
                },
                isEnabled: function() {
                    return this.enabled
                },
                enable: function() {
                    this.enabled = !0
                },
                disable: function() {
                    this.enabled = !1
                },
                isActive: function() {
                    return this.active
                },
                activate: function() {
                    return !!this.isActive() || !(!this.isEnabled() || this.eventBus.before("active")) && (this.active = !0, this.eventBus.trigger("active"), !0)
                },
                deactivate: function() {
                    return !this.isActive() || !this.eventBus.before("idle") && (this.active = !1, this.close(), this.eventBus.trigger("idle"), !0)
                },
                isOpen: function() {
                    return this.menu.isOpen()
                },
                open: function() {
                    return this.isOpen() || this.eventBus.before("open") || (this.menu.open(), this._updateHint(), this.eventBus.trigger("open")), this.isOpen()
                },
                close: function() {
                    return this.isOpen() && !this.eventBus.before("close") && (this.menu.close(), this.input.clearHint(), this.input.resetInputValue(), this.eventBus.trigger("close")), !this.isOpen()
                },
                setVal: function(t) {
                    this.input.setQuery(x.toStr(t))
                },
                getVal: function() {
                    return this.input.getQuery()
                },
                select: function(t) {
                    var e = this.menu.getSelectableData(t);
                    return !(!e || this.eventBus.before("select", e.obj)) && (this.input.setQuery(e.val, !0), this.eventBus.trigger("select", e.obj), this.close(), !0)
                },
                autocomplete: function(t) {
                    var e, n;
                    return e = this.input.getQuery(), !(!((n = this.menu.getSelectableData(t)) && e !== n.val) || this.eventBus.before("autocomplete", n.obj)) && (this.input.setQuery(n.val), this.eventBus.trigger("autocomplete", n.obj), !0)
                },
                moveCursor: function(t) {
                    var e, n, i, s;
                    return e = this.input.getQuery(), n = this.menu.selectableRelativeToCursor(t), s = (i = this.menu.getSelectableData(n)) ? i.obj : null, !(this._minLengthMet() && this.menu.update(e)) && !this.eventBus.before("cursorchange", s) && (this.menu.setCursor(n), i ? this.input.setInputValue(i.val) : (this.input.resetInputValue(), this._updateHint()), this.eventBus.trigger("cursorchange", s), !0)
                },
                destroy: function() {
                    this.input.destroy(), this.menu.destroy()
                }
            }), t
        }();
    ! function() {
        "use strict";

        function i(t, n) {
            t.each(function() {
                var t, e = b(this);
                (t = e.data(y.typeahead)) && n(t, e)
            })
        }

        function v(t) {
            var e;
            return (e = x.isJQuery(t) || x.isElement(t) ? b(t).first() : []).length ? e : null
        }
        var t, y, e;
        t = b.fn.typeahead, y = {
            www: "tt-www",
            attrs: "tt-attrs",
            typeahead: "tt-typeahead"
        }, e = {
            initialize: function(f, g) {
                var m;
                return g = x.isArray(g) ? g : [].slice.call(arguments, 1), m = n((f = f || {}).classNames), this.each(function() {
                    var t, e, n, i, s, o, r, a, l, c, u, h, d, p;
                    x.each(g, function(t) {
                        t.highlight = !!f.highlight
                    }), t = b(this), e = b(m.html.wrapper), n = v(f.hint), i = v(f.menu), s = !1 !== f.hint && !n, o = !1 !== f.menu && !i, s && (d = m, n = (h = t).clone().addClass(d.classes.hint).removeData().css(d.css.hint).css((p = h, {
                        backgroundAttachment: p.css("background-attachment"),
                        backgroundClip: p.css("background-clip"),
                        backgroundColor: p.css("background-color"),
                        backgroundImage: p.css("background-image"),
                        backgroundOrigin: p.css("background-origin"),
                        backgroundPosition: p.css("background-position"),
                        backgroundRepeat: p.css("background-repeat"),
                        backgroundSize: p.css("background-size")
                    })).prop("readonly", !0).removeAttr("id name placeholder required").attr({
                        autocomplete: "off",
                        spellcheck: "false",
                        tabindex: -1
                    })), o && (i = b(m.html.menu).css(m.css.menu)), n && n.val(""), t = function(t, e) {
                        t.data(y.attrs, {
                            dir: t.attr("dir"),
                            autocomplete: t.attr("autocomplete"),
                            spellcheck: t.attr("spellcheck"),
                            style: t.attr("style")
                        }), t.addClass(e.classes.input).attr({
                            autocomplete: "off",
                            spellcheck: !1
                        });
                        try {
                            !t.attr("dir") && t.attr("dir", "auto")
                        } catch (t) {}
                        return t
                    }(t, m), (s || o) && (e.css(m.css.wrapper), t.css(s ? m.css.input : m.css.inputWithNoHint), t.wrap(e).parent().prepend(s ? n : null).append(o ? i : null)), u = o ? $ : _, r = new w({
                        el: t
                    }), a = new C({
                        hint: n,
                        input: t
                    }, m), l = new u({
                        node: i,
                        datasets: g
                    }, m), c = new k({
                        input: a,
                        menu: l,
                        eventBus: r,
                        minLength: f.minLength
                    }, m), t.data(y.www, m), t.data(y.typeahead, c)
                })
            },
            isEnabled: function() {
                var e;
                return i(this.first(), function(t) {
                    e = t.isEnabled()
                }), e
            },
            enable: function() {
                return i(this, function(t) {
                    t.enable()
                }), this
            },
            disable: function() {
                return i(this, function(t) {
                    t.disable()
                }), this
            },
            isActive: function() {
                var e;
                return i(this.first(), function(t) {
                    e = t.isActive()
                }), e
            },
            activate: function() {
                return i(this, function(t) {
                    t.activate()
                }), this
            },
            deactivate: function() {
                return i(this, function(t) {
                    t.deactivate()
                }), this
            },
            isOpen: function() {
                var e;
                return i(this.first(), function(t) {
                    e = t.isOpen()
                }), e
            },
            open: function() {
                return i(this, function(t) {
                    t.open()
                }), this
            },
            close: function() {
                return i(this, function(t) {
                    t.close()
                }), this
            },
            select: function(t) {
                var e = !1,
                    n = b(t);
                return i(this.first(), function(t) {
                    e = t.select(n)
                }), e
            },
            autocomplete: function(t) {
                var e = !1,
                    n = b(t);
                return i(this.first(), function(t) {
                    e = t.autocomplete(n)
                }), e
            },
            moveCursor: function(e) {
                var n = !1;
                return i(this.first(), function(t) {
                    n = t.moveCursor(e)
                }), n
            },
            val: function(e) {
                var n;
                return arguments.length ? (i(this, function(t) {
                    t.setVal(e)
                }), this) : (i(this.first(), function(t) {
                    n = t.getVal()
                }), n)
            },
            destroy: function() {
                return i(this, function(t, e) {
                    var n, i, s;
                    i = (n = e).data(y.www), s = n.parent().filter(i.selectors.wrapper), x.each(n.data(y.attrs), function(t, e) {
                        x.isUndefined(t) ? n.removeAttr(e) : n.attr(e, t)
                    }), n.removeData(y.typeahead).removeData(y.www).removeData(y.attr).removeClass(i.classes.input), s.length && (n.detach().insertAfter(s), s.remove()), t.destroy()
                }), this
            }
        }, b.fn.typeahead = function(t) {
            return e[t] ? e[t].apply(this, [].slice.call(arguments, 1)) : e.initialize.apply(this, arguments)
        }, b.fn.typeahead.noConflict = function() {
            return b.fn.typeahead = t, this
        }
    }()
}),
function(t, r, o) {
    var e, s, n, a, i, l, d, c, u, f, h, p, g, m, v;
    g = {
        classes: "",
        inline: p = !(h = "datepicker"),
        language: "ru",
        startDate: new Date,
        firstDay: "",
        weekends: [6, 0],
        dateFormat: "",
        altField: "",
        altFieldDateFormat: "@",
        toggleSelected: !0,
        keyboardNav: !0,
        position: "bottom left",
        offset: 12,
        view: "days",
        minView: "days",
        showOtherMonths: !0,
        selectOtherMonths: !0,
        moveToOtherMonthsOnSelect: !0,
        showOtherYears: !0,
        selectOtherYears: !0,
        moveToOtherYearsOnSelect: !0,
        minDate: "",
        maxDate: "",
        disableNavWhenOutOfRange: !0,
        multipleDates: !1,
        multipleDatesSeparator: ",",
        range: !1,
        todayButton: !1,
        clearButton: !1,
        showEvent: "focus",
        autoClose: !1,
        monthsField: "monthsShort",
        prevHtml: '<svg><path d="M 17,12 l -5,5 l 5,5"></path></svg>',
        nextHtml: '<svg><path d="M 14,12 l 5,5 l -5,5"></path></svg>',
        navTitles: {
            days: "MM, <i>yyyy</i>",
            months: "yyyy",
            years: "yyyy1 - yyyy2"
        },
        timepicker: !1,
        onlyTimepicker: !1,
        dateTimeSeparator: " ",
        timeFormat: "",
        minHours: 0,
        maxHours: 24,
        minMinutes: 0,
        maxMinutes: 59,
        hoursStep: 1,
        minutesStep: 1,
        onSelect: "",
        onShow: "",
        onHide: "",
        onChangeMonth: "",
        onChangeYear: "",
        onChangeDecade: "",
        onChangeView: "",
        onRenderCell: ""
    }, m = {
        ctrlRight: [17, 39],
        ctrlUp: [17, 38],
        ctrlLeft: [17, 37],
        ctrlDown: [17, 40],
        shiftRight: [16, 39],
        shiftUp: [16, 38],
        shiftLeft: [16, 37],
        shiftDown: [16, 40],
        altUp: [18, 38],
        altRight: [18, 39],
        altLeft: [18, 37],
        altDown: [18, 40],
        ctrlShiftUp: [16, 17, 38]
    }, (f = v = function(t, e) {
        this.el = t, this.$el = r(t), this.opts = r.extend(!0, {}, g, e, this.$el.data()), c == o && (c = r("body")), this.opts.startDate || (this.opts.startDate = new Date), "INPUT" == this.el.nodeName && (this.elIsInput = !0), this.opts.altField && (this.$altField = "string" == typeof this.opts.altField ? r(this.opts.altField) : this.opts.altField), this.inited = !1, this.visible = !1, this.silent = !1, this.currentDate = this.opts.startDate, this.currentView = this.opts.view, this._createShortCuts(), this.selectedDates = [], this.views = {}, this.keys = [], this.minRange = "", this.maxRange = "", this._prevOnSelectValue = "", this.init()
    }).prototype = {
        VERSION: "2.2.3",
        viewIndexes: ["days", "months", "years"],
        init: function() {
            p || this.opts.inline || !this.elIsInput || this._buildDatepickersContainer(), this._buildBaseHtml(), this._defineLocale(this.opts.language), this._syncWithMinMaxDates(), this.elIsInput && (this.opts.inline || (this._setPositionClasses(this.opts.position), this._bindEvents()), this.opts.keyboardNav && !this.opts.onlyTimepicker && this._bindKeyboardEvents(), this.$datepicker.on("mousedown", this._onMouseDownDatepicker.bind(this)), this.$datepicker.on("mouseup", this._onMouseUpDatepicker.bind(this))), this.opts.classes && this.$datepicker.addClass(this.opts.classes), this.opts.timepicker && (this.timepicker = new r.fn.datepicker.Timepicker(this, this.opts), this._bindTimepickerEvents()), this.opts.onlyTimepicker && this.$datepicker.addClass("-only-timepicker-"), this.views[this.currentView] = new r.fn.datepicker.Body(this, this.currentView, this.opts), this.views[this.currentView].show(), this.nav = new r.fn.datepicker.Navigation(this, this.opts), this.view = this.currentView, this.$el.on("clickCell.adp", this._onClickCell.bind(this)), this.$datepicker.on("mouseenter", ".datepicker--cell", this._onMouseEnterCell.bind(this)), this.$datepicker.on("mouseleave", ".datepicker--cell", this._onMouseLeaveCell.bind(this)), this.inited = !0
        },
        _createShortCuts: function() {
            this.minDate = this.opts.minDate ? this.opts.minDate : new Date(-86399999136e5), this.maxDate = this.opts.maxDate ? this.opts.maxDate : new Date(86399999136e5)
        },
        _bindEvents: function() {
            this.$el.on(this.opts.showEvent + ".adp", this._onShowEvent.bind(this)), this.$el.on("mouseup.adp", this._onMouseUpEl.bind(this)), this.$el.on("blur.adp", this._onBlur.bind(this)), this.$el.on("keyup.adp", this._onKeyUpGeneral.bind(this)), r(t).on("resize.adp", this._onResize.bind(this)), r("body").on("mouseup.adp", this._onMouseUpBody.bind(this))
        },
        _bindKeyboardEvents: function() {
            this.$el.on("keydown.adp", this._onKeyDown.bind(this)), this.$el.on("keyup.adp", this._onKeyUp.bind(this)), this.$el.on("hotKey.adp", this._onHotKey.bind(this))
        },
        _bindTimepickerEvents: function() {
            this.$el.on("timeChange.adp", this._onTimeChange.bind(this))
        },
        isWeekend: function(t) {
            return -1 !== this.opts.weekends.indexOf(t)
        },
        _defineLocale: function(t) {
            "string" == typeof t ? (this.loc = r.fn.datepicker.language[t], this.loc || (this.loc = r.extend(!0, {}, r.fn.datepicker.language.ru)), this.loc = r.extend(!0, {}, r.fn.datepicker.language.ru, r.fn.datepicker.language[t])) : this.loc = r.extend(!0, {}, r.fn.datepicker.language.ru, t), this.opts.dateFormat && (this.loc.dateFormat = this.opts.dateFormat), this.opts.timeFormat && (this.loc.timeFormat = this.opts.timeFormat), "" !== this.opts.firstDay && (this.loc.firstDay = this.opts.firstDay), this.opts.timepicker && (this.loc.dateFormat = [this.loc.dateFormat, this.loc.timeFormat].join(this.opts.dateTimeSeparator)), this.opts.onlyTimepicker && (this.loc.dateFormat = this.loc.timeFormat);
            var e = this._getWordBoundaryRegExp;
            (this.loc.timeFormat.match(e("aa")) || this.loc.timeFormat.match(e("AA"))) && (this.ampm = !0)
        },
        _buildDatepickersContainer: function() {
            p = !0, c.append('<div class="datepickers-container" id="datepickers-container"></div>'), u = r("#datepickers-container")
        },
        _buildBaseHtml: function() {
            var t, e = r('<div class="datepicker-inline">');
            t = "INPUT" == this.el.nodeName ? this.opts.inline ? e.insertAfter(this.$el) : u : e.appendTo(this.$el), this.$datepicker = r('<div class="datepicker"><i class="datepicker--pointer"></i><nav class="datepicker--nav"></nav><div class="datepicker--content"></div></div>').appendTo(t), this.$content = r(".datepicker--content", this.$datepicker), this.$nav = r(".datepicker--nav", this.$datepicker)
        },
        _triggerOnChange: function() {
            if (!this.selectedDates.length) {
                if ("" === this._prevOnSelectValue) return;
                return this._prevOnSelectValue = "", this.opts.onSelect("", "", this)
            }
            var t, e = this.selectedDates,
                n = f.getParsedDate(e[0]),
                i = this,
                s = new Date(n.year, n.month, n.date, n.hours, n.minutes);
            t = e.map(function(t) {
                return i.formatDate(i.loc.dateFormat, t)
            }).join(this.opts.multipleDatesSeparator), (this.opts.multipleDates || this.opts.range) && (s = e.map(function(t) {
                var e = f.getParsedDate(t);
                return new Date(e.year, e.month, e.date, e.hours, e.minutes)
            })), this._prevOnSelectValue = t, this.opts.onSelect(t, s, this)
        },
        next: function() {
            var t = this.parsedDate,
                e = this.opts;
            switch (this.view) {
                case "days":
                    this.date = new Date(t.year, t.month + 1, 1), e.onChangeMonth && e.onChangeMonth(this.parsedDate.month, this.parsedDate.year);
                    break;
                case "months":
                    this.date = new Date(t.year + 1, t.month, 1), e.onChangeYear && e.onChangeYear(this.parsedDate.year);
                    break;
                case "years":
                    this.date = new Date(t.year + 10, 0, 1), e.onChangeDecade && e.onChangeDecade(this.curDecade)
            }
        },
        prev: function() {
            var t = this.parsedDate,
                e = this.opts;
            switch (this.view) {
                case "days":
                    this.date = new Date(t.year, t.month - 1, 1), e.onChangeMonth && e.onChangeMonth(this.parsedDate.month, this.parsedDate.year);
                    break;
                case "months":
                    this.date = new Date(t.year - 1, t.month, 1), e.onChangeYear && e.onChangeYear(this.parsedDate.year);
                    break;
                case "years":
                    this.date = new Date(t.year - 10, 0, 1), e.onChangeDecade && e.onChangeDecade(this.curDecade)
            }
        },
        formatDate: function(t, e) {
            e = e || this.date;
            var n, i = t,
                s = this._getWordBoundaryRegExp,
                o = this.loc,
                r = f.getLeadingZeroNum,
                a = f.getDecade(e),
                l = f.getParsedDate(e),
                c = l.fullHours,
                u = l.hours,
                h = t.match(s("aa")) || t.match(s("AA")),
                d = "am",
                p = this._replacer;
            switch (this.opts.timepicker && this.timepicker && h && (c = r((n = this.timepicker._getValidHoursFromDate(e, h)).hours), u = n.hours, d = n.dayPeriod), !0) {
                case /@/.test(i):
                    i = i.replace(/@/, e.getTime());
                case /aa/.test(i):
                    i = p(i, s("aa"), d);
                case /AA/.test(i):
                    i = p(i, s("AA"), d.toUpperCase());
                case /dd/.test(i):
                    i = p(i, s("dd"), l.fullDate);
                case /d/.test(i):
                    i = p(i, s("d"), l.date);
                case /DD/.test(i):
                    i = p(i, s("DD"), o.days[l.day]);
                case /D/.test(i):
                    i = p(i, s("D"), o.daysShort[l.day]);
                case /mm/.test(i):
                    i = p(i, s("mm"), l.fullMonth);
                case /m/.test(i):
                    i = p(i, s("m"), l.month + 1);
                case /MM/.test(i):
                    i = p(i, s("MM"), this.loc.months[l.month]);
                case /M/.test(i):
                    i = p(i, s("M"), o.monthsShort[l.month]);
                case /ii/.test(i):
                    i = p(i, s("ii"), l.fullMinutes);
                case /i/.test(i):
                    i = p(i, s("i"), l.minutes);
                case /hh/.test(i):
                    i = p(i, s("hh"), c);
                case /h/.test(i):
                    i = p(i, s("h"), u);
                case /yyyy/.test(i):
                    i = p(i, s("yyyy"), l.year);
                case /yyyy1/.test(i):
                    i = p(i, s("yyyy1"), a[0]);
                case /yyyy2/.test(i):
                    i = p(i, s("yyyy2"), a[1]);
                case /yy/.test(i):
                    i = p(i, s("yy"), l.year.toString().slice(-2))
            }
            return i
        },
        _replacer: function(t, e, s) {
            return t.replace(e, function(t, e, n, i) {
                return e + s + i
            })
        },
        _getWordBoundaryRegExp: function(t) {
            var e = "\\s|\\.|-|/|\\\\|,|\\$|\\!|\\?|:|;";
            return new RegExp("(^|>|" + e + ")(" + t + ")($|<|" + e + ")", "g")
        },
        selectDate: function(t) {
            var e = this,
                n = e.opts,
                i = e.parsedDate,
                s = e.selectedDates.length,
                o = "";
            if (Array.isArray(t)) t.forEach(function(t) {
                e.selectDate(t)
            });
            else if (t instanceof Date) {
                if (this.lastSelectedDate = t, this.timepicker && this.timepicker._setTime(t), e._trigger("selectDate", t), this.timepicker && (t.setHours(this.timepicker.hours), t.setMinutes(this.timepicker.minutes)), "days" == e.view && t.getMonth() != i.month && n.moveToOtherMonthsOnSelect && (o = new Date(t.getFullYear(), t.getMonth(), 1)), "years" == e.view && t.getFullYear() != i.year && n.moveToOtherYearsOnSelect && (o = new Date(t.getFullYear(), 0, 1)), o && (e.silent = !0, e.date = o, e.silent = !1, e.nav._render()), n.multipleDates && !n.range) {
                    if (s === n.multipleDates) return;
                    e._isSelected(t) || e.selectedDates.push(t)
                } else n.range ? 2 == s ? (e.selectedDates = [t], e.minRange = t, e.maxRange = "") : 1 == s ? (e.selectedDates.push(t), e.maxRange ? e.minRange = t : e.maxRange = t, f.bigger(e.maxRange, e.minRange) && (e.maxRange = e.minRange, e.minRange = t), e.selectedDates = [e.minRange, e.maxRange]) : (e.selectedDates = [t], e.minRange = t) : e.selectedDates = [t];
                e._setInputValue(), n.onSelect && e._triggerOnChange(), n.autoClose && !this.timepickerIsActive && (n.multipleDates || n.range ? n.range && 2 == e.selectedDates.length && e.hide() : e.hide()), e.views[this.currentView]._render()
            }
        },
        removeDate: function(n) {
            var i = this.selectedDates,
                s = this;
            if (n instanceof Date) return i.some(function(t, e) {
                return f.isSame(t, n) ? (i.splice(e, 1), s.selectedDates.length ? s.lastSelectedDate = s.selectedDates[s.selectedDates.length - 1] : (s.minRange = "", s.maxRange = "", s.lastSelectedDate = ""), s.views[s.currentView]._render(), s._setInputValue(), s.opts.onSelect && s._triggerOnChange(), !0) : void 0
            })
        },
        today: function() {
            this.silent = !0, this.view = this.opts.minView, this.silent = !1, this.date = new Date, this.opts.todayButton instanceof Date && this.selectDate(this.opts.todayButton)
        },
        clear: function() {
            this.selectedDates = [], this.minRange = "", this.maxRange = "", this.views[this.currentView]._render(), this._setInputValue(), this.opts.onSelect && this._triggerOnChange()
        },
        update: function(t, e) {
            var n = arguments.length,
                i = this.lastSelectedDate;
            return 2 == n ? this.opts[t] = e : 1 == n && "object" == typeof t && (this.opts = r.extend(!0, this.opts, t)), this._createShortCuts(), this._syncWithMinMaxDates(), this._defineLocale(this.opts.language), this.nav._addButtonsIfNeed(), this.opts.onlyTimepicker || this.nav._render(), this.views[this.currentView]._render(), this.elIsInput && !this.opts.inline && (this._setPositionClasses(this.opts.position), this.visible && this.setPosition(this.opts.position)), this.opts.classes && this.$datepicker.addClass(this.opts.classes), this.opts.onlyTimepicker && this.$datepicker.addClass("-only-timepicker-"), this.opts.timepicker && (i && this.timepicker._handleDate(i), this.timepicker._updateRanges(), this.timepicker._updateCurrentTime(), i && (i.setHours(this.timepicker.hours), i.setMinutes(this.timepicker.minutes))), this._setInputValue(), this
        },
        _syncWithMinMaxDates: function() {
            var t = this.date.getTime();
            this.silent = !0, this.minTime > t && (this.date = this.minDate), this.maxTime < t && (this.date = this.maxDate), this.silent = !1
        },
        _isSelected: function(e, n) {
            var i = !1;
            return this.selectedDates.some(function(t) {
                return f.isSame(t, e, n) ? (i = t, !0) : void 0
            }), i
        },
        _setInputValue: function() {
            var t, e = this,
                n = e.opts,
                i = e.loc.dateFormat,
                s = n.altFieldDateFormat,
                o = e.selectedDates.map(function(t) {
                    return e.formatDate(i, t)
                });
            n.altField && e.$altField.length && (t = (t = this.selectedDates.map(function(t) {
                return e.formatDate(s, t)
            })).join(this.opts.multipleDatesSeparator), this.$altField.val(t)), o = o.join(this.opts.multipleDatesSeparator), this.$el.val(o)
        },
        _isInRange: function(t, e) {
            var n = t.getTime(),
                i = f.getParsedDate(t),
                s = f.getParsedDate(this.minDate),
                o = f.getParsedDate(this.maxDate),
                r = new Date(i.year, i.month, s.date).getTime(),
                a = new Date(i.year, i.month, o.date).getTime(),
                l = {
                    day: n >= this.minTime && n <= this.maxTime,
                    month: r >= this.minTime && a <= this.maxTime,
                    year: i.year >= s.year && i.year <= o.year
                };
            return e ? l[e] : l.day
        },
        _getDimensions: function(t) {
            var e = t.offset();
            return {
                width: t.outerWidth(),
                height: t.outerHeight(),
                left: e.left,
                top: e.top
            }
        },
        _getDateFromCell: function(t) {
            var e = this.parsedDate,
                n = t.data("year") || e.year,
                i = t.data("month") == o ? e.month : t.data("month"),
                s = t.data("date") || 1;
            return new Date(n, i, s)
        },
        _setPositionClasses: function(t) {
            var e = (t = t.split(" "))[0],
                n = "datepicker -" + e + "-" + t[1] + "- -from-" + e + "-";
            this.visible && (n += " active"), this.$datepicker.removeAttr("class").addClass(n)
        },
        setPosition: function(t) {
            t = t || this.opts.position;
            var e, n, i = this._getDimensions(this.$el),
                s = this._getDimensions(this.$datepicker),
                o = t.split(" "),
                r = this.opts.offset,
                a = o[0],
                l = o[1];
            switch (a) {
                case "top":
                    e = i.top - s.height - r;
                    break;
                case "right":
                    n = i.left + i.width + r;
                    break;
                case "bottom":
                    e = i.top + i.height + r;
                    break;
                case "left":
                    n = i.left - s.width - r
            }
            switch (l) {
                case "top":
                    e = i.top;
                    break;
                case "right":
                    n = i.left + i.width - s.width;
                    break;
                case "bottom":
                    e = i.top + i.height - s.height;
                    break;
                case "left":
                    n = i.left;
                    break;
                case "center":
                    /left|right/.test(a) ? e = i.top + i.height / 2 - s.height / 2 : n = i.left + i.width / 2 - s.width / 2
            }
            this.$datepicker.css({
                left: n,
                top: e
            })
        },
        show: function() {
            var t = this.opts.onShow;
            this.setPosition(this.opts.position), this.$datepicker.addClass("active"), this.visible = !0, t && this._bindVisionEvents(t)
        },
        hide: function() {
            var t = this.opts.onHide;
            this.$datepicker.removeClass("active").css({
                left: "-100000px"
            }), this.focused = "", this.keys = [], this.inFocus = !1, this.visible = !1, this.$el.blur(), t && this._bindVisionEvents(t)
        },
        down: function(t) {
            this._changeView(t, "down")
        },
        up: function(t) {
            this._changeView(t, "up")
        },
        _bindVisionEvents: function(t) {
            this.$datepicker.off("transitionend.dp"), t(this, !1), this.$datepicker.one("transitionend.dp", t.bind(this, this, !0))
        },
        _changeView: function(t, e) {
            t = t || this.focused || this.date;
            var n = "up" == e ? this.viewIndex + 1 : this.viewIndex - 1;
            2 < n && (n = 2), n < 0 && (n = 0), this.silent = !0, this.date = new Date(t.getFullYear(), t.getMonth(), 1), this.silent = !1, this.view = this.viewIndexes[n]
        },
        _handleHotKey: function(t) {
            var e, n, i, s = f.getParsedDate(this._getFocusedDate()),
                o = this.opts,
                r = !1,
                a = !1,
                l = !1,
                c = s.year,
                u = s.month,
                h = s.date;
            switch (t) {
                case "ctrlRight":
                case "ctrlUp":
                    u += 1, r = !0;
                    break;
                case "ctrlLeft":
                case "ctrlDown":
                    u -= 1, r = !0;
                    break;
                case "shiftRight":
                case "shiftUp":
                    a = !0, c += 1;
                    break;
                case "shiftLeft":
                case "shiftDown":
                    a = !0, c -= 1;
                    break;
                case "altRight":
                case "altUp":
                    l = !0, c += 10;
                    break;
                case "altLeft":
                case "altDown":
                    l = !0, c -= 10;
                    break;
                case "ctrlShiftUp":
                    this.up()
            }
            i = f.getDaysCount(new Date(c, u)), n = new Date(c, u, h), i < h && (h = i), n.getTime() < this.minTime ? n = this.minDate : n.getTime() > this.maxTime && (n = this.maxDate), this.focused = n, e = f.getParsedDate(n), r && o.onChangeMonth && o.onChangeMonth(e.month, e.year), a && o.onChangeYear && o.onChangeYear(e.year), l && o.onChangeDecade && o.onChangeDecade(this.curDecade)
        },
        _registerKey: function(e) {
            this.keys.some(function(t) {
                return t == e
            }) || this.keys.push(e)
        },
        _unRegisterKey: function(t) {
            var e = this.keys.indexOf(t);
            this.keys.splice(e, 1)
        },
        _isHotKeyPressed: function() {
            var t, e = !1,
                n = this.keys.sort();
            for (var i in m) t = m[i], n.length == t.length && t.every(function(t, e) {
                return t == n[e]
            }) && (this._trigger("hotKey", i), e = !0);
            return e
        },
        _trigger: function(t, e) {
            this.$el.trigger(t, e)
        },
        _focusNextCell: function(t, e) {
            e = e || this.cellType;
            var n = f.getParsedDate(this._getFocusedDate()),
                i = n.year,
                s = n.month,
                o = n.date;
            if (!this._isHotKeyPressed()) {
                switch (t) {
                    case 37:
                        "day" == e && (o -= 1), "month" == e && (s -= 1), "year" == e && (i -= 1);
                        break;
                    case 38:
                        "day" == e && (o -= 7), "month" == e && (s -= 3), "year" == e && (i -= 4);
                        break;
                    case 39:
                        "day" == e && (o += 1), "month" == e && (s += 1), "year" == e && (i += 1);
                        break;
                    case 40:
                        "day" == e && (o += 7), "month" == e && (s += 3), "year" == e && (i += 4)
                }
                var r = new Date(i, s, o);
                r.getTime() < this.minTime ? r = this.minDate : r.getTime() > this.maxTime && (r = this.maxDate), this.focused = r
            }
        },
        _getFocusedDate: function() {
            var t = this.focused || this.selectedDates[this.selectedDates.length - 1],
                e = this.parsedDate;
            if (!t) switch (this.view) {
                case "days":
                    t = new Date(e.year, e.month, (new Date).getDate());
                    break;
                case "months":
                    t = new Date(e.year, e.month, 1);
                    break;
                case "years":
                    t = new Date(e.year, 0, 1)
            }
            return t
        },
        _getCell: function(t, e) {
            e = e || this.cellType;
            var n, i = f.getParsedDate(t),
                s = '.datepicker--cell[data-year="' + i.year + '"]';
            switch (e) {
                case "month":
                    s = '[data-month="' + i.month + '"]';
                    break;
                case "day":
                    s += '[data-month="' + i.month + '"][data-date="' + i.date + '"]'
            }
            return (n = this.views[this.currentView].$el.find(s)).length ? n : r("")
        },
        destroy: function() {
            var t = this;
            t.$el.off(".adp").data("datepicker", ""), t.selectedDates = [], t.focused = "", t.views = {}, t.keys = [], t.minRange = "", t.maxRange = "", t.opts.inline || !t.elIsInput ? t.$datepicker.closest(".datepicker-inline").remove() : t.$datepicker.remove()
        },
        _handleAlreadySelectedDates: function(t, e) {
            this.opts.range ? this.opts.toggleSelected ? this.removeDate(e) : 2 != this.selectedDates.length && this._trigger("clickCell", e) : this.opts.toggleSelected && this.removeDate(e), this.opts.toggleSelected || (this.lastSelectedDate = t, this.opts.timepicker && (this.timepicker._setTime(t), this.timepicker.update()))
        },
        _onShowEvent: function(t) {
            this.visible || this.show()
        },
        _onBlur: function() {
            !this.inFocus && this.visible && this.hide()
        },
        _onMouseDownDatepicker: function(t) {
            this.inFocus = !0
        },
        _onMouseUpDatepicker: function(t) {
            this.inFocus = !1, t.originalEvent.inFocus = !0, t.originalEvent.timepickerFocus || this.$el.focus()
        },
        _onKeyUpGeneral: function(t) {
            this.$el.val() || this.clear()
        },
        _onResize: function() {
            this.visible && this.setPosition()
        },
        _onMouseUpBody: function(t) {
            t.originalEvent.inFocus || this.visible && !this.inFocus && this.hide()
        },
        _onMouseUpEl: function(t) {
            t.originalEvent.inFocus = !0, setTimeout(this._onKeyUpGeneral.bind(this), 4)
        },
        _onKeyDown: function(t) {
            var e = t.which;
            if (this._registerKey(e), 37 <= e && e <= 40 && (t.preventDefault(), this._focusNextCell(e)), 13 == e && this.focused) {
                if (this._getCell(this.focused).hasClass("-disabled-")) return;
                if (this.view != this.opts.minView) this.down();
                else {
                    var n = this._isSelected(this.focused, this.cellType);
                    if (!n) return this.timepicker && (this.focused.setHours(this.timepicker.hours), this.focused.setMinutes(this.timepicker.minutes)), void this.selectDate(this.focused);
                    this._handleAlreadySelectedDates(n, this.focused)
                }
            }
            27 == e && this.hide()
        },
        _onKeyUp: function(t) {
            var e = t.which;
            this._unRegisterKey(e)
        },
        _onHotKey: function(t, e) {
            this._handleHotKey(e)
        },
        _onMouseEnterCell: function(t) {
            var e = r(t.target).closest(".datepicker--cell"),
                n = this._getDateFromCell(e);
            this.silent = !0, this.focused && (this.focused = ""), e.addClass("-focus-"), this.focused = n, this.silent = !1, this.opts.range && 1 == this.selectedDates.length && (this.minRange = this.selectedDates[0], this.maxRange = "", f.less(this.minRange, this.focused) && (this.maxRange = this.minRange, this.minRange = ""), this.views[this.currentView]._update())
        },
        _onMouseLeaveCell: function(t) {
            r(t.target).closest(".datepicker--cell").removeClass("-focus-"), this.silent = !0, this.focused = "", this.silent = !1
        },
        _onTimeChange: function(t, e, n) {
            var i = new Date,
                s = !1;
            this.selectedDates.length && (s = !0, i = this.lastSelectedDate), i.setHours(e), i.setMinutes(n), s || this._getCell(i).hasClass("-disabled-") ? (this._setInputValue(), this.opts.onSelect && this._triggerOnChange()) : this.selectDate(i)
        },
        _onClickCell: function(t, e) {
            this.timepicker && (e.setHours(this.timepicker.hours), e.setMinutes(this.timepicker.minutes)), this.selectDate(e)
        },
        set focused(t) {
            if (!t && this.focused) {
                var e = this._getCell(this.focused);
                e.length && e.removeClass("-focus-")
            }
            this._focused = t, this.opts.range && 1 == this.selectedDates.length && (this.minRange = this.selectedDates[0], this.maxRange = "", f.less(this.minRange, this._focused) && (this.maxRange = this.minRange, this.minRange = "")), this.silent || (this.date = t)
        },
        get focused() {
            return this._focused
        },
        get parsedDate() {
            return f.getParsedDate(this.date)
        },
        set date(t) {
            return t instanceof Date ? (this.currentDate = t, this.inited && !this.silent && (this.views[this.view]._render(), this.nav._render(), this.visible && this.elIsInput && this.setPosition()), t) : void 0
        },
        get date() {
            return this.currentDate
        },
        set view(t) {
            return this.viewIndex = this.viewIndexes.indexOf(t), this.viewIndex < 0 ? void 0 : (this.prevView = this.currentView, this.currentView = t, this.inited && (this.views[t] ? this.views[t]._render() : this.views[t] = new r.fn.datepicker.Body(this, t, this.opts), this.views[this.prevView].hide(), this.views[t].show(), this.nav._render(), this.opts.onChangeView && this.opts.onChangeView(t), this.elIsInput && this.visible && this.setPosition()), t)
        },
        get view() {
            return this.currentView
        },
        get cellType() {
            return this.view.substring(0, this.view.length - 1)
        },
        get minTime() {
            var t = f.getParsedDate(this.minDate);
            return new Date(t.year, t.month, t.date).getTime()
        },
        get maxTime() {
            var t = f.getParsedDate(this.maxDate);
            return new Date(t.year, t.month, t.date).getTime()
        },
        get curDecade() {
            return f.getDecade(this.date)
        }
    }, f.getDaysCount = function(t) {
        return new Date(t.getFullYear(), t.getMonth() + 1, 0).getDate()
    }, f.getParsedDate = function(t) {
        return {
            year: t.getFullYear(),
            month: t.getMonth(),
            fullMonth: t.getMonth() + 1 < 10 ? "0" + (t.getMonth() + 1) : t.getMonth() + 1,
            date: t.getDate(),
            fullDate: t.getDate() < 10 ? "0" + t.getDate() : t.getDate(),
            day: t.getDay(),
            hours: t.getHours(),
            fullHours: t.getHours() < 10 ? "0" + t.getHours() : t.getHours(),
            minutes: t.getMinutes(),
            fullMinutes: t.getMinutes() < 10 ? "0" + t.getMinutes() : t.getMinutes()
        }
    }, f.getDecade = function(t) {
        var e = 10 * Math.floor(t.getFullYear() / 10);
        return [e, e + 9]
    }, f.template = function(t, n) {
        return t.replace(/#\{([\w]+)\}/g, function(t, e) {
            return n[e] || 0 === n[e] ? n[e] : void 0
        })
    }, f.isSame = function(t, e, n) {
        if (!t || !e) return !1;
        var i = f.getParsedDate(t),
            s = f.getParsedDate(e),
            o = n || "day";
        return {
            day: i.date == s.date && i.month == s.month && i.year == s.year,
            month: i.month == s.month && i.year == s.year,
            year: i.year == s.year
        } [o]
    }, f.less = function(t, e, n) {
        return !(!t || !e) && e.getTime() < t.getTime()
    }, f.bigger = function(t, e, n) {
        return !(!t || !e) && e.getTime() > t.getTime()
    }, f.getLeadingZeroNum = function(t) {
        return parseInt(t) < 10 ? "0" + t : t
    }, f.resetTime = function(t) {
        return "object" == typeof t ? (t = f.getParsedDate(t), new Date(t.year, t.month, t.date)) : void 0
    }, r.fn.datepicker = function(e) {
        return this.each(function() {
            if (r.data(this, h)) {
                var t = r.data(this, h);
                t.opts = r.extend(!0, t.opts, e), t.update()
            } else r.data(this, h, new v(this, e))
        })
    }, r.fn.datepicker.Constructor = v, r.fn.datepicker.language = {
        ru: {
            days: ["Ð’Ð¾ÑÐºÑ€ÐµÑÐµÐ½ÑŒÐµ", "ÐŸÐ¾Ð½ÐµÐ´ÐµÐ»ÑŒÐ½Ð¸Ðº", "Ð’Ñ‚Ð¾Ñ€Ð½Ð¸Ðº", "Ð¡Ñ€ÐµÐ´Ð°", "Ð§ÐµÑ‚Ð²ÐµÑ€Ð³", "ÐŸÑÑ‚Ð½Ð¸Ñ†Ð°", "Ð¡ÑƒÐ±Ð±Ð¾Ñ‚Ð°"],
            daysShort: ["Ð’Ð¾Ñ", "ÐŸÐ¾Ð½", "Ð’Ñ‚Ð¾", "Ð¡Ñ€Ðµ", "Ð§ÐµÑ‚", "ÐŸÑÑ‚", "Ð¡ÑƒÐ±"],
            daysMin: ["Ð’Ñ", "ÐŸÐ½", "Ð’Ñ‚", "Ð¡Ñ€", "Ð§Ñ‚", "ÐŸÑ‚", "Ð¡Ð±"],
            months: ["Ð¯Ð½Ð²Ð°Ñ€ÑŒ", "Ð¤ÐµÐ²Ñ€Ð°Ð»ÑŒ", "ÐœÐ°Ñ€Ñ‚", "ÐÐ¿Ñ€ÐµÐ»ÑŒ", "ÐœÐ°Ð¹", "Ð˜ÑŽÐ½ÑŒ", "Ð˜ÑŽÐ»ÑŒ", "ÐÐ²Ð³ÑƒÑÑ‚", "Ð¡ÐµÐ½Ñ‚ÑÐ±Ñ€ÑŒ", "ÐžÐºÑ‚ÑÐ±Ñ€ÑŒ", "ÐÐ¾ÑÐ±Ñ€ÑŒ", "Ð”ÐµÐºÐ°Ð±Ñ€ÑŒ"],
            monthsShort: ["Ð¯Ð½Ð²", "Ð¤ÐµÐ²", "ÐœÐ°Ñ€", "ÐÐ¿Ñ€", "ÐœÐ°Ð¹", "Ð˜ÑŽÐ½", "Ð˜ÑŽÐ»", "ÐÐ²Ð³", "Ð¡ÐµÐ½", "ÐžÐºÑ‚", "ÐÐ¾Ñ", "Ð”ÐµÐº"],
            today: "Ð¡ÐµÐ³Ð¾Ð´Ð½Ñ",
            clear: "ÐžÑ‡Ð¸ÑÑ‚Ð¸Ñ‚ÑŒ",
            dateFormat: "dd.mm.yyyy",
            timeFormat: "hh:ii",
            firstDay: 1
        }
    }, r(function() {
        r(".datepicker-here").datepicker()
    }), i = {
        days: '<div class="datepicker--days datepicker--body"><div class="datepicker--days-names"></div><div class="datepicker--cells datepicker--cells-days"></div></div>',
        months: '<div class="datepicker--months datepicker--body"><div class="datepicker--cells datepicker--cells-months"></div></div>',
        years: '<div class="datepicker--years datepicker--body"><div class="datepicker--cells datepicker--cells-years"></div></div>'
    }, l = r.fn.datepicker, d = l.Constructor, l.Body = function(t, e, n) {
        this.d = t, this.type = e, this.opts = n, this.$el = r(""), this.opts.onlyTimepicker || this.init()
    }, l.Body.prototype = {
        init: function() {
            this._buildBaseHtml(), this._render(), this._bindEvents()
        },
        _bindEvents: function() {
            this.$el.on("click", ".datepicker--cell", r.proxy(this._onClickCell, this))
        },
        _buildBaseHtml: function() {
            this.$el = r(i[this.type]).appendTo(this.d.$content), this.$names = r(".datepicker--days-names", this.$el), this.$cells = r(".datepicker--cells", this.$el)
        },
        _getDayNamesHtml: function(t, e, n, i) {
            return e = e != o ? e : t, n = n || "", 7 < (i = i != o ? i : 0) ? n : 7 == e ? this._getDayNamesHtml(t, 0, n, ++i) : (n += '<div class="datepicker--day-name' + (this.d.isWeekend(e) ? " -weekend-" : "") + '">' + this.d.loc.daysMin[e] + "</div>", this._getDayNamesHtml(t, ++e, n, ++i))
        },
        _getCellContents: function(t, e) {
            var n = "datepicker--cell datepicker--cell-" + e,
                i = new Date,
                s = this.d,
                o = d.resetTime(s.minRange),
                r = d.resetTime(s.maxRange),
                a = s.opts,
                l = d.getParsedDate(t),
                c = {},
                u = l.date;
            switch (e) {
                case "day":
                    s.isWeekend(l.day) && (n += " -weekend-"), l.month != this.d.parsedDate.month && (n += " -other-month-", a.selectOtherMonths || (n += " -disabled-"), a.showOtherMonths || (u = ""));
                    break;
                case "month":
                    u = s.loc[s.opts.monthsField][l.month];
                    break;
                case "year":
                    var h = s.curDecade;
                    u = l.year, (l.year < h[0] || l.year > h[1]) && (n += " -other-decade-", a.selectOtherYears || (n += " -disabled-"), a.showOtherYears || (u = ""))
            }
            return a.onRenderCell && (u = (c = a.onRenderCell(t, e) || {}).html ? c.html : u, n += c.classes ? " " + c.classes : ""), a.range && (d.isSame(o, t, e) && (n += " -range-from-"), d.isSame(r, t, e) && (n += " -range-to-"), 1 == s.selectedDates.length && s.focused ? ((d.bigger(o, t) && d.less(s.focused, t) || d.less(r, t) && d.bigger(s.focused, t)) && (n += " -in-range-"), d.less(r, t) && d.isSame(s.focused, t) && (n += " -range-from-"), d.bigger(o, t) && d.isSame(s.focused, t) && (n += " -range-to-")) : 2 == s.selectedDates.length && d.bigger(o, t) && d.less(r, t) && (n += " -in-range-")), d.isSame(i, t, e) && (n += " -current-"), s.focused && d.isSame(t, s.focused, e) && (n += " -focus-"), s._isSelected(t, e) && (n += " -selected-"), (!s._isInRange(t, e) || c.disabled) && (n += " -disabled-"), {
                html: u,
                classes: n
            }
        },
        _getDaysHtml: function(t) {
            for (var e, n, i = d.getDaysCount(t), s = new Date(t.getFullYear(), t.getMonth(), 1).getDay(), o = new Date(t.getFullYear(), t.getMonth(), i).getDay(), r = s - this.d.loc.firstDay, a = 6 - o + this.d.loc.firstDay, l = "", c = 1 - (r = r < 0 ? r + 7 : r), u = i + (a = 6 < a ? a - 7 : a); c <= u; c++) n = t.getFullYear(), e = t.getMonth(), l += this._getDayHtml(new Date(n, e, c));
            return l
        },
        _getDayHtml: function(t) {
            var e = this._getCellContents(t, "day");
            return '<div class="' + e.classes + '" data-date="' + t.getDate() + '" data-month="' + t.getMonth() + '" data-year="' + t.getFullYear() + '">' + e.html + "</div>"
        },
        _getMonthsHtml: function(t) {
            for (var e = "", n = d.getParsedDate(t), i = 0; i < 12;) e += this._getMonthHtml(new Date(n.year, i)), i++;
            return e
        },
        _getMonthHtml: function(t) {
            var e = this._getCellContents(t, "month");
            return '<div class="' + e.classes + '" data-month="' + t.getMonth() + '">' + e.html + "</div>"
        },
        _getYearsHtml: function(t) {
            for (var e = (d.getParsedDate(t), d.getDecade(t)), n = "", i = e[0] - 1; i <= e[1] + 1; i++) n += this._getYearHtml(new Date(i, 0));
            return n
        },
        _getYearHtml: function(t) {
            var e = this._getCellContents(t, "year");
            return '<div class="' + e.classes + '" data-year="' + t.getFullYear() + '">' + e.html + "</div>"
        },
        _renderTypes: {
            days: function() {
                var t = this._getDayNamesHtml(this.d.loc.firstDay),
                    e = this._getDaysHtml(this.d.currentDate);
                this.$cells.html(e), this.$names.html(t)
            },
            months: function() {
                var t = this._getMonthsHtml(this.d.currentDate);
                this.$cells.html(t)
            },
            years: function() {
                var t = this._getYearsHtml(this.d.currentDate);
                this.$cells.html(t)
            }
        },
        _render: function() {
            this.opts.onlyTimepicker || this._renderTypes[this.type].bind(this)()
        },
        _update: function() {
            var n, i, s, t = r(".datepicker--cell", this.$cells),
                o = this;
            t.each(function(t, e) {
                i = r(this), s = o.d._getDateFromCell(r(this)), n = o._getCellContents(s, o.d.cellType), i.attr("class", n.classes)
            })
        },
        show: function() {
            this.opts.onlyTimepicker || (this.$el.addClass("active"), this.acitve = !0)
        },
        hide: function() {
            this.$el.removeClass("active"), this.active = !1
        },
        _handleClick: function(t) {
            var e = t.data("date") || 1,
                n = t.data("month") || 0,
                i = t.data("year") || this.d.parsedDate.year,
                s = this.d;
            if (s.view == this.opts.minView) {
                var o = new Date(i, n, e),
                    r = this.d._isSelected(o, this.d.cellType);
                return r ? void s._handleAlreadySelectedDates.bind(s, r, o)() : void s._trigger("clickCell", o)
            }
            s.down(new Date(i, n, e))
        },
        _onClickCell: function(t) {
            var e = r(t.target).closest(".datepicker--cell");
            e.hasClass("-disabled-") || this._handleClick.bind(this)(e)
        }
    }, n = r.fn.datepicker, a = n.Constructor, n.Navigation = function(t, e) {
        this.d = t, this.opts = e, this.$buttonsContainer = "", this.init()
    }, n.Navigation.prototype = {
        init: function() {
            this._buildBaseHtml(), this._bindEvents()
        },
        _bindEvents: function() {
            this.d.$nav.on("click", ".datepicker--nav-action", r.proxy(this._onClickNavButton, this)), this.d.$nav.on("click", ".datepicker--nav-title", r.proxy(this._onClickNavTitle, this)), this.d.$datepicker.on("click", ".datepicker--button", r.proxy(this._onClickNavButton, this))
        },
        _buildBaseHtml: function() {
            this.opts.onlyTimepicker || this._render(), this._addButtonsIfNeed()
        },
        _addButtonsIfNeed: function() {
            this.opts.todayButton && this._addButton("today"), this.opts.clearButton && this._addButton("clear")
        },
        _render: function() {
            var t = this._getTitle(this.d.currentDate),
                e = a.template('<div class="datepicker--nav-action" data-action="prev">#{prevHtml}</div><div class="datepicker--nav-title">#{title}</div><div class="datepicker--nav-action" data-action="next">#{nextHtml}</div>', r.extend({
                    title: t
                }, this.opts));
            this.d.$nav.html(e), "years" == this.d.view && r(".datepicker--nav-title", this.d.$nav).addClass("-disabled-"), this.setNavStatus()
        },
        _getTitle: function(t) {
            return this.d.formatDate(this.opts.navTitles[this.d.view], t)
        },
        _addButton: function(t) {
            this.$buttonsContainer.length || this._addButtonsContainer();
            var e = {
                    action: t,
                    label: this.d.loc[t]
                },
                n = a.template('<span class="datepicker--button" data-action="#{action}">#{label}</span>', e);
            r("[data-action=" + t + "]", this.$buttonsContainer).length || this.$buttonsContainer.append(n)
        },
        _addButtonsContainer: function() {
            this.d.$datepicker.append('<div class="datepicker--buttons"></div>'), this.$buttonsContainer = r(".datepicker--buttons", this.d.$datepicker)
        },
        setNavStatus: function() {
            if ((this.opts.minDate || this.opts.maxDate) && this.opts.disableNavWhenOutOfRange) {
                var t = this.d.parsedDate,
                    e = t.month,
                    n = t.year,
                    i = t.date;
                switch (this.d.view) {
                    case "days":
                        this.d._isInRange(new Date(n, e - 1, 1), "month") || this._disableNav("prev"), this.d._isInRange(new Date(n, e + 1, 1), "month") || this._disableNav("next");
                        break;
                    case "months":
                        this.d._isInRange(new Date(n - 1, e, i), "year") || this._disableNav("prev"), this.d._isInRange(new Date(n + 1, e, i), "year") || this._disableNav("next");
                        break;
                    case "years":
                        var s = a.getDecade(this.d.date);
                        this.d._isInRange(new Date(s[0] - 1, 0, 1), "year") || this._disableNav("prev"), this.d._isInRange(new Date(s[1] + 1, 0, 1), "year") || this._disableNav("next")
                }
            }
        },
        _disableNav: function(t) {
            r('[data-action="' + t + '"]', this.d.$nav).addClass("-disabled-")
        },
        _activateNav: function(t) {
            r('[data-action="' + t + '"]', this.d.$nav).removeClass("-disabled-")
        },
        _onClickNavButton: function(t) {
            var e = r(t.target).closest("[data-action]").data("action");
            this.d[e]()
        },
        _onClickNavTitle: function(t) {
            return r(t.target).hasClass("-disabled-") ? void 0 : "days" == this.d.view ? this.d.view = "months" : void(this.d.view = "years")
        }
    }, e = r.fn.datepicker, s = e.Constructor, e.Timepicker = function(t, e) {
        this.d = t, this.opts = e, this.init()
    }, e.Timepicker.prototype = {
        init: function() {
            var t = "input";
            this._setTime(this.d.date), this._buildHTML(), navigator.userAgent.match(/trident/gi) && (t = "change"), this.d.$el.on("selectDate", this._onSelectDate.bind(this)), this.$ranges.on(t, this._onChangeRange.bind(this)), this.$ranges.on("mouseup", this._onMouseUpRange.bind(this)), this.$ranges.on("mousemove focus ", this._onMouseEnterRange.bind(this)), this.$ranges.on("mouseout blur", this._onMouseOutRange.bind(this))
        },
        _setTime: function(t) {
            var e = s.getParsedDate(t);
            this._handleDate(t), this.hours = e.hours < this.minHours ? this.minHours : e.hours, this.minutes = e.minutes < this.minMinutes ? this.minMinutes : e.minutes
        },
        _setMinTimeFromDate: function(t) {
            this.minHours = t.getHours(), this.minMinutes = t.getMinutes(), this.d.lastSelectedDate && this.d.lastSelectedDate.getHours() > t.getHours() && (this.minMinutes = this.opts.minMinutes)
        },
        _setMaxTimeFromDate: function(t) {
            this.maxHours = t.getHours(), this.maxMinutes = t.getMinutes(), this.d.lastSelectedDate && this.d.lastSelectedDate.getHours() < t.getHours() && (this.maxMinutes = this.opts.maxMinutes)
        },
        _setDefaultMinMaxTime: function() {
            var t = this.opts;
            this.minHours = t.minHours < 0 || 23 < t.minHours ? 0 : t.minHours, this.minMinutes = t.minMinutes < 0 || 59 < t.minMinutes ? 0 : t.minMinutes, this.maxHours = t.maxHours < 0 || 23 < t.maxHours ? 23 : t.maxHours, this.maxMinutes = t.maxMinutes < 0 || 59 < t.maxMinutes ? 59 : t.maxMinutes
        },
        _validateHoursMinutes: function(t) {
            this.hours < this.minHours ? this.hours = this.minHours : this.hours > this.maxHours && (this.hours = this.maxHours), this.minutes < this.minMinutes ? this.minutes = this.minMinutes : this.minutes > this.maxMinutes && (this.minutes = this.maxMinutes)
        },
        _buildHTML: function() {
            var t = s.getLeadingZeroNum,
                e = {
                    hourMin: this.minHours,
                    hourMax: t(this.maxHours),
                    hourStep: this.opts.hoursStep,
                    hourValue: this.hours,
                    hourVisible: t(this.displayHours),
                    minMin: this.minMinutes,
                    minMax: t(this.maxMinutes),
                    minStep: this.opts.minutesStep,
                    minValue: t(this.minutes)
                },
                n = s.template('<div class="datepicker--time"><div class="datepicker--time-current">   <span class="datepicker--time-current-hours">#{hourVisible}</span>   <span class="datepicker--time-current-colon">:</span>   <span class="datepicker--time-current-minutes">#{minValue}</span></div><div class="datepicker--time-sliders">   <div class="datepicker--time-row">      <input type="range" name="hours" value="#{hourValue}" min="#{hourMin}" max="#{hourMax}" step="#{hourStep}"/>   </div>   <div class="datepicker--time-row">      <input type="range" name="minutes" value="#{minValue}" min="#{minMin}" max="#{minMax}" step="#{minStep}"/>   </div></div></div>', e);
            this.$timepicker = r(n).appendTo(this.d.$datepicker), this.$ranges = r('[type="range"]', this.$timepicker), this.$hours = r('[name="hours"]', this.$timepicker), this.$minutes = r('[name="minutes"]', this.$timepicker), this.$hoursText = r(".datepicker--time-current-hours", this.$timepicker), this.$minutesText = r(".datepicker--time-current-minutes", this.$timepicker), this.d.ampm && (this.$ampm = r('<span class="datepicker--time-current-ampm">').appendTo(r(".datepicker--time-current", this.$timepicker)).html(this.dayPeriod), this.$timepicker.addClass("-am-pm-"))
        },
        _updateCurrentTime: function() {
            var t = s.getLeadingZeroNum(this.displayHours),
                e = s.getLeadingZeroNum(this.minutes);
            this.$hoursText.html(t), this.$minutesText.html(e), this.d.ampm && this.$ampm.html(this.dayPeriod)
        },
        _updateRanges: function() {
            this.$hours.attr({
                min: this.minHours,
                max: this.maxHours
            }).val(this.hours), this.$minutes.attr({
                min: this.minMinutes,
                max: this.maxMinutes
            }).val(this.minutes)
        },
        _handleDate: function(t) {
            this._setDefaultMinMaxTime(), t && (s.isSame(t, this.d.opts.minDate) ? this._setMinTimeFromDate(this.d.opts.minDate) : s.isSame(t, this.d.opts.maxDate) && this._setMaxTimeFromDate(this.d.opts.maxDate)), this._validateHoursMinutes(t)
        },
        update: function() {
            this._updateRanges(), this._updateCurrentTime()
        },
        _getValidHoursFromDate: function(t, e) {
            var n = t;
            t instanceof Date && (n = s.getParsedDate(t).hours);
            var i = "am";
            if (e || this.d.ampm) switch (!0) {
                case 0 == n:
                    n = 12;
                    break;
                case 12 == n:
                    i = "pm";
                    break;
                case 11 < n:
                    n -= 12, i = "pm"
            }
            return {
                hours: n,
                dayPeriod: i
            }
        },
        set hours(t) {
            this._hours = t;
            var e = this._getValidHoursFromDate(t);
            this.displayHours = e.hours, this.dayPeriod = e.dayPeriod
        },
        get hours() {
            return this._hours
        },
        _onChangeRange: function(t) {
            var e = r(t.target),
                n = e.attr("name");
            this.d.timepickerIsActive = !0, this[n] = e.val(), this._updateCurrentTime(), this.d._trigger("timeChange", [this.hours, this.minutes]), this._handleDate(this.d.lastSelectedDate), this.update()
        },
        _onSelectDate: function(t, e) {
            this._handleDate(e), this.update()
        },
        _onMouseEnterRange: function(t) {
            var e = r(t.target).attr("name");
            r(".datepicker--time-current-" + e, this.$timepicker).addClass("-focus-")
        },
        _onMouseOutRange: function(t) {
            var e = r(t.target).attr("name");
            this.d.inFocus || r(".datepicker--time-current-" + e, this.$timepicker).removeClass("-focus-")
        },
        _onMouseUpRange: function(t) {
            this.d.timepickerIsActive = !1
        }
    }
}(window, jQuery), jQuery.fn.datepicker.language.en = {
        days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
        months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        today: "Today",
        clear: "Clear",
        dateFormat: "mm/dd/yyyy",
        timeFormat: "hh:ii aa",
        firstDay: 0
    },
    function(p) {
        p.fn.shorten = function(t) {
            "use strict";
            var d = {
                showChars: 100,
                minHideChars: 10,
                ellipsesText: "...",
                errMsg: null,
                force: !1
            };
            return t && p.extend(d, t), !(p(this).data("jquery.shorten") && !d.force) && (p(this).data("jquery.shorten", !0), p(document).off("click", ".morelink"), p(document).on({
                click: function() {
                    var t = p(this);
                    return t.hasClass("less") ? (t.html(d.moreText), t.parent().hide(), t.parent().prev().css("display", "inline-block")) : (t.html(d.lessText), t.parent().next().css("display", "inline-block"), t.parent().hide()), !1
                }
            }, ".morelink"), this.each(function() {
                var t = p(this),
                    e = t.html();
                if (t.text().length > d.showChars + d.minHideChars) {
                    var n = e.substr(0, d.showChars);
                    if (0 <= n.indexOf("<")) {
                        for (var i = !1, s = "", o = 0, r = [], a = null, l = 0, c = 0; c <= d.showChars; l++)
                            if ("<" != e[l] || i || (i = !0, "/" == (a = e.substring(l + 1, e.indexOf(">", l)))[0] ? a != "/" + r[0] ? d.errMsg = "ERROR en HTML: the top of the stack should be the tag that closes" : r.shift() : "br" != a.toLowerCase() && r.unshift(a)), i && ">" == e[l] && (i = !1), i) s += e.charAt(l);
                            else if (c++, o <= d.showChars) s += e.charAt(l), o++;
                        else if (0 < r.length) {
                            for (var u = 0; u < r.length; u++) s += "</" + r[u] + ">";
                            break
                        }
                        n = p("<div/>").html(s + '<span class="ellip">' + d.ellipsesText + "</span>").html()
                    } else n += d.ellipsesText;
                    var h = '<div class="shortcontent">' + n + '<span class="morelink">More</span></div><div class="allcontent">' + e + '<span class="morelink less">Less</span></div>';
                    t.html(h), t.find(".allcontent").hide(), p(".shortcontent p:last", t).css("margin-bottom", 0)
                }
            }))
        }
    }(jQuery),
    function(c, o, g, m) {
        "use strict";

        function n(t) {
            var e = t.currentTarget,
                n = t.data ? t.data.options : {},
                i = t.data ? t.data.items : [],
                s = g(e).attr("data-fancybox") || "",
                o = 0;
            t.preventDefault(), t.stopPropagation(), s ? (o = (i = i.length ? i.filter('[data-fancybox="' + s + '"]') : g('[data-fancybox="' + s + '"]')).index(e)) < 0 && (o = 0) : i = [e], g.fancybox.open(i, n, o)
        }
        if (g) {
            if (g.fn.fancybox) return g.error("fancyBox already initialized");
            var s = {
                    loop: !1,
                    margin: [44, 0],
                    gutter: 50,
                    keyboard: !0,
                    arrows: !0,
                    infobar: !1,
                    toolbar: !0,
                    buttons: ["slideShow", "fullScreen", "thumbs", "close"],
                    idleTime: 4,
                    smallBtn: "auto",
                    protect: !1,
                    modal: !1,
                    image: {
                        preload: "auto"
                    },
                    ajax: {
                        settings: {
                            data: {
                                fancybox: !0
                            }
                        }
                    },
                    iframe: {
                        tpl: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen allowtransparency="true" src=""></iframe>',
                        preload: !0,
                        css: {},
                        attr: {
                            scrolling: "auto"
                        }
                    },
                    animationEffect: "zoom",
                    animationDuration: 366,
                    zoomOpacity: "auto",
                    transitionEffect: "fade",
                    transitionDuration: 366,
                    slideClass: "",
                    baseClass: "",
                    baseTpl: '<div class="fancybox-container" role="dialog" tabindex="-1"><div class="fancybox-bg"></div><div class="fancybox-inner"><div class="fancybox-infobar"><button data-fancybox-prev title="{{PREV}}" class="fancybox-button fancybox-button--left"></button><div class="fancybox-infobar__body"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div><button data-fancybox-next title="{{NEXT}}" class="fancybox-button fancybox-button--right"></button></div><div class="fancybox-toolbar">{{BUTTONS}}</div><div class="fancybox-navigation"><button data-fancybox-prev title="{{PREV}}" class="fancybox-arrow fancybox-arrow--left" /><button data-fancybox-next title="{{NEXT}}" class="fancybox-arrow fancybox-arrow--right" /></div><div class="fancybox-stage"></div><div class="fancybox-caption-wrap"><div class="fancybox-caption"></div></div></div></div>',
                    spinnerTpl: '<div class="fancybox-loading"></div>',
                    errorTpl: '<div class="fancybox-error"><p>{{ERROR}}<p></div>',
                    btnTpl: {
                        slideShow: '<button data-fancybox-play class="fancybox-button fancybox-button--play" title="{{PLAY_START}}"></button>',
                        fullScreen: '<button data-fancybox-fullscreen class="fancybox-button fancybox-button--fullscreen" title="{{FULL_SCREEN}}"></button>',
                        thumbs: '<button data-fancybox-thumbs class="fancybox-button fancybox-button--thumbs" title="{{THUMBS}}"></button>',
                        close: '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}"></button>',
                        smallBtn: '<button data-fancybox-close class="fancybox-close-small" title="{{CLOSE}}"></button>'
                    },
                    parentEl: "body",
                    autoFocus: !0,
                    backFocus: !0,
                    trapFocus: !0,
                    fullScreen: {
                        autoStart: !1
                    },
                    touch: {
                        vertical: !0,
                        momentum: !0
                    },
                    hash: null,
                    media: {},
                    slideShow: {
                        autoStart: !1,
                        speed: 4e3
                    },
                    thumbs: {
                        autoStart: !1,
                        hideOnClose: !0
                    },
                    onInit: g.noop,
                    beforeLoad: g.noop,
                    afterLoad: g.noop,
                    beforeShow: g.noop,
                    afterShow: g.noop,
                    beforeClose: g.noop,
                    afterClose: g.noop,
                    onActivate: g.noop,
                    onDeactivate: g.noop,
                    clickContent: function(t, e) {
                        return "image" === t.type && "zoom"
                    },
                    clickSlide: "close",
                    clickOutside: "close",
                    dblclickContent: !1,
                    dblclickSlide: !1,
                    dblclickOutside: !1,
                    mobile: {
                        clickContent: function(t, e) {
                            return "image" === t.type && "toggleControls"
                        },
                        clickSlide: function(t, e) {
                            return "image" === t.type ? "toggleControls" : "close"
                        },
                        dblclickContent: function(t, e) {
                            return "image" === t.type && "zoom"
                        },
                        dblclickSlide: function(t, e) {
                            return "image" === t.type && "zoom"
                        }
                    },
                    lang: "en",
                    i18n: {
                        en: {
                            CLOSE: "Close",
                            NEXT: "Next",
                            PREV: "Previous",
                            ERROR: "The requested content cannot be loaded. <br/> Please try again later.",
                            PLAY_START: "Start slideshow",
                            PLAY_STOP: "Pause slideshow",
                            FULL_SCREEN: "Full screen",
                            THUMBS: "Thumbnails"
                        },
                        de: {
                            CLOSE: "Schliessen",
                            NEXT: "Weiter",
                            PREV: "ZurÃ¼ck",
                            ERROR: "Die angeforderten Daten konnten nicht geladen werden. <br/> Bitte versuchen Sie es spÃ¤ter nochmal.",
                            PLAY_START: "Diaschau starten",
                            PLAY_STOP: "Diaschau beenden",
                            FULL_SCREEN: "Vollbild",
                            THUMBS: "Vorschaubilder"
                        }
                    }
                },
                u = g(c),
                r = g(o),
                a = 0,
                h = c.requestAnimationFrame || c.webkitRequestAnimationFrame || c.mozRequestAnimationFrame || c.oRequestAnimationFrame || function(t) {
                    return c.setTimeout(t, 1e3 / 60)
                },
                d = function() {
                    var t, e = o.createElement("fakeelement"),
                        n = {
                            transition: "transitionend",
                            OTransition: "oTransitionEnd",
                            MozTransition: "transitionend",
                            WebkitTransition: "webkitTransitionEnd"
                        };
                    for (t in n)
                        if (e.style[t] !== m) return n[t]
                }(),
                p = function(t) {
                    return t && t.length && t[0].offsetHeight
                },
                i = function(t, e, n) {
                    var i = this;
                    i.opts = g.extend(!0, {
                        index: n
                    }, s, e || {}), e && g.isArray(e.buttons) && (i.opts.buttons = e.buttons), i.id = i.opts.id || ++a, i.group = [], i.currIndex = parseInt(i.opts.index, 10) || 0, i.prevIndex = null, i.prevPos = null, i.currPos = 0, i.firstRun = null, i.createGroup(t), i.group.length && (i.$lastFocus = g(o.activeElement).blur(), i.slides = {}, i.init(t))
                };
            g.extend(i.prototype, {
                init: function() {
                    var t, e, n, i = this,
                        s = i.group[i.currIndex].opts;
                    i.scrollTop = r.scrollTop(), i.scrollLeft = r.scrollLeft(), g.fancybox.getInstance() || g.fancybox.isMobile || "hidden" === g("body").css("overflow") || (t = g("body").width(), g("html").addClass("fancybox-enabled"), 1 < (t = g("body").width() - t) && g("head").append('<style id="fancybox-style-noscroll" type="text/css">.compensate-for-scrollbar, .fancybox-enabled body { margin-right: ' + t + "px; }</style>")), n = "", g.each(s.buttons, function(t, e) {
                        n += s.btnTpl[e] || ""
                    }), e = g(i.translate(i, s.baseTpl.replace("{{BUTTONS}}", n))).addClass("fancybox-is-hidden").attr("id", "fancybox-container-" + i.id).addClass(s.baseClass).data("FancyBox", i).prependTo(s.parentEl), i.$refs = {
                        container: e
                    }, ["bg", "inner", "infobar", "toolbar", "stage", "caption"].forEach(function(t) {
                        i.$refs[t] = e.find(".fancybox-" + t)
                    }), (!s.arrows || i.group.length < 2) && e.find(".fancybox-navigation").remove(), s.infobar || i.$refs.infobar.remove(), s.toolbar || i.$refs.toolbar.remove(), i.trigger("onInit"), i.activate(), i.jumpTo(i.currIndex)
                },
                translate: function(t, e) {
                    var i = t.opts.i18n[t.opts.lang];
                    return e.replace(/\{\{(\w+)\}\}/g, function(t, e) {
                        var n = i[e];
                        return n === m ? t : n
                    })
                },
                createGroup: function(t) {
                    var c = this,
                        e = g.makeArray(t);
                    g.each(e, function(t, e) {
                        var n, i, s, o, r = {},
                            a = {},
                            l = [];
                        g.isPlainObject(e) ? a = (r = e).opts || e : "object" === g.type(e) && g(e).length ? (n = g(e), l = n.data(), a = "options" in l ? l.options : {}, a = "object" === g.type(a) ? a : {}, r.src = "src" in l ? l.src : a.src || n.attr("href"), ["width", "height", "thumb", "type", "filter"].forEach(function(t) {
                            t in l && (a[t] = l[t])
                        }), "srcset" in l && (a.image = {
                            srcset: l.srcset
                        }), a.$orig = n, r.type || r.src || (r.type = "inline", r.src = e)) : r = {
                            type: "html",
                            src: e + ""
                        }, r.opts = g.extend(!0, {}, c.opts, a), g.fancybox.isMobile && (r.opts = g.extend(!0, {}, r.opts, r.opts.mobile)), i = r.type || r.opts.type, s = r.src || "", !i && s && (s.match(/(^data:image\/[a-z0-9+\/=]*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg|ico)((\?|#).*)?$)/i) ? i = "image" : s.match(/\.(pdf)((\?|#).*)?$/i) ? i = "pdf" : "#" === s.charAt(0) && (i = "inline")), r.type = i, r.index = c.group.length, r.opts.$orig && !r.opts.$orig.length && delete r.opts.$orig, !r.opts.$thumb && r.opts.$orig && (r.opts.$thumb = r.opts.$orig.find("img:first")), r.opts.$thumb && !r.opts.$thumb.length && delete r.opts.$thumb, "function" === g.type(r.opts.caption) ? r.opts.caption = r.opts.caption.apply(e, [c, r]) : "caption" in l && (r.opts.caption = l.caption), r.opts.caption = r.opts.caption === m ? "" : r.opts.caption + "", "ajax" === i && (1 < (o = s.split(/\s+/, 2)).length && (r.src = o.shift(), r.opts.filter = o.shift())), "auto" == r.opts.smallBtn && (-1 < g.inArray(i, ["html", "inline", "ajax"]) ? (r.opts.toolbar = !1, r.opts.smallBtn = !0) : r.opts.smallBtn = !1), "pdf" === i && (r.type = "iframe", r.opts.iframe.preload = !1), r.opts.modal && (r.opts = g.extend(!0, r.opts, {
                            infobar: 0,
                            toolbar: 0,
                            smallBtn: 0,
                            keyboard: 0,
                            slideShow: 0,
                            fullScreen: 0,
                            thumbs: 0,
                            touch: 0,
                            clickContent: !1,
                            clickSlide: !1,
                            clickOutside: !1,
                            dblclickContent: !1,
                            dblclickSlide: !1,
                            dblclickOutside: !1
                        })), c.group.push(r)
                    })
                },
                addEvents: function() {
                    var i = this;
                    i.removeEvents(), i.$refs.container.on("click.fb-close", "[data-fancybox-close]", function(t) {
                        t.stopPropagation(), t.preventDefault(), i.close(t)
                    }).on("click.fb-prev touchend.fb-prev", "[data-fancybox-prev]", function(t) {
                        t.stopPropagation(), t.preventDefault(), i.previous()
                    }).on("click.fb-next touchend.fb-next", "[data-fancybox-next]", function(t) {
                        t.stopPropagation(), t.preventDefault(), i.next()
                    }), u.on("orientationchange.fb resize.fb", function(t) {
                        t && t.originalEvent && "resize" === t.originalEvent.type ? h(function() {
                            i.update()
                        }) : (i.$refs.stage.hide(), setTimeout(function() {
                            i.$refs.stage.show(), i.update()
                        }, 500))
                    }), r.on("focusin.fb", function(t) {
                        var e = g.fancybox ? g.fancybox.getInstance() : null;
                        e.isClosing || !e.current || !e.current.opts.trapFocus || g(t.target).hasClass("fancybox-container") || g(t.target).is(o) || e && "fixed" !== g(t.target).css("position") && !e.$refs.container.has(t.target).length && (t.stopPropagation(), e.focus(), u.scrollTop(i.scrollTop).scrollLeft(i.scrollLeft))
                    }), r.on("keydown.fb", function(t) {
                        var e = i.current,
                            n = t.keyCode || t.which;
                        if (e && e.opts.keyboard && !g(t.target).is("input") && !g(t.target).is("textarea")) return 8 === n || 27 === n ? (t.preventDefault(), void i.close(t)) : 37 === n || 38 === n ? (t.preventDefault(), void i.previous()) : 39 === n || 40 === n ? (t.preventDefault(), void i.next()) : void i.trigger("afterKeydown", t, n)
                    }), i.group[i.currIndex].opts.idleTime && (i.idleSecondsCounter = 0, r.on("mousemove.fb-idle mouseenter.fb-idle mouseleave.fb-idle mousedown.fb-idle touchstart.fb-idle touchmove.fb-idle scroll.fb-idle keydown.fb-idle", function() {
                        i.idleSecondsCounter = 0, i.isIdle && i.showControls(), i.isIdle = !1
                    }), i.idleInterval = c.setInterval(function() {
                        i.idleSecondsCounter++, i.idleSecondsCounter >= i.group[i.currIndex].opts.idleTime && (i.isIdle = !0, i.idleSecondsCounter = 0, i.hideControls())
                    }, 1e3))
                },
                removeEvents: function() {
                    u.off("orientationchange.fb resize.fb"), r.off("focusin.fb keydown.fb .fb-idle"), this.$refs.container.off(".fb-close .fb-prev .fb-next"), this.idleInterval && (c.clearInterval(this.idleInterval), this.idleInterval = null)
                },
                previous: function(t) {
                    return this.jumpTo(this.currPos - 1, t)
                },
                next: function(t) {
                    return this.jumpTo(this.currPos + 1, t)
                },
                jumpTo: function(t, i, e) {
                    var n, s, o, r, a, l, c, u = this,
                        h = u.group.length;
                    if (!(u.isSliding || u.isClosing || u.isAnimating && u.firstRun)) {
                        if (t = parseInt(t, 10), !(s = u.current ? u.current.opts.loop : u.opts.loop) && (t < 0 || h <= t)) return !1;
                        if (n = u.firstRun = null === u.firstRun, !(h < 2 && !n && u.isSliding)) {
                            if (r = u.current, u.prevIndex = u.currIndex, u.prevPos = u.currPos, o = u.createSlide(t), 1 < h && ((s || 0 < o.index) && u.createSlide(t - 1), (s || o.index < h - 1) && u.createSlide(t + 1)), u.current = o, u.currIndex = o.index, u.currPos = o.pos, u.trigger("beforeShow", n), u.updateControls(), l = g.fancybox.getTranslate(o.$slide), o.isMoved = (0 !== l.left || 0 !== l.top) && !o.$slide.hasClass("fancybox-animated"), o.forcedDuration = m, g.isNumeric(i) ? o.forcedDuration = i : i = o.opts[n ? "animationDuration" : "transitionDuration"], i = parseInt(i, 10), n) return o.opts.animationEffect && i && u.$refs.container.css("transition-duration", i + "ms"), u.$refs.container.removeClass("fancybox-is-hidden"), p(u.$refs.container), u.$refs.container.addClass("fancybox-is-open"), o.$slide.addClass("fancybox-slide--current"), u.loadSlide(o), void u.preload();
                            g.each(u.slides, function(t, e) {
                                g.fancybox.stop(e.$slide)
                            }), o.$slide.removeClass("fancybox-slide--next fancybox-slide--previous").addClass("fancybox-slide--current"), o.isMoved ? (a = Math.round(o.$slide.width()), g.each(u.slides, function(t, e) {
                                var n = e.pos - o.pos;
                                g.fancybox.animate(e.$slide, {
                                    top: 0,
                                    left: n * a + n * e.opts.gutter
                                }, i, function() {
                                    e.$slide.removeAttr("style").removeClass("fancybox-slide--next fancybox-slide--previous"), e.pos === u.currPos && (o.isMoved = !1, u.complete())
                                })
                            })) : u.$refs.stage.children().removeAttr("style"), o.isLoaded ? u.revealContent(o) : u.loadSlide(o), u.preload(), r.pos !== o.pos && (c = "fancybox-slide--" + (r.pos > o.pos ? "next" : "previous"), r.$slide.removeClass("fancybox-slide--complete fancybox-slide--current fancybox-slide--next fancybox-slide--previous"), r.isComplete = !1, i && (o.isMoved || o.opts.transitionEffect) && (o.isMoved ? r.$slide.addClass(c) : (c = "fancybox-animated " + c + " fancybox-fx-" + o.opts.transitionEffect, g.fancybox.animate(r.$slide, c, i, function() {
                                r.$slide.removeClass(c).removeAttr("style")
                            }))))
                        }
                    }
                },
                createSlide: function(t) {
                    var e, n, i = this;
                    return n = (n = t % i.group.length) < 0 ? i.group.length + n : n, !i.slides[t] && i.group[n] && (e = g('<div class="fancybox-slide"></div>').appendTo(i.$refs.stage), i.slides[t] = g.extend(!0, {}, i.group[n], {
                        pos: t,
                        $slide: e,
                        isLoaded: !1
                    }), i.updateSlide(i.slides[t])), i.slides[t]
                },
                scaleToActual: function(t, e, n) {
                    var i, s, o, r, a, l = this,
                        c = l.current,
                        u = c.$content,
                        h = parseInt(c.$slide.width(), 10),
                        d = parseInt(c.$slide.height(), 10),
                        p = c.width,
                        f = c.height;
                    "image" != c.type || c.hasError || !u || l.isAnimating || (g.fancybox.stop(u), l.isAnimating = !0, t = t === m ? .5 * h : t, e = e === m ? .5 * d : e, r = p / (i = g.fancybox.getTranslate(u)).width, a = f / i.height, s = .5 * h - .5 * p, o = .5 * d - .5 * f, h < p && (0 < (s = i.left * r - (t * r - t)) && (s = 0), s < h - p && (s = h - p)), d < f && (0 < (o = i.top * a - (e * a - e)) && (o = 0), o < d - f && (o = d - f)), l.updateCursor(p, f), g.fancybox.animate(u, {
                        top: o,
                        left: s,
                        scaleX: r,
                        scaleY: a
                    }, n || 330, function() {
                        l.isAnimating = !1
                    }), l.SlideShow && l.SlideShow.isActive && l.SlideShow.stop())
                },
                scaleToFit: function(t) {
                    var e, n = this,
                        i = n.current,
                        s = i.$content;
                    "image" != i.type || i.hasError || !s || n.isAnimating || (g.fancybox.stop(s), n.isAnimating = !0, e = n.getFitPos(i), n.updateCursor(e.width, e.height), g.fancybox.animate(s, {
                        top: e.top,
                        left: e.left,
                        scaleX: e.width / s.width(),
                        scaleY: e.height / s.height()
                    }, t || 330, function() {
                        n.isAnimating = !1
                    }))
                },
                getFitPos: function(t) {
                    var e, n, i, s, o, r = t.$content,
                        a = t.width,
                        l = t.height,
                        c = t.opts.margin;
                    return !(!r || !r.length || !a && !l) && ("number" === g.type(c) && (c = [c, c]), 2 == c.length && (c = [c[0], c[1], c[0], c[1]]), u.width() < 800 && (c = [0, 0, 0, 0]), e = parseInt(this.$refs.stage.width(), 10) - (c[1] + c[3]), n = parseInt(this.$refs.stage.height(), 10) - (c[0] + c[2]), i = Math.min(1, e / a, n / l), s = Math.floor(i * a), o = Math.floor(i * l), {
                        top: Math.floor(.5 * (n - o)) + c[0],
                        left: Math.floor(.5 * (e - s)) + c[3],
                        width: s,
                        height: o
                    })
                },
                update: function() {
                    var n = this;
                    g.each(n.slides, function(t, e) {
                        n.updateSlide(e)
                    })
                },
                updateSlide: function(t) {
                    var e = t.$content;
                    e && (t.width || t.height) && (g.fancybox.stop(e), g.fancybox.setTranslate(e, this.getFitPos(t)), t.pos === this.currPos && this.updateCursor()), t.$slide.trigger("refresh"), this.trigger("onUpdate", t)
                },
                updateCursor: function(t, e) {
                    var n = this,
                        i = n.$refs.container.removeClass("fancybox-is-zoomable fancybox-can-zoomIn fancybox-can-drag fancybox-can-zoomOut");
                    n.current && !n.isClosing && (n.isZoomable() ? (i.addClass("fancybox-is-zoomable"), (t !== m && e !== m ? t < n.current.width && e < n.current.height : n.isScaledDown()) ? i.addClass("fancybox-can-zoomIn") : n.current.opts.touch ? i.addClass("fancybox-can-drag") : i.addClass("fancybox-can-zoomOut")) : n.current.opts.touch && i.addClass("fancybox-can-drag"))
                },
                isZoomable: function() {
                    var t, e = this.current;
                    if (e && !this.isClosing) return !!("image" === e.type && e.isLoaded && !e.hasError && ("zoom" === e.opts.clickContent || g.isFunction(e.opts.clickContent) && "zoom" === e.opts.clickContent(e)) && (t = this.getFitPos(e), e.width > t.width || e.height > t.height))
                },
                isScaledDown: function() {
                    var t = this.current,
                        e = t.$content,
                        n = !1;
                    return e && (n = (n = g.fancybox.getTranslate(e)).width < t.width || n.height < t.height), n
                },
                canPan: function() {
                    var t = this.current,
                        e = t.$content,
                        n = !1;
                    return e && (n = this.getFitPos(t), n = 1 < Math.abs(e.width() - n.width) || 1 < Math.abs(e.height() - n.height)), n
                },
                loadSlide: function(n) {
                    var t, e, i, s = this;
                    if (!n.isLoading && !n.isLoaded) {
                        switch (n.isLoading = !0, s.trigger("beforeLoad", n), t = n.type, (e = n.$slide).off("refresh").trigger("onReset").addClass("fancybox-slide--" + (t || "unknown")).addClass(n.opts.slideClass), t) {
                            case "image":
                                s.setImage(n);
                                break;
                            case "iframe":
                                s.setIframe(n);
                                break;
                            case "html":
                                s.setContent(n, n.src || n.content);
                                break;
                            case "inline":
                                g(n.src).length ? s.setContent(n, g(n.src)) : s.setError(n);
                                break;
                            case "ajax":
                                s.showLoading(n), i = g.ajax(g.extend({}, n.opts.ajax.settings, {
                                    url: n.src,
                                    success: function(t, e) {
                                        "success" === e && s.setContent(n, t)
                                    },
                                    error: function(t, e) {
                                        t && "abort" !== e && s.setError(n)
                                    }
                                })), e.one("onReset", function() {
                                    i.abort()
                                });
                                break;
                            default:
                                s.setError(n)
                        }
                        return !0
                    }
                },
                setImage: function(t) {
                    var e, n, i, s, o = this,
                        r = t.opts.image.srcset;
                    if (r) {
                        i = c.devicePixelRatio || 1, s = c.innerWidth * i, (n = r.split(",").map(function(t) {
                            var i = {};
                            return t.trim().split(/\s+/).forEach(function(t, e) {
                                var n = parseInt(t.substring(0, t.length - 1), 10);
                                return 0 === e ? i.url = t : void(n && (i.value = n, i.postfix = t[t.length - 1]))
                            }), i
                        })).sort(function(t, e) {
                            return t.value - e.value
                        });
                        for (var a = 0; a < n.length; a++) {
                            var l = n[a];
                            if ("w" === l.postfix && l.value >= s || "x" === l.postfix && l.value >= i) {
                                e = l;
                                break
                            }
                        }!e && n.length && (e = n[n.length - 1]), e && (t.src = e.url, t.width && t.height && "w" == e.postfix && (t.height = t.width / t.height * e.value, t.width = e.value))
                    }
                    t.$content = g('<div class="fancybox-image-wrap"></div>').addClass("fancybox-is-hidden").appendTo(t.$slide), !1 !== t.opts.preload && t.opts.width && t.opts.height && (t.opts.thumb || t.opts.$thumb) ? (t.width = t.opts.width, t.height = t.opts.height, t.$ghost = g("<img />").one("error", function() {
                        g(this).remove(), t.$ghost = null, o.setBigImage(t)
                    }).one("load", function() {
                        o.afterLoad(t), o.setBigImage(t)
                    }).addClass("fancybox-image").appendTo(t.$content).attr("src", t.opts.thumb || t.opts.$thumb.attr("src"))) : o.setBigImage(t)
                },
                setBigImage: function(t) {
                    var e = this,
                        n = g("<img />");
                    t.$image = n.one("error", function() {
                        e.setError(t)
                    }).one("load", function() {
                        clearTimeout(t.timouts), t.timouts = null, e.isClosing || (t.width = this.naturalWidth, t.height = this.naturalHeight, t.opts.image.srcset && n.attr("sizes", "100vw").attr("srcset", t.opts.image.srcset), e.hideLoading(t), t.$ghost ? t.timouts = setTimeout(function() {
                            t.timouts = null, t.$ghost.hide()
                        }, Math.min(300, Math.max(1e3, t.height / 1600))) : e.afterLoad(t))
                    }).addClass("fancybox-image").attr("src", t.src).appendTo(t.$content), n[0].complete ? n.trigger("load") : n[0].error ? n.trigger("error") : t.timouts = setTimeout(function() {
                        n[0].complete || t.hasError || e.showLoading(t)
                    }, 100)
                },
                setIframe: function(o) {
                    var r, e = this,
                        a = o.opts.iframe,
                        t = o.$slide;
                    o.$content = g('<div class="fancybox-content' + (a.preload ? " fancybox-is-hidden" : "") + '"></div>').css(a.css).appendTo(t), r = g(a.tpl.replace(/\{rnd\}/g, (new Date).getTime())).attr(a.attr).appendTo(o.$content), a.preload ? (e.showLoading(o), r.on("load.fb error.fb", function(t) {
                        this.isReady = 1, o.$slide.trigger("refresh"), e.afterLoad(o)
                    }), t.on("refresh.fb", function() {
                        var t, e, n, i, s = o.$content;
                        if (1 === r[0].isReady) {
                            try {
                                t = r.contents().find("body")
                            } catch (t) {}
                            t && t.length && (a.css.width === m || a.css.height === m) && (e = r[0].contentWindow.document.documentElement.scrollWidth, n = Math.ceil(t.outerWidth(!0) + (s.width() - e)), i = Math.ceil(t.outerHeight(!0)), s.css({
                                width: a.css.width === m ? n + (s.outerWidth() - s.innerWidth()) : a.css.width,
                                height: a.css.height === m ? i + (s.outerHeight() - s.innerHeight()) : a.css.height
                            })), s.removeClass("fancybox-is-hidden")
                        }
                    })) : this.afterLoad(o), r.attr("src", o.src), !0 === o.opts.smallBtn && o.$content.prepend(e.translate(o, o.opts.btnTpl.smallBtn)), t.one("onReset", function() {
                        try {
                            g(this).find("iframe").hide().attr("src", "//about:blank")
                        } catch (t) {}
                        g(this).empty(), o.isLoaded = !1
                    })
                },
                setContent: function(t, e) {
                    var n;
                    this.isClosing || (this.hideLoading(t), t.$slide.empty(), (n = e) && n.hasOwnProperty && n instanceof g && e.parent().length ? (e.parent(".fancybox-slide--inline").trigger("onReset"), t.$placeholder = g("<div></div>").hide().insertAfter(e), e.css("display", "inline-block")) : t.hasError || ("string" === g.type(e) && (3 === (e = g("<div>").append(g.trim(e)).contents())[0].nodeType && (e = g("<div>").html(e))), t.opts.filter && (e = g("<div>").html(e).find(t.opts.filter))), t.$slide.one("onReset", function() {
                        t.$placeholder && (t.$placeholder.after(e.hide()).remove(), t.$placeholder = null), t.$smallBtn && (t.$smallBtn.remove(), t.$smallBtn = null), t.hasError || (g(this).empty(), t.isLoaded = !1)
                    }), t.$content = g(e).appendTo(t.$slide), t.opts.smallBtn && !t.$smallBtn && (t.$smallBtn = g(this.translate(t, t.opts.btnTpl.smallBtn)).appendTo(t.$content)), this.afterLoad(t))
                },
                setError: function(t) {
                    t.hasError = !0, t.$slide.removeClass("fancybox-slide--" + t.type), this.setContent(t, this.translate(t, t.opts.errorTpl))
                },
                showLoading: function(t) {
                    (t = t || this.current) && !t.$spinner && (t.$spinner = g(this.opts.spinnerTpl).appendTo(t.$slide))
                },
                hideLoading: function(t) {
                    (t = t || this.current) && t.$spinner && (t.$spinner.remove(), delete t.$spinner)
                },
                afterLoad: function(t) {
                    this.isClosing || (t.isLoading = !1, t.isLoaded = !0, this.trigger("afterLoad", t), this.hideLoading(t), t.opts.protect && t.$content && !t.hasError && (t.$content.on("contextmenu.fb", function(t) {
                        return 2 == t.button && t.preventDefault(), !0
                    }), "image" === t.type && g('<div class="fancybox-spaceball"></div>').appendTo(t.$content)), this.revealContent(t))
                },
                revealContent: function(e) {
                    var t, n, i, s, o, r = this,
                        a = e.$slide,
                        l = !1;
                    return t = e.opts[r.firstRun ? "animationEffect" : "transitionEffect"], i = e.opts[r.firstRun ? "animationDuration" : "transitionDuration"], i = parseInt(e.forcedDuration === m ? i : e.forcedDuration, 10), !e.isMoved && e.pos === r.currPos && i || (t = !1), "zoom" !== t || e.pos === r.currPos && i && "image" === e.type && !e.hasError && (l = r.getThumbPos(e)) || (t = "fade"), "zoom" === t ? ((o = r.getFitPos(e)).scaleX = Math.round(o.width / l.width * 100) / 100, o.scaleY = Math.round(o.height / l.height * 100) / 100, delete o.width, delete o.height, "auto" == (s = e.opts.zoomOpacity) && (s = .1 < Math.abs(e.width / e.height - l.width / l.height)), s && (l.opacity = .1, o.opacity = 1), g.fancybox.setTranslate(e.$content.removeClass("fancybox-is-hidden"), l), p(e.$content), void g.fancybox.animate(e.$content, o, i, function() {
                        r.complete()
                    })) : (r.updateSlide(e), t ? (g.fancybox.stop(a), n = "fancybox-animated fancybox-slide--" + (e.pos > r.prevPos ? "next" : "previous") + " fancybox-fx-" + t, a.removeAttr("style").removeClass("fancybox-slide--current fancybox-slide--next fancybox-slide--previous").addClass(n), e.$content.removeClass("fancybox-is-hidden"), p(a), void g.fancybox.animate(a, "fancybox-slide--current", i, function(t) {
                        a.removeClass(n).removeAttr("style"), e.pos === r.currPos && r.complete()
                    }, !0)) : (p(a), e.$content.removeClass("fancybox-is-hidden"), void(e.pos === r.currPos && r.complete())))
                },
                getThumbPos: function(t) {
                    var e, n = !1,
                        i = t.opts.$thumb,
                        s = i ? i.offset() : 0;
                    return s && i[0].ownerDocument === o && function(t) {
                        for (var e = t[0], i = e.getBoundingClientRect(), n = []; null !== e.parentElement;) "hidden" !== g(e.parentElement).css("overflow") && "auto" !== g(e.parentElement).css("overflow") || n.push(e.parentElement.getBoundingClientRect()), e = e.parentElement;
                        return n.every(function(t) {
                            var e = Math.min(i.right, t.right) - Math.max(i.left, t.left),
                                n = Math.min(i.bottom, t.bottom) - Math.max(i.top, t.top);
                            return 0 < e && 0 < n
                        }) && 0 < i.bottom && 0 < i.right && i.left < g(c).width() && i.top < g(c).height()
                    }(i) && (e = this.$refs.stage.offset(), n = {
                        top: s.top - e.top + parseFloat(i.css("border-top-width") || 0),
                        left: s.left - e.left + parseFloat(i.css("border-left-width") || 0),
                        width: i.width(),
                        height: i.height(),
                        scaleX: 1,
                        scaleY: 1
                    }), n
                },
                complete: function() {
                    var n = this,
                        t = n.current,
                        i = {};
                    t.isMoved || !t.isLoaded || t.isComplete || (t.isComplete = !0, t.$slide.siblings().trigger("onReset"), p(t.$slide), t.$slide.addClass("fancybox-slide--complete"), g.each(n.slides, function(t, e) {
                        e.pos >= n.currPos - 1 && e.pos <= n.currPos + 1 ? i[e.pos] = e : e && (g.fancybox.stop(e.$slide), e.$slide.unbind().remove())
                    }), n.slides = i, n.updateCursor(), n.trigger("afterShow"), (g(o.activeElement).is("[disabled]") || t.opts.autoFocus && "image" != t.type && "iframe" !== t.type) && n.focus())
                },
                preload: function() {
                    var t, e, n = this;
                    n.group.length < 2 || (t = n.slides[n.currPos + 1], e = n.slides[n.currPos - 1], t && "image" === t.type && n.loadSlide(t), e && "image" === e.type && n.loadSlide(e))
                },
                focus: function() {
                    var t, e = this.current;
                    this.isClosing || (t = (t = e && e.isComplete ? e.$slide.find("button,:input,[tabindex],a").filter(":not([disabled]):visible:first") : null) && t.length ? t : this.$refs.container).focus()
                },
                activate: function() {
                    var e = this;
                    g(".fancybox-container").each(function() {
                        var t = g(this).data("FancyBox");
                        t && t.uid !== e.uid && !t.isClosing && t.trigger("onDeactivate")
                    }), e.current && (0 < e.$refs.container.index() && e.$refs.container.prependTo(o.body), e.updateControls()), e.trigger("onActivate"), e.addEvents()
                },
                close: function(t, e) {
                    var n, i, s, o, r, a, l = this,
                        c = l.current,
                        u = function() {
                            l.cleanUp(t)
                        };
                    return !l.isClosing && (!(l.isClosing = !0) === l.trigger("beforeClose", t) ? (l.isClosing = !1, h(function() {
                        l.update()
                    }), !1) : (l.removeEvents(), c.timouts && clearTimeout(c.timouts), s = c.$content, n = c.opts.animationEffect, i = g.isNumeric(e) ? e : n ? c.opts.animationDuration : 0, c.$slide.off(d).removeClass("fancybox-slide--complete fancybox-slide--next fancybox-slide--previous fancybox-animated"), c.$slide.siblings().trigger("onReset").remove(), i && l.$refs.container.removeClass("fancybox-is-open").addClass("fancybox-is-closing"), l.hideLoading(c), l.hideControls(), l.updateCursor(), "zoom" !== n || !0 !== t && s && i && "image" === c.type && !c.hasError && (a = l.getThumbPos(c)) || (n = "fade"), "zoom" === n ? (g.fancybox.stop(s), (r = g.fancybox.getTranslate(s)).width = r.width * r.scaleX, r.height = r.height * r.scaleY, "auto" == (o = c.opts.zoomOpacity) && (o = .1 < Math.abs(c.width / c.height - a.width / a.height)), o && (a.opacity = 0), r.scaleX = r.width / a.width, r.scaleY = r.height / a.height, r.width = a.width, r.height = a.height, g.fancybox.setTranslate(c.$content, r), g.fancybox.animate(c.$content, a, i, u)) : n && i ? !0 === t ? setTimeout(u, i) : g.fancybox.animate(c.$slide.removeClass("fancybox-slide--current"), "fancybox-animated fancybox-slide--previous fancybox-fx-" + n, i, u) : u(), !0))
                },
                cleanUp: function(t) {
                    var e, n = this;
                    n.current.$slide.trigger("onReset"), n.$refs.container.empty().remove(), n.trigger("afterClose", t), n.$lastFocus && !n.current.focusBack && n.$lastFocus.focus(), n.current = null, (e = g.fancybox.getInstance()) ? e.activate() : (u.scrollTop(n.scrollTop).scrollLeft(n.scrollLeft), g("html").removeClass("fancybox-enabled"), g("#fancybox-style-noscroll").remove())
                },
                trigger: function(t, e) {
                    var n, i = Array.prototype.slice.call(arguments, 1),
                        s = e && e.opts ? e : this.current;
                    return s ? i.unshift(s) : s = this, i.unshift(this), g.isFunction(s.opts[t]) && (n = s.opts[t].apply(s, i)), !1 === n ? n : void("afterClose" === t ? r.trigger(t + ".fb", i) : this.$refs.container.trigger(t + ".fb", i))
                },
                updateControls: function(t) {
                    var e = this,
                        n = e.current,
                        i = n.index,
                        s = n.opts,
                        o = s.caption,
                        r = e.$refs.caption;
                    n.$slide.trigger("refresh"), e.$caption = o && o.length ? r.html(o) : null, e.isHiddenControls || e.showControls(), g("[data-fancybox-count]").html(e.group.length), g("[data-fancybox-index]").html(i + 1), g("[data-fancybox-prev]").prop("disabled", !s.loop && i <= 0), g("[data-fancybox-next]").prop("disabled", !s.loop && i >= e.group.length - 1)
                },
                hideControls: function() {
                    this.isHiddenControls = !0, this.$refs.container.removeClass("fancybox-show-infobar fancybox-show-toolbar fancybox-show-caption fancybox-show-nav")
                },
                showControls: function() {
                    var t = this,
                        e = t.current ? t.current.opts : t.opts,
                        n = t.$refs.container;
                    t.isHiddenControls = !1, t.idleSecondsCounter = 0, n.toggleClass("fancybox-show-toolbar", !(!e.toolbar || !e.buttons)).toggleClass("fancybox-show-infobar", !!(e.infobar && 1 < t.group.length)).toggleClass("fancybox-show-nav", !!(e.arrows && 1 < t.group.length)).toggleClass("fancybox-is-modal", !!e.modal), t.$caption ? n.addClass("fancybox-show-caption ") : n.removeClass("fancybox-show-caption")
                },
                toggleControls: function() {
                    this.isHiddenControls ? this.showControls() : this.hideControls()
                }
            }), g.fancybox = {
                version: "3.1.20",
                defaults: s,
                getInstance: function(t) {
                    var e = g('.fancybox-container:not(".fancybox-is-closing"):first').data("FancyBox"),
                        n = Array.prototype.slice.call(arguments, 1);
                    return e instanceof i && ("string" === g.type(t) ? e[t].apply(e, n) : "function" === g.type(t) && t.apply(e, n), e)
                },
                open: function(t, e, n) {
                    return new i(t, e, n)
                },
                close: function(t) {
                    var e = this.getInstance();
                    e && (e.close(), !0 === t && this.close())
                },
                destroy: function() {
                    this.close(!0), r.off("click.fb-start")
                },
                isMobile: o.createTouch !== m && /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent),
                use3d: (t = o.createElement("div"), c.getComputedStyle && c.getComputedStyle(t).getPropertyValue("transform") && !(o.documentMode && o.documentMode < 11)),
                getTranslate: function(t) {
                    var e;
                    if (!t || !t.length) return !1;
                    if ((e = t.eq(0).css("transform")) && -1 !== e.indexOf("matrix") ? e = (e = (e = e.split("(")[1]).split(")")[0]).split(",") : e = [], e.length) e = (e = 10 < e.length ? [e[13], e[12], e[0], e[5]] : [e[5], e[4], e[0], e[3]]).map(parseFloat);
                    else {
                        e = [0, 0, 1, 1];
                        var n = /\.*translate\((.*)px,(.*)px\)/i.exec(t.eq(0).attr("style"));
                        n && (e[0] = parseFloat(n[2]), e[1] = parseFloat(n[1]))
                    }
                    return {
                        top: e[0],
                        left: e[1],
                        scaleX: e[2],
                        scaleY: e[3],
                        opacity: parseFloat(t.css("opacity")),
                        width: t.width(),
                        height: t.height()
                    }
                },
                setTranslate: function(t, e) {
                    var n = "",
                        i = {};
                    if (t && e) return e.left === m && e.top === m || (n = (e.left === m ? t.position().left : e.left) + "px, " + (e.top === m ? t.position().top : e.top) + "px", n = this.use3d ? "translate3d(" + n + ", 0px)" : "translate(" + n + ")"), e.scaleX !== m && e.scaleY !== m && (n = (n.length ? n + " " : "") + "scale(" + e.scaleX + ", " + e.scaleY + ")"), n.length && (i.transform = n), e.opacity !== m && (i.opacity = e.opacity), e.width !== m && (i.width = e.width), e.height !== m && (i.height = e.height), t.css(i)
                },
                animate: function(e, n, t, i, s) {
                    var o = d || "transitionend";
                    g.isFunction(t) && (i = t, t = null), g.isPlainObject(n) || e.removeAttr("style"), e.on(o, function(t) {
                        (!t || !t.originalEvent || e.is(t.originalEvent.target) && "z-index" != t.originalEvent.propertyName) && (e.off(o), g.isPlainObject(n) ? n.scaleX !== m && n.scaleY !== m && (e.css("transition-duration", "0ms"), n.width = e.width() * n.scaleX, n.height = e.height() * n.scaleY, n.scaleX = 1, n.scaleY = 1, g.fancybox.setTranslate(e, n)) : !0 !== s && e.removeClass(n), g.isFunction(i) && i(t))
                    }), g.isNumeric(t) && e.css("transition-duration", t + "ms"), g.isPlainObject(n) ? g.fancybox.setTranslate(e, n) : e.addClass(n), e.data("timer", setTimeout(function() {
                        e.trigger("transitionend")
                    }, t + 16))
                },
                stop: function(t) {
                    clearTimeout(t.data("timer")), t.off(d)
                }
            }, g.fn.fancybox = function(t) {
                var e;
                return (e = (t = t || {}).selector || !1) ? g("body").off("click.fb-start", e).on("click.fb-start", e, {
                    items: g(e),
                    options: t
                }, n) : this.off("click.fb-start").on("click.fb-start", {
                    items: this,
                    options: t
                }, n), this
            }, r.on("click.fb-start", "[data-fancybox]", n)
        }
        var t
    }(window, document, window.jQuery),
    function(p) {
        "use strict";
        var f = function(n, t, e) {
                if (n) return e = e || "", "object" === p.type(e) && (e = p.param(e, !0)), p.each(t, function(t, e) {
                    n = n.replace("$" + t, e || "")
                }), e.length && (n += (0 < n.indexOf("?") ? "&" : "?") + e), n
            },
            n = {
                youtube: {
                    matcher: /(youtube\.com|youtu\.be|youtube\-nocookie\.com)\/(watch\?(.*&)?v=|v\/|u\/|embed\/?)?(videoseries\?list=(.*)|[\w-]{11}|\?listType=(.*)&list=(.*))(.*)/i,
                    params: {
                        autoplay: 1,
                        autohide: 1,
                        fs: 1,
                        rel: 0,
                        hd: 1,
                        wmode: "transparent",
                        enablejsapi: 1,
                        html5: 1
                    },
                    paramPlace: 8,
                    type: "iframe",
                    url: "//www.youtube.com/embed/$4",
                    thumb: "//img.youtube.com/vi/$4/hqdefault.jpg"
                },
                vimeo: {
                    matcher: /^.+vimeo.com\/(.*\/)?([\d]+)(.*)?/,
                    params: {
                        autoplay: 1,
                        hd: 1,
                        show_title: 1,
                        show_byline: 1,
                        show_portrait: 0,
                        fullscreen: 1,
                        api: 1
                    },
                    paramPlace: 3,
                    type: "iframe",
                    url: "//player.vimeo.com/video/$2"
                },
                metacafe: {
                    matcher: /metacafe.com\/watch\/(\d+)\/(.*)?/,
                    type: "iframe",
                    url: "//www.metacafe.com/embed/$1/?ap=1"
                },
                dailymotion: {
                    matcher: /dailymotion.com\/video\/(.*)\/?(.*)/,
                    params: {
                        additionalInfos: 0,
                        autoStart: 1
                    },
                    type: "iframe",
                    url: "//www.dailymotion.com/embed/video/$1"
                },
                vine: {
                    matcher: /vine.co\/v\/([a-zA-Z0-9\?\=\-]+)/,
                    type: "iframe",
                    url: "//vine.co/v/$1/embed/simple"
                },
                instagram: {
                    matcher: /(instagr\.am|instagram\.com)\/p\/([a-zA-Z0-9_\-]+)\/?/i,
                    type: "image",
                    url: "//$1/p/$2/media/?size=l"
                },
                google_maps: {
                    matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(((maps\/(place\/(.*)\/)?\@(.*),(\d+.?\d+?)z))|(\?ll=))(.*)?/i,
                    type: "iframe",
                    url: function(t) {
                        return "//maps.google." + t[2] + "/?ll=" + (t[9] ? t[9] + "&z=" + Math.floor(t[10]) + (t[12] ? t[12].replace(/^\//, "&") : "") : t[12]) + "&output=" + (t[12] && 0 < t[12].indexOf("layer=c") ? "svembed" : "embed")
                    }
                }
            };
        p(document).on("onInit.fb", function(t, e) {
            p.each(e.group, function(t, s) {
                var e, o, r, a, l, c, u, h = s.src || "",
                    d = !1;
                s.type || (e = p.extend(!0, {}, n, s.opts.media), p.each(e, function(t, e) {
                    if (r = h.match(e.matcher), c = {}, u = t, r) {
                        if (d = e.type, e.paramPlace && r[e.paramPlace]) {
                            "?" == (l = r[e.paramPlace])[0] && (l = l.substring(1)), l = l.split("&");
                            for (var n = 0; n < l.length; ++n) {
                                var i = l[n].split("=", 2);
                                2 == i.length && (c[i[0]] = decodeURIComponent(i[1].replace(/\+/g, " ")))
                            }
                        }
                        return a = p.extend(!0, {}, e.params, s.opts[t], c), h = "function" === p.type(e.url) ? e.url.call(this, r, a, s) : f(e.url, r, a), o = "function" === p.type(e.thumb) ? e.thumb.call(this, r, a, s) : f(e.thumb, r), "vimeo" === u && (h = h.replace("&%23", "#")), !1
                    }
                }), d ? (s.src = h, s.type = d, s.opts.thumb || s.opts.$thumb && s.opts.$thumb.length || (s.opts.thumb = o), "iframe" === d && (p.extend(!0, s.opts, {
                    iframe: {
                        preload: !1,
                        attr: {
                            scrolling: "no"
                        }
                    }
                }), s.contentProvider = u, s.opts.slideClass += " fancybox-slide--" + ("google_maps" == u ? "map" : "video"))) : s.type = "image")
            })
        })
    }(window.jQuery),
    function(f, a, g) {
        "use strict";
        var m = f.requestAnimationFrame || f.webkitRequestAnimationFrame || f.mozRequestAnimationFrame || f.oRequestAnimationFrame || function(t) {
                return f.setTimeout(t, 1e3 / 60)
            },
            v = f.cancelAnimationFrame || f.webkitCancelAnimationFrame || f.mozCancelAnimationFrame || f.oCancelAnimationFrame || function(t) {
                f.clearTimeout(t)
            },
            u = function(t) {
                var e = [];
                for (var n in t = (t = t.originalEvent || t || f.e).touches && t.touches.length ? t.touches : t.changedTouches && t.changedTouches.length ? t.changedTouches : [t]) t[n].pageX ? e.push({
                    x: t[n].pageX,
                    y: t[n].pageY
                }) : t[n].clientX && e.push({
                    x: t[n].clientX,
                    y: t[n].clientY
                });
                return e
            },
            y = function(t, e, n) {
                return e && t ? "x" === n ? t.x - e.x : "y" === n ? t.y - e.y : Math.sqrt(Math.pow(t.x - e.x, 2) + Math.pow(t.y - e.y, 2)) : 0
            },
            l = function(t) {
                if (t.is("a,button,input,select,textarea") || g.isFunction(t.get(0).onclick)) return !0;
                for (var e = 0, n = t[0].attributes, i = n.length; e < i; e++)
                    if ("data-fancybox-" === n[e].nodeName.substr(0, 14)) return !0;
                return !1
            },
            c = function(t) {
                for (var e = !1;
                    (n = t.get(0), void 0, i = f.getComputedStyle(n)["overflow-y"], s = f.getComputedStyle(n)["overflow-x"], o = ("scroll" === i || "auto" === i) && n.scrollHeight > n.clientHeight, r = ("scroll" === s || "auto" === s) && n.scrollWidth > n.clientWidth, !(e = o || r)) && ((t = t.parent()).length && !t.hasClass("fancybox-stage") && !t.is("body")););
                var n, i, s, o, r;
                return e
            },
            n = function(t) {
                var e = this;
                e.instance = t, e.$bg = t.$refs.bg, e.$stage = t.$refs.stage, e.$container = t.$refs.container, e.destroy(), e.$container.on("touchstart.fb.touch mousedown.fb.touch", g.proxy(e, "ontouchstart"))
            };
        n.prototype.destroy = function() {
            this.$container.off(".fb.touch")
        }, n.prototype.ontouchstart = function(t) {
            var e = this,
                n = g(t.target),
                i = e.instance,
                s = i.current,
                o = s.$content,
                r = "touchstart" == t.type;
            if (r && e.$container.off("mousedown.fb.touch"), !s || e.instance.isAnimating || e.instance.isClosing) return t.stopPropagation(), void t.preventDefault();
            if ((!t.originalEvent || 2 != t.originalEvent.button) && n.length && !l(n) && !l(n.parent()) && !(t.originalEvent.clientX > n[0].clientWidth + n.offset().left) && (e.startPoints = u(t), e.startPoints && !(1 < e.startPoints.length && i.isSliding))) {
                if (e.$target = n, e.$content = o, e.canTap = !0, g(a).off(".fb.touch"), g(a).on(r ? "touchend.fb.touch touchcancel.fb.touch" : "mouseup.fb.touch mouseleave.fb.touch", g.proxy(e, "ontouchend")), g(a).on(r ? "touchmove.fb.touch" : "mousemove.fb.touch", g.proxy(e, "ontouchmove")), t.stopPropagation(), !i.current.opts.touch && !i.canPan() || !n.is(e.$stage) && !e.$stage.find(n).length) return void(n.is("img") && t.preventDefault());
                g.fancybox.isMobile && (c(e.$target) || c(e.$target.parent())) || t.preventDefault(), e.canvasWidth = Math.round(s.$slide[0].clientWidth), e.canvasHeight = Math.round(s.$slide[0].clientHeight), e.startTime = (new Date).getTime(), e.distanceX = e.distanceY = e.distance = 0, e.isPanning = !1, e.isSwiping = !1, e.isZooming = !1, e.sliderStartPos = e.sliderLastPos || {
                    top: 0,
                    left: 0
                }, e.contentStartPos = g.fancybox.getTranslate(e.$content), e.contentLastPos = null, 1 !== e.startPoints.length || e.isZooming || (e.canTap = !i.isSliding, "image" === s.type && (e.contentStartPos.width > e.canvasWidth + 1 || e.contentStartPos.height > e.canvasHeight + 1) ? (g.fancybox.stop(e.$content), e.$content.css("transition-duration", "0ms"), e.isPanning = !0) : e.isSwiping = !0, e.$container.addClass("fancybox-controls--isGrabbing")), 2 !== e.startPoints.length || i.isAnimating || s.hasError || "image" !== s.type || !s.isLoaded && !s.$ghost || (e.isZooming = !0, e.isSwiping = !1, e.isPanning = !1, g.fancybox.stop(e.$content), e.$content.css("transition-duration", "0ms"), e.centerPointStartX = .5 * (e.startPoints[0].x + e.startPoints[1].x) - g(f).scrollLeft(), e.centerPointStartY = .5 * (e.startPoints[0].y + e.startPoints[1].y) - g(f).scrollTop(), e.percentageOfImageAtPinchPointX = (e.centerPointStartX - e.contentStartPos.left) / e.contentStartPos.width, e.percentageOfImageAtPinchPointY = (e.centerPointStartY - e.contentStartPos.top) / e.contentStartPos.height, e.startDistanceBetweenFingers = y(e.startPoints[0], e.startPoints[1]))
            }
        }, n.prototype.ontouchmove = function(t) {
            var e = this;
            if (e.newPoints = u(t), g.fancybox.isMobile && (c(e.$target) || c(e.$target.parent()))) return t.stopPropagation(), void(e.canTap = !1);
            if ((e.instance.current.opts.touch || e.instance.canPan()) && e.newPoints && e.newPoints.length && (e.distanceX = y(e.newPoints[0], e.startPoints[0], "x"), e.distanceY = y(e.newPoints[0], e.startPoints[0], "y"), e.distance = y(e.newPoints[0], e.startPoints[0]), 0 < e.distance)) {
                if (!e.$target.is(e.$stage) && !e.$stage.find(e.$target).length) return;
                t.stopPropagation(), t.preventDefault(), e.isSwiping ? e.onSwipe() : e.isPanning ? e.onPan() : e.isZooming && e.onZoom()
            }
        }, n.prototype.onSwipe = function() {
            var t, i = this,
                e = i.isSwiping,
                n = i.sliderStartPos.left || 0;
            !0 === e ? 10 < Math.abs(i.distance) && (i.canTap = !1, i.instance.group.length < 2 && i.instance.opts.touch.vertical ? i.isSwiping = "y" : i.instance.isSliding || !1 === i.instance.opts.touch.vertical || "auto" === i.instance.opts.touch.vertical && 800 < g(f).width() ? i.isSwiping = "x" : (t = Math.abs(180 * Math.atan2(i.distanceY, i.distanceX) / Math.PI), i.isSwiping = 45 < t && t < 135 ? "y" : "x"), i.instance.isSliding = i.isSwiping, i.startPoints = i.newPoints, g.each(i.instance.slides, function(t, e) {
                g.fancybox.stop(e.$slide), e.$slide.css("transition-duration", "0ms"), e.inTransition = !1, e.pos === i.instance.current.pos && (i.sliderStartPos.left = g.fancybox.getTranslate(e.$slide).left)
            }), i.instance.SlideShow && i.instance.SlideShow.isActive && i.instance.SlideShow.stop()) : ("x" == e && (0 < i.distanceX && (i.instance.group.length < 2 || 0 === i.instance.current.index && !i.instance.current.opts.loop) ? n += Math.pow(i.distanceX, .8) : i.distanceX < 0 && (i.instance.group.length < 2 || i.instance.current.index === i.instance.group.length - 1 && !i.instance.current.opts.loop) ? n -= Math.pow(-i.distanceX, .8) : n += i.distanceX), i.sliderLastPos = {
                top: "x" == e ? 0 : i.sliderStartPos.top + i.distanceY,
                left: n
            }, i.requestId && (v(i.requestId), i.requestId = null), i.requestId = m(function() {
                i.sliderLastPos && (g.each(i.instance.slides, function(t, e) {
                    var n = e.pos - i.instance.currPos;
                    g.fancybox.setTranslate(e.$slide, {
                        top: i.sliderLastPos.top,
                        left: i.sliderLastPos.left + n * i.canvasWidth + n * e.opts.gutter
                    })
                }), i.$container.addClass("fancybox-is-sliding"))
            }))
        }, n.prototype.onPan = function() {
            var t, e, n, i = this;
            i.canTap = !1, t = i.contentStartPos.width > i.canvasWidth ? i.contentStartPos.left + i.distanceX : i.contentStartPos.left, e = i.contentStartPos.top + i.distanceY, (n = i.limitMovement(t, e, i.contentStartPos.width, i.contentStartPos.height)).scaleX = i.contentStartPos.scaleX, n.scaleY = i.contentStartPos.scaleY, i.contentLastPos = n, i.requestId && (v(i.requestId), i.requestId = null), i.requestId = m(function() {
                g.fancybox.setTranslate(i.$content, i.contentLastPos)
            })
        }, n.prototype.limitMovement = function(t, e, n, i) {
            var s, o, r, a, l = this,
                c = l.canvasWidth,
                u = l.canvasHeight,
                h = l.contentStartPos.left,
                d = l.contentStartPos.top,
                p = l.distanceX,
                f = l.distanceY;
            return s = Math.max(0, .5 * c - .5 * n), o = Math.max(0, .5 * u - .5 * i), r = Math.min(c - n, .5 * c - .5 * n), a = Math.min(u - i, .5 * u - .5 * i), c < n && (0 < p && s < t && (t = s - 1 + Math.pow(-s + h + p, .8) || 0), p < 0 && t < r && (t = r + 1 - Math.pow(r - h - p, .8) || 0)), u < i && (0 < f && o < e && (e = o - 1 + Math.pow(-o + d + f, .8) || 0), f < 0 && e < a && (e = a + 1 - Math.pow(a - d - f, .8) || 0)), {
                top: e,
                left: t
            }
        }, n.prototype.limitPosition = function(t, e, n, i) {
            var s = this.canvasWidth,
                o = this.canvasHeight;
            return s < n ? t = (t = 0 < t ? 0 : t) < s - n ? s - n : t : t = Math.max(0, s / 2 - n / 2), o < i ? e = (e = 0 < e ? 0 : e) < o - i ? o - i : e : e = Math.max(0, o / 2 - i / 2), {
                top: e,
                left: t
            }
        }, n.prototype.onZoom = function() {
            var t = this,
                e = t.contentStartPos.width,
                n = t.contentStartPos.height,
                i = t.contentStartPos.left,
                s = t.contentStartPos.top,
                o = y(t.newPoints[0], t.newPoints[1]) / t.startDistanceBetweenFingers,
                r = Math.floor(e * o),
                a = Math.floor(n * o),
                l = (e - r) * t.percentageOfImageAtPinchPointX,
                c = (n - a) * t.percentageOfImageAtPinchPointY,
                u = (t.newPoints[0].x + t.newPoints[1].x) / 2 - g(f).scrollLeft(),
                h = (t.newPoints[0].y + t.newPoints[1].y) / 2 - g(f).scrollTop(),
                d = u - t.centerPointStartX,
                p = {
                    top: s + (c + (h - t.centerPointStartY)),
                    left: i + (l + d),
                    scaleX: t.contentStartPos.scaleX * o,
                    scaleY: t.contentStartPos.scaleY * o
                };
            t.canTap = !1, t.newWidth = r, t.newHeight = a, t.contentLastPos = p, t.requestId && (v(t.requestId), t.requestId = null), t.requestId = m(function() {
                g.fancybox.setTranslate(t.$content, t.contentLastPos)
            })
        }, n.prototype.ontouchend = function(t) {
            var e = this,
                n = Math.max((new Date).getTime() - e.startTime, 1),
                i = e.isSwiping,
                s = e.isPanning,
                o = e.isZooming;
            return e.endPoints = u(t), e.$container.removeClass("fancybox-controls--isGrabbing"), g(a).off(".fb.touch"), e.requestId && (v(e.requestId), e.requestId = null), e.isSwiping = !1, e.isPanning = !1, e.isZooming = !1, e.canTap ? e.onTap(t) : (e.speed = 366, e.velocityX = e.distanceX / n * .5, e.velocityY = e.distanceY / n * .5, e.speedX = Math.max(.5 * e.speed, Math.min(1.5 * e.speed, 1 / Math.abs(e.velocityX) * e.speed)), void(s ? e.endPanning() : o ? e.endZooming() : e.endSwiping(i)))
        }, n.prototype.endSwiping = function(t) {
            var e = this,
                n = !1;
            e.instance.isSliding = !1, e.sliderLastPos = null, "y" == t && 50 < Math.abs(e.distanceY) ? (g.fancybox.animate(e.instance.current.$slide, {
                top: e.sliderStartPos.top + e.distanceY + 150 * e.velocityY,
                opacity: 0
            }, 150), n = e.instance.close(!0, 300)) : "x" == t && 50 < e.distanceX && 1 < e.instance.group.length ? n = e.instance.previous(e.speedX) : "x" == t && e.distanceX < -50 && 1 < e.instance.group.length && (n = e.instance.next(e.speedX)), !1 !== n || "x" != t && "y" != t || e.instance.jumpTo(e.instance.current.index, 150), e.$container.removeClass("fancybox-is-sliding")
        }, n.prototype.endPanning = function() {
            var t, e, n, i = this;
            i.contentLastPos && (!1 === i.instance.current.opts.touch.momentum ? (t = i.contentLastPos.left, e = i.contentLastPos.top) : (t = i.contentLastPos.left + i.velocityX * i.speed, e = i.contentLastPos.top + i.velocityY * i.speed), (n = i.limitPosition(t, e, i.contentStartPos.width, i.contentStartPos.height)).width = i.contentStartPos.width, n.height = i.contentStartPos.height, g.fancybox.animate(i.$content, n, 330))
        }, n.prototype.endZooming = function() {
            var t, e, n, i, s = this,
                o = s.instance.current,
                r = s.newWidth,
                a = s.newHeight;
            s.contentLastPos && (t = s.contentLastPos.left, i = {
                top: e = s.contentLastPos.top,
                left: t,
                width: r,
                height: a,
                scaleX: 1,
                scaleY: 1
            }, g.fancybox.setTranslate(s.$content, i), r < s.canvasWidth && a < s.canvasHeight ? s.instance.scaleToFit(150) : r > o.width || a > o.height ? s.instance.scaleToActual(s.centerPointStartX, s.centerPointStartY, 150) : (n = s.limitPosition(t, e, r, a), g.fancybox.setTranslate(s.content, g.fancybox.getTranslate(s.$content)), g.fancybox.animate(s.$content, n, 150)))
        }, n.prototype.onTap = function(n) {
            var t, i = this,
                e = g(n.target),
                s = i.instance,
                o = s.current,
                r = n && u(n) || i.startPoints,
                a = r[0] ? r[0].x - i.$stage.offset().left : 0,
                l = r[0] ? r[0].y - i.$stage.offset().top : 0,
                c = function(t) {
                    var e = o.opts[t];
                    if (g.isFunction(e) && (e = e.apply(s, [o, n])), e) switch (e) {
                        case "close":
                            s.close(i.startEvent);
                            break;
                        case "toggleControls":
                            s.toggleControls(!0);
                            break;
                        case "next":
                            s.next();
                            break;
                        case "nextOrClose":
                            1 < s.group.length ? s.next() : s.close(i.startEvent);
                            break;
                        case "zoom":
                            "image" == o.type && (o.isLoaded || o.$ghost) && (s.canPan() ? s.scaleToFit() : s.isScaledDown() ? s.scaleToActual(a, l) : s.group.length < 2 && s.close(i.startEvent))
                    }
                };
            if (!(n.originalEvent && 2 == n.originalEvent.button || s.isSliding || a > e[0].clientWidth + e.offset().left)) {
                if (e.is(".fancybox-bg,.fancybox-inner,.fancybox-outer,.fancybox-container")) t = "Outside";
                else if (e.is(".fancybox-slide")) t = "Slide";
                else {
                    if (!s.current.$content || !s.current.$content.has(n.target).length) return;
                    t = "Content"
                }
                if (i.tapped) {
                    if (clearTimeout(i.tapped), i.tapped = null, 50 < Math.abs(a - i.tapX) || 50 < Math.abs(l - i.tapY) || s.isSliding) return this;
                    c("dblclick" + t)
                } else i.tapX = a, i.tapY = l, o.opts["dblclick" + t] && o.opts["dblclick" + t] !== o.opts["click" + t] ? i.tapped = setTimeout(function() {
                    i.tapped = null, c("click" + t)
                }, 300) : c("click" + t);
                return this
            }
        }, g(a).on("onActivate.fb", function(t, e) {
            e && !e.Guestures && (e.Guestures = new n(e))
        }), g(a).on("beforeClose.fb", function(t, e) {
            e && e.Guestures && e.Guestures.destroy()
        })
    }(window, document, window.jQuery),
    function(r, a) {
        "use strict";
        var n = function(t) {
            this.instance = t, this.init()
        };
        a.extend(n.prototype, {
            timer: null,
            isActive: !1,
            $button: null,
            speed: 3e3,
            init: function() {
                var t = this;
                t.$button = t.instance.$refs.toolbar.find("[data-fancybox-play]").on("click", function() {
                    t.toggle()
                }), (t.instance.group.length < 2 || !t.instance.group[t.instance.currIndex].opts.slideShow) && t.$button.hide()
            },
            set: function() {
                var t = this;
                t.instance && t.instance.current && (t.instance.current.opts.loop || t.instance.currIndex < t.instance.group.length - 1) ? t.timer = setTimeout(function() {
                    t.instance.next()
                }, t.instance.current.opts.slideShow.speed || t.speed) : (t.stop(), t.instance.idleSecondsCounter = 0, t.instance.showControls())
            },
            clear: function() {
                clearTimeout(this.timer), this.timer = null
            },
            start: function() {
                var t = this,
                    e = t.instance.current;
                t.instance && e && (e.opts.loop || e.index < t.instance.group.length - 1) && (t.isActive = !0, t.$button.attr("title", e.opts.i18n[e.opts.lang].PLAY_STOP).addClass("fancybox-button--pause"), e.isComplete && t.set())
            },
            stop: function() {
                var t = this.instance.current;
                this.clear(), this.$button.attr("title", t.opts.i18n[t.opts.lang].PLAY_START).removeClass("fancybox-button--pause"), this.isActive = !1
            },
            toggle: function() {
                this.isActive ? this.stop() : this.start()
            }
        }), a(r).on({
            "onInit.fb": function(t, e) {
                e && !e.SlideShow && (e.SlideShow = new n(e))
            },
            "beforeShow.fb": function(t, e, n, i) {
                var s = e && e.SlideShow;
                i ? s && n.opts.slideShow.autoStart && s.start() : s && s.isActive && s.clear()
            },
            "afterShow.fb": function(t, e, n) {
                var i = e && e.SlideShow;
                i && i.isActive && i.set()
            },
            "afterKeydown.fb": function(t, e, n, i, s) {
                var o = e && e.SlideShow;
                !o || !n.opts.slideShow || 80 !== s && 32 !== s || a(r.activeElement).is("button,a,input") || (i.preventDefault(), o.toggle())
            },
            "beforeClose.fb onDeactivate.fb": function(t, e) {
                var n = e && e.SlideShow;
                n && n.stop()
            }
        }), a(r).on("visibilitychange", function() {
            var t = a.fancybox.getInstance(),
                e = t && t.SlideShow;
            e && e.isActive && (r.hidden ? e.clear() : e.set())
        })
    }(document, window.jQuery),
    function(o, e) {
        "use strict";
        var n = function() {
            var t, e, n, i = [
                    ["requestFullscreen", "exitFullscreen", "fullscreenElement", "fullscreenEnabled", "fullscreenchange", "fullscreenerror"],
                    ["webkitRequestFullscreen", "webkitExitFullscreen", "webkitFullscreenElement", "webkitFullscreenEnabled", "webkitfullscreenchange", "webkitfullscreenerror"],
                    ["webkitRequestFullScreen", "webkitCancelFullScreen", "webkitCurrentFullScreenElement", "webkitCancelFullScreen", "webkitfullscreenchange", "webkitfullscreenerror"],
                    ["mozRequestFullScreen", "mozCancelFullScreen", "mozFullScreenElement", "mozFullScreenEnabled", "mozfullscreenchange", "mozfullscreenerror"],
                    ["msRequestFullscreen", "msExitFullscreen", "msFullscreenElement", "msFullscreenEnabled", "MSFullscreenChange", "MSFullscreenError"]
                ],
                s = {};
            for (e = 0; e < i.length; e++)
                if ((t = i[e]) && t[1] in o) {
                    for (n = 0; n < t.length; n++) s[i[0][n]] = t[n];
                    return s
                } return !1
        }();
        if (n) {
            var s = {
                request: function(t) {
                    (t = t || o.documentElement)[n.requestFullscreen](t.ALLOW_KEYBOARD_INPUT)
                },
                exit: function() {
                    o[n.exitFullscreen]()
                },
                toggle: function(t) {
                    t = t || o.documentElement, this.isFullscreen() ? this.exit() : this.request(t)
                },
                isFullscreen: function() {
                    return Boolean(o[n.fullscreenElement])
                },
                enabled: function() {
                    return Boolean(o[n.fullscreenEnabled])
                }
            };
            e(o).on({
                "onInit.fb": function(t, e) {
                    var n, i = e.$refs.toolbar.find("[data-fancybox-fullscreen]");
                    e && !e.FullScreen && e.group[e.currIndex].opts.fullScreen ? ((n = e.$refs.container).on("click.fb-fullscreen", "[data-fancybox-fullscreen]", function(t) {
                        t.stopPropagation(), t.preventDefault(), s.toggle(n[0])
                    }), e.opts.fullScreen && !0 === e.opts.fullScreen.autoStart && s.request(n[0]), e.FullScreen = s) : i.hide()
                },
                "afterKeydown.fb": function(t, e, n, i, s) {
                    e && e.FullScreen && 70 === s && (i.preventDefault(), e.FullScreen.toggle(e.$refs.container[0]))
                },
                "beforeClose.fb": function(t) {
                    t && t.FullScreen && s.exit()
                }
            }), e(o).on(n.fullscreenchange, function() {
                var t = e.fancybox.getInstance();
                t.current && "image" === t.current.type && t.isAnimating && (t.current.$content.css("transition", "none"), t.isAnimating = !1, t.update(!0, !0, 0))
            })
        } else e.fancybox.defaults.btnTpl.fullScreen = !1
    }(document, window.jQuery),
    function(t, a) {
        "use strict";
        var n = function(t) {
            this.instance = t, this.init()
        };
        a.extend(n.prototype, {
            $button: null,
            $grid: null,
            $list: null,
            isVisible: !1,
            init: function() {
                var t = this,
                    e = t.instance.group[0],
                    n = t.instance.group[1];
                t.$button = t.instance.$refs.toolbar.find("[data-fancybox-thumbs]"), 1 < t.instance.group.length && t.instance.group[t.instance.currIndex].opts.thumbs && ("image" == e.type || e.opts.thumb || e.opts.$thumb) && ("image" == n.type || n.opts.thumb || n.opts.$thumb) ? (t.$button.on("click", function() {
                    t.toggle()
                }), t.isActive = !0) : (t.$button.hide(), t.isActive = !1)
            },
            create: function() {
                var n, i, t = this.instance;
                this.$grid = a('<div class="fancybox-thumbs"></div>').appendTo(t.$refs.container), n = "<ul>", a.each(t.group, function(t, e) {
                    (i = e.opts.thumb || (e.opts.$thumb ? e.opts.$thumb.attr("src") : null)) || "image" !== e.type || (i = e.src), i && i.length && (n += '<li data-index="' + t + '"  tabindex="0" class="fancybox-thumbs-loading"><img data-src="' + i + '" /></li>')
                }), n += "</ul>", this.$list = a(n).appendTo(this.$grid).on("click", "li", function() {
                    t.jumpTo(a(this).data("index"))
                }), this.$list.find("img").hide().one("load", function() {
                    var t, e, n, i, s = a(this).parent().removeClass("fancybox-thumbs-loading"),
                        o = s.outerWidth(),
                        r = s.outerHeight();
                    t = this.naturalWidth || this.width, i = (e = this.naturalHeight || this.height) / r, 1 <= (n = t / o) && 1 <= i && (i < n ? (t /= i, e = r) : (t = o, e /= n)), a(this).css({
                        width: Math.floor(t),
                        height: Math.floor(e),
                        "margin-top": Math.min(0, Math.floor(.3 * r - .3 * e)),
                        "margin-left": Math.min(0, Math.floor(.5 * o - .5 * t))
                    }).show()
                }).each(function() {
                    this.src = a(this).data("src")
                })
            },
            focus: function() {
                this.instance.current && this.$list.children().removeClass("fancybox-thumbs-active").filter('[data-index="' + this.instance.current.index + '"]').addClass("fancybox-thumbs-active").focus()
            },
            close: function() {
                this.$grid.hide()
            },
            update: function() {
                this.instance.$refs.container.toggleClass("fancybox-show-thumbs", this.isVisible), this.isVisible ? (this.$grid || this.create(), this.instance.trigger("onThumbsShow"), this.focus()) : this.$grid && this.instance.trigger("onThumbsHide"), this.instance.update()
            },
            hide: function() {
                this.isVisible = !1, this.update()
            },
            show: function() {
                this.isVisible = !0, this.update()
            },
            toggle: function() {
                this.isVisible = !this.isVisible, this.update()
            }
        }), a(t).on({
            "onInit.fb": function(t, e) {
                e && !e.Thumbs && (e.Thumbs = new n(e))
            },
            "beforeShow.fb": function(t, e, n, i) {
                var s = e && e.Thumbs;
                if (s && s.isActive) {
                    if (n.modal) return s.$button.hide(), void s.hide();
                    i && !0 === e.opts.thumbs.autoStart && s.show(), s.isVisible && s.focus()
                }
            },
            "afterKeydown.fb": function(t, e, n, i, s) {
                var o = e && e.Thumbs;
                o && o.isActive && 71 === s && (i.preventDefault(), o.toggle())
            },
            "beforeClose.fb": function(t, e) {
                var n = e && e.Thumbs;
                n && n.isVisible && !1 !== e.opts.thumbs.hideOnClose && n.close()
            }
        })
    }(document, window.jQuery),
    function(o, r, a) {
        "use strict";

        function s() {
            var t = r.location.hash.substr(1),
                e = t.split("-"),
                n = 1 < e.length && /^\+?\d+$/.test(e[e.length - 1]) && parseInt(e.pop(-1), 10) || 1;
            return n < 1 && (n = 1), {
                hash: t,
                index: n,
                gallery: e.join("-")
            }
        }

        function e(t) {
            var e;
            "" !== t.gallery && ((e = a("[data-fancybox='" + a.escapeSelector(t.gallery) + "']").eq(t.index - 1)).length ? e.trigger("click") : a("#" + a.escapeSelector(t.gallery)).trigger("click"))
        }

        function l(t) {
            var e;
            return !!t && ((e = t.current ? t.current.opts : t.opts).$orig ? e.$orig.data("fancybox") : e.hash || "")
        }
        a.escapeSelector || (a.escapeSelector = function(t) {
            return (t + "").replace(/([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g, function(t, e) {
                return e ? "\0" === t ? "ï¿½" : t.slice(0, -1) + "\\" + t.charCodeAt(t.length - 1).toString(16) + " " : "\\" + t
            })
        });
        var c = null,
            u = null;
        a(function() {
            setTimeout(function() {
                !1 !== a.fancybox.defaults.hash && (a(o).on({
                    "onInit.fb": function(t, e) {
                        var n, i;
                        !1 !== e.group[e.currIndex].opts.hash && (n = s(), (i = l(e)) && n.gallery && i == n.gallery && (e.currIndex = n.index - 1))
                    },
                    "beforeShow.fb": function(t, e, n, i) {
                        var s;
                        !1 !== n.opts.hash && ((s = l(e)) && "" !== s && (r.location.hash.indexOf(s) < 0 && (e.opts.origHash = r.location.hash), c = s + (1 < e.group.length ? "-" + (n.index + 1) : ""), "replaceState" in r.history ? (u && clearTimeout(u), u = setTimeout(function() {
                            r.history[i ? "pushState" : "replaceState"]({}, o.title, r.location.pathname + r.location.search + "#" + c), u = null
                        }, 300)) : r.location.hash = c))
                    },
                    "beforeClose.fb": function(t, e, n) {
                        var i, s;
                        u && clearTimeout(u), !1 !== n.opts.hash && (i = l(e), s = e && e.opts.origHash ? e.opts.origHash : "", i && "" !== i && ("replaceState" in history ? r.history.replaceState({}, o.title, r.location.pathname + r.location.search + s) : (r.location.hash = s, a(r).scrollTop(e.scrollTop).scrollLeft(e.scrollLeft))), c = null)
                    }
                }), a(r).on("hashchange.fb", function() {
                    var t = s();
                    a.fancybox.getInstance() ? !c || c === t.gallery + "-" + t.index || 1 === t.index && c == t.gallery || (c = null, a.fancybox.close()) : "" !== t.gallery && e(t)
                }), a(r).one("unload.fb popstate.fb", function() {
                    a.fancybox.getInstance("close", !0, 0)
                }), e(s()))
            }, 50)
        })
    }(document, window, window.jQuery),
    function(R, p) {
        "use strict";

        function r(b, x, w, t, e) {
            function n() {
                var s, o, r, a;
                y = 1 < R.devicePixelRatio, w = i(w), 0 <= x.delay && setTimeout(function() {
                    l(!0)
                }, x.delay), (x.delay < 0 || x.combined) && (t.e = (s = x.throttle, o = function(t) {
                    "resize" === t.type && ($ = k = -1), l(t.all)
                }, a = 0, function(t, e) {
                    function n() {
                        a = +new Date, o.call(b, t)
                    }
                    var i = +new Date - a;
                    r && clearTimeout(r), s < i || !x.enableThrottle || e ? n() : r = setTimeout(n, s - i)
                }), t.a = function(t) {
                    t = i(t), w.push.apply(w, t)
                }, t.g = function() {
                    return w = L(w).filter(function() {
                        return !L(this).data(x.loadedName)
                    })
                }, t.f = function(t) {
                    for (var e = 0; e < t.length; e++) {
                        var n = w.filter(function() {
                            return this === t[e]
                        });
                        n.length && l(!1, n)
                    }
                }, l(), L(x.appendScroll).on("scroll." + e + " resize." + e, t.e))
            }

            function i(t) {
                for (var e = x.defaultImage, n = x.placeholder, i = x.imageBase, s = x.srcsetAttribute, o = x.loaderAttribute, r = x._f || {}, a = 0, l = (t = L(t).filter(function() {
                        var t = L(this),
                            e = _(this);
                        return !t.data(x.handledName) && (t.attr(x.attribute) || t.attr(s) || t.attr(o) || r[e] !== p)
                    }).data("plugin_" + x.name, b)).length; a < l; a++) {
                    var c = L(t[a]),
                        u = _(t[a]),
                        h = c.attr(x.imageBaseAttribute) || i;
                    u === E && h && c.attr(s) && c.attr(s, d(c.attr(s), h)), r[u] === p || c.attr(o) || c.attr(o, r[u]), u === E && e && !c.attr(A) ? c.attr(A, e) : u === E || !n || c.css(q) && "none" !== c.css(q) || c.css(q, "url('" + n + "')")
                }
                return t
            }

            function l(t, e) {
                if (w.length) {
                    for (var n = e || w, i = !1, s = x.imageBase || "", o = x.srcsetAttribute, r = x.handledName, a = 0; a < n.length; a++)
                        if (t || e || (p = n[a], void 0, f = p.getBoundingClientRect(), g = x.scrollDirection, m = x.threshold, v = (0 <= k ? k : k = L(R).height()) + m > f.top && -m < f.bottom, y = (0 <= $ ? $ : $ = L(R).width()) + m > f.left && -m < f.right, "vertical" === g ? v : "horizontal" === g ? y : v && y)) {
                            var l = L(n[a]),
                                c = _(n[a]),
                                u = l.attr(x.attribute),
                                h = l.attr(x.imageBaseAttribute) || s,
                                d = l.attr(x.loaderAttribute);
                            l.data(r) || x.visibleOnly && !l.is(":visible") || !((u || l.attr(o)) && (c === E && (h + u !== l.attr(A) || l.attr(o) !== l.attr(P)) || c !== E && h + u !== l.css(q)) || d) || (i = !0, l.data(r, !0), C(l, c, h, d))
                        } var p, f, g, m, v, y;
                    i && (w = L(w).filter(function() {
                        return !L(this).data(r)
                    }))
                } else x.autoDestroy && b.destroy()
            }

            function C(e, t, n, i) {
                ++v;
                var s = function() {
                    m("onError", e), g(), s = L.noop
                };
                m("beforeLoad", e);
                var o = x.attribute,
                    r = x.srcsetAttribute,
                    a = x.sizesAttribute,
                    l = x.retinaAttribute,
                    c = x.removeAttribute,
                    u = x.loadedName,
                    h = e.attr(l);
                if (i) {
                    var d = function() {
                        c && e.removeAttr(x.loaderAttribute), e.data(u, !0), m(T, e), setTimeout(g, 1), d = L.noop
                    };
                    e.off(D).one(D, s).one(S, d), m(i, e, function(t) {
                        t ? (e.off(S), d()) : (e.off(D), s())
                    }) || e.trigger(D)
                } else {
                    var p = L(new Image);
                    p.one(D, s).one(S, function() {
                        e.hide(), t === E ? e.attr(M, p.attr(M)).attr(P, p.attr(P)).attr(A, p.attr(A)) : e.css(q, "url('" + p.attr(A) + "')"), e[x.effect](x.effectTime), c && (e.removeAttr(o + " " + r + " " + l + " " + x.imageBaseAttribute), a !== M && e.removeAttr(a)), e.data(u, !0), m(T, e), p.remove(), g()
                    });
                    var f = (y && h ? h : e.attr(o)) || "";
                    p.attr(M, e.attr(a)).attr(P, e.attr(r)).attr(A, f ? n + f : null), p.complete && p.trigger(S)
                }
            }

            function _(t) {
                return t.tagName.toLowerCase()
            }

            function d(t, e) {
                if (e) {
                    var n = t.split(",");
                    t = "";
                    for (var i = 0, s = n.length; i < s; i++) t += e + n[i].trim() + (i !== s - 1 ? "," : "")
                }
                return t
            }

            function g() {
                --v, w.length || v || m("onFinishedAll")
            }

            function m(t, e, n) {
                return !!(t = x[t]) && (t.apply(b, [].slice.call(arguments, 1)), !0)
            }
            var v = 0,
                $ = -1,
                k = -1,
                y = !1,
                T = "afterLoad",
                S = "load",
                D = "error",
                E = "img",
                A = "src",
                P = "srcset",
                M = "sizes",
                q = "background-image";
            "event" === x.bind || s ? n() : L(R).on(S + "." + e, n)
        }

        function c(t, e) {
            var n = this,
                i = L.extend({}, n.config, e),
                s = {},
                o = i.name + "-" + ++a;
            return n.config = function(t, e) {
                return e === p ? i[t] : (i[t] = e, n)
            }, n.addItems = function(t) {
                return s.a && s.a("string" === L.type(t) ? L(t) : t), n
            }, n.getItems = function() {
                return s.g ? s.g() : {}
            }, n.update = function(t) {
                return s.e && s.e({}, !t), n
            }, n.force = function(t) {
                return s.f && s.f("string" === L.type(t) ? L(t) : t), n
            }, n.loadAll = function() {
                return s.e && s.e({
                    all: !0
                }, !0), n
            }, n.destroy = function() {
                return L(i.appendScroll).off("." + o, s.e), L(R).off("." + o), s = {}, p
            }, r(n, i, t, s, o), i.chainable ? t : n
        }
        var L = R.jQuery || R.Zepto,
            a = 0,
            s = !1;
        L.fn.Lazy = L.fn.lazy = function(t) {
            return new c(this, t)
        }, L.Lazy = L.lazy = function(t, e, n) {
            if (L.isFunction(e) && (n = e, e = []), L.isFunction(n)) {
                t = L.isArray(t) ? t : [t], e = L.isArray(e) ? e : [e];
                for (var i = c.prototype.config, s = i._f || (i._f = {}), o = 0, r = t.length; o < r; o++)(i[t[o]] === p || L.isFunction(i[t[o]])) && (i[t[o]] = n);
                for (var a = 0, l = e.length; a < l; a++) s[e[a]] = t[0]
            }
        }, c.prototype.config = {
            name: "lazy",
            chainable: !0,
            autoDestroy: !0,
            bind: "load",
            threshold: 500,
            visibleOnly: !1,
            appendScroll: R,
            scrollDirection: "both",
            imageBase: null,
            defaultImage: "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==",
            placeholder: null,
            delay: -1,
            combined: !1,
            attribute: "data-src",
            srcsetAttribute: "data-srcset",
            sizesAttribute: "data-sizes",
            retinaAttribute: "data-retina",
            loaderAttribute: "data-loader",
            imageBaseAttribute: "data-imagebase",
            removeAttribute: !0,
            handledName: "handled",
            loadedName: "loaded",
            effect: "show",
            effectTime: 0,
            enableThrottle: !0,
            throttle: 250,
            beforeLoad: p,
            afterLoad: p,
            onError: p,
            onFinishedAll: p
        }, L(R).on("load", function() {
            s = !0
        })
    }(window),
    function(t) {
        if ("object" == typeof exports && "undefined" != typeof module) module.exports = t();
        else if ("function" == typeof define && define.amd) define([], t);
        else {
            ("undefined" != typeof window ? window : "undefined" != typeof global ? global : "undefined" != typeof self ? self : this).Clipboard = t()
        }
    }(function() {
        return function o(r, a, l) {
            function c(e, t) {
                if (!a[e]) {
                    if (!r[e]) {
                        var n = "function" == typeof require && require;
                        if (!t && n) return n(e, !0);
                        if (u) return u(e, !0);
                        var i = new Error("Cannot find module '" + e + "'");
                        throw i.code = "MODULE_NOT_FOUND", i
                    }
                    var s = a[e] = {
                        exports: {}
                    };
                    r[e][0].call(s.exports, function(t) {
                        return c(r[e][1][t] || t)
                    }, s, s.exports, o, r, a, l)
                }
                return a[e].exports
            }
            for (var u = "function" == typeof require && require, t = 0; t < l.length; t++) c(l[t]);
            return c
        }({
            1: [function(t, e, n) {
                var i = 9;
                if ("undefined" != typeof Element && !Element.prototype.matches) {
                    var s = Element.prototype;
                    s.matches = s.matchesSelector || s.mozMatchesSelector || s.msMatchesSelector || s.oMatchesSelector || s.webkitMatchesSelector
                }
                e.exports = function(t, e) {
                    for (; t && t.nodeType !== i;) {
                        if ("function" == typeof t.matches && t.matches(e)) return t;
                        t = t.parentNode
                    }
                }
            }, {}],
            2: [function(t, e, n) {
                var r = t("./closest");
                e.exports = function(t, e, n, i, s) {
                    var o = function(e, n, t, i) {
                        return function(t) {
                            t.delegateTarget = r(t.target, n), t.delegateTarget && i.call(e, t)
                        }
                    }.apply(this, arguments);
                    return t.addEventListener(n, o, s), {
                        destroy: function() {
                            t.removeEventListener(n, o, s)
                        }
                    }
                }
            }, {
                "./closest": 1
            }],
            3: [function(t, e, n) {
                n.node = function(t) {
                    return void 0 !== t && t instanceof HTMLElement && 1 === t.nodeType
                }, n.nodeList = function(t) {
                    var e = Object.prototype.toString.call(t);
                    return void 0 !== t && ("[object NodeList]" === e || "[object HTMLCollection]" === e) && "length" in t && (0 === t.length || n.node(t[0]))
                }, n.string = function(t) {
                    return "string" == typeof t || t instanceof String
                }, n.fn = function(t) {
                    return "[object Function]" === Object.prototype.toString.call(t)
                }
            }, {}],
            4: [function(t, e, n) {
                var d = t("./is"),
                    p = t("delegate");
                e.exports = function(t, e, n) {
                    if (!t && !e && !n) throw new Error("Missing required arguments");
                    if (!d.string(e)) throw new TypeError("Second argument must be a String");
                    if (!d.fn(n)) throw new TypeError("Third argument must be a Function");
                    if (d.node(t)) return s = e, o = n, (i = t).addEventListener(s, o), {
                        destroy: function() {
                            i.removeEventListener(s, o)
                        }
                    };
                    var i, s, o, r, a, l, c, u, h;
                    if (d.nodeList(t)) return r = t, a = e, l = n, Array.prototype.forEach.call(r, function(t) {
                        t.addEventListener(a, l)
                    }), {
                        destroy: function() {
                            Array.prototype.forEach.call(r, function(t) {
                                t.removeEventListener(a, l)
                            })
                        }
                    };
                    if (d.string(t)) return c = t, u = e, h = n, p(document.body, c, u, h);
                    throw new TypeError("First argument must be a String, HTMLElement, HTMLCollection, or NodeList")
                }
            }, {
                "./is": 3,
                delegate: 2
            }],
            5: [function(t, e, n) {
                e.exports = function(t) {
                    var e;
                    if ("SELECT" === t.nodeName) t.focus(), e = t.value;
                    else if ("INPUT" === t.nodeName || "TEXTAREA" === t.nodeName) {
                        var n = t.hasAttribute("readonly");
                        n || t.setAttribute("readonly", ""), t.select(), t.setSelectionRange(0, t.value.length), n || t.removeAttribute("readonly"), e = t.value
                    } else {
                        t.hasAttribute("contenteditable") && t.focus();
                        var i = window.getSelection(),
                            s = document.createRange();
                        s.selectNodeContents(t), i.removeAllRanges(), i.addRange(s), e = i.toString()
                    }
                    return e
                }
            }, {}],
            6: [function(t, e, n) {
                function i() {}
                i.prototype = {
                    on: function(t, e, n) {
                        var i = this.e || (this.e = {});
                        return (i[t] || (i[t] = [])).push({
                            fn: e,
                            ctx: n
                        }), this
                    },
                    once: function(t, e, n) {
                        function i() {
                            s.off(t, i), e.apply(n, arguments)
                        }
                        var s = this;
                        return i._ = e, this.on(t, i, n)
                    },
                    emit: function(t) {
                        for (var e = [].slice.call(arguments, 1), n = ((this.e || (this.e = {}))[t] || []).slice(), i = 0, s = n.length; i < s; i++) n[i].fn.apply(n[i].ctx, e);
                        return this
                    },
                    off: function(t, e) {
                        var n = this.e || (this.e = {}),
                            i = n[t],
                            s = [];
                        if (i && e)
                            for (var o = 0, r = i.length; o < r; o++) i[o].fn !== e && i[o].fn._ !== e && s.push(i[o]);
                        return s.length ? n[t] = s : delete n[t], this
                    }
                }, e.exports = i
            }, {}],
            7: [function(i, s, o) {
                ! function(t, e) {
                    if (void 0 !== o) e(s, i("select"));
                    else {
                        var n = {
                            exports: {}
                        };
                        e(n, t.select), t.clipboardAction = n.exports
                    }
                }(this, function(t, e) {
                    "use strict";
                    var n, i = (n = e) && n.__esModule ? n : {
                            default: n
                        },
                        s = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
                            return typeof t
                        } : function(t) {
                            return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
                        },
                        o = function() {
                            function i(t, e) {
                                for (var n = 0; n < e.length; n++) {
                                    var i = e[n];
                                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                                }
                            }
                            return function(t, e, n) {
                                return e && i(t.prototype, e), n && i(t, n), t
                            }
                        }(),
                        r = function() {
                            function e(t) {
                                (function(t, e) {
                                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                                })(this, e), this.resolveOptions(t), this.initSelection()
                            }
                            return o(e, [{
                                key: "resolveOptions",
                                value: function() {
                                    var t = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {};
                                    this.action = t.action, this.container = t.container, this.emitter = t.emitter, this.target = t.target, this.text = t.text, this.trigger = t.trigger, this.selectedText = ""
                                }
                            }, {
                                key: "initSelection",
                                value: function() {
                                    this.text ? this.selectFake() : this.target && this.selectTarget()
                                }
                            }, {
                                key: "selectFake",
                                value: function() {
                                    var t = this,
                                        e = "rtl" == document.documentElement.getAttribute("dir");
                                    this.removeFake(), this.fakeHandlerCallback = function() {
                                        return t.removeFake()
                                    }, this.fakeHandler = this.container.addEventListener("click", this.fakeHandlerCallback) || !0, this.fakeElem = document.createElement("textarea"), this.fakeElem.style.fontSize = "12pt", this.fakeElem.style.border = "0", this.fakeElem.style.padding = "0", this.fakeElem.style.margin = "0", this.fakeElem.style.position = "absolute", this.fakeElem.style[e ? "right" : "left"] = "-9999px";
                                    var n = window.pageYOffset || document.documentElement.scrollTop;
                                    this.fakeElem.style.top = n + "px", this.fakeElem.setAttribute("readonly", ""), this.fakeElem.value = this.text, this.container.appendChild(this.fakeElem), this.selectedText = (0, i.default)(this.fakeElem), this.copyText()
                                }
                            }, {
                                key: "removeFake",
                                value: function() {
                                    this.fakeHandler && (this.container.removeEventListener("click", this.fakeHandlerCallback), this.fakeHandler = null, this.fakeHandlerCallback = null), this.fakeElem && (this.container.removeChild(this.fakeElem), this.fakeElem = null)
                                }
                            }, {
                                key: "selectTarget",
                                value: function() {
                                    this.selectedText = (0, i.default)(this.target), this.copyText()
                                }
                            }, {
                                key: "copyText",
                                value: function() {
                                    var e = void 0;
                                    try {
                                        e = document.execCommand(this.action)
                                    } catch (t) {
                                        e = !1
                                    }
                                    this.handleResult(e)
                                }
                            }, {
                                key: "handleResult",
                                value: function(t) {
                                    this.emitter.emit(t ? "success" : "error", {
                                        action: this.action,
                                        text: this.selectedText,
                                        trigger: this.trigger,
                                        clearSelection: this.clearSelection.bind(this)
                                    })
                                }
                            }, {
                                key: "clearSelection",
                                value: function() {
                                    this.trigger && this.trigger.focus(), window.getSelection().removeAllRanges()
                                }
                            }, {
                                key: "destroy",
                                value: function() {
                                    this.removeFake()
                                }
                            }, {
                                key: "action",
                                set: function() {
                                    var t = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : "copy";
                                    if (this._action = t, "copy" !== this._action && "cut" !== this._action) throw new Error('Invalid "action" value, use either "copy" or "cut"')
                                },
                                get: function() {
                                    return this._action
                                }
                            }, {
                                key: "target",
                                set: function(t) {
                                    if (void 0 !== t) {
                                        if (!t || "object" !== (void 0 === t ? "undefined" : s(t)) || 1 !== t.nodeType) throw new Error('Invalid "target" value, use a valid Element');
                                        if ("copy" === this.action && t.hasAttribute("disabled")) throw new Error('Invalid "target" attribute. Please use "readonly" instead of "disabled" attribute');
                                        if ("cut" === this.action && (t.hasAttribute("readonly") || t.hasAttribute("disabled"))) throw new Error('Invalid "target" attribute. You can\'t cut text from elements with "readonly" or "disabled" attributes');
                                        this._target = t
                                    }
                                },
                                get: function() {
                                    return this._target
                                }
                            }]), e
                        }();
                    t.exports = r
                })
            }, {
                select: 5
            }],
            8: [function(i, s, o) {
                ! function(t, e) {
                    if (void 0 !== o) e(s, i("./clipboard-action"), i("tiny-emitter"), i("good-listener"));
                    else {
                        var n = {
                            exports: {}
                        };
                        e(n, t.clipboardAction, t.tinyEmitter, t.goodListener), t.clipboard = n.exports
                    }
                }(this, function(t, e, n, i) {
                    "use strict";

                    function s(t) {
                        return t && t.__esModule ? t : {
                            default: t
                        }
                    }

                    function o(t, e) {
                        var n = "data-clipboard-" + t;
                        if (e.hasAttribute(n)) return e.getAttribute(n)
                    }
                    var r = s(e),
                        a = s(n),
                        l = s(i),
                        c = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
                            return typeof t
                        } : function(t) {
                            return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t
                        },
                        u = function() {
                            function i(t, e) {
                                for (var n = 0; n < e.length; n++) {
                                    var i = e[n];
                                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                                }
                            }
                            return function(t, e, n) {
                                return e && i(t.prototype, e), n && i(t, n), t
                            }
                        }(),
                        h = function(t) {
                            function i(t, e) {
                                ! function(t, e) {
                                    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                                }(this, i);
                                var n = function(t, e) {
                                    if (!t) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                                    return !e || "object" != typeof e && "function" != typeof e ? t : e
                                }(this, (i.__proto__ || Object.getPrototypeOf(i)).call(this));
                                return n.resolveOptions(e), n.listenClick(t), n
                            }
                            return function(t, e) {
                                if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function, not " + typeof e);
                                t.prototype = Object.create(e && e.prototype, {
                                    constructor: {
                                        value: t,
                                        enumerable: !1,
                                        writable: !0,
                                        configurable: !0
                                    }
                                }), e && (Object.setPrototypeOf ? Object.setPrototypeOf(t, e) : t.__proto__ = e)
                            }(i, a.default), u(i, [{
                                key: "resolveOptions",
                                value: function() {
                                    var t = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {};
                                    this.action = "function" == typeof t.action ? t.action : this.defaultAction, this.target = "function" == typeof t.target ? t.target : this.defaultTarget, this.text = "function" == typeof t.text ? t.text : this.defaultText, this.container = "object" === c(t.container) ? t.container : document.body
                                }
                            }, {
                                key: "listenClick",
                                value: function(t) {
                                    var e = this;
                                    this.listener = (0, l.default)(t, "click", function(t) {
                                        return e.onClick(t)
                                    })
                                }
                            }, {
                                key: "onClick",
                                value: function(t) {
                                    var e = t.delegateTarget || t.currentTarget;
                                    this.clipboardAction && (this.clipboardAction = null), this.clipboardAction = new r.default({
                                        action: this.action(e),
                                        target: this.target(e),
                                        text: this.text(e),
                                        container: this.container,
                                        trigger: e,
                                        emitter: this
                                    })
                                }
                            }, {
                                key: "defaultAction",
                                value: function(t) {
                                    return o("action", t)
                                }
                            }, {
                                key: "defaultTarget",
                                value: function(t) {
                                    var e = o("target", t);
                                    if (e) return document.querySelector(e)
                                }
                            }, {
                                key: "defaultText",
                                value: function(t) {
                                    return o("text", t)
                                }
                            }, {
                                key: "destroy",
                                value: function() {
                                    this.listener.destroy(), this.clipboardAction && (this.clipboardAction.destroy(), this.clipboardAction = null)
                                }
                            }], [{
                                key: "isSupported",
                                value: function() {
                                    var t = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : ["copy", "cut"],
                                        e = "string" == typeof t ? [t] : t,
                                        n = !!document.queryCommandSupported;
                                    return e.forEach(function(t) {
                                        n = n && !!document.queryCommandSupported(t)
                                    }), n
                                }
                            }]), i
                        }();
                    t.exports = h
                })
            }, {
                "./clipboard-action": 7,
                "good-listener": 4,
                "tiny-emitter": 6
            }]
        }, {}, [8])(8)
    }),
    function(l, n, s, o) {
        function c(t, e) {
            this.settings = null, this.options = l.extend({}, c.Defaults, e), this.$element = l(t), this._handlers = {}, this._plugins = {}, this._supress = {}, this._current = null, this._speed = null, this._coordinates = [], this._breakpoint = null, this._width = null, this._items = [], this._clones = [], this._mergers = [], this._widths = [], this._invalidated = {}, this._pipe = [], this._drag = {
                time: null,
                target: null,
                pointer: null,
                stage: {
                    start: null,
                    current: null
                },
                direction: null
            }, this._states = {
                current: {},
                tags: {
                    initializing: ["busy"],
                    animating: ["busy"],
                    dragging: ["interacting"]
                }
            }, l.each(["onResize", "onThrottledResize"], l.proxy(function(t, e) {
                this._handlers[e] = l.proxy(this[e], this)
            }, this)), l.each(c.Plugins, l.proxy(function(t, e) {
                this._plugins[t.charAt(0).toLowerCase() + t.slice(1)] = new e(this)
            }, this)), l.each(c.Workers, l.proxy(function(t, e) {
                this._pipe.push({
                    filter: e.filter,
                    run: l.proxy(e.run, this)
                })
            }, this)), this.setup(), this.initialize()
        }
        c.Defaults = {
            items: 3,
            loop: !1,
            center: !1,
            rewind: !1,
            mouseDrag: !0,
            touchDrag: !0,
            pullDrag: !0,
            freeDrag: !1,
            margin: 0,
            stagePadding: 0,
            merge: !1,
            mergeFit: !0,
            autoWidth: !1,
            startPosition: 0,
            rtl: !1,
            smartSpeed: 250,
            fluidSpeed: !1,
            dragEndSpeed: !1,
            responsive: {},
            responsiveRefreshRate: 200,
            responsiveBaseElement: n,
            fallbackEasing: "swing",
            info: !1,
            nestedItemSelector: !1,
            itemElement: "div",
            stageElement: "div",
            refreshClass: "owl-refresh",
            loadedClass: "owl-loaded",
            loadingClass: "owl-loading",
            rtlClass: "owl-rtl",
            responsiveClass: "owl-responsive",
            dragClass: "owl-drag",
            itemClass: "owl-item",
            stageClass: "owl-stage",
            stageOuterClass: "owl-stage-outer",
            grabClass: "owl-grab"
        }, c.Width = {
            Default: "default",
            Inner: "inner",
            Outer: "outer"
        }, c.Type = {
            Event: "event",
            State: "state"
        }, c.Plugins = {}, c.Workers = [{
            filter: ["width", "settings"],
            run: function() {
                this._width = this.$element.width()
            }
        }, {
            filter: ["width", "items", "settings"],
            run: function(t) {
                t.current = this._items && this._items[this.relative(this._current)]
            }
        }, {
            filter: ["items", "settings"],
            run: function() {
                this.$stage.children(".cloned").remove()
            }
        }, {
            filter: ["width", "items", "settings"],
            run: function(t) {
                var e = this.settings.margin || "",
                    n = !this.settings.autoWidth,
                    i = this.settings.rtl,
                    s = {
                        width: "auto",
                        "margin-left": i ? e : "",
                        "margin-right": i ? "" : e
                    };
                !n && this.$stage.children().css(s), t.css = s
            }
        }, {
            filter: ["width", "items", "settings"],
            run: function(t) {
                var e = (this.width() / this.settings.items).toFixed(3) - this.settings.margin,
                    n = null,
                    i = this._items.length,
                    s = !this.settings.autoWidth,
                    o = [];
                for (t.items = {
                        merge: !1,
                        width: e
                    }; i--;) n = this._mergers[i], n = this.settings.mergeFit && Math.min(n, this.settings.items) || n, t.items.merge = 1 < n || t.items.merge, o[i] = s ? e * n : this._items[i].width();
                this._widths = o
            }
        }, {
            filter: ["items", "settings"],
            run: function() {
                var t = [],
                    e = this._items,
                    n = this.settings,
                    i = Math.max(2 * n.items, 4),
                    s = 2 * Math.ceil(e.length / 2),
                    o = n.loop && e.length ? n.rewind ? i : Math.max(i, s) : 0,
                    r = "",
                    a = "";
                for (o /= 2; o--;) t.push(this.normalize(t.length / 2, !0)), r += e[t[t.length - 1]][0].outerHTML, t.push(this.normalize(e.length - 1 - (t.length - 1) / 2, !0)), a = e[t[t.length - 1]][0].outerHTML + a;
                this._clones = t, l(r).addClass("cloned").appendTo(this.$stage), l(a).addClass("cloned").prependTo(this.$stage)
            }
        }, {
            filter: ["width", "items", "settings"],
            run: function() {
                for (var t = this.settings.rtl ? 1 : -1, e = this._clones.length + this._items.length, n = -1, i = 0, s = 0, o = []; ++n < e;) i = o[n - 1] || 0, s = this._widths[this.relative(n)] + this.settings.margin, o.push(i + s * t);
                this._coordinates = o
            }
        }, {
            filter: ["width", "items", "settings"],
            run: function() {
                var t = this.settings.stagePadding,
                    e = this._coordinates,
                    n = {
                        width: Math.ceil(Math.abs(e[e.length - 1])) + 2 * t,
                        "padding-left": t || "",
                        "padding-right": t || ""
                    };
                this.$stage.css(n)
            }
        }, {
            filter: ["width", "items", "settings"],
            run: function(t) {
                var e = this._coordinates.length,
                    n = !this.settings.autoWidth,
                    i = this.$stage.children();
                if (n && t.items.merge)
                    for (; e--;) t.css.width = this._widths[this.relative(e)], i.eq(e).css(t.css);
                else n && (t.css.width = t.items.width, i.css(t.css))
            }
        }, {
            filter: ["items"],
            run: function() {
                this._coordinates.length < 1 && this.$stage.removeAttr("style")
            }
        }, {
            filter: ["width", "items", "settings"],
            run: function(t) {
                t.current = t.current ? this.$stage.children().index(t.current) : 0, t.current = Math.max(this.minimum(), Math.min(this.maximum(), t.current)), this.reset(t.current)
            }
        }, {
            filter: ["position"],
            run: function() {
                this.animate(this.coordinates(this._current))
            }
        }, {
            filter: ["width", "position", "items", "settings"],
            run: function() {
                var t, e, n, i, s = this.settings.rtl ? 1 : -1,
                    o = 2 * this.settings.stagePadding,
                    r = this.coordinates(this.current()) + o,
                    a = r + this.width() * s,
                    l = [];
                for (n = 0, i = this._coordinates.length; n < i; n++) t = this._coordinates[n - 1] || 0, e = Math.abs(this._coordinates[n]) + o * s, (this.op(t, "<=", r) && this.op(t, ">", a) || this.op(e, "<", r) && this.op(e, ">", a)) && l.push(n);
                this.$stage.children(".active").removeClass("active"), this.$stage.children(":eq(" + l.join("), :eq(") + ")").addClass("active"), this.settings.center && (this.$stage.children(".center").removeClass("center"), this.$stage.children().eq(this.current()).addClass("center"))
            }
        }], c.prototype.initialize = function() {
            var t, e, n;
            (this.enter("initializing"), this.trigger("initialize"), this.$element.toggleClass(this.settings.rtlClass, this.settings.rtl), this.settings.autoWidth && !this.is("pre-loading")) && (t = this.$element.find("img"), e = this.settings.nestedItemSelector ? "." + this.settings.nestedItemSelector : o, n = this.$element.children(e).width(), t.length && n <= 0 && this.preloadAutoWidthImages(t));
            this.$element.addClass(this.options.loadingClass), this.$stage = l("<" + this.settings.stageElement + ' class="' + this.settings.stageClass + '"/>').wrap('<div class="' + this.settings.stageOuterClass + '"/>'), this.$element.append(this.$stage.parent()), this.replace(this.$element.children().not(this.$stage.parent())), this.$element.is(":visible") ? this.refresh() : this.invalidate("width"), this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass), this.registerEventHandlers(), this.leave("initializing"), this.trigger("initialized")
        }, c.prototype.setup = function() {
            var e = this.viewport(),
                t = this.options.responsive,
                n = -1,
                i = null;
            t ? (l.each(t, function(t) {
                t <= e && n < t && (n = Number(t))
            }), "function" == typeof(i = l.extend({}, this.options, t[n])).stagePadding && (i.stagePadding = i.stagePadding()), delete i.responsive, i.responsiveClass && this.$element.attr("class", this.$element.attr("class").replace(new RegExp("(" + this.options.responsiveClass + "-)\\S+\\s", "g"), "$1" + n))) : i = l.extend({}, this.options), this.trigger("change", {
                property: {
                    name: "settings",
                    value: i
                }
            }), this._breakpoint = n, this.settings = i, this.invalidate("settings"), this.trigger("changed", {
                property: {
                    name: "settings",
                    value: this.settings
                }
            })
        }, c.prototype.optionsLogic = function() {
            this.settings.autoWidth && (this.settings.stagePadding = !1, this.settings.merge = !1)
        }, c.prototype.prepare = function(t) {
            var e = this.trigger("prepare", {
                content: t
            });
            return e.data || (e.data = l("<" + this.settings.itemElement + "/>").addClass(this.options.itemClass).append(t)), this.trigger("prepared", {
                content: e.data
            }), e.data
        }, c.prototype.update = function() {
            for (var t = 0, e = this._pipe.length, n = l.proxy(function(t) {
                    return this[t]
                }, this._invalidated), i = {}; t < e;)(this._invalidated.all || 0 < l.grep(this._pipe[t].filter, n).length) && this._pipe[t].run(i), t++;
            this._invalidated = {}, !this.is("valid") && this.enter("valid")
        }, c.prototype.width = function(t) {
            switch (t = t || c.Width.Default) {
                case c.Width.Inner:
                case c.Width.Outer:
                    return this._width;
                default:
                    return this._width - 2 * this.settings.stagePadding + this.settings.margin
            }
        }, c.prototype.refresh = function() {
            this.enter("refreshing"), this.trigger("refresh"), this.setup(), this.optionsLogic(), this.$element.addClass(this.options.refreshClass), this.update(), this.$element.removeClass(this.options.refreshClass), this.leave("refreshing"), this.trigger("refreshed")
        }, c.prototype.onThrottledResize = function() {
            n.clearTimeout(this.resizeTimer), this.resizeTimer = n.setTimeout(this._handlers.onResize, this.settings.responsiveRefreshRate)
        }, c.prototype.onResize = function() {
            return !!this._items.length && this._width !== this.$element.width() && !!this.$element.is(":visible") && (this.enter("resizing"), this.trigger("resize").isDefaultPrevented() ? (this.leave("resizing"), !1) : (this.invalidate("width"), this.refresh(), this.leave("resizing"), void this.trigger("resized")))
        }, c.prototype.registerEventHandlers = function() {
            l.support.transition && this.$stage.on(l.support.transition.end + ".owl.core", l.proxy(this.onTransitionEnd, this)), !1 !== this.settings.responsive && this.on(n, "resize", this._handlers.onThrottledResize), this.settings.mouseDrag && (this.$element.addClass(this.options.dragClass), this.$stage.on("mousedown.owl.core", l.proxy(this.onDragStart, this)), this.$stage.on("dragstart.owl.core selectstart.owl.core", function() {
                return !1
            })), this.settings.touchDrag && (this.$stage.on("touchstart.owl.core", l.proxy(this.onDragStart, this)), this.$stage.on("touchcancel.owl.core", l.proxy(this.onDragEnd, this)))
        }, c.prototype.onDragStart = function(t) {
            var e = null;
            3 !== t.which && (l.support.transform ? e = {
                x: (e = this.$stage.css("transform").replace(/.*\(|\)| /g, "").split(","))[16 === e.length ? 12 : 4],
                y: e[16 === e.length ? 13 : 5]
            } : (e = this.$stage.position(), e = {
                x: this.settings.rtl ? e.left + this.$stage.width() - this.width() + this.settings.margin : e.left,
                y: e.top
            }), this.is("animating") && (l.support.transform ? this.animate(e.x) : this.$stage.stop(), this.invalidate("position")), this.$element.toggleClass(this.options.grabClass, "mousedown" === t.type), this.speed(0), this._drag.time = (new Date).getTime(), this._drag.target = l(t.target), this._drag.stage.start = e, this._drag.stage.current = e, this._drag.pointer = this.pointer(t), l(s).on("mouseup.owl.core touchend.owl.core", l.proxy(this.onDragEnd, this)), l(s).one("mousemove.owl.core touchmove.owl.core", l.proxy(function(t) {
                var e = this.difference(this._drag.pointer, this.pointer(t));
                l(s).on("mousemove.owl.core touchmove.owl.core", l.proxy(this.onDragMove, this)), Math.abs(e.x) < Math.abs(e.y) && this.is("valid") || (t.preventDefault(), this.enter("dragging"), this.trigger("drag"))
            }, this)))
        }, c.prototype.onDragMove = function(t) {
            var e = null,
                n = null,
                i = null,
                s = this.difference(this._drag.pointer, this.pointer(t)),
                o = this.difference(this._drag.stage.start, s);
            this.is("dragging") && (t.preventDefault(), this.settings.loop ? (e = this.coordinates(this.minimum()), n = this.coordinates(this.maximum() + 1) - e, o.x = ((o.x - e) % n + n) % n + e) : (e = this.settings.rtl ? this.coordinates(this.maximum()) : this.coordinates(this.minimum()), n = this.settings.rtl ? this.coordinates(this.minimum()) : this.coordinates(this.maximum()), i = this.settings.pullDrag ? -1 * s.x / 5 : 0, o.x = Math.max(Math.min(o.x, e + i), n + i)), this._drag.stage.current = o, this.animate(o.x))
        }, c.prototype.onDragEnd = function(t) {
            var e = this.difference(this._drag.pointer, this.pointer(t)),
                n = this._drag.stage.current,
                i = 0 < e.x ^ this.settings.rtl ? "left" : "right";
            l(s).off(".owl.core"), this.$element.removeClass(this.options.grabClass), (0 !== e.x && this.is("dragging") || !this.is("valid")) && (this.speed(this.settings.dragEndSpeed || this.settings.smartSpeed), this.current(this.closest(n.x, 0 !== e.x ? i : this._drag.direction)), this.invalidate("position"), this.update(), this._drag.direction = i, (3 < Math.abs(e.x) || 300 < (new Date).getTime() - this._drag.time) && this._drag.target.one("click.owl.core", function() {
                return !1
            })), this.is("dragging") && (this.leave("dragging"), this.trigger("dragged"))
        }, c.prototype.closest = function(n, i) {
            var s = -1,
                o = this.width(),
                r = this.coordinates();
            return this.settings.freeDrag || l.each(r, l.proxy(function(t, e) {
                return "left" === i && e - 30 < n && n < e + 30 ? s = t : "right" === i && e - o - 30 < n && n < e - o + 30 ? s = t + 1 : this.op(n, "<", e) && this.op(n, ">", r[t + 1] || e - o) && (s = "left" === i ? t + 1 : t), -1 === s
            }, this)), this.settings.loop || (this.op(n, ">", r[this.minimum()]) ? s = n = this.minimum() : this.op(n, "<", r[this.maximum()]) && (s = n = this.maximum())), s
        }, c.prototype.animate = function(t) {
            var e = 0 < this.speed();
            this.is("animating") && this.onTransitionEnd(), e && (this.enter("animating"), this.trigger("translate")), l.support.transform3d && l.support.transition ? this.$stage.css({
                transform: "translate3d(" + t + "px,0px,0px)",
                transition: this.speed() / 1e3 + "s"
            }) : e ? this.$stage.animate({
                left: t + "px"
            }, this.speed(), this.settings.fallbackEasing, l.proxy(this.onTransitionEnd, this)) : this.$stage.css({
                left: t + "px"
            })
        }, c.prototype.is = function(t) {
            return this._states.current[t] && 0 < this._states.current[t]
        }, c.prototype.current = function(t) {
            if (t === o) return this._current;
            if (0 === this._items.length) return o;
            if (t = this.normalize(t), this._current !== t) {
                var e = this.trigger("change", {
                    property: {
                        name: "position",
                        value: t
                    }
                });
                e.data !== o && (t = this.normalize(e.data)), this._current = t, this.invalidate("position"), this.trigger("changed", {
                    property: {
                        name: "position",
                        value: this._current
                    }
                })
            }
            return this._current
        }, c.prototype.invalidate = function(t) {
            return "string" === l.type(t) && (this._invalidated[t] = !0, this.is("valid") && this.leave("valid")), l.map(this._invalidated, function(t, e) {
                return e
            })
        }, c.prototype.reset = function(t) {
            (t = this.normalize(t)) !== o && (this._speed = 0, this._current = t, this.suppress(["translate", "translated"]), this.animate(this.coordinates(t)), this.release(["translate", "translated"]))
        }, c.prototype.normalize = function(t, e) {
            var n = this._items.length,
                i = e ? 0 : this._clones.length;
            return !this.isNumeric(t) || n < 1 ? t = o : (t < 0 || n + i <= t) && (t = ((t - i / 2) % n + n) % n + i / 2), t
        }, c.prototype.relative = function(t) {
            return t -= this._clones.length / 2, this.normalize(t, !0)
        }, c.prototype.maximum = function(t) {
            var e, n, i, s = this.settings,
                o = this._coordinates.length;
            if (s.loop) o = this._clones.length / 2 + this._items.length - 1;
            else if (s.autoWidth || s.merge) {
                for (e = this._items.length, n = this._items[--e].width(), i = this.$element.width(); e-- && !(i < (n += this._items[e].width() + this.settings.margin)););
                o = e + 1
            } else o = s.center ? this._items.length - 1 : this._items.length - s.items;
            return t && (o -= this._clones.length / 2), Math.max(o, 0)
        }, c.prototype.minimum = function(t) {
            return t ? 0 : this._clones.length / 2
        }, c.prototype.items = function(t) {
            return t === o ? this._items.slice() : (t = this.normalize(t, !0), this._items[t])
        }, c.prototype.mergers = function(t) {
            return t === o ? this._mergers.slice() : (t = this.normalize(t, !0), this._mergers[t])
        }, c.prototype.clones = function(n) {
            var e = this._clones.length / 2,
                i = e + this._items.length,
                s = function(t) {
                    return t % 2 == 0 ? i + t / 2 : e - (t + 1) / 2
                };
            return n === o ? l.map(this._clones, function(t, e) {
                return s(e)
            }) : l.map(this._clones, function(t, e) {
                return t === n ? s(e) : null
            })
        }, c.prototype.speed = function(t) {
            return t !== o && (this._speed = t), this._speed
        }, c.prototype.coordinates = function(t) {
            var e, n = 1,
                i = t - 1;
            return t === o ? l.map(this._coordinates, l.proxy(function(t, e) {
                return this.coordinates(e)
            }, this)) : (this.settings.center ? (this.settings.rtl && (n = -1, i = t + 1), e = this._coordinates[t], e += (this.width() - e + (this._coordinates[i] || 0)) / 2 * n) : e = this._coordinates[i] || 0, e = Math.ceil(e))
        }, c.prototype.duration = function(t, e, n) {
            return 0 === n ? 0 : Math.min(Math.max(Math.abs(e - t), 1), 6) * Math.abs(n || this.settings.smartSpeed)
        }, c.prototype.to = function(t, e) {
            var n = this.current(),
                i = null,
                s = t - this.relative(n),
                o = (0 < s) - (s < 0),
                r = this._items.length,
                a = this.minimum(),
                l = this.maximum();
            this.settings.loop ? (!this.settings.rewind && Math.abs(s) > r / 2 && (s += -1 * o * r), (i = (((t = n + s) - a) % r + r) % r + a) !== t && i - s <= l && 0 < i - s && (n = i - s, t = i, this.reset(n))) : this.settings.rewind ? t = (t % (l += 1) + l) % l : t = Math.max(a, Math.min(l, t)), this.speed(this.duration(n, t, e)), this.current(t), this.$element.is(":visible") && this.update()
        }, c.prototype.next = function(t) {
            t = t || !1, this.to(this.relative(this.current()) + 1, t)
        }, c.prototype.prev = function(t) {
            t = t || !1, this.to(this.relative(this.current()) - 1, t)
        }, c.prototype.onTransitionEnd = function(t) {
            if (t !== o && (t.stopPropagation(), (t.target || t.srcElement || t.originalTarget) !== this.$stage.get(0))) return !1;
            this.leave("animating"), this.trigger("translated")
        }, c.prototype.viewport = function() {
            var t;
            return this.options.responsiveBaseElement !== n ? t = l(this.options.responsiveBaseElement).width() : n.innerWidth ? t = n.innerWidth : s.documentElement && s.documentElement.clientWidth && (t = s.documentElement.clientWidth), t
        }, c.prototype.replace = function(t) {
            this.$stage.empty(), this._items = [], t && (t = t instanceof jQuery ? t : l(t)), this.settings.nestedItemSelector && (t = t.find("." + this.settings.nestedItemSelector)), t.filter(function() {
                return 1 === this.nodeType
            }).each(l.proxy(function(t, e) {
                e = this.prepare(e), this.$stage.append(e), this._items.push(e), this._mergers.push(1 * e.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)
            }, this)), this.reset(this.isNumeric(this.settings.startPosition) ? this.settings.startPosition : 0), this.invalidate("items")
        }, c.prototype.add = function(t, e) {
            var n = this.relative(this._current);
            e = e === o ? this._items.length : this.normalize(e, !0), t = t instanceof jQuery ? t : l(t), this.trigger("add", {
                content: t,
                position: e
            }), t = this.prepare(t), 0 === this._items.length || e === this._items.length ? (0 === this._items.length && this.$stage.append(t), 0 !== this._items.length && this._items[e - 1].after(t), this._items.push(t), this._mergers.push(1 * t.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)) : (this._items[e].before(t), this._items.splice(e, 0, t), this._mergers.splice(e, 0, 1 * t.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1)), this._items[n] && this.reset(this._items[n].index()), this.invalidate("items"), this.trigger("added", {
                content: t,
                position: e
            })
        }, c.prototype.remove = function(t) {
            (t = this.normalize(t, !0)) !== o && (this.trigger("remove", {
                content: this._items[t],
                position: t
            }), this._items[t].remove(), this._items.splice(t, 1), this._mergers.splice(t, 1), this.invalidate("items"), this.trigger("removed", {
                content: null,
                position: t
            }))
        }, c.prototype.preloadAutoWidthImages = function(t) {
            t.each(l.proxy(function(t, e) {
                this.enter("pre-loading"), e = l(e), l(new Image).one("load", l.proxy(function(t) {
                    e.attr("src", t.target.src), e.css("opacity", 1), this.leave("pre-loading"), !this.is("pre-loading") && !this.is("initializing") && this.refresh()
                }, this)).attr("src", e.attr("src") || e.attr("data-src") || e.attr("data-src-retina"))
            }, this))
        }, c.prototype.destroy = function() {
            for (var t in this.$element.off(".owl.core"), this.$stage.off(".owl.core"), l(s).off(".owl.core"), !1 !== this.settings.responsive && (n.clearTimeout(this.resizeTimer), this.off(n, "resize", this._handlers.onThrottledResize)), this._plugins) this._plugins[t].destroy();
            this.$stage.children(".cloned").remove(), this.$stage.unwrap(), this.$stage.children().contents().unwrap(), this.$stage.children().unwrap(), this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr("class", this.$element.attr("class").replace(new RegExp(this.options.responsiveClass + "-\\S+\\s", "g"), "")).removeData("owl.carousel")
        }, c.prototype.op = function(t, e, n) {
            var i = this.settings.rtl;
            switch (e) {
                case "<":
                    return i ? n < t : t < n;
                case ">":
                    return i ? t < n : n < t;
                case ">=":
                    return i ? t <= n : n <= t;
                case "<=":
                    return i ? n <= t : t <= n
            }
        }, c.prototype.on = function(t, e, n, i) {
            t.addEventListener ? t.addEventListener(e, n, i) : t.attachEvent && t.attachEvent("on" + e, n)
        }, c.prototype.off = function(t, e, n, i) {
            t.removeEventListener ? t.removeEventListener(e, n, i) : t.detachEvent && t.detachEvent("on" + e, n)
        }, c.prototype.trigger = function(t, e, n, i, s) {
            var o = {
                    item: {
                        count: this._items.length,
                        index: this.current()
                    }
                },
                r = l.camelCase(l.grep(["on", t, n], function(t) {
                    return t
                }).join("-").toLowerCase()),
                a = l.Event([t, "owl", n || "carousel"].join(".").toLowerCase(), l.extend({
                    relatedTarget: this
                }, o, e));
            return this._supress[t] || (l.each(this._plugins, function(t, e) {
                e.onTrigger && e.onTrigger(a)
            }), this.register({
                type: c.Type.Event,
                name: t
            }), this.$element.trigger(a), this.settings && "function" == typeof this.settings[r] && this.settings[r].call(this, a)), a
        }, c.prototype.enter = function(t) {
            l.each([t].concat(this._states.tags[t] || []), l.proxy(function(t, e) {
                this._states.current[e] === o && (this._states.current[e] = 0), this._states.current[e]++
            }, this))
        }, c.prototype.leave = function(t) {
            l.each([t].concat(this._states.tags[t] || []), l.proxy(function(t, e) {
                this._states.current[e]--
            }, this))
        }, c.prototype.register = function(n) {
            if (n.type === c.Type.Event) {
                if (l.event.special[n.name] || (l.event.special[n.name] = {}), !l.event.special[n.name].owl) {
                    var e = l.event.special[n.name]._default;
                    l.event.special[n.name]._default = function(t) {
                        return !e || !e.apply || t.namespace && -1 !== t.namespace.indexOf("owl") ? t.namespace && -1 < t.namespace.indexOf("owl") : e.apply(this, arguments)
                    }, l.event.special[n.name].owl = !0
                }
            } else n.type === c.Type.State && (this._states.tags[n.name] ? this._states.tags[n.name] = this._states.tags[n.name].concat(n.tags) : this._states.tags[n.name] = n.tags, this._states.tags[n.name] = l.grep(this._states.tags[n.name], l.proxy(function(t, e) {
                return l.inArray(t, this._states.tags[n.name]) === e
            }, this)))
        }, c.prototype.suppress = function(t) {
            l.each(t, l.proxy(function(t, e) {
                this._supress[e] = !0
            }, this))
        }, c.prototype.release = function(t) {
            l.each(t, l.proxy(function(t, e) {
                delete this._supress[e]
            }, this))
        }, c.prototype.pointer = function(t) {
            var e = {
                x: null,
                y: null
            };
            return (t = (t = t.originalEvent || t || n.event).touches && t.touches.length ? t.touches[0] : t.changedTouches && t.changedTouches.length ? t.changedTouches[0] : t).pageX ? (e.x = t.pageX, e.y = t.pageY) : (e.x = t.clientX, e.y = t.clientY), e
        }, c.prototype.isNumeric = function(t) {
            return !isNaN(parseFloat(t))
        }, c.prototype.difference = function(t, e) {
            return {
                x: t.x - e.x,
                y: t.y - e.y
            }
        }, l.fn.owlCarousel = function(e) {
            var i = Array.prototype.slice.call(arguments, 1);
            return this.each(function() {
                var t = l(this),
                    n = t.data("owl.carousel");
                n || (n = new c(this, "object" == typeof e && e), t.data("owl.carousel", n), l.each(["next", "prev", "to", "destroy", "refresh", "replace", "add", "remove"], function(t, e) {
                    n.register({
                        type: c.Type.Event,
                        name: e
                    }), n.$element.on(e + ".owl.carousel.core", l.proxy(function(t) {
                        t.namespace && t.relatedTarget !== this && (this.suppress([e]), n[e].apply(this, [].slice.call(arguments, 1)), this.release([e]))
                    }, n))
                })), "string" == typeof e && "_" !== e.charAt(0) && n[e].apply(n, i)
            })
        }, l.fn.owlCarousel.Constructor = c
    }(window.Zepto || window.jQuery, window, document),
    function(e, n, t, i) {
        var s = function(t) {
            this._core = t, this._interval = null, this._visible = null, this._handlers = {
                "initialized.owl.carousel": e.proxy(function(t) {
                    t.namespace && this._core.settings.autoRefresh && this.watch()
                }, this)
            }, this._core.options = e.extend({}, s.Defaults, this._core.options), this._core.$element.on(this._handlers)
        };
        s.Defaults = {
            autoRefresh: !0,
            autoRefreshInterval: 500
        }, s.prototype.watch = function() {
            this._interval || (this._visible = this._core.$element.is(":visible"), this._interval = n.setInterval(e.proxy(this.refresh, this), this._core.settings.autoRefreshInterval))
        }, s.prototype.refresh = function() {
            this._core.$element.is(":visible") !== this._visible && (this._visible = !this._visible, this._core.$element.toggleClass("owl-hidden", !this._visible), this._visible && this._core.invalidate("width") && this._core.refresh())
        }, s.prototype.destroy = function() {
            var t, e;
            for (t in n.clearInterval(this._interval), this._handlers) this._core.$element.off(t, this._handlers[t]);
            for (e in Object.getOwnPropertyNames(this)) "function" != typeof this[e] && (this[e] = null)
        }, e.fn.owlCarousel.Constructor.Plugins.AutoRefresh = s
    }(window.Zepto || window.jQuery, window, document),
    function(a, o, t, e) {
        var n = function(t) {
            this._core = t, this._loaded = [], this._handlers = {
                "initialized.owl.carousel change.owl.carousel resized.owl.carousel": a.proxy(function(t) {
                    if (t.namespace && this._core.settings && this._core.settings.lazyLoad && (t.property && "position" == t.property.name || "initialized" == t.type))
                        for (var e = this._core.settings, n = e.center && Math.ceil(e.items / 2) || e.items, i = e.center && -1 * n || 0, s = (t.property && void 0 !== t.property.value ? t.property.value : this._core.current()) + i, o = this._core.clones().length, r = a.proxy(function(t, e) {
                                this.load(e)
                            }, this); i++ < n;) this.load(o / 2 + this._core.relative(s)), o && a.each(this._core.clones(this._core.relative(s)), r), s++
                }, this)
            }, this._core.options = a.extend({}, n.Defaults, this._core.options), this._core.$element.on(this._handlers)
        };
        n.Defaults = {
            lazyLoad: !1
        }, n.prototype.load = function(t) {
            var e = this._core.$stage.children().eq(t),
                n = e && e.find(".owl-lazy");
            !n || -1 < a.inArray(e.get(0), this._loaded) || (n.each(a.proxy(function(t, e) {
                var n, i = a(e),
                    s = 1 < o.devicePixelRatio && i.attr("data-src-retina") || i.attr("data-src");
                this._core.trigger("load", {
                    element: i,
                    url: s
                }, "lazy"), i.is("img") ? i.one("load.owl.lazy", a.proxy(function() {
                    i.css("opacity", 1), this._core.trigger("loaded", {
                        element: i,
                        url: s
                    }, "lazy")
                }, this)).attr("src", s) : ((n = new Image).onload = a.proxy(function() {
                    i.css({
                        "background-image": 'url("' + s + '")',
                        opacity: "1"
                    }), this._core.trigger("loaded", {
                        element: i,
                        url: s
                    }, "lazy")
                }, this), n.src = s)
            }, this)), this._loaded.push(e.get(0)))
        }, n.prototype.destroy = function() {
            var t, e;
            for (t in this.handlers) this._core.$element.off(t, this.handlers[t]);
            for (e in Object.getOwnPropertyNames(this)) "function" != typeof this[e] && (this[e] = null)
        }, a.fn.owlCarousel.Constructor.Plugins.Lazy = n
    }(window.Zepto || window.jQuery, window, document),
    function(o, t, e, n) {
        var i = function(t) {
            this._core = t, this._handlers = {
                "initialized.owl.carousel refreshed.owl.carousel": o.proxy(function(t) {
                    t.namespace && this._core.settings.autoHeight && this.update()
                }, this),
                "changed.owl.carousel": o.proxy(function(t) {
                    t.namespace && this._core.settings.autoHeight && "position" == t.property.name && this.update()
                }, this),
                "loaded.owl.lazy": o.proxy(function(t) {
                    t.namespace && this._core.settings.autoHeight && t.element.closest("." + this._core.settings.itemClass).index() === this._core.current() && this.update()
                }, this)
            }, this._core.options = o.extend({}, i.Defaults, this._core.options), this._core.$element.on(this._handlers)
        };
        i.Defaults = {
            autoHeight: !1,
            autoHeightClass: "owl-height"
        }, i.prototype.update = function() {
            var t, e = this._core._current,
                n = e + this._core.settings.items,
                i = this._core.$stage.children().toArray().slice(e, n),
                s = [];
            o.each(i, function(t, e) {
                s.push(o(e).height())
            }), t = Math.max.apply(null, s), this._core.$stage.parent().height(t).addClass(this._core.settings.autoHeightClass)
        }, i.prototype.destroy = function() {
            var t, e;
            for (t in this._handlers) this._core.$element.off(t, this._handlers[t]);
            for (e in Object.getOwnPropertyNames(this)) "function" != typeof this[e] && (this[e] = null)
        }, o.fn.owlCarousel.Constructor.Plugins.AutoHeight = i
    }(window.Zepto || window.jQuery, window, document),
    function(u, t, e, n) {
        var i = function(t) {
            this._core = t, this._videos = {}, this._playing = null, this._handlers = {
                "initialized.owl.carousel": u.proxy(function(t) {
                    t.namespace && this._core.register({
                        type: "state",
                        name: "playing",
                        tags: ["interacting"]
                    })
                }, this),
                "resize.owl.carousel": u.proxy(function(t) {
                    t.namespace && this._core.settings.video && this.isInFullScreen() && t.preventDefault()
                }, this),
                "refreshed.owl.carousel": u.proxy(function(t) {
                    t.namespace && this._core.is("resizing") && this._core.$stage.find(".cloned .owl-video-frame").remove()
                }, this),
                "changed.owl.carousel": u.proxy(function(t) {
                    t.namespace && "position" === t.property.name && this._playing && this.stop()
                }, this),
                "prepared.owl.carousel": u.proxy(function(t) {
                    if (t.namespace) {
                        var e = u(t.content).find(".owl-video");
                        e.length && (e.css("display", "none"), this.fetch(e, u(t.content)))
                    }
                }, this)
            }, this._core.options = u.extend({}, i.Defaults, this._core.options), this._core.$element.on(this._handlers), this._core.$element.on("click.owl.video", ".owl-video-play-icon", u.proxy(function(t) {
                this.play(t)
            }, this))
        };
        i.Defaults = {
            video: !1,
            videoHeight: !1,
            videoWidth: !1
        }, i.prototype.fetch = function(t, e) {
            var n = t.attr("data-vimeo-id") ? "vimeo" : t.attr("data-vzaar-id") ? "vzaar" : "youtube",
                i = t.attr("data-vimeo-id") || t.attr("data-youtube-id") || t.attr("data-vzaar-id"),
                s = t.attr("data-width") || this._core.settings.videoWidth,
                o = t.attr("data-height") || this._core.settings.videoHeight,
                r = t.attr("href");
            if (!r) throw new Error("Missing video URL.");
            if (-1 < (i = r.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/))[3].indexOf("youtu")) n = "youtube";
            else if (-1 < i[3].indexOf("vimeo")) n = "vimeo";
            else {
                if (!(-1 < i[3].indexOf("vzaar"))) throw new Error("Video URL not supported.");
                n = "vzaar"
            }
            i = i[6], this._videos[r] = {
                type: n,
                id: i,
                width: s,
                height: o
            }, e.attr("data-video", r), this.thumbnail(t, this._videos[r])
        }, i.prototype.thumbnail = function(e, t) {
            var n, i, s = t.width && t.height ? 'style="width:' + t.width + "px;height:" + t.height + 'px;"' : "",
                o = e.find("img"),
                r = "src",
                a = "",
                l = this._core.settings,
                c = function(t) {
                    '<div class="owl-video-play-icon"></div>',
                    n = l.lazyLoad ? '<div class="owl-video-tn ' + a + '" ' + r + '="' + t + '"></div>' : '<div class="owl-video-tn" style="opacity:1;background-image:url(' + t + ')"></div>',
                    e.after(n),
                    e.after('<div class="owl-video-play-icon"></div>')
                };
            if (e.wrap('<div class="owl-video-wrapper"' + s + "></div>"), this._core.settings.lazyLoad && (r = "data-src", a = "owl-lazy"), o.length) return c(o.attr(r)), o.remove(), !1;
            "youtube" === t.type ? (i = "//img.youtube.com/vi/" + t.id + "/hqdefault.jpg", c(i)) : "vimeo" === t.type ? u.ajax({
                type: "GET",
                url: "//vimeo.com/api/v2/video/" + t.id + ".json",
                jsonp: "callback",
                dataType: "jsonp",
                success: function(t) {
                    i = t[0].thumbnail_large, c(i)
                }
            }) : "vzaar" === t.type && u.ajax({
                type: "GET",
                url: "//vzaar.com/api/videos/" + t.id + ".json",
                jsonp: "callback",
                dataType: "jsonp",
                success: function(t) {
                    i = t.framegrab_url, c(i)
                }
            })
        }, i.prototype.stop = function() {
            this._core.trigger("stop", null, "video"), this._playing.find(".owl-video-frame").remove(), this._playing.removeClass("owl-video-playing"), this._playing = null, this._core.leave("playing"), this._core.trigger("stopped", null, "video")
        }, i.prototype.play = function(t) {
            var e, n = u(t.target).closest("." + this._core.settings.itemClass),
                i = this._videos[n.attr("data-video")],
                s = i.width || "100%",
                o = i.height || this._core.$stage.height();
            this._playing || (this._core.enter("playing"), this._core.trigger("play", null, "video"), n = this._core.items(this._core.relative(n.index())), this._core.reset(n.index()), "youtube" === i.type ? e = '<iframe width="' + s + '" height="' + o + '" src="//www.youtube.com/embed/' + i.id + "?autoplay=1&rel=0&v=" + i.id + '" frameborder="0" allowfullscreen></iframe>' : "vimeo" === i.type ? e = '<iframe src="//player.vimeo.com/video/' + i.id + '?autoplay=1" width="' + s + '" height="' + o + '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>' : "vzaar" === i.type && (e = '<iframe frameborder="0"height="' + o + '"width="' + s + '" allowfullscreen mozallowfullscreen webkitAllowFullScreen src="//view.vzaar.com/' + i.id + '/player?autoplay=true"></iframe>'), u('<div class="owl-video-frame">' + e + "</div>").insertAfter(n.find(".owl-video")), this._playing = n.addClass("owl-video-playing"))
        }, i.prototype.isInFullScreen = function() {
            var t = e.fullscreenElement || e.mozFullScreenElement || e.webkitFullscreenElement;
            return t && u(t).parent().hasClass("owl-video-frame")
        }, i.prototype.destroy = function() {
            var t, e;
            for (t in this._core.$element.off("click.owl.video"), this._handlers) this._core.$element.off(t, this._handlers[t]);
            for (e in Object.getOwnPropertyNames(this)) "function" != typeof this[e] && (this[e] = null)
        }, u.fn.owlCarousel.Constructor.Plugins.Video = i
    }(window.Zepto || window.jQuery, window, document),
    function(r, t, e, n) {
        var i = function(t) {
            this.core = t, this.core.options = r.extend({}, i.Defaults, this.core.options), this.swapping = !0, this.previous = void 0, this.next = void 0, this.handlers = {
                "change.owl.carousel": r.proxy(function(t) {
                    t.namespace && "position" == t.property.name && (this.previous = this.core.current(), this.next = t.property.value)
                }, this),
                "drag.owl.carousel dragged.owl.carousel translated.owl.carousel": r.proxy(function(t) {
                    t.namespace && (this.swapping = "translated" == t.type)
                }, this),
                "translate.owl.carousel": r.proxy(function(t) {
                    t.namespace && this.swapping && (this.core.options.animateOut || this.core.options.animateIn) && this.swap()
                }, this)
            }, this.core.$element.on(this.handlers)
        };
        i.Defaults = {
            animateOut: !1,
            animateIn: !1
        }, i.prototype.swap = function() {
            if (1 === this.core.settings.items && r.support.animation && r.support.transition) {
                this.core.speed(0);
                var t, e = r.proxy(this.clear, this),
                    n = this.core.$stage.children().eq(this.previous),
                    i = this.core.$stage.children().eq(this.next),
                    s = this.core.settings.animateIn,
                    o = this.core.settings.animateOut;
                this.core.current() !== this.previous && (o && (t = this.core.coordinates(this.previous) - this.core.coordinates(this.next), n.one(r.support.animation.end, e).css({
                    left: t + "px"
                }).addClass("animated owl-animated-out").addClass(o)), s && i.one(r.support.animation.end, e).addClass("animated owl-animated-in").addClass(s))
            }
        }, i.prototype.clear = function(t) {
            r(t.target).css({
                left: ""
            }).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut), this.core.onTransitionEnd()
        }, i.prototype.destroy = function() {
            var t, e;
            for (t in this.handlers) this.core.$element.off(t, this.handlers[t]);
            for (e in Object.getOwnPropertyNames(this)) "function" != typeof this[e] && (this[e] = null)
        }, r.fn.owlCarousel.Constructor.Plugins.Animate = i
    }(window.Zepto || window.jQuery, window, document),
    function(n, i, s, t) {
        var e = function(t) {
            this._core = t, this._timeout = null, this._paused = !1, this._handlers = {
                "changed.owl.carousel": n.proxy(function(t) {
                    t.namespace && "settings" === t.property.name ? this._core.settings.autoplay ? this.play() : this.stop() : t.namespace && "position" === t.property.name && this._core.settings.autoplay && this._setAutoPlayInterval()
                }, this),
                "initialized.owl.carousel": n.proxy(function(t) {
                    t.namespace && this._core.settings.autoplay && this.play()
                }, this),
                "play.owl.autoplay": n.proxy(function(t, e, n) {
                    t.namespace && this.play(e, n)
                }, this),
                "stop.owl.autoplay": n.proxy(function(t) {
                    t.namespace && this.stop()
                }, this),
                "mouseover.owl.autoplay": n.proxy(function() {
                    this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause()
                }, this),
                "mouseleave.owl.autoplay": n.proxy(function() {
                    this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.play()
                }, this),
                "touchstart.owl.core": n.proxy(function() {
                    this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause()
                }, this),
                "touchend.owl.core": n.proxy(function() {
                    this._core.settings.autoplayHoverPause && this.play()
                }, this)
            }, this._core.$element.on(this._handlers), this._core.options = n.extend({}, e.Defaults, this._core.options)
        };
        e.Defaults = {
            autoplay: !1,
            autoplayTimeout: 5e3,
            autoplayHoverPause: !1,
            autoplaySpeed: !1
        }, e.prototype.play = function(t, e) {
            this._paused = !1, this._core.is("rotating") || (this._core.enter("rotating"), this._setAutoPlayInterval())
        }, e.prototype._getNextTimeout = function(t, e) {
            return this._timeout && i.clearTimeout(this._timeout), i.setTimeout(n.proxy(function() {
                this._paused || this._core.is("busy") || this._core.is("interacting") || s.hidden || this._core.next(e || this._core.settings.autoplaySpeed)
            }, this), t || this._core.settings.autoplayTimeout)
        }, e.prototype._setAutoPlayInterval = function() {
            this._timeout = this._getNextTimeout()
        }, e.prototype.stop = function() {
            this._core.is("rotating") && (i.clearTimeout(this._timeout), this._core.leave("rotating"))
        }, e.prototype.pause = function() {
            this._core.is("rotating") && (this._paused = !0)
        }, e.prototype.destroy = function() {
            var t, e;
            for (t in this.stop(), this._handlers) this._core.$element.off(t, this._handlers[t]);
            for (e in Object.getOwnPropertyNames(this)) "function" != typeof this[e] && (this[e] = null)
        }, n.fn.owlCarousel.Constructor.Plugins.autoplay = e
    }(window.Zepto || window.jQuery, window, document),
    function(o, t, e, n) {
        "use strict";
        var i = function(t) {
            this._core = t, this._initialized = !1, this._pages = [], this._controls = {}, this._templates = [], this.$element = this._core.$element, this._overrides = {
                next: this._core.next,
                prev: this._core.prev,
                to: this._core.to
            }, this._handlers = {
                "prepared.owl.carousel": o.proxy(function(t) {
                    t.namespace && this._core.settings.dotsData && this._templates.push('<div class="' + this._core.settings.dotClass + '">' + o(t.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot") + "</div>")
                }, this),
                "added.owl.carousel": o.proxy(function(t) {
                    t.namespace && this._core.settings.dotsData && this._templates.splice(t.position, 0, this._templates.pop())
                }, this),
                "remove.owl.carousel": o.proxy(function(t) {
                    t.namespace && this._core.settings.dotsData && this._templates.splice(t.position, 1)
                }, this),
                "changed.owl.carousel": o.proxy(function(t) {
                    t.namespace && "position" == t.property.name && this.draw()
                }, this),
                "initialized.owl.carousel": o.proxy(function(t) {
                    t.namespace && !this._initialized && (this._core.trigger("initialize", null, "navigation"), this.initialize(), this.update(), this.draw(), this._initialized = !0, this._core.trigger("initialized", null, "navigation"))
                }, this),
                "refreshed.owl.carousel": o.proxy(function(t) {
                    t.namespace && this._initialized && (this._core.trigger("refresh", null, "navigation"), this.update(), this.draw(), this._core.trigger("refreshed", null, "navigation"))
                }, this)
            }, this._core.options = o.extend({}, i.Defaults, this._core.options), this.$element.on(this._handlers)
        };
        i.Defaults = {
            nav: !1,
            navText: ["prev", "next"],
            navSpeed: !1,
            navElement: "div",
            navContainer: !1,
            navContainerClass: "owl-nav",
            navClass: ["owl-prev", "owl-next"],
            slideBy: 1,
            dotClass: "owl-dot",
            dotsClass: "owl-dots",
            dots: !0,
            dotsEach: !1,
            dotsData: !1,
            dotsSpeed: !1,
            dotsContainer: !1
        }, i.prototype.initialize = function() {
            var t, n = this._core.settings;
            for (t in this._controls.$relative = (n.navContainer ? o(n.navContainer) : o("<div>").addClass(n.navContainerClass).appendTo(this.$element)).addClass("disabled"), this._controls.$previous = o("<" + n.navElement + ">").addClass(n.navClass[0]).html(n.navText[0]).prependTo(this._controls.$relative).on("click", o.proxy(function(t) {
                    this.prev(n.navSpeed)
                }, this)), this._controls.$next = o("<" + n.navElement + ">").addClass(n.navClass[1]).html(n.navText[1]).appendTo(this._controls.$relative).on("click", o.proxy(function(t) {
                    this.next(n.navSpeed)
                }, this)), n.dotsData || (this._templates = [o("<div>").addClass(n.dotClass).append(o("<span>")).prop("outerHTML")]), this._controls.$absolute = (n.dotsContainer ? o(n.dotsContainer) : o("<div>").addClass(n.dotsClass).appendTo(this.$element)).addClass("disabled"), this._controls.$absolute.on("click", "div", o.proxy(function(t) {
                    var e = o(t.target).parent().is(this._controls.$absolute) ? o(t.target).index() : o(t.target).parent().index();
                    t.preventDefault(), this.to(e, n.dotsSpeed)
                }, this)), this._overrides) this._core[t] = o.proxy(this[t], this)
        }, i.prototype.destroy = function() {
            var t, e, n, i;
            for (t in this._handlers) this.$element.off(t, this._handlers[t]);
            for (e in this._controls) this._controls[e].remove();
            for (i in this.overides) this._core[i] = this._overrides[i];
            for (n in Object.getOwnPropertyNames(this)) "function" != typeof this[n] && (this[n] = null)
        }, i.prototype.update = function() {
            var t, e, n = this._core.clones().length / 2,
                i = n + this._core.items().length,
                s = this._core.maximum(!0),
                o = this._core.settings,
                r = o.center || o.autoWidth || o.dotsData ? 1 : o.dotsEach || o.items;
            if ("page" !== o.slideBy && (o.slideBy = Math.min(o.slideBy, o.items)), o.dots || "page" == o.slideBy)
                for (this._pages = [], t = n, e = 0; t < i; t++) {
                    if (r <= e || 0 === e) {
                        if (this._pages.push({
                                start: Math.min(s, t - n),
                                end: t - n + r - 1
                            }), Math.min(s, t - n) === s) break;
                        e = 0, 0
                    }
                    e += this._core.mergers(this._core.relative(t))
                }
        }, i.prototype.draw = function() {
            var t, e = this._core.settings,
                n = this._core.items().length <= e.items,
                i = this._core.relative(this._core.current()),
                s = e.loop || e.rewind;
            this._controls.$relative.toggleClass("disabled", !e.nav || n), e.nav && (this._controls.$previous.toggleClass("disabled", !s && i <= this._core.minimum(!0)), this._controls.$next.toggleClass("disabled", !s && i >= this._core.maximum(!0))), this._controls.$absolute.toggleClass("disabled", !e.dots || n), e.dots && (t = this._pages.length - this._controls.$absolute.children().length, e.dotsData && 0 !== t ? this._controls.$absolute.html(this._templates.join("")) : 0 < t ? this._controls.$absolute.append(new Array(t + 1).join(this._templates[0])) : t < 0 && this._controls.$absolute.children().slice(t).remove(), this._controls.$absolute.find(".active").removeClass("active"), this._controls.$absolute.children().eq(o.inArray(this.current(), this._pages)).addClass("active"))
        }, i.prototype.onTrigger = function(t) {
            var e = this._core.settings;
            t.page = {
                index: o.inArray(this.current(), this._pages),
                count: this._pages.length,
                size: e && (e.center || e.autoWidth || e.dotsData ? 1 : e.dotsEach || e.items)
            }
        }, i.prototype.current = function() {
            var n = this._core.relative(this._core.current());
            return o.grep(this._pages, o.proxy(function(t, e) {
                return t.start <= n && t.end >= n
            }, this)).pop()
        }, i.prototype.getPosition = function(t) {
            var e, n, i = this._core.settings;
            return "page" == i.slideBy ? (e = o.inArray(this.current(), this._pages), n = this._pages.length, t ? ++e : --e, e = this._pages[(e % n + n) % n].start) : (e = this._core.relative(this._core.current()), n = this._core.items().length, t ? e += i.slideBy : e -= i.slideBy), e
        }, i.prototype.next = function(t) {
            o.proxy(this._overrides.to, this._core)(this.getPosition(!0), t)
        }, i.prototype.prev = function(t) {
            o.proxy(this._overrides.to, this._core)(this.getPosition(!1), t)
        }, i.prototype.to = function(t, e, n) {
            var i;
            !n && this._pages.length ? (i = this._pages.length, o.proxy(this._overrides.to, this._core)(this._pages[(t % i + i) % i].start, e)) : o.proxy(this._overrides.to, this._core)(t, e)
        }, o.fn.owlCarousel.Constructor.Plugins.Navigation = i
    }(window.Zepto || window.jQuery, window, document),
    function(i, s, t, e) {
        "use strict";
        var n = function(t) {
            this._core = t, this._hashes = {}, this.$element = this._core.$element, this._handlers = {
                "initialized.owl.carousel": i.proxy(function(t) {
                    t.namespace && "URLHash" === this._core.settings.startPosition && i(s).trigger("hashchange.owl.navigation")
                }, this),
                "prepared.owl.carousel": i.proxy(function(t) {
                    if (t.namespace) {
                        var e = i(t.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");
                        if (!e) return;
                        this._hashes[e] = t.content
                    }
                }, this),
                "changed.owl.carousel": i.proxy(function(t) {
                    if (t.namespace && "position" === t.property.name) {
                        var n = this._core.items(this._core.relative(this._core.current())),
                            e = i.map(this._hashes, function(t, e) {
                                return t === n ? e : null
                            }).join();
                        if (!e || s.location.hash.slice(1) === e) return;
                        s.location.hash = e
                    }
                }, this)
            }, this._core.options = i.extend({}, n.Defaults, this._core.options), this.$element.on(this._handlers), i(s).on("hashchange.owl.navigation", i.proxy(function(t) {
                var e = s.location.hash.substring(1),
                    n = this._core.$stage.children(),
                    i = this._hashes[e] && n.index(this._hashes[e]);
                void 0 !== i && i !== this._core.current() && this._core.to(this._core.relative(i), !1, !0)
            }, this))
        };
        n.Defaults = {
            URLhashListener: !1
        }, n.prototype.destroy = function() {
            var t, e;
            for (t in i(s).off("hashchange.owl.navigation"), this._handlers) this._core.$element.off(t, this._handlers[t]);
            for (e in Object.getOwnPropertyNames(this)) "function" != typeof this[e] && (this[e] = null)
        }, i.fn.owlCarousel.Constructor.Plugins.Hash = n
    }(window.Zepto || window.jQuery, window, document),
    function(s, t, e, o) {
        function n(t, n) {
            var i = !1,
                e = t.charAt(0).toUpperCase() + t.slice(1);
            return s.each((t + " " + a.join(e + " ") + e).split(" "), function(t, e) {
                if (r[e] !== o) return i = !n || e, !1
            }), i
        }

        function i(t) {
            return n(t, !0)
        }
        var r = s("<support>").get(0).style,
            a = "Webkit Moz O ms".split(" "),
            l = {
                transition: {
                    end: {
                        WebkitTransition: "webkitTransitionEnd",
                        MozTransition: "transitionend",
                        OTransition: "oTransitionEnd",
                        transition: "transitionend"
                    }
                },
                animation: {
                    end: {
                        WebkitAnimation: "webkitAnimationEnd",
                        MozAnimation: "animationend",
                        OAnimation: "oAnimationEnd",
                        animation: "animationend"
                    }
                }
            },
            c = function() {
                return !!n("transform")
            },
            u = function() {
                return !!n("perspective")
            },
            h = function() {
                return !!n("animation")
            };
        (function() {
            return !!n("transition")
        })() && (s.support.transition = new String(i("transition")), s.support.transition.end = l.transition.end[s.support.transition]), h() && (s.support.animation = new String(i("animation")), s.support.animation.end = l.animation.end[s.support.animation]), c() && (s.support.transform = new String(i("transform")), s.support.transform3d = u())
    }(window.Zepto || window.jQuery, window, document),
    function(t) {
        "function" == typeof define && define.amd ? define(["jquery"], t) : t(jQuery)
    }(function(p) {
        var e = /\+/g;

        function f(t) {
            return t
        }

        function g(t) {
            return decodeURIComponent(t.replace(e, " "))
        }

        function m(t) {
            0 === t.indexOf('"') && (t = t.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, "\\"));
            try {
                return v.json ? JSON.parse(t) : t
            } catch (t) {}
        }
        var v = p.cookie = function(t, e, n) {
            if (void 0 !== e) {
                if ("number" == typeof(n = p.extend({}, v.defaults, n)).expires) {
                    var i = n.expires,
                        s = n.expires = new Date;
                    s.setDate(s.getDate() + i)
                }
                return e = v.json ? JSON.stringify(e) : String(e), document.cookie = [v.raw ? t : encodeURIComponent(t), "=", v.raw ? e : encodeURIComponent(e), n.expires ? "; expires=" + n.expires.toUTCString() : "", n.path ? "; path=" + n.path : "", n.domain ? "; domain=" + n.domain : "", n.secure ? "; secure" : ""].join("")
            }
            for (var o = v.raw ? f : g, r = document.cookie.split("; "), a = t ? void 0 : {}, l = 0, c = r.length; l < c; l++) {
                var u = r[l].split("="),
                    h = o(u.shift()),
                    d = o(u.join("="));
                if (t && t === h) {
                    a = m(d);
                    break
                }
                t || (a[h] = m(d))
            }
            return a
        };
        v.defaults = {}, p.removeCookie = function(t, e) {
            return void 0 !== p.cookie(t) && (p.cookie(t, "", p.extend({}, e, {
                expires: -1
            })), !0)
        }
    }),
    function(t) {
        "function" == typeof define && define.amd ? define(["jquery"], t) : "object" == typeof module && module.exports ? module.exports = t(require("jquery")) : t(jQuery)
    }(function(u) {
        u.extend(u.fn, {
            validate: function(t) {
                if (this.length) {
                    var i = u.data(this[0], "validator");
                    return i || (this.attr("novalidate", "novalidate"), i = new u.validator(t, this[0]), u.data(this[0], "validator", i), i.settings.onsubmit && (this.on("click.validate", ":submit", function(t) {
                        i.settings.submitHandler && (i.submitButton = t.target), u(this).hasClass("cancel") && (i.cancelSubmit = !0), void 0 !== u(this).attr("formnovalidate") && (i.cancelSubmit = !0)
                    }), this.on("submit.validate", function(n) {
                        function t() {
                            var t, e;
                            return !i.settings.submitHandler || (i.submitButton && (t = u("<input type='hidden'/>").attr("name", i.submitButton.name).val(u(i.submitButton).val()).appendTo(i.currentForm)), e = i.settings.submitHandler.call(i, i.currentForm, n), i.submitButton && t.remove(), void 0 !== e && e)
                        }
                        return i.settings.debug && n.preventDefault(), i.cancelSubmit ? (i.cancelSubmit = !1, t()) : i.form() ? i.pendingRequest ? !(i.formSubmitted = !0) : t() : (i.focusInvalid(), !1)
                    })), i)
                }
                t && t.debug && window.console
            },
            valid: function() {
                var t, e, n;
                return u(this[0]).is("form") ? t = this.validate().form() : (n = [], t = !0, e = u(this[0].form).validate(), this.each(function() {
                    (t = e.element(this) && t) || (n = n.concat(e.errorList))
                }), e.errorList = n), t
            },
            rules: function(t, e) {
                if (this.length) {
                    var n, i, s, o, r, a, l = this[0];
                    if (t) switch (n = u.data(l.form, "validator").settings, i = n.rules, s = u.validator.staticRules(l), t) {
                        case "add":
                            u.extend(s, u.validator.normalizeRule(e)), delete s.messages, i[l.name] = s, e.messages && (n.messages[l.name] = u.extend(n.messages[l.name], e.messages));
                            break;
                        case "remove":
                            return e ? (a = {}, u.each(e.split(/\s/), function(t, e) {
                                a[e] = s[e], delete s[e], "required" === e && u(l).removeAttr("aria-required")
                            }), a) : (delete i[l.name], s)
                    }
                    return (o = u.validator.normalizeRules(u.extend({}, u.validator.classRules(l), u.validator.attributeRules(l), u.validator.dataRules(l), u.validator.staticRules(l)), l)).required && (r = o.required, delete o.required, o = u.extend({
                        required: r
                    }, o), u(l).attr("aria-required", "true")), o.remote && (r = o.remote, delete o.remote, o = u.extend(o, {
                        remote: r
                    })), o
                }
            }
        }), u.extend(u.expr[":"], {
            blank: function(t) {
                return !u.trim("" + u(t).val())
            },
            filled: function(t) {
                var e = u(t).val();
                return null !== e && !!u.trim("" + e)
            },
            unchecked: function(t) {
                return !u(t).prop("checked")
            }
        }), u.validator = function(t, e) {
            this.settings = u.extend(!0, {}, u.validator.defaults, t), this.currentForm = e, this.init()
        }, u.validator.format = function(n, t) {
            return 1 === arguments.length ? function() {
                var t = u.makeArray(arguments);
                return t.unshift(n), u.validator.format.apply(this, t)
            } : (void 0 === t || (2 < arguments.length && t.constructor !== Array && (t = u.makeArray(arguments).slice(1)), t.constructor !== Array && (t = [t]), u.each(t, function(t, e) {
                n = n.replace(new RegExp("\\{" + t + "\\}", "g"), function() {
                    return e
                })
            })), n)
        }, u.extend(u.validator, {
            defaults: {
                messages: {},
                groups: {},
                rules: {},
                errorClass: "error",
                pendingClass: "pending",
                validClass: "valid",
                errorElement: "label",
                focusCleanup: !1,
                focusInvalid: !0,
                errorContainer: u([]),
                errorLabelContainer: u([]),
                onsubmit: !0,
                ignore: ":hidden",
                ignoreTitle: !1,
                onfocusin: function(t) {
                    this.lastActive = t, this.settings.focusCleanup && (this.settings.unhighlight && this.settings.unhighlight.call(this, t, this.settings.errorClass, this.settings.validClass), this.hideThese(this.errorsFor(t)))
                },
                onfocusout: function(t) {
                    this.checkable(t) || !(t.name in this.submitted) && this.optional(t) || this.element(t)
                },
                onkeyup: function(t, e) {
                    9 === e.which && "" === this.elementValue(t) || -1 !== u.inArray(e.keyCode, [16, 17, 18, 20, 35, 36, 37, 38, 39, 40, 45, 144, 225]) || (t.name in this.submitted || t.name in this.invalid) && this.element(t)
                },
                onclick: function(t) {
                    t.name in this.submitted ? this.element(t) : t.parentNode.name in this.submitted && this.element(t.parentNode)
                },
                highlight: function(t, e, n) {
                    "radio" === t.type ? this.findByName(t.name).addClass(e).removeClass(n) : u(t).addClass(e).removeClass(n)
                },
                unhighlight: function(t, e, n) {
                    "radio" === t.type ? this.findByName(t.name).removeClass(e).addClass(n) : u(t).removeClass(e).addClass(n)
                }
            },
            setDefaults: function(t) {
                u.extend(u.validator.defaults, t)
            },
            messages: {
                required: "This field is required.",
                remote: "Please fix this field.",
                email: "Please enter a valid email address.",
                url: "Please enter a valid URL.",
                date: "Please enter a valid date.",
                dateISO: "Please enter a valid date ( ISO ).",
                number: "Please enter a valid number.",
                digits: "Please enter only digits.",
                equalTo: "Please enter the same value again.",
                maxlength: u.validator.format("Please enter no more than {0} characters."),
                minlength: u.validator.format("Please enter at least {0} characters."),
                rangelength: u.validator.format("Please enter a value between {0} and {1} characters long."),
                range: u.validator.format("Please enter a value between {0} and {1}."),
                max: u.validator.format("Please enter a value less than or equal to {0}."),
                min: u.validator.format("Please enter a value greater than or equal to {0}."),
                step: u.validator.format("Please enter a multiple of {0}.")
            },
            autoCreateRanges: !1,
            prototype: {
                init: function() {
                    function t(t) {
                        var e = u.data(this.form, "validator"),
                            n = "on" + t.type.replace(/^validate/, ""),
                            i = e.settings;
                        i[n] && !u(this).is(i.ignore) && i[n].call(e, this, t)
                    }
                    this.labelContainer = u(this.settings.errorLabelContainer), this.errorContext = this.labelContainer.length && this.labelContainer || u(this.currentForm), this.containers = u(this.settings.errorContainer).add(this.settings.errorLabelContainer), this.submitted = {}, this.valueCache = {}, this.pendingRequest = 0, this.pending = {}, this.invalid = {}, this.reset();
                    var n, i = this.groups = {};
                    u.each(this.settings.groups, function(n, t) {
                        "string" == typeof t && (t = t.split(/\s/)), u.each(t, function(t, e) {
                            i[e] = n
                        })
                    }), n = this.settings.rules, u.each(n, function(t, e) {
                        n[t] = u.validator.normalizeRule(e)
                    }), u(this.currentForm).on("focusin.validate focusout.validate keyup.validate", ":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], [type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], [type='radio'], [type='checkbox'], [contenteditable]", t).on("click.validate", "select, option, [type='radio'], [type='checkbox']", t), this.settings.invalidHandler && u(this.currentForm).on("invalid-form.validate", this.settings.invalidHandler), u(this.currentForm).find("[required], [data-rule-required], .required").attr("aria-required", "true")
                },
                form: function() {
                    return this.checkForm(), u.extend(this.submitted, this.errorMap), this.invalid = u.extend({}, this.errorMap), this.valid() || u(this.currentForm).triggerHandler("invalid-form", [this]), this.showErrors(), this.valid()
                },
                checkForm: function() {
                    this.prepareForm();
                    for (var t = 0, e = this.currentElements = this.elements(); e[t]; t++) this.check(e[t]);
                    return this.valid()
                },
                element: function(t) {
                    var e, n, i = this.clean(t),
                        s = this.validationTargetFor(i),
                        o = this,
                        r = !0;
                    return void 0 === s ? delete this.invalid[i.name] : (this.prepareElement(s), this.currentElements = u(s), (n = this.groups[s.name]) && u.each(this.groups, function(t, e) {
                        e === n && t !== s.name && ((i = o.validationTargetFor(o.clean(o.findByName(t)))) && i.name in o.invalid && (o.currentElements.push(i), r = r && o.check(i)))
                    }), e = !1 !== this.check(s), r = r && e, this.invalid[s.name] = !e, this.numberOfInvalids() || (this.toHide = this.toHide.add(this.containers)), this.showErrors(), u(t).attr("aria-invalid", !e)), r
                },
                showErrors: function(e) {
                    if (e) {
                        var n = this;
                        u.extend(this.errorMap, e), this.errorList = u.map(this.errorMap, function(t, e) {
                            return {
                                message: t,
                                element: n.findByName(e)[0]
                            }
                        }), this.successList = u.grep(this.successList, function(t) {
                            return !(t.name in e)
                        })
                    }
                    this.settings.showErrors ? this.settings.showErrors.call(this, this.errorMap, this.errorList) : this.defaultShowErrors()
                },
                resetForm: function() {
                    u.fn.resetForm && u(this.currentForm).resetForm(), this.invalid = {}, this.submitted = {}, this.prepareForm(), this.hideErrors();
                    var t = this.elements().removeData("previousValue").removeAttr("aria-invalid");
                    this.resetElements(t)
                },
                resetElements: function(t) {
                    var e;
                    if (this.settings.unhighlight)
                        for (e = 0; t[e]; e++) this.settings.unhighlight.call(this, t[e], this.settings.errorClass, ""), this.findByName(t[e].name).removeClass(this.settings.validClass);
                    else t.removeClass(this.settings.errorClass).removeClass(this.settings.validClass)
                },
                numberOfInvalids: function() {
                    return this.objectLength(this.invalid)
                },
                objectLength: function(t) {
                    var e, n = 0;
                    for (e in t) t[e] && n++;
                    return n
                },
                hideErrors: function() {
                    this.hideThese(this.toHide)
                },
                hideThese: function(t) {
                    t.not(this.containers).text(""), this.addWrapper(t).hide()
                },
                valid: function() {
                    return 0 === this.size()
                },
                size: function() {
                    return this.errorList.length
                },
                focusInvalid: function() {
                    if (this.settings.focusInvalid) try {
                        u(this.findLastActive() || this.errorList.length && this.errorList[0].element || []).filter(":visible").focus().trigger("focusin")
                    } catch (t) {}
                },
                findLastActive: function() {
                    var e = this.lastActive;
                    return e && 1 === u.grep(this.errorList, function(t) {
                        return t.element.name === e.name
                    }).length && e
                },
                elements: function() {
                    var e = this,
                        n = {};
                    return u(this.currentForm).find("input, select, textarea, [contenteditable]").not(":submit, :reset, :image, :disabled").not(this.settings.ignore).filter(function() {
                        var t = this.name || u(this).attr("name");
                        return !t && e.settings.debug && window.console, this.hasAttribute("contenteditable") && (this.form = u(this).closest("form")[0]), !(t in n || !e.objectLength(u(this).rules())) && (n[t] = !0)
                    })
                },
                clean: function(t) {
                    return u(t)[0]
                },
                errors: function() {
                    var t = this.settings.errorClass.split(" ").join(".");
                    return u(this.settings.errorElement + "." + t, this.errorContext)
                },
                resetInternals: function() {
                    this.successList = [], this.errorList = [], this.errorMap = {}, this.toShow = u([]), this.toHide = u([])
                },
                reset: function() {
                    this.resetInternals(), this.currentElements = u([])
                },
                prepareForm: function() {
                    this.reset(), this.toHide = this.errors().add(this.containers)
                },
                prepareElement: function(t) {
                    this.reset(), this.toHide = this.errorsFor(t)
                },
                elementValue: function(t) {
                    var e, n, i = u(t),
                        s = t.type;
                    return "radio" === s || "checkbox" === s ? this.findByName(t.name).filter(":checked").val() : "number" === s && void 0 !== t.validity ? t.validity.badInput ? "NaN" : i.val() : (e = t.hasAttribute("contenteditable") ? i.text() : i.val(), "file" === s ? "C:\\fakepath\\" === e.substr(0, 12) ? e.substr(12) : 0 <= (n = e.lastIndexOf("/")) ? e.substr(n + 1) : 0 <= (n = e.lastIndexOf("\\")) ? e.substr(n + 1) : e : "string" == typeof e ? e.replace(/\r/g, "") : e)
                },
                check: function(e) {
                    e = this.validationTargetFor(this.clean(e));
                    var t, n, i, s = u(e).rules(),
                        o = u.map(s, function(t, e) {
                            return e
                        }).length,
                        r = !1,
                        a = this.elementValue(e);
                    if ("function" == typeof s.normalizer) {
                        if ("string" != typeof(a = s.normalizer.call(e, a))) throw new TypeError("The normalizer should return a string value.");
                        delete s.normalizer
                    }
                    for (n in s) {
                        i = {
                            method: n,
                            parameters: s[n]
                        };
                        try {
                            if ("dependency-mismatch" === (t = u.validator.methods[n].call(this, a, e, i.parameters)) && 1 === o) {
                                r = !0;
                                continue
                            }
                            if (r = !1, "pending" === t) return void(this.toHide = this.toHide.not(this.errorsFor(e)));
                            if (!t) return this.formatAndAdd(e, i), !1
                        } catch (t) {
                            throw this.settings.debug && window.console, t instanceof TypeError && (t.message += ".  Exception occurred when checking element " + e.id + ", check the '" + i.method + "' method."), t
                        }
                    }
                    if (!r) return this.objectLength(s) && this.successList.push(e), !0
                },
                customDataMessage: function(t, e) {
                    return u(t).data("msg" + e.charAt(0).toUpperCase() + e.substring(1).toLowerCase()) || u(t).data("msg")
                },
                customMessage: function(t, e) {
                    var n = this.settings.messages[t];
                    return n && (n.constructor === String ? n : n[e])
                },
                findDefined: function() {
                    for (var t = 0; t < arguments.length; t++)
                        if (void 0 !== arguments[t]) return arguments[t]
                },
                defaultMessage: function(t, e) {
                    var n = this.findDefined(this.customMessage(t.name, e.method), this.customDataMessage(t, e.method), !this.settings.ignoreTitle && t.title || void 0, u.validator.messages[e.method], "<strong>Warning: No message defined for " + t.name + "</strong>"),
                        i = /\$?\{(\d+)\}/g;
                    return "function" == typeof n ? n = n.call(this, e.parameters, t) : i.test(n) && (n = u.validator.format(n.replace(i, "{$1}"), e.parameters)), n
                },
                formatAndAdd: function(t, e) {
                    var n = this.defaultMessage(t, e);
                    this.errorList.push({
                        message: n,
                        element: t,
                        method: e.method
                    }), this.errorMap[t.name] = n, this.submitted[t.name] = n
                },
                addWrapper: function(t) {
                    return this.settings.wrapper && (t = t.add(t.parent(this.settings.wrapper))), t
                },
                defaultShowErrors: function() {
                    var t, e, n;
                    for (t = 0; this.errorList[t]; t++) n = this.errorList[t], this.settings.highlight && this.settings.highlight.call(this, n.element, this.settings.errorClass, this.settings.validClass), this.showLabel(n.element, n.message);
                    if (this.errorList.length && (this.toShow = this.toShow.add(this.containers)), this.settings.success)
                        for (t = 0; this.successList[t]; t++) this.showLabel(this.successList[t]);
                    if (this.settings.unhighlight)
                        for (t = 0, e = this.validElements(); e[t]; t++) this.settings.unhighlight.call(this, e[t], this.settings.errorClass, this.settings.validClass);
                    this.toHide = this.toHide.not(this.toShow), this.hideErrors(), this.addWrapper(this.toShow).show()
                },
                validElements: function() {
                    return this.currentElements.not(this.invalidElements())
                },
                invalidElements: function() {
                    return u(this.errorList).map(function() {
                        return this.element
                    })
                },
                showLabel: function(t, e) {
                    var n, i, s, o, r = this.errorsFor(t),
                        a = this.idOrName(t),
                        l = u(t).attr("aria-describedby");
                    r.length ? (r.removeClass(this.settings.validClass).addClass(this.settings.errorClass), r.html(e)) : (n = r = u("<" + this.settings.errorElement + ">").attr("id", a + "-error").addClass(this.settings.errorClass).html(e || ""), this.settings.wrapper && (n = r.hide().show().wrap("<" + this.settings.wrapper + "/>").parent()), this.labelContainer.length ? this.labelContainer.append(n) : this.settings.errorPlacement ? this.settings.errorPlacement(n, u(t)) : n.insertAfter(t), r.is("label") ? r.attr("for", a) : 0 === r.parents("label[for='" + this.escapeCssMeta(a) + "']").length && (s = r.attr("id"), l ? l.match(new RegExp("\\b" + this.escapeCssMeta(s) + "\\b")) || (l += " " + s) : l = s, u(t).attr("aria-describedby", l), (i = this.groups[t.name]) && (o = this, u.each(o.groups, function(t, e) {
                        e === i && u("[name='" + o.escapeCssMeta(t) + "']", o.currentForm).attr("aria-describedby", r.attr("id"))
                    })))), !e && this.settings.success && (r.text(""), "string" == typeof this.settings.success ? r.addClass(this.settings.success) : this.settings.success(r, t)), this.toShow = this.toShow.add(r)
                },
                errorsFor: function(t) {
                    var e = this.escapeCssMeta(this.idOrName(t)),
                        n = u(t).attr("aria-describedby"),
                        i = "label[for='" + e + "'], label[for='" + e + "'] *";
                    return n && (i = i + ", #" + this.escapeCssMeta(n).replace(/\s+/g, ", #")), this.errors().filter(i)
                },
                escapeCssMeta: function(t) {
                    return t.replace(/([\\!"#$%&'()*+,./:;<=>?@\[\]^`{|}~])/g, "\\$1")
                },
                idOrName: function(t) {
                    return this.groups[t.name] || (this.checkable(t) ? t.name : t.id || t.name)
                },
                validationTargetFor: function(t) {
                    return this.checkable(t) && (t = this.findByName(t.name)), u(t).not(this.settings.ignore)[0]
                },
                checkable: function(t) {
                    return /radio|checkbox/i.test(t.type)
                },
                findByName: function(t) {
                    return u(this.currentForm).find("[name='" + this.escapeCssMeta(t) + "']")
                },
                getLength: function(t, e) {
                    switch (e.nodeName.toLowerCase()) {
                        case "select":
                            return u("option:selected", e).length;
                        case "input":
                            if (this.checkable(e)) return this.findByName(e.name).filter(":checked").length
                    }
                    return t.length
                },
                depend: function(t, e) {
                    return !this.dependTypes[typeof t] || this.dependTypes[typeof t](t, e)
                },
                dependTypes: {
                    boolean: function(t) {
                        return t
                    },
                    string: function(t, e) {
                        return !!u(t, e.form).length
                    },
                    function: function(t, e) {
                        return t(e)
                    }
                },
                optional: function(t) {
                    var e = this.elementValue(t);
                    return !u.validator.methods.required.call(this, e, t) && "dependency-mismatch"
                },
                startRequest: function(t) {
                    this.pending[t.name] || (this.pendingRequest++, u(t).addClass(this.settings.pendingClass), this.pending[t.name] = !0)
                },
                stopRequest: function(t, e) {
                    this.pendingRequest--, this.pendingRequest < 0 && (this.pendingRequest = 0), delete this.pending[t.name], u(t).removeClass(this.settings.pendingClass), e && 0 === this.pendingRequest && this.formSubmitted && this.form() ? (u(this.currentForm).submit(), this.formSubmitted = !1) : !e && 0 === this.pendingRequest && this.formSubmitted && (u(this.currentForm).triggerHandler("invalid-form", [this]), this.formSubmitted = !1)
                },
                previousValue: function(t, e) {
                    return u.data(t, "previousValue") || u.data(t, "previousValue", {
                        old: null,
                        valid: !0,
                        message: this.defaultMessage(t, {
                            method: e
                        })
                    })
                },
                destroy: function() {
                    this.resetForm(), u(this.currentForm).off(".validate").removeData("validator").find(".validate-equalTo-blur").off(".validate-equalTo").removeClass("validate-equalTo-blur")
                }
            },
            classRuleSettings: {
                required: {
                    required: !0
                },
                email: {
                    email: !0
                },
                url: {
                    url: !0
                },
                date: {
                    date: !0
                },
                dateISO: {
                    dateISO: !0
                },
                number: {
                    number: !0
                },
                digits: {
                    digits: !0
                },
                creditcard: {
                    creditcard: !0
                }
            },
            addClassRules: function(t, e) {
                t.constructor === String ? this.classRuleSettings[t] = e : u.extend(this.classRuleSettings, t)
            },
            classRules: function(t) {
                var e = {},
                    n = u(t).attr("class");
                return n && u.each(n.split(" "), function() {
                    this in u.validator.classRuleSettings && u.extend(e, u.validator.classRuleSettings[this])
                }), e
            },
            normalizeAttributeRule: function(t, e, n, i) {
                /min|max|step/.test(n) && (null === e || /number|range|text/.test(e)) && (i = Number(i), isNaN(i) && (i = void 0)), i || 0 === i ? t[n] = i : e === n && "range" !== e && (t[n] = !0)
            },
            attributeRules: function(t) {
                var e, n, i = {},
                    s = u(t),
                    o = t.getAttribute("type");
                for (e in u.validator.methods) "required" === e ? ("" === (n = t.getAttribute(e)) && (n = !0), n = !!n) : n = s.attr(e), this.normalizeAttributeRule(i, o, e, n);
                return i.maxlength && /-1|2147483647|524288/.test(i.maxlength) && delete i.maxlength, i
            },
            dataRules: function(t) {
                var e, n, i = {},
                    s = u(t),
                    o = t.getAttribute("type");
                for (e in u.validator.methods) n = s.data("rule" + e.charAt(0).toUpperCase() + e.substring(1).toLowerCase()), this.normalizeAttributeRule(i, o, e, n);
                return i
            },
            staticRules: function(t) {
                var e = {},
                    n = u.data(t.form, "validator");
                return n.settings.rules && (e = u.validator.normalizeRule(n.settings.rules[t.name]) || {}), e
            },
            normalizeRules: function(i, s) {
                return u.each(i, function(t, e) {
                    if (!1 !== e) {
                        if (e.param || e.depends) {
                            var n = !0;
                            switch (typeof e.depends) {
                                case "string":
                                    n = !!u(e.depends, s.form).length;
                                    break;
                                case "function":
                                    n = e.depends.call(s, s)
                            }
                            n ? i[t] = void 0 === e.param || e.param : (u.data(s.form, "validator").resetElements(u(s)), delete i[t])
                        }
                    } else delete i[t]
                }), u.each(i, function(t, e) {
                    i[t] = u.isFunction(e) && "normalizer" !== t ? e(s) : e
                }), u.each(["minlength", "maxlength"], function() {
                    i[this] && (i[this] = Number(i[this]))
                }), u.each(["rangelength", "range"], function() {
                    var t;
                    i[this] && (u.isArray(i[this]) ? i[this] = [Number(i[this][0]), Number(i[this][1])] : "string" == typeof i[this] && (t = i[this].replace(/[\[\]]/g, "").split(/[\s,]+/), i[this] = [Number(t[0]), Number(t[1])]))
                }), u.validator.autoCreateRanges && (null != i.min && null != i.max && (i.range = [i.min, i.max], delete i.min, delete i.max), null != i.minlength && null != i.maxlength && (i.rangelength = [i.minlength, i.maxlength], delete i.minlength, delete i.maxlength)), i
            },
            normalizeRule: function(t) {
                if ("string" == typeof t) {
                    var e = {};
                    u.each(t.split(/\s/), function() {
                        e[this] = !0
                    }), t = e
                }
                return t
            },
            addMethod: function(t, e, n) {
                u.validator.methods[t] = e, u.validator.messages[t] = void 0 !== n ? n : u.validator.messages[t], e.length < 3 && u.validator.addClassRules(t, u.validator.normalizeRule(t))
            },
            methods: {
                required: function(t, e, n) {
                    if (!this.depend(n, e)) return "dependency-mismatch";
                    if ("select" === e.nodeName.toLowerCase()) {
                        var i = u(e).val();
                        return i && 0 < i.length
                    }
                    return this.checkable(e) ? 0 < this.getLength(t, e) : 0 < t.length
                },
                email: function(t, e) {
                    return this.optional(e) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(t)
                },
                url: function(t, e) {
                    return this.optional(e) || /^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[/?#]\S*)?$/i.test(t)
                },
                date: function(t, e) {
                    return this.optional(e) || !/Invalid|NaN/.test(new Date(t).toString())
                },
                dateISO: function(t, e) {
                    return this.optional(e) || /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(t)
                },
                number: function(t, e) {
                    return this.optional(e) || /^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(t)
                },
                digits: function(t, e) {
                    return this.optional(e) || /^\d+$/.test(t)
                },
                minlength: function(t, e, n) {
                    var i = u.isArray(t) ? t.length : this.getLength(t, e);
                    return this.optional(e) || n <= i
                },
                maxlength: function(t, e, n) {
                    var i = u.isArray(t) ? t.length : this.getLength(t, e);
                    return this.optional(e) || i <= n
                },
                rangelength: function(t, e, n) {
                    var i = u.isArray(t) ? t.length : this.getLength(t, e);
                    return this.optional(e) || i >= n[0] && i <= n[1]
                },
                min: function(t, e, n) {
                    return this.optional(e) || n <= t
                },
                max: function(t, e, n) {
                    return this.optional(e) || t <= n
                },
                range: function(t, e, n) {
                    return this.optional(e) || t >= n[0] && t <= n[1]
                },
                step: function(t, e, n) {
                    var i = u(e).attr("type"),
                        s = "Step attribute on input type " + i + " is not supported.",
                        o = new RegExp("\\b" + i + "\\b");
                    if (i && !o.test(["text", "number", "range"].join())) throw new Error(s);
                    return this.optional(e) || t % n == 0
                },
                equalTo: function(t, e, n) {
                    var i = u(n);
                    return this.settings.onfocusout && i.not(".validate-equalTo-blur").length && i.addClass("validate-equalTo-blur").on("blur.validate-equalTo", function() {
                        u(e).valid()
                    }), t === i.val()
                },
                remote: function(o, r, t, a) {
                    if (this.optional(r)) return "dependency-mismatch";
                    a = "string" == typeof a && a || "remote";
                    var l, e, n, c = this.previousValue(r, a);
                    return this.settings.messages[r.name] || (this.settings.messages[r.name] = {}), c.originalMessage = c.originalMessage || this.settings.messages[r.name][a], this.settings.messages[r.name][a] = c.message, t = "string" == typeof t && {
                        url: t
                    } || t, n = u.param(u.extend({
                        data: o
                    }, t.data)), c.old === n ? c.valid : (c.old = n, (l = this).startRequest(r), (e = {})[r.name] = o, u.ajax(u.extend(!0, {
                        mode: "abort",
                        port: "validate" + r.name,
                        dataType: "json",
                        data: e,
                        context: l.currentForm,
                        success: function(t) {
                            var e, n, i, s = !0 === t || "true" === t;
                            l.settings.messages[r.name][a] = c.originalMessage, s ? (i = l.formSubmitted, l.resetInternals(), l.toHide = l.errorsFor(r), l.formSubmitted = i, l.successList.push(r), l.invalid[r.name] = !1, l.showErrors()) : (e = {}, n = t || l.defaultMessage(r, {
                                method: a,
                                parameters: o
                            }), e[r.name] = c.message = n, l.invalid[r.name] = !0, l.showErrors(e)), c.valid = s, l.stopRequest(r, s)
                        }
                    }, t)), "pending")
                }
            }
        });
        var i, s = {};
        u.ajaxPrefilter ? u.ajaxPrefilter(function(t, e, n) {
            var i = t.port;
            "abort" === t.mode && (s[i] && s[i].abort(), s[i] = n)
        }) : (i = u.ajax, u.ajax = function(t) {
            var e = ("mode" in t ? t : u.ajaxSettings).mode,
                n = ("port" in t ? t : u.ajaxSettings).port;
            return "abort" === e ? (s[n] && s[n].abort(), s[n] = i.apply(this, arguments), s[n]) : i.apply(this, arguments)
        })
    }),
    function(t) {
        "use strict";
        "function" == typeof define && define.amd ? define(["jquery"], t) : t("object" == typeof exports && "function" == typeof require ? require("jquery") : jQuery)
    }(function(p) {
        "use strict";

        function o(t, e) {
            var n = this;
            n.element = t, n.el = p(t), n.suggestions = [], n.badQueries = [], n.selectedIndex = -1, n.currentValue = n.element.value, n.timeoutId = null, n.cachedResponse = {}, n.onChangeTimeout = null, n.onChange = null, n.isLocal = !1, n.suggestionsContainer = null, n.noSuggestionsContainer = null, n.options = p.extend({}, o.defaults, e), n.classes = {
                selected: "autocomplete-selected",
                suggestion: "autocomplete-suggestion"
            }, n.hint = null, n.hintValue = "", n.selection = null, n.initialize(), n.setOptions(e)
        }
        var i = {
                escapeRegExChars: function(t) {
                    return t.replace(/[|\\{}()[\]^$+*?.]/g, "\\$&")
                },
                createNode: function(t) {
                    var e = document.createElement("div");
                    return e.className = t, e.style.position = "absolute", e.style.display = "none", e
                }
            },
            n = 27,
            s = 9,
            r = 13,
            a = 38,
            l = 39,
            c = 40,
            t = p.noop;
        o.utils = i, (p.Autocomplete = o).defaults = {
            ajaxSettings: {},
            autoSelectFirst: !1,
            appendTo: "body",
            serviceUrl: null,
            lookup: null,
            onSelect: null,
            width: "auto",
            minChars: 1,
            maxHeight: 300,
            deferRequestBy: 0,
            params: {},
            formatResult: function(t, e) {
                if (!e) return t.value;
                var n = "(" + i.escapeRegExChars(e) + ")";
                return t.value.replace(new RegExp(n, "gi"), "<strong>$1</strong>").replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/&lt;(\/?strong)&gt;/g, "<$1>")
            },
            formatGroup: function(t, e) {
                return '<div class="autocomplete-group">' + e + "</div>"
            },
            delimiter: null,
            zIndex: 9999,
            type: "GET",
            noCache: !1,
            onSearchStart: t,
            onSearchComplete: t,
            onSearchError: t,
            preserveInput: !1,
            containerClass: "autocomplete-suggestions",
            tabDisabled: !1,
            dataType: "text",
            currentRequest: null,
            triggerSelectOnValidInput: !0,
            preventBadQueries: !0,
            lookupFilter: function(t, e, n) {
                return -1 !== t.value.toLowerCase().indexOf(n)
            },
            paramName: "query",
            transformResult: function(t) {
                return "string" == typeof t ? p.parseJSON(t) : t
            },
            showNoSuggestionNotice: !1,
            noSuggestionNotice: "No results",
            orientation: "bottom",
            forceFixPosition: !1
        }, o.prototype = {
            initialize: function() {
                var t, e = this,
                    n = "." + e.classes.suggestion,
                    i = e.classes.selected,
                    s = e.options;
                e.element.setAttribute("autocomplete", "off"), e.noSuggestionsContainer = p('<div class="autocomplete-no-suggestion"></div>').html(this.options.noSuggestionNotice).get(0), e.suggestionsContainer = o.utils.createNode(s.containerClass), (t = p(e.suggestionsContainer)).appendTo(s.appendTo || "body"), "auto" !== s.width && t.css("width", s.width), t.on("mouseover.autocomplete", n, function() {
                    e.activate(p(this).data("index"))
                }), t.on("mouseout.autocomplete", function() {
                    e.selectedIndex = -1, t.children("." + i).removeClass(i)
                }), t.on("click.autocomplete", n, function() {
                    e.select(p(this).data("index"))
                }), t.on("click.autocomplete", function() {
                    clearTimeout(e.blurTimeoutId)
                }), e.fixPositionCapture = function() {
                    e.visible && e.fixPosition()
                }, p(window).on("resize.autocomplete", e.fixPositionCapture), e.el.on("keydown.autocomplete", function(t) {
                    e.onKeyPress(t)
                }), e.el.on("keyup.autocomplete", function(t) {
                    e.onKeyUp(t)
                }), e.el.on("blur.autocomplete", function() {
                    e.onBlur()
                }), e.el.on("focus.autocomplete", function() {
                    e.onFocus()
                }), e.el.on("change.autocomplete", function(t) {
                    e.onKeyUp(t)
                }), e.el.on("input.autocomplete", function(t) {
                    e.onKeyUp(t)
                })
            },
            onFocus: function() {
                this.fixPosition(), this.el.val().length >= this.options.minChars && this.onValueChange()
            },
            onBlur: function() {
                var t = this;
                t.blurTimeoutId = setTimeout(function() {
                    t.hide()
                }, 200)
            },
            abortAjax: function() {
                this.currentRequest && (this.currentRequest.abort(), this.currentRequest = null)
            },
            setOptions: function(t) {
                var e = p.extend({}, this.options, t);
                this.isLocal = Array.isArray(e.lookup), this.isLocal && (e.lookup = this.verifySuggestionsFormat(e.lookup)), e.orientation = this.validateOrientation(e.orientation, "bottom"), p(this.suggestionsContainer).css({
                    "max-height": e.maxHeight + "px",
                    width: e.width + "px",
                    "z-index": e.zIndex
                }), this.options = e
            },
            clearCache: function() {
                this.cachedResponse = {}, this.badQueries = []
            },
            clear: function() {
                this.clearCache(), this.currentValue = "", this.suggestions = []
            },
            disable: function() {
                this.disabled = !0, clearTimeout(this.onChangeTimeout), this.abortAjax()
            },
            enable: function() {
                this.disabled = !1
            },
            fixPosition: function() {
                var t = p(this.suggestionsContainer),
                    e = t.parent().get(0);
                if (e === document.body || this.options.forceFixPosition) {
                    var n = this.options.orientation,
                        i = t.outerHeight(),
                        s = this.el.outerHeight(),
                        o = this.el.offset(),
                        r = {
                            top: o.top,
                            left: o.left
                        };
                    if ("auto" === n) {
                        var a = p(window).height(),
                            l = p(window).scrollTop(),
                            c = -l + o.top - i,
                            u = l + a - (o.top + s + i);
                        n = Math.max(c, u) === c ? "top" : "bottom"
                    }
                    if (r.top += "top" === n ? -i : s, e !== document.body) {
                        var h, d = t.css("opacity");
                        this.visible || t.css("opacity", 0).show(), h = t.offsetParent().offset(), r.top -= h.top, r.left -= h.left, this.visible || t.css("opacity", d).hide()
                    }
                    "auto" === this.options.width && (r.width = this.el.outerWidth() + "px"), t.css(r)
                }
            },
            isCursorAtEnd: function() {
                var t, e = this.el.val().length,
                    n = this.element.selectionStart;
                return "number" == typeof n ? n === e : !document.selection || ((t = document.selection.createRange()).moveStart("character", -e), e === t.text.length)
            },
            onKeyPress: function(t) {
                var e = this;
                if (e.disabled || e.visible || t.which !== c || !e.currentValue) {
                    if (!e.disabled && e.visible) {
                        switch (t.which) {
                            case n:
                                e.el.val(e.currentValue), e.hide();
                                break;
                            case l:
                                if (e.hint && e.options.onHint && e.isCursorAtEnd()) {
                                    e.selectHint();
                                    break
                                }
                                return;
                            case s:
                                if (e.hint && e.options.onHint) return void e.selectHint();
                                if (-1 === e.selectedIndex) return void e.hide();
                                if (e.select(e.selectedIndex), !1 === e.options.tabDisabled) return;
                                break;
                            case r:
                                if (-1 === e.selectedIndex) return void e.hide();
                                e.select(e.selectedIndex);
                                break;
                            case a:
                                e.moveUp();
                                break;
                            case c:
                                e.moveDown();
                                break;
                            default:
                                return
                        }
                        t.stopImmediatePropagation(), t.preventDefault()
                    }
                } else e.suggest()
            },
            onKeyUp: function(t) {
                var e = this;
                if (!e.disabled) {
                    switch (t.which) {
                        case a:
                        case c:
                            return
                    }
                    clearTimeout(e.onChangeTimeout), e.currentValue !== e.el.val() && (e.findBestHint(), 0 < e.options.deferRequestBy ? e.onChangeTimeout = setTimeout(function() {
                        e.onValueChange()
                    }, e.options.deferRequestBy) : e.onValueChange())
                }
            },
            onValueChange: function() {
                var t = this,
                    e = t.options,
                    n = t.el.val(),
                    i = t.getQuery(n);
                return t.selection && t.currentValue !== i && (t.selection = null, (e.onInvalidateSelection || p.noop).call(t.element)), clearTimeout(t.onChangeTimeout), t.currentValue = n, t.selectedIndex = -1, e.triggerSelectOnValidInput && t.isExactMatch(i) ? void t.select(0) : void(i.length < e.minChars ? t.hide() : t.getSuggestions(i))
            },
            isExactMatch: function(t) {
                var e = this.suggestions;
                return 1 === e.length && e[0].value.toLowerCase() === t.toLowerCase()
            },
            getQuery: function(t) {
                var e, n = this.options.delimiter;
                return n ? (e = t.split(n), p.trim(e[e.length - 1])) : t
            },
            getSuggestionsLocal: function(e) {
                var t, n = this.options,
                    i = e.toLowerCase(),
                    s = n.lookupFilter,
                    o = parseInt(n.lookupLimit, 10);
                return t = {
                    suggestions: p.grep(n.lookup, function(t) {
                        return s(t, e, i)
                    })
                }, o && t.suggestions.length > o && (t.suggestions = t.suggestions.slice(0, o)), t
            },
            getSuggestions: function(i) {
                var t, e, n, s, o = this,
                    r = o.options,
                    a = r.serviceUrl;
                if (r.params[r.paramName] = i, !1 !== r.onSearchStart.call(o.element, r.params)) {
                    if (e = r.ignoreParams ? null : r.params, p.isFunction(r.lookup)) return void r.lookup(i, function(t) {
                        o.suggestions = t.suggestions, o.suggest(), r.onSearchComplete.call(o.element, i, t.suggestions)
                    });
                    o.isLocal ? t = o.getSuggestionsLocal(i) : (p.isFunction(a) && (a = a.call(o.element, i)), n = a + "?" + p.param(e || {}), t = o.cachedResponse[n]), t && Array.isArray(t.suggestions) ? (o.suggestions = t.suggestions, o.suggest(), r.onSearchComplete.call(o.element, i, t.suggestions)) : o.isBadQuery(i) ? r.onSearchComplete.call(o.element, i, []) : (o.abortAjax(), s = {
                        url: a,
                        data: e,
                        type: r.type,
                        dataType: r.dataType
                    }, p.extend(s, r.ajaxSettings), o.currentRequest = p.ajax(s).done(function(t) {
                        var e;
                        o.currentRequest = null, e = r.transformResult(t, i), o.processResponse(e, i, n), r.onSearchComplete.call(o.element, i, e.suggestions)
                    }).fail(function(t, e, n) {
                        r.onSearchError.call(o.element, i, t, e, n)
                    }))
                }
            },
            isBadQuery: function(t) {
                if (!this.options.preventBadQueries) return !1;
                for (var e = this.badQueries, n = e.length; n--;)
                    if (0 === t.indexOf(e[n])) return !0;
                return !1
            },
            hide: function() {
                var t = this,
                    e = p(t.suggestionsContainer);
                p.isFunction(t.options.onHide) && t.visible && t.options.onHide.call(t.element, e), t.visible = !1, t.selectedIndex = -1, clearTimeout(t.onChangeTimeout), p(t.suggestionsContainer).hide(), t.signalHint(null)
            },
            suggest: function() {
                if (this.suggestions.length) {
                    var s, t = this,
                        o = t.options,
                        r = o.groupBy,
                        a = o.formatResult,
                        l = t.getQuery(t.currentValue),
                        c = t.classes.suggestion,
                        e = t.classes.selected,
                        n = p(t.suggestionsContainer),
                        i = p(t.noSuggestionsContainer),
                        u = o.beforeRender,
                        h = "";
                    return o.triggerSelectOnValidInput && t.isExactMatch(l) ? void t.select(0) : (p.each(t.suggestions, function(t, e) {
                        var n, i;
                        r && (h += (i = (n = e).data[r], s === i ? "" : (s = i, o.formatGroup(n, s)))), h += '<div class="' + c + '" data-index="' + t + '">' + a(e, l, t) + "</div>"
                    }), this.adjustContainerWidth(), i.detach(), n.html(h), p.isFunction(u) && u.call(t.element, n, t.suggestions), t.fixPosition(), n.show(), o.autoSelectFirst && (t.selectedIndex = 0, n.scrollTop(0), n.children("." + c).first().addClass(e)), t.visible = !0, void t.findBestHint())
                }
                this.options.showNoSuggestionNotice ? this.noSuggestions() : this.hide()
            },
            noSuggestions: function() {
                var t = this.options.beforeRender,
                    e = p(this.suggestionsContainer),
                    n = p(this.noSuggestionsContainer);
                this.adjustContainerWidth(), n.detach(), e.empty(), e.append(n), p.isFunction(t) && t.call(this.element, e, this.suggestions), this.fixPosition(), e.show(), this.visible = !0
            },
            adjustContainerWidth: function() {
                var t, e = this.options,
                    n = p(this.suggestionsContainer);
                "auto" === e.width ? (t = this.el.outerWidth(), n.css("width", 0 < t ? t : 300)) : "flex" === e.width && n.css("width", "")
            },
            findBestHint: function() {
                var i = this.el.val().toLowerCase(),
                    s = null;
                i && (p.each(this.suggestions, function(t, e) {
                    var n = 0 === e.value.toLowerCase().indexOf(i);
                    return n && (s = e), !n
                }), this.signalHint(s))
            },
            signalHint: function(t) {
                var e = "";
                t && (e = this.currentValue + t.value.substr(this.currentValue.length)), this.hintValue !== e && (this.hintValue = e, this.hint = t, (this.options.onHint || p.noop)(e))
            },
            verifySuggestionsFormat: function(t) {
                return t.length && "string" == typeof t[0] ? p.map(t, function(t) {
                    return {
                        value: t,
                        data: null
                    }
                }) : t
            },
            validateOrientation: function(t, e) {
                return t = p.trim(t || "").toLowerCase(), -1 === p.inArray(t, ["auto", "bottom", "top"]) && (t = e), t
            },
            processResponse: function(t, e, n) {
                var i = this.options;
                t.suggestions = this.verifySuggestionsFormat(t.suggestions), i.noCache || (this.cachedResponse[n] = t, i.preventBadQueries && !t.suggestions.length && this.badQueries.push(e)), e === this.getQuery(this.currentValue) && (this.suggestions = t.suggestions, this.suggest())
            },
            activate: function(t) {
                var e, n = this.classes.selected,
                    i = p(this.suggestionsContainer),
                    s = i.find("." + this.classes.suggestion);
                return i.find("." + n).removeClass(n), this.selectedIndex = t, -1 !== this.selectedIndex && s.length > this.selectedIndex ? (e = s.get(this.selectedIndex), p(e).addClass(n), e) : null
            },
            selectHint: function() {
                var t = p.inArray(this.hint, this.suggestions);
                this.select(t)
            },
            select: function(t) {
                this.hide(), this.onSelect(t)
            },
            moveUp: function() {
                var t = this;
                if (-1 !== t.selectedIndex) return 0 === t.selectedIndex ? (p(t.suggestionsContainer).children().first().removeClass(t.classes.selected), t.selectedIndex = -1, t.el.val(t.currentValue), void t.findBestHint()) : void t.adjustScroll(t.selectedIndex - 1)
            },
            moveDown: function() {
                this.selectedIndex !== this.suggestions.length - 1 && this.adjustScroll(this.selectedIndex + 1)
            },
            adjustScroll: function(t) {
                var e = this,
                    n = e.activate(t);
                if (n) {
                    var i, s, o, r = p(n).outerHeight();
                    i = n.offsetTop, o = (s = p(e.suggestionsContainer).scrollTop()) + e.options.maxHeight - r, i < s ? p(e.suggestionsContainer).scrollTop(i) : o < i && p(e.suggestionsContainer).scrollTop(i - e.options.maxHeight + r), e.options.preserveInput || e.el.val(e.getValue(e.suggestions[t].value)), e.signalHint(null)
                }
            },
            onSelect: function(t) {
                var e = this,
                    n = e.options.onSelect,
                    i = e.suggestions[t];
                e.currentValue = e.getValue(i.value), e.currentValue === e.el.val() || e.options.preserveInput || e.el.val(e.currentValue), e.signalHint(null), e.suggestions = [], e.selection = i, p.isFunction(n) && n.call(e.element, i)
            },
            getValue: function(t) {
                var e, n, i = this.options.delimiter;
                return i ? 1 === (n = (e = this.currentValue).split(i)).length ? t : e.substr(0, e.length - n[n.length - 1].length) + t : t
            },
            dispose: function() {
                this.el.off(".autocomplete").removeData("autocomplete"), p(window).off("resize.autocomplete", this.fixPositionCapture), p(this.suggestionsContainer).remove()
            }
        }, p.fn.devbridgeAutocomplete = function(n, i) {
            var s = "autocomplete";
            return arguments.length ? this.each(function() {
                var t = p(this),
                    e = t.data(s);
                "string" == typeof n ? e && "function" == typeof e[n] && e[n](i) : (e && e.dispose && e.dispose(), e = new o(this, n), t.data(s, e))
            }) : this.first().data(s)
        }, p.fn.autocomplete || (p.fn.autocomplete = p.fn.devbridgeAutocomplete)
    }),
    function(e, n) {
        "use strict";
        "object" == typeof module && module.exports ? module.exports = n(e, require("jquery")) : "function" == typeof define && define.amd ? define(["jquery"], function(t) {
            return n(e, t)
        }) : e.dpfads = n(e, e.jQuery || e.$)
    }(this, function(t, o, e) {
        "use strict";
        var i = {},
            s = {},
            r = (o(t), o(document), function() {
                return r
            });
        return i.defaults = {
            max_shown_ads: 3,
            rotate_ads: !0,
            logger: {
                enabled: !1
            }
        }, i.placements_ad_count = {}, s = o.extend(!0, {}, i.defaults, s), r.config = function(n, t) {
            if (!(n && t && n in i.defaults)) return r.log("ValueError"), !1;
            "object" == typeof t ? o.each(t, function(t, e) {
                s[n][t] = e
            }) : s[n] = t
        }, r.log = function(t) {
            s.logger.enabled
        }, r.getAds = function(t, e) {
            if (!t || !e) return r.log("ValueError"), !1;
            o.ajax({
                url: "/advertisements/" + t + "/" + e,
                method: "GET",
                success: function(t) {
                    t = o.parseJSON(t), r.renderAds(t)
                }
            })
        }, r.renderAds = function(t) {
            if (!t) return r.log("ValueError"), !1;
            o.each(t, function(t, i) {
                var s = o(t);
                o.each(i, function(t) {
                    var e = i[t];
                    if (e.template = o(e.template).attr("id", "_" + Math.random().toString(36).substr(2, 9)), e.id = e.template.data("id"), s.find("*[data-id=" + e.id + "]").remove(), e.position) {
                        var n = e.position - 1;
                        if (s.children().length >= n) return s.children(":eq(" + n + ")").after(e.template), !0;
                        s.append(e.template)
                    }
                })
            })
        }, r.rotateAds = function(t, e) {}, r
    }), $(document).ready(function() {
        $.validator.addMethod("laxEmail", function(t, e) {
            return this.optional(e) || /^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(t)
        }, "Please enter a valid email address."), $.validator.addMethod("isEmail", function(t, e) {
            return this.optional(e) || /^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/.test(t)
        }, "Email not valid."), $.validator.addMethod("isLink", function(t, e) {
            return this.optional(e) || /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/.test(t)
        }, "Please enter a valid URL."), $.validator.addMethod("valueNotEquals", function(t, e, n) {
            return n !== t
        }, "Value must not equal arg.")
    }), window.dpf = {
        validate: {
            newsletter_form: function() {
                return $("#homepage_newsletter").validate({
                    rules: {
                        email: {
                            required: !0,
                            laxEmail: !0
                        }
                    },
                    messages: {
                        email: {
                            required: "Required Please"
                        }
                    }
                }), window.dpf
            },
            newsletter_form_sidebar: function() {
                return $("#users_news_store_first").validate({
                    rules: {
                        email: {
                            required: !0,
                            laxEmail: !0
                        }
                    },
                    messages: {
                        email: {
                            required: "Required Please"
                        }
                    }
                }), window.dpf
            },
            login_popup: function() {
                return $("#top_login").validate({
                    rules: {
                        "form[email]": {
                            required: !0,
                            laxEmail: !0
                        },
                        "form[password]": {
                            required: !0
                        },
                        messages: {
                            "form[email]": {
                                required: "Required Please",
                                email: "Bad E-mail"
                            },
                            "form[password]": {
                                required: "Required Please"
                            }
                        }
                    }
                }), window.dpf
            },
            login_page: function() {
                return $("#user-login").validate({
                    rules: {
                        "form[email]": {
                            required: !0,
                            laxEmail: !0
                        },
                        "form[password]": {
                            required: !0
                        },
                        messages: {
                            "form[email]": {
                                required: "Required Please",
                                email: "Bad E-mail"
                            },
                            "form[password]": {
                                required: "Required Please"
                            }
                        }
                    }
                }), window.dpf
            },
            signup_popup: function() {
                return $("#top_register").validate({
                    rules: {
                        "form[email]": {
                            required: !0,
                            laxEmail: !0
                        },
                        "form[password]": {
                            required: !0
                        },
                        messages: {
                            "form[email]": {
                                required: "Required Please",
                                email: "Bad E-mail"
                            },
                            "form[password]": {
                                required: "Required Please"
                            }
                        }
                    }
                }), window.dpf
            },
            editcoupon_form: function() {
                return $("#editcouponform").validate({
                    rules: {
                        code: {
                            required: !0
                        },
                        shortdesc: {
                            required: !0,
                            minlength: 10
                        },
                        link: {
                            required: !0,
                            isLink: !0
                        }
                    },
                    messages: {
                        code: {
                            required: "Required"
                        },
                        shortdesc: {
                            required: "Required"
                        },
                        link: {
                            required: "Required"
                        }
                    }
                }), window.dpf
            },
            addstore_form: function() {
                return $("#addstore").validate({
                    rules: {
                        domain: {
                            required: !0,
                            isLink: !0
                        },
                        name: {
                            required: !0
                        },
                        categorysearch: {
                            required: !0
                        },
                        description: {
                            required: !0
                        }
                    },
                    messages: {
                        domain: {
                            required: "Required Please"
                        },
                        name: {
                            required: "Required Please"
                        },
                        categorysearch: {
                            required: "Required Please"
                        },
                        description: {
                            required: "Required Please"
                        }
                    }
                }), window.dpf
            },
            recoverpass_form: function() {
                return $("#recover-password-popup").validate({
                    rules: {
                        email: {
                            required: !0,
                            laxEmail: !0
                        }
                    }
                }), window.dpf
            },
            confirmpass: function() {
                return $("#userprofile").validate({
                    rules: {
                        pass_again: {
                            equalTo: "#InputPassword"
                        }
                    }
                }), window.dpf
            },
            searchLinkFinish: function() {
                return $("#searchLinkFinish").validate({
                    rules: {
                        email: {
                            required: !0,
                            laxEmail: !0
                        }
                    },
                    messages: {
                        required: "Required Please"
                    }
                }), window.dpf
            },
            searchLink: function() {
                return $("#searchLink").validate({
                    rules: {
                        isLink: {
                            required: !0,
                            isLink: !0
                        }
                    },
                    messages: {
                        isLink: {
                            required: "This field cannot be empty"
                        }
                    }
                }), window.dpf
            },
            scholarships_apply: function() {
                return $("#schoolarSubmit").validate({
                    rules: {
                        name: {
                            required: !0
                        },
                        email: {
                            required: !0,
                            laxEmail: !0
                        },
                        uni: {
                            required: !0
                        },
                        studies: {
                            required: !0
                        },
                        productsessay: {
                            required: !0
                        },
                        pricesessay: {
                            required: !0
                        },
                        onlineessay: {
                            required: !0
                        }
                    }
                }), window.dpf
            },
            contact_form: function() {
                $("#contact_us_form").validate({
                    rules: {
                        full_name: {
                            required: !0,
                            minlength: 5
                        },
                        email_address: {
                            required: !0,
                            laxEmail: !0
                        },
                        question_regarding: {
                            required: !0
                        },
                        message: {
                            required: !0,
                            minlength: 30
                        }
                    },
                    messages: {
                        full_name: {
                            required: "Required Please"
                        },
                        email_address: {
                            required: "Required Please"
                        },
                        question_regarding: {
                            required: "Required Please"
                        },
                        message: {
                            required: "Required Please"
                        }
                    }
                })
            }
        }
    },
    function() {
        var E, A;
        E = this.jQuery || window.jQuery, A = E(window), E.fn.stick_in_parent = function(t) {
            var w, C, e, n, _, i, $, k, T, S, D;
            for (null == t && (t = {}), D = t.sticky_class, _ = t.inner_scrolling, S = t.recalc_every, T = t.parent, k = t.offset_top, $ = t.spacer, C = t.bottoming, null == k && (k = 0), null == T && (T = void 0), null == _ && (_ = !0), null == D && (D = "is_stuck"), w = E(document), null == C && (C = !0), e = function(s, o, r, a, l, c, u, h) {
                    var d, t, p, f, g, m, v, y, e, b, x, i;
                    if (!s.data("sticky_kit")) {
                        if (s.data("sticky_kit", !0), g = w.height(), v = s.parent(), null != T && (v = v.closest(T)), !v.length) throw "failed to find stick parent";
                        if (d = p = !1, (x = null != $ ? $ && s.closest($) : E("<div />")) && x.css("position", s.css("position")), (y = function() {
                                var t, e, n;
                                if (!h && (g = w.height(), t = parseInt(v.css("border-top-width"), 10), e = parseInt(v.css("padding-top"), 10), o = parseInt(v.css("padding-bottom"), 10), r = v.offset().top + t + e, a = v.height(), p && (d = p = !1, null == $ && (s.insertAfter(x), x.detach()), s.css({
                                        position: "",
                                        top: "",
                                        width: "",
                                        bottom: ""
                                    }).removeClass(D), n = !0), l = s.offset().top - (parseInt(s.css("margin-top"), 10) || 0) - k, c = s.outerHeight(!0), u = s.css("float"), x && x.css({
                                        width: s.outerWidth(!0),
                                        height: c,
                                        display: s.css("display"),
                                        "vertical-align": s.css("vertical-align"),
                                        float: u
                                    }), n)) return i()
                            })(), c !== a) return f = void 0, m = k, b = S, i = function() {
                            var t, e, n, i;
                            if (!h && (n = !1, null != b && (--b <= 0 && (b = S, y(), n = !0)), n || w.height() === g || y(), n = A.scrollTop(), null != f && (e = n - f), f = n, p ? (C && (i = a + r < n + c + m, d && !i && (d = !1, s.css({
                                    position: "fixed",
                                    bottom: "",
                                    top: m
                                }).trigger("sticky_kit:unbottom"))), n < l && (p = !1, m = k, null == $ && ("left" !== u && "right" !== u || s.insertAfter(x), x.detach()), t = {
                                    position: "",
                                    width: "",
                                    top: ""
                                }, s.css(t).removeClass(D).trigger("sticky_kit:unstick")), _ && ((t = A.height()) < c + k && !d && (m -= e, m = Math.max(t - c, m), m = Math.min(k, m), p && s.css({
                                    top: m + "px"
                                })))) : l < n && (p = !0, (t = {
                                    position: "fixed",
                                    top: m
                                }).width = "border-box" === s.css("box-sizing") ? s.outerWidth() + "px" : s.width() + "px", s.css(t).addClass(D), null == $ && (s.after(x), "left" !== u && "right" !== u || x.append(s)), s.trigger("sticky_kit:stick")), p && C && (null == i && (i = a + r < n + c + m), !d && i))) return d = !0, "static" === v.css("position") && v.css({
                                position: "relative"
                            }), s.css({
                                position: "absolute",
                                bottom: o,
                                top: "auto"
                            }).trigger("sticky_kit:bottom")
                        }, e = function() {
                            return y(), i()
                        }, t = function() {
                            if (h = !0, A.off("touchmove", i), A.off("scroll", i), A.off("resize", e), E(document.body).off("sticky_kit:recalc", e), s.off("sticky_kit:detach", t), s.removeData("sticky_kit"), s.css({
                                    position: "",
                                    bottom: "",
                                    top: "",
                                    width: ""
                                }), v.position("position", ""), p) return null == $ && ("left" !== u && "right" !== u || s.insertAfter(x), x.remove()), s.removeClass(D)
                        }, A.on("touchmove", i), A.on("scroll", i), A.on("resize", e), E(document.body).on("sticky_kit:recalc", e), s.on("sticky_kit:detach", t), setTimeout(i, 0)
                    }
                }, n = 0, i = this.length; n < i; n++) t = this[n], e(E(t));
            return this
        }
    }.call(this), $(window).on("load", function() {
        $(".owl-carousel").owlCarousel({
            loop: !1,
            margin: 15,
            stagePadding: 0,
            nav: !0,
            autoplay: !1,
            autoplayTimeout: 3500,
            autoplayHoverPause: !0,
            navText: ["<i class='df-arrow-left'></i>", "<i class='df-arrow-right'></i>"],
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    }), $(function() {
        $.holdReady(!0), $("img.lazy, img.lazy-load").Lazy({
            effect: "fadeIn",
            effectTime: 250,
            visibleOnly: !0,
            attribute: "data-original"
        }), $("img.lazytrack").Lazy({
            effect: "fadeIn",
            visibleOnly: !1,
            attribute: "data-original",
            threshold: 0
        }), $.holdReady(!1)
    }), $(document).ready(function() {
        $(".ad-box.sticky").stick_in_parent({
            parent: ".main-container",
            offset_top: 15
        });
        var s = $("#alert-message");
        new Clipboard(".ocode.revealed");
        var w = $("#registerOption").data("option");
        $("#myaccount").length || ("visit" === w ? C() : "scrollenabled" !== w && "scrolldisabled" !== w || $(window).scroll(function() {
            $(window).scrollTop() > $(window).height() && C()
        })), window.dpf.validate.newsletter_form(), window.dpf.validate.newsletter_form_sidebar(), s.on("click", ".close-button", function() {
            s.slideUp(250)
        }), "" !== $.trim(s.text()) && s.find("text").text($.trim(s.text()));
        try {
            function e() {
                if (Boolean(s.text().trim().length) && (s.slideDown(250).css("top", "0"), s.is(":visible"))) {
                    var t = 75 * s.text().length;
                    setTimeout(function() {
                        setTimeout(function() {
                            s.slideUp(250)
                        }, 450)
                    }, t)
                }
            }
            e(), new MutationObserver(function(t) {
                e()
            }).observe(s.find(".text")[0], {
                attributes: !0,
                childList: !0,
                characterData: !0
            })
        } catch (t) {
            $.cookie("alertUnsupported") || (alert("Your browser is not fully supported by .\nPlease upgrade to the latest version of IE/Edge/Chrome/Opera/Firefox/Safari!"), $.cookie("alertUnsupported", !0))
        }
       
        var t = 0;

        function n() {
            $("#layout, .newsletter, .site-footer").removeClass("activeState"), $(".nav-mobile, .nav-mobile-container").removeClass("active"), $(".site-overlay").removeClass("show")
        }
        $("#layout").click(function() {
            t && (n(), t = 0)
        }), $(".nav-mobile-handle").click(function() {
            if (t = 0, $(".nav-mobile.active-search").length) return $(".nav-mobile").removeClass("active-search"), void $(".search").toggleClass("sToggled");
            $("#layout, .newsletter, .site-footer").toggleClass("activeState"), $(".nav-mobile").toggleClass("active"), $(".nav-mobile-container").toggleClass("active"), $(document).keyup(function(t) {
                27 === t.keyCode && n()
            }), $(".search").removeClass("sToggled"), setTimeout(function() {
                t = 1
            }, 250)
        }), $(".search-mobile-handle").click(function() {
            t = 0, $(".search").toggleClass("sToggled"), $(".nav-mobile").addClass("active-search"), n(), setTimeout(function() {
                t = 1, $("#top-search").focus()
            }, 550)
        }), $("body.body-store-view").length && h("all", "menu", !1), $("#myaccount").click(function(t) {
            t.preventDefault(), $(this).toggleClass("opened"), $(".header__dropdown").toggle()
        }), $(".phrases-first-child").find("span").addClass("loading"), $(".sidebar__box-input--btn").click(function() {
            if (location.pathname.replace(/^\//, "") === this.pathname.replace(/^\//, "") && location.hostname === this.hostname) {
                var t = $(this.hash);
                if ((t = t.length ? t : $("[name=" + this.hash.slice(1) + "]")).length) return $("html, body").animate({
                    scrollTop: t.offset().top
                }, 500), $("#users_news_store_first").find("input[name=email]").focus(), !1
            }
        }), $("#userprofile .form-control").each(function() {
            var t = $(this);
            t.data("oldVal", t.val()), t.bind("propertychange change click keyup input paste", function() {
                t.data("oldVal") !== t.val() && (t.data("oldVal", t.val()), $(".save-changes-btn").removeClass("save-changes-btn--disabled").removeAttr("disabled"))
            })
        }), $(".homepage.categories .view-more").on("click", function(t) {
            var e = $(this);
            e.toggleClass("flipped"), e.hasClass("flipped") ? e.closest(".homepage").find(".popular-category").not(":visible").slideDown(250) : e.closest(".homepage").find(".popular-category[style]").slideUp(250)
        }), $(".homepage.stores .view-more").on("click", function(t) {
            var e = $(this);
            e.toggleClass("flipped"), e.hasClass("flipped") ? e.closest(".homepage").find(".row > div").not(":visible").slideDown(250) : e.closest(".homepage").find(".row > div[style]").slideUp(250)
        }), $(".viewstore__product:nth-child(3) button, .viewstore__product:nth-child(10) button").each(function() {
            var t = $(this).text();
            $(this).text(t.replace("Notify me", "Watching")), $(this).parent().addClass("watching")
        }), $(".topmenu__menu").click(function(t) {
            t.preventDefault(), $("#sidemenu, #layout, .site-footer, .newsletter").toggleClass("activeState")
        }), $(".coupon-images-more").on("click", function() {
            $(this).toggleClass("expanded"), $(".coupon-images").slideToggle(250), $(window).scroll()
        }), $(".leftmenu-list a.more").on("click", function() {
            $(this).toggleClass("expanded")
        }), $("#instore-search").on("focus", function() {
            $(".inpage-search label").fadeOut(50), $(this).closest(".filter-form").addClass("filter-form-fw"), $(".inpage-search .input-group span.search-close").css("display", "flex")
        }).on("blur", function() {
            $this = $(this), setTimeout(function() {
                $(".inpage-search label").fadeIn(50), $this.closest(".filter-form").removeClass("filter-form-fw"), $(".inpage-search .input-group span.search-close").attr("style", "")
            }, 500)
        }), $(".category-browse").closest("#layout").addClass("category-browse-layout"), $(".category-list__store-wrap").closest("#layout").addClass("category-page-layout"), $(document).on("click", ".viewstore__product", function(t) {
            window.open("/hop.php?url=" + $(this).data("offer"))
        }), $(document).on("click", ".votes-enabled i", function() {
            var t = $(this).data("id");
            $('.votes-enabled i.active[data-id="' + t + '"]').length || $.fancybox.open({
                type: "ajax",
                baseClass: "couponhop",
                touch: !1,
                beforeShow: function() {
                    $("body").css({
                        "overflow-y": "hidden"
                    })
                },
                afterClose: function() {
                    $("body").css({
                        "overflow-y": "visible"
                    })
                },
                helpers: {
                    overlay: {
                        locked: !0
                    }
                },
                src: "/coupons/hamza_yaha_par_kam_krlai_/?id=" + t
            })
        }), $(".oactions").find(".action:not(.disabled)").click(function(t) {
            t.preventDefault();
            var e = $(this),
                n = e.closest(".obox"),
                i = n.data("id"),
                s = n.find(".details-terms-box"),
                o = n.find(".comments-box");
            n.find(".action").not(this).removeClass("active"), e.toggleClass("active"), s.hide(), o.hide();
            var r = n.find(".odetails");
            if (r.is(":visible") && !e.hasClass("active") ? r.hide() : r.show(), e.hasClass("comm-action")) {
                if (o.hasClass("comments-signup-required") && o.append("<p class='signup-req'>You need to <a href='/users/signup' class='signupbox'>create an account</a> to add a comment.</p>"), o.is(":visible")) $(".signup-req").remove(), $(".add-comment-form").remove();
                else if (e.hasClass("no-comments")) o.closest(".obox").siblings(".obox").find(".signup-req").remove();
                else {
                    var a = $("body").hasClass("guest");
                    a || o.hasClass("comments-signup-required") || o.find(".add-comment-form").length ? a && !o.find(".title.guest").length && o.prepend('<div class="title guest text-center">You need to <a data-ref="/at/childrensalon.com" class="link signupbox">create an account</a> to add a comment.</div>') : o.prepend('<div class="add-comment-form"><div class="title text-center">Tell us what you think about this coupon.</div><div class="coupon-comments-form clearfix"><div class="text response">Your comment has been posted. Click <span class="repost">here</span> if you want to post another comment.</div><form method="post" action="/coupons/addcomment/" class="addcomment"><input type="hidden" name="couponid" value="' + i + '" class="couponid"/><div class="comment-area"><textarea required name="message" class="form-control" rows="4" placeholder="Write a comment..." onfocus="if (this.placeholder === \'Write a comment...\') { this.placeholder = \'\' };" onblur="if (this.placeholder === \'\') {this.placeholder = \'Write a comment...\'; }"></textarea><button class="btn post-comment" data-loading-text="Loading...">Post</button></div></form></div></div></div>'), o.closest(".obox").siblings(".obox").find(".add-comment-form").remove()
                }
                o.slideDown(250)
            } else e.hasClass("details-terms-action") && s.slideDown(250)
        }), $(document).on("click", ".ajax-container .terms", function(t) {
            t.preventDefault();
            $(this).find("span").data("id");
            $(".ajax-container .terms-box").slideToggle(150)
        }), $(document).on("click", ".close-odetails", function(t) {
            t.preventDefault();
            var e = $(this);
            e.closest(".terms-box").length && e.closest(".terms-box").stop(!0).slideUp(150), e.closest(".odetails").hide(), e.closest(".obox").find(".oactions .action").removeClass("active")
        }), $("input.form-control").keypress(function(t) {
            $(this).removeClass("has-error")
        }), $(".follow-close").click(function(t) {
            t.preventDefault(), $("#follow-container").slideUp(250), $.removeCookie("followalert", {
                path: "/"
            })
        });
        var i = $.cookie("followalert");
        i && "on" === i && $("#follow-container").show(), $(document).on("click", ".various", function(t) {
            t.preventDefault();
            var e = $(this);
            $.fancybox.close(), $.fancybox.open({
                type: "ajax",
                src: e.attr("href"),
                baseClass: "login",
                touch: !1,
                afterShow: function() {
                    $(".user-tabs--login").closest(".ajax-container").addClass("login-ajax-container"), $("#ufirstname, .login-ajax-container #uemail, .recover-form #email").focus(), $(".recover-form input").keyup(function() {
                        $(this).val() ? ($(this).closest(".form-group").find("label").addClass("fade-label"), $(this).addClass("typing")) : ($(this).closest(".form-group").find("label").removeClass("fade-label"), $(this).removeClass("typing"))
                    }), $("form#top_login input").keyup(function() {
                        $(this).val() ? ($(this).parent().find("label").addClass("typing-label"), $(this).addClass("typing")) : ($(this).parent().find("label").removeClass("typing-label"), $(this).removeClass("typing"))
                    }), $("#top_register input").keyup(function() {
                        $(this).val() ? ($(this).parent().find("label").addClass("typing-label"), $(this).addClass("typing")) : ($(this).parent().find("label").removeClass("typing-label"), $(this).removeClass("typing"))
                    })
                }
            })
        }), $(".label-effect-type").keyup(function() {
            $(this).val() ? ($(this).closest(".form-group").find("label").addClass("fade-label"), $(this).addClass("typing")) : ($(this).closest(".form-group").find("label").removeClass("fade-label").removeAttr("style"), $(this).removeClass("typing"))
        }), $(".label-effect-change").keyup(function() {
            $(this).val() || ($(this).closest(".form-group").find("label").removeClass("fade-label"), $(this).removeClass("typing valid"))
        }).on("blur", function() {
            $(this).val() || ($(this).closest(".form-group").find("label").removeClass("fade-label"), $(this).removeClass("typing valid"))
        }), $("#contact_question_regarding").change(function() {
            $(this).addClass("valid")
        }), $(".label-effect-change").change(function() {
            $(this).closest(".form-group").find("label").addClass("fade-label"), $(this).addClass("typing")
        }), $("#userprofile select").change(function() {
            $(this).css({
                "padding-left": "7px",
                transition: "none"
            })
        }), $("#userprofile select").each(function() {
            $(this).css({
                "padding-left": "7px"
            })
        }), $(".label-effect-click").click(function() {
            $(this).closest(".form-group").find("label").addClass("fade-label"), $(this).parent().parent().find("#category-search").addClass("typing")
        }), $("#userprofile select, #userprofile input, #userprofile textarea").each(function() {
            $(this).val() && ($(this).closest(".form-group").find("label").addClass("fade-label"), $(this).addClass("typing"))
        }), $(window).scroll(function() {
            93 < $(this).scrollTop() && ($(".search.sToggled").removeClass("sToggled"), t = 0)
        }), $("button[data-action=fancybox]").click(function(t) {
            var e = $(this);
            $.fancybox.open({
                type: "ajax",
                touch: !1,
                src: e.attr("data-url")
            })
        }), $(document).on("click", ".ohop, .otitle", function(t) {
            var e = $(this),
                n = e.closest(".obox"),
                i = e.closest(".coupons-container"),
                s = n.data("id");
            if (n.hasClass("oexpired")) {
                if (e.hasClass("ohop code")) {
                    var o = e.find(".ocode");
                    return o.text("COPIED"), void setTimeout(function() {
                        o.text(o.data("clipboard-text"))
                    }, 6e3)
                }
                window.open("/hop/coupon/" + s)
            } else if ($("#myaccount").length || "hop" !== w) {
                var r = n.data("type"),
                    a = n.data("otype"),
                    l = $('link[rel="canonical"]').attr("href"),
                    c = $.cookie("alreadyused") ? $.cookie("alreadyused") : "",
                    u = void 0 !== c ? c.split(",") : "";
                (!c || $.inArray("" + s, u) < 0) && $.cookie("alreadyused", c + s + ",", {
                    expires: 30,
                    path: l
                });
                var h = getUrlParameter("q"),
                    d = h ? "?q=" + h + "&" + r + "=" + s + "#" + r + s : "?" + r + "=" + s + "#" + r + s,
                    p = "/hop/coupon/" + s,
                    f = p;
                if (n.length) {
                    var g = {
                        position: i.find(".obox:visible:not(.sponsored)").index(n) + 1,
                        source: $("body").attr("class").split(" ")[0].split("-")[1],
                        used: n.hasClass("oused") ? 1 : 0,
                        event: e.hasClass("ohop") ? "bc" : "tc"
                    };
                    e.hasClass("orelated") && (g.source = g.source + "-related");
                    var m = {
                            position: "p",
                            source: "s",
                            used: "u",
                            event: "e"
                        },
                        v = {};
                    Object.keys(g).map(function(t, e) {
                        v[m[t]] = encodeURIComponent(g[t])
                    }), p += "?" + $.param(v)
                }
                var y = "code" === a ? d : p,
                    b = "code" === a ? p : d,
                    x = {
                        context: [],
                        list: []
                    };
                $(".store-filters label.active").each(function() {
                    x.context.push($(this).data("filter"))
                }), i.find(".obox:not(.sponsored):visible").each(function() {
                    x.list.push($(this).data("id"))
                }), x.context = x.context.join(" "), $.cookie("snapshot-" + s, btoa(JSON.stringify(x)), {
                    expires: 1,
                    path: f
                }), window.open(y), window.location = b
            } else C()
        }), $(".obox.rel-merch .offers .discount").click(function() {
            var t = $(this),
                e = t.data("id"),
                n = t.closest(".obox"),
                i = t.closest(".coupons-container").find(".obox:visible:not(.sponsored)").index(n) + 1;
            window.open("/hop/coupon/" + e + "?s=amazon&p=" + i), window.location = "?c=" + e + "#c" + e
        }), $(".related-merchants-coupons .offers ul li").click(function() {
            var t = $(this),
                e = t.data("id"),
                n = t.closest(".related-merchants-coupons"),
                i = t.closest(".coupons-container").children().index(n) + 1;
            window.open("/hop/coupon/" + e + "?s=amazon&p=" + i), window.location = "?c=" + e + "#c" + e
        }), $(document).on("click", ".rating-thumb i", function() {
            var t = $(this).data("id"),
                e = $.cookie("ovotes") ? $.cookie("ovotes") : "",
                n = void 0 !== e ? e.split(",") : "",
                i = $(this).hasClass("up") ? "y" : "n";
            (!e || $.inArray(t + ".y", n) < 0 || $.inArray(t + ".n", n) < 0) && ($.cookie("ovotes", e + t + "." + i + ",", {
                expires: 30,
                path: $('link[rel="canonical"]').attr("href")
            }), "y" === i ? $('.votes-enabled i.df-thumbs-o-up[data-id="' + t + '"]').addClass("active") : $('.votes-enabled i.df-thumbs-o-down[data-id="' + t + '"]').addClass("active"))
        }), $("#newsletter_side").submit(function(t) {
            t.preventDefault();
            var e = $(this).find("[name=email]").val(),
                n = $("#users_news_store_first");
            $("body").animate({
                scrollTop: n.offset().top
            }, 350, function() {
                "Enter your email address" === e && (e = ""), n.find("[name=email]").val(e).focus(), setTimeout(function() {
                    n.submit()
                }, 400)
            })
        }), $("#users_news_store_first, #homepage_newsletter").submit(function(t) {
            t.preventDefault();
            var i = $(this);
            $("button", i).attr("disabled", "disabled").addClass("disabled").text("Loading..."), $.ajax({
                type: i.attr("method"),
                url: i.attr("action"),
                data: i.serialize(),
                dataType: "json",
                success: function(t) {
                    $("button", i).removeAttr("disabled").removeClass("disabled").text("Subscribe");
                    var e = '<h4 class="newsletter-confirmation">' + t.html + "</h4>",
                        n = $(".footer .newsletter .container h4");
                    n.length && n.html(e), $(".newsletter-resend-email-btn").length && $(".newsletter-resend-email-btn").on("click", function() {
                        i.attr("action", "/newsletter/resend"), i.submit()
                    })
                }
            })
        }), $("#contact_us_form").submit(function(t) {
            t.preventDefault();
            var e = $(this);
            e.find("button").attr("disabled", "disabled").addClass("disabled"), e.find(".send-loading").css("display", "inline-block"), $.ajax({
                type: e.attr("method"),
                url: e.attr("action"),
                data: e.serialize(),
                dataType: "json",
                success: function(t) {
                    t && !t.error ? (s.attr("class", "success message").find(".text").text($.trim(t.html)), e.trigger("reset")) : t && t.error && s.attr("class", "error message").find(".text").text($.trim(t.html)), e.find("button").removeAttr("disabled").removeClass("disabled"), e.find(".send-loading").hide()
                }
            })
        }), $(".language__select").on("click", function(t) {
            t.preventDefault(), $(this).toggleClass("opened"), $(this).parent().find(".language__uk").toggleClass("opened")
        }), $(document).ready(function() {
            -1 !== navigator.userAgent.indexOf("Mac OS X") ? $(".header__top-links-wrap").addClass("mac") : $(".header__top-links-wrap").addClass("pc")
        });
        var o = new Bloodhound({
            datumTokenizer: function(t) {
                return Bloodhound.tokenizers.whitespace(t.value)
            },
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: "search.php/?term=%QUERY",
                wildcard: "%QUERY",
                ajax: {
                    type: "GET",
                    dataType: "json"
                }
            }
        });
        $(".excoupon .coupon-code").on("focus", function() {
            $(this).one("mouseup.mouseupSelect", function() {
                return $this.select(), !1
            }).one("mousedown", function() {
                $this.off("mouseup.mouseupSelect")
            }).select()
        }), $(".excoupon .coupon-code").on("click", function() {
            $(this).selectText()
        });
        var r = null;
        if ($("input#top-search").click(function() {
                r || (r = o.initialize(), $("input#top-search").typeahead(null, {
                    name: "services",
                    source: o.ttAdapter(),
                    displayKey: "domain",
                    minLength: "3",
                    hint: !1,
                    limit: 100,
                    templates: {
                        pending: ['<div class="clearfix top-search-response tt-suggestion"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center tt-nothing-found"><span class="stores-loading"><em class="double-bounce1"></em><em class="double-bounce2"></em></span></div></div>'],
                        suggestion: function(t) {
                            return '<div class="clearfix top-search-response"><a href="' + t.link + '"><div class="row"><div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><img src="' + t.image + '" class="img-responsive search-logo"/></div><div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 tt-hint-table search-description" style="display: inline-block;"><div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 tt-hint-col"><h3>' + t.label + '</h3><p><span class="tt-hint-domain">' + t.domain + '</span></p></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><span>' + t.coupons + "</span> offers available</div></div></div></a></div>"
                        },
                        empty: ['<div class="clearfix top-search-response tt-suggestion"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center tt-nothing-found">Nothing found</div></div>'],
                        footer: ['<div class="view-all"><a href="javascript:viewall()">View All</a></div>']
                    }
                }), $(this).focus())
            }), $("input#top-search").bind("typeahead:selected", function(t, e, n) {
                window.location = e.link
            }), window.location.hash) {
            var a, l = window.location.hash.substring(1),
                c = 0 === l.indexOf("c");
            if (l = l.replace(/c(.*)/, "$1"), !0 === c)(a = $("div[data-id='" + l + "']")).length && $(document).scrollTop(a.offset().top), $.fancybox.open({
                type: "ajax",
                baseClass: "couponhop",
                touch: !1,
                beforeShow: function() {
                    $("body").css({
                        "overflow-y": "hidden"
                    })
                },
                afterClose: function() {
                    $("body").css({
                        "overflow-y": "visible"
                    })
                },
                helpers: {
                    overlay: {
                        locked: !0
                    }
                },
                src: "/coupons/hamza_yaha_par_kam_krlai_/?id=" + l
            });
            else if (c = 0 === (l = window.location.hash.substring(1)).indexOf("p"), l = l.replace(/p(.*)/, "$1"), !0 === c)(a = $("div[data-id='" + l + "']")).length && $(document).scrollTop(a.offset().top), $.fancybox.open({
                type: "ajax",
                baseClass: "couponhop",
                touch: !1,
                beforeShow: function() {
                    $("body").css({
                        "overflow-y": "hidden"
                    })
                },
                afterClose: function() {
                    $("body").css({
                        "overflow-y": "visible"
                    })
                },
                helpers: {
                    overlay: {
                        locked: !0
                    }
                },
                src: "/coupons/getsocial/?id=" + l
            })
        }
        if ($(document).on("submit", ".addcomment", function(t) {
                event.preventDefault();
                var n = $(this).parents(".obox").data("id"),
                    i = $(this),
                    e = $("button .post-comment");
                return e.button("loading"), $.ajax({
                    type: $(this).attr("method"),
                    url: $(this).attr("action"),
                    data: $(this).serialize(),
                    complete: e.button("reset"),
                    success: function(t) {
                        if ("ok" === $.trim(t)) {
                            var e = i.parents(".coupon-comments-form");
                            i.slideUp(), e.parents(".comments-box").find(".title").hide(), i.trigger("reset"), e.children(".text").show(), $.ajax({
                                type: "GET",
                                url: "/coupons/getcomments",
                                data: {
                                    id: n
                                }
                            }).done(function(t) {
                                var e;
                                e = n, $.get("/coupons/getcomments?id=" + e, function(t) {
                                    $("div[data-id='" + e + "']").find(".comments-wrapper").replaceWith(t)
                                }), s.attr("class", "info message").find(".text").text("Your comment has been posted."), $(".coupon[data-id='" + n + "']").find(".comments-wrapper").slideUp().html(t).fadeIn()
                            })
                        } else s.attr("class", "error message").find(".text").text($.trim(t))
                    }
                }), !1
            }), $(document).on("click", ".repost", function(t) {
                $(this).closest(".coupon-comments-form").find(".addcomment").show(), $(this).parents(".comments-box").find(".title").show(), $(this).closest(".response").hide()
            }), $(".loginbox, .signupbox").on("click", function() {
                $(".nav-mobile-container").removeClass("active"), $("#layout").removeClass("activeState"), $(".site-overlay").removeClass("show"), $(".nav-mobile").removeClass("active")
            }), $(".loginbox").on("click", function(t) {
                t.preventDefault();
                var e = $(this).data("ref");
                return $.fancybox.open({
                    type: "ajax",
                    src: "/users/loggingIn?ref=" + e,
                    baseClass: "login",
                    touch: !1,
                    afterShow: function() {
                        $("form#top_login input").keyup(function() {
                            $(this).val() ? ($(this).parent().find("label").addClass("typing-label"), $(this).addClass("typing")) : ($(this).parent().find("label").removeClass("typing-label"), $(this).removeClass("typing"))
                        }), $(".fancybox-opened").addClass("fancybox-user")
                    }
                }), !1
            }), $(document).on("click", ".signupbox, .no-comments", function(t) {
                t.preventDefault();
                var e = $(this).data("ref");
                return $.fancybox.open({
                    type: "ajax",
                    src: "/users/signupIn?ref=" + e,
                    baseClass: "login",
                    touch: !1,
                    afterShow: function() {
                        $("#ufirstname").focus(), $("#top_register input").keyup(function() {
                            $(this).val() ? ($(this).parent().find("label").addClass("typing-label"), $(this).addClass("typing")) : ($(this).parent().find("label").removeClass("typing-label"), $(this).removeClass("typing"))
                        })
                    }
                }), !1
            }), $(".list-more").on("click", function(t) {
                t.preventDefault();
                var e = $(this).text();
                $(this).text("More" === e ? "Less" : "More"), $(this).parent(".leftmenu-list").children(".list-container").toggle()
            }), $(".save-coupon").click(function(t) {
                t.preventDefault();
                var e = $(this),
                    n = $(".header__counter.coupons"),
                    i = $(".coupons .header__counter-box"),
                    s = Number(i.data("count"));
                e.toggleClass("active");
                var o = "/users/savecoupon?id=" + e.closest(".obox").data("id");
                $.get(o, function() {
                    e.hasClass("active") ? (++s, n.addClass("active").find("i").removeClass("df-save-o").addClass("df-save"), i.text(99 <= s ? "99+" : s)) : (--s || n.removeClass("active").find("i").removeClass("df-save").addClass("df-save-o"), i.text(1 <= s ? s : "")), i.data("count", s)
                })
            }), $(document).on("click", ".subheader .follow, .nevermiss .follow, .sidebar-menu-box.store .follow, .give-me-coupons, .ajax-content .follow", function(t) {
                t.preventDefault();
                var e = $(".subheader .follow, .nevermiss .follow, .sidebar-menu-box.store .follow, .ajax-content .follow"),
                    n = $(".header__counter.follows");
                if (!$(this).hasClass("give-me-coupons") || ($(".nothing-found").empty().html('We\'ll notify you from the first coupons available. <span class="check-out">Be sure to check our related stores and offers!</span>'), !e.hasClass("active"))) {
                    var i = "/store/follow?id=" + e.data("id"),
                        s = $(".follows .header__counter-box"),
                        o = Number(s.data("count")) <= 98 ? Number(s.data("count")) : 99;
                    $.ajax({
                        url: i
                    }).done(function() {
                        e.toggleClass("active"), e.hasClass("active") ? ($.cookie("followalert", "on", {
                            expires: 30,
                            path: "/"
                        }), $("#follow-container").slideDown(), ++o, n.addClass("active").find("i").removeClass("df-follow-o").addClass("df-follow"), s.text(99 <= o ? "99+" : o)) : ($.removeCookie("followalert", {
                            path: "/"
                        }), $("#follow-container").slideUp(), --o || n.removeClass("active").find("i").removeClass("df-follow").addClass("df-follow-o"), s.text(1 <= o ? o : "")), s.data("count", o)
                    })
                }
            }), $(document).on("click", ".obox .osubtitle .view-more, .ajax-content .osubtitle .view-more", function() {
                var t = $(this);
                "View More" === t.text() ? (t.closest(".osubtitle").find("li:hidden").slideDown(250), t[0].childNodes[1].nodeValue = "View Less", t.find("i").addClass("active")) : (t.closest(".osubtitle").find("li[style]").slideUp(250), t[0].childNodes[1].nodeValue = "View More", t.find("i").removeClass("active")), $(window).scroll()
            }), $(".sidebar-menu-box .view-more").on("click", function() {
                var t = $(this);
                t.toggleClass("expanded").siblings(".ls-hidden").slideToggle(250);
                var e = t.text();
                t.text("View More" === e ? "View Less" : "View More"), $(window).scroll()
            }), $(".view-more-expired-offers").click(function() {
                var t = $(this),
                    e = $("#expired-coupons");
                "View More Expired Offers" === t.text() ? (e.find(".obox.oexpired:hidden").slideDown(250), t.text("View Less Expired Offers")) : (e.find(".obox.oexpired[style]").slideUp(250), t.text("View More Expired Offers"))
            }), $(".prefooter-box > .title").click(function() {
                $(this).toggleClass("toggled").siblings(".content").slideToggle(250)
            }), $(".profile-tabs-area a.tab").on("click", function(t) {
                t.preventDefault();
                var e = $(this).attr("href");
                return $(".profile-tabs__coupons-saved").hide(), $(e).length ? (e = e.split("#"), window.location.hash = e[1], d(window.location.hash)) : window.location.href = "/users/account" + e, !1
            }), $("#userprofile").length) {
            var u = $("#userprofile");
            $(".fileinput").on("change.bs.fileinput", function() {
                u.submit()
            })
        }

        function h(t, e, n) {
            var i = $(".coupons-container:not(.related):not(.expired):visible").first().find(".obox:not(.sponsored)"),
                s = i.length,
                o = i.filter("[data-coupon=yes]").length,
                r = i.filter("[data-deal=yes]").length,
                a = i.filter("[data-freeshipping=yes]").length,
                l = i.filter("[data-pending=yes]").length,
                c = i.filter("[data-active=yes]").length,
                u = i.filter("[data-expired=yes]").length,
                h = i.filter("[data-inactive=yes]").length,
                d = $(".store-filters.filters-type:visible").first().find("label");
            if (d.removeClass("disabled"), 0 === o && d.filter("[data-filter=coupon]:visible").addClass("disabled"), 0 === r && d.filter("[data-filter=deal]:visible").addClass("disabled"), 0 === a && d.filter("[data-filter=freeshipping]:visible").addClass("disabled"), 0 === l && d.filter("[data-filter=pending]:visible").addClass("disabled"), 0 === c && d.filter("[data-filter=active]:visible").addClass("disabled"), 0 === u && d.filter("[data-filter=expired]:visible").addClass("disabled"), 0 === h && d.filter("[data-filter=inactive]:visible").addClass("disabled"), i.filter("[data-verified=yes]").length || d.filter("[data-filter=verified]").addClass("disabled"), 0 === s && $("body").hasClass("body-store-view")) {
                var p = $(".search-response");
                if (!p.hasClass("viewstore__products")) {
                    var f = "There are no coupons or deals available for " + $("#left-hop").data("store") + ".";
                    p.text(f).show(), p.addClass("nothing-found offer-search__not-found").append('<button class="btn give-me-coupons">Give me coupons!</button>')
                }
            }
            d.filter("[data-filter=all]").find("span").html(s), d.filter("[data-filter=coupon]").find("span").html(o), d.filter("[data-filter=deal]").find("span").html(r), d.filter("[data-filter=freeshipping]").find("span").html(a), d.filter("[data-filter=active]").find("span").html(c), d.filter("[data-filter=expired]").find("span").html(u), d.filter("[data-filter=pending]").find("span").html(l), d.filter("[data-filter=inactive]").find("span").html(h), "all" !== t && "search" !== e || d.filter("[data-filter=all]").addClass("active");
            var g = n ? "[data-verified=yes]" : "";
            i.removeClass("blink").hide(), i.filter("" !== g ? g : "*").show(), "all" !== t && (i.hide(), i.filter("[data-" + t + "=yes]" + g).show()), n && i.filter(":visible").addClass("blink")
        }

        function C() {
            (!$.cookie("registerDisabled") || -1 < $.inArray(w, ["scrolldisabled", "hop"])) && $.fancybox.open({
                type: "ajax",
                btnTpl: {
                    close: ""
                },
                baseClass: "login",
                touch: !1,
                src: "/users/signupIn?ref=" + $(".singupbox").data("ref"),
                afterShow: function() {
                    "scrolldisabled" === w && $(".fancybox-close").hide(), $("#ufirstname").focus(), $("#top_register input").keyup(function() {
                        $(this).val() ? ($(this).parent().find("label").addClass("typing-label"), $(this).addClass("typing")) : ($(this).parent().find("label").removeClass("typing-label"), $(this).removeClass("typing"))
                    })
                },
                afterClose: function() {
                    $.cookie("registerDisabled", 1, {
                        expires: 30,
                        path: "/"
                    })
                }
            })
        }

        function d(t) {
            if (t && -1 !== t.indexOf("user-")) {
                $(".profile-tabs__tab").hide();
                var e = $(t).show();
                $(".profile-tab__heading").text(e.data("title")), h("all", "menu", !1)
            }
        }
        $(".profile-content").length && d(window.location.hash), $(".viewstore__product-options").each(function() {
            var t = Math.round($(this).parent().find(".viewstore__product-price-new span").html());
            $(this).find("#amount").keyup(function() {
                $(this).val() > t && $(this).val(t)
            }), $(this).find("#amount-2").keyup(function() {
                30 < $(this).val() && $(this).val(30)
            })
        }), $(".thumb").click(function(s) {
            var o = $(this),
                t = o.parent().data("id"),
                e = 0;
            o.hasClass("thumb-up") && (e = 1), $(".thumb").removeClass("active"), o.addClass("active"), $.ajax({
                url: "/store/vote?id=" + t + "&vote=" + e
            }).done(function(t) {
                if ((t = $.parseJSON(t)).error) {
                    var e = o.data("ref");
                    s.preventDefault(), $.fancybox.open({
                        type: "ajax",
                        baseClass: "login",
                        src: "/users/signupIn?ref=" + e,
                        touch: !1,
                        afterShow: function() {
                            $("#ufirstname").focus()
                        }
                    })
                } else if (t.ratingCount && t.ratingValue) {
                    $("#ratingCount").length || $("#ratingValue").length || $(".store_rating p").html('<span id="ratingValue"></span> out of <span id="ratingCount"></span> votes'), $("#ratingCount").text(t.ratingCount), $("#ratingValue").text(t.ratingValue), $(".sidebar-menu-box.rating .rating-col").remove(), $(".sidebar-menu-box.rating .content").append('<div class="rating-col rating-col-text voted text-center"><p>Thanks for your feedback!</p><p><i class="df df-smile"></i></p></div>');
                    var n = Math.round(t.ratingValue),
                        i = 1;
                    $(".store_rating .rating-star").removeClass("active").each(function() {
                        i <= n && $(this).addClass("active"), i += 1
                    })
                }
            })
        }), $.fn.selectText = function() {
            this.find("input").each(function() {
                0 !== $(this).prev().length && $(this).prev().hasClass("p_copy") || $('<p class="p_copy" style="position: absolute; z-index: -1;"></p>').insertBefore($(this)), $(this).prev().html($(this).val())
            });
            var t = document,
                e = this[0];
            if (t.body.createTextRange)(n = document.body.createTextRange()).moveToElementText(e), n.select();
            else if (window.getSelection) {
                var n, i = window.getSelection();
                (n = document.createRange()).selectNodeContents(e), i.removeAllRanges(), i.addRange(n)
            }
        }, $(".filters-type label").click(function(t) {
            t.preventDefault();
            var e = $(this),
                n = $(".coupons-container:not(.related):not(.expired):visible").first().find(".obox:not(.sponsored)"),
                i = $(".store-filters.filters-type:visible").first().find("label");
            if (!e.hasClass("disabled")) {
                var s = i.filter("[data-filter=verified]").first(),
                    o = e.data("filter");
                "verified" !== o ? $(".filters-type label").removeClass("active") : o = $(".filters-type label.active").data("filter"), s.hasClass("active") ? s.removeClass("active") : e.addClass("active"), h(o, "menu", s.hasClass("active")), s.removeClass("disabled"), n.filter("[data-verified='yes']:visible").length || s.addClass("disabled")
            }
        }), $.expr[":"].contains = $.expr.createPseudo(function(e) {
            return function(t) {
                return 0 <= $(t).text().toUpperCase().indexOf(e.toUpperCase())
            }
        }), window.changeProfileTab = d, window.filterSearch = h
    });