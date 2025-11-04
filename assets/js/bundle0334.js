! function(e) {
    var t = {};

    function i(n) {
        if (t[n]) return t[n].exports;
        var r = t[n] = {
            i: n,
            l: !1,
            exports: {}
        };
        return e[n].call(r.exports, r, r.exports, i), r.l = !0, r.exports
    }
    i.m = e, i.c = t, i.d = function(e, t, n) {
        i.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: n
        })
    }, i.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, i.t = function(e, t) {
        if (1 & t && (e = i(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var n = Object.create(null);
        if (i.r(n), Object.defineProperty(n, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var r in e) i.d(n, r, function(t) {
                return e[t]
            }.bind(null, r));
        return n
    }, i.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return i.d(t, "a", t), t
    }, i.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, i.p = "", i(i.s = 113)
}([function(e, t, i) {
    var n;
    /*!
     * jQuery JavaScript Library v3.3.1
     * https://jquery.com/
     *
     * Includes Sizzle.js
     * https://sizzlejs.com/
     *
     * Copyright JS Foundation and other contributors
     * Released under the MIT license
     * https://jquery.org/license
     *
     * Date: 2018-01-20T17:24Z
     */
    /*!
     * jQuery JavaScript Library v3.3.1
     * https://jquery.com/
     *
     * Includes Sizzle.js
     * https://sizzlejs.com/
     *
     * Copyright JS Foundation and other contributors
     * Released under the MIT license
     * https://jquery.org/license
     *
     * Date: 2018-01-20T17:24Z
     */
    ! function(t, i) {
        "use strict";
        "object" == typeof e.exports ? e.exports = t.document ? i(t, !0) : function(e) {
            if (!e.document) throw new Error("jQuery requires a window with a document");
            return i(e)
        } : i(t)
    }("undefined" != typeof window ? window : this, function(i, r) {
        "use strict";
        var a = [],
            s = i.document,
            o = Object.getPrototypeOf,
            l = a.slice,
            u = a.concat,
            c = a.push,
            d = a.indexOf,
            p = {},
            h = p.toString,
            f = p.hasOwnProperty,
            v = f.toString,
            m = v.call(Object),
            g = {},
            y = function(e) {
                return "function" == typeof e && "number" != typeof e.nodeType
            },
            b = function(e) {
                return null != e && e === e.window
            },
            w = {
                type: !0,
                src: !0,
                noModule: !0
            };

        function x(e, t, i) {
            var n, r = (t = t || s).createElement("script");
            if (r.text = e, i)
                for (n in w) i[n] && (r[n] = i[n]);
            t.head.appendChild(r).parentNode.removeChild(r)
        }

        function T(e) {
            return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? p[h.call(e)] || "object" : typeof e
        }
        var S = function(e, t) {
                return new S.fn.init(e, t)
            },
            C = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;

        function E(e) {
            var t = !!e && "length" in e && e.length,
                i = T(e);
            return !y(e) && !b(e) && ("array" === i || 0 === t || "number" == typeof t && t > 0 && t - 1 in e)
        }
        S.fn = S.prototype = {
            jquery: "3.3.1",
            constructor: S,
            length: 0,
            toArray: function() {
                return l.call(this)
            },
            get: function(e) {
                return null == e ? l.call(this) : e < 0 ? this[e + this.length] : this[e]
            },
            pushStack: function(e) {
                var t = S.merge(this.constructor(), e);
                return t.prevObject = this, t
            },
            each: function(e) {
                return S.each(this, e)
            },
            map: function(e) {
                return this.pushStack(S.map(this, function(t, i) {
                    return e.call(t, i, t)
                }))
            },
            slice: function() {
                return this.pushStack(l.apply(this, arguments))
            },
            first: function() {
                return this.eq(0)
            },
            last: function() {
                return this.eq(-1)
            },
            eq: function(e) {
                var t = this.length,
                    i = +e + (e < 0 ? t : 0);
                return this.pushStack(i >= 0 && i < t ? [this[i]] : [])
            },
            end: function() {
                return this.prevObject || this.constructor()
            },
            push: c,
            sort: a.sort,
            splice: a.splice
        }, S.extend = S.fn.extend = function() {
            var e, t, i, n, r, a, s = arguments[0] || {},
                o = 1,
                l = arguments.length,
                u = !1;
            for ("boolean" == typeof s && (u = s, s = arguments[o] || {}, o++), "object" == typeof s || y(s) || (s = {}), o === l && (s = this, o--); o < l; o++)
                if (null != (e = arguments[o]))
                    for (t in e) i = s[t], s !== (n = e[t]) && (u && n && (S.isPlainObject(n) || (r = Array.isArray(n))) ? (r ? (r = !1, a = i && Array.isArray(i) ? i : []) : a = i && S.isPlainObject(i) ? i : {}, s[t] = S.extend(u, a, n)) : void 0 !== n && (s[t] = n));
            return s
        }, S.extend({
            expando: "jQuery" + ("3.3.1" + Math.random()).replace(/\D/g, ""),
            isReady: !0,
            error: function(e) {
                throw new Error(e)
            },
            noop: function() {},
            isPlainObject: function(e) {
                var t, i;
                return !(!e || "[object Object]" !== h.call(e)) && (!(t = o(e)) || "function" == typeof(i = f.call(t, "constructor") && t.constructor) && v.call(i) === m)
            },
            isEmptyObject: function(e) {
                var t;
                for (t in e) return !1;
                return !0
            },
            globalEval: function(e) {
                x(e)
            },
            each: function(e, t) {
                var i, n = 0;
                if (E(e))
                    for (i = e.length; n < i && !1 !== t.call(e[n], n, e[n]); n++);
                else
                    for (n in e)
                        if (!1 === t.call(e[n], n, e[n])) break;
                return e
            },
            trim: function(e) {
                return null == e ? "" : (e + "").replace(C, "")
            },
            makeArray: function(e, t) {
                var i = t || [];
                return null != e && (E(Object(e)) ? S.merge(i, "string" == typeof e ? [e] : e) : c.call(i, e)), i
            },
            inArray: function(e, t, i) {
                return null == t ? -1 : d.call(t, e, i)
            },
            merge: function(e, t) {
                for (var i = +t.length, n = 0, r = e.length; n < i; n++) e[r++] = t[n];
                return e.length = r, e
            },
            grep: function(e, t, i) {
                for (var n = [], r = 0, a = e.length, s = !i; r < a; r++) !t(e[r], r) !== s && n.push(e[r]);
                return n
            },
            map: function(e, t, i) {
                var n, r, a = 0,
                    s = [];
                if (E(e))
                    for (n = e.length; a < n; a++) null != (r = t(e[a], a, i)) && s.push(r);
                else
                    for (a in e) null != (r = t(e[a], a, i)) && s.push(r);
                return u.apply([], s)
            },
            guid: 1,
            support: g
        }), "function" == typeof Symbol && (S.fn[Symbol.iterator] = a[Symbol.iterator]), S.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function(e, t) {
            p["[object " + t + "]"] = t.toLowerCase()
        });
        var k =
            /*!
             * Sizzle CSS Selector Engine v2.3.3
             * https://sizzlejs.com/
             *
             * Copyright jQuery Foundation and other contributors
             * Released under the MIT license
             * http://jquery.org/license
             *
             * Date: 2016-08-08
             */
            function(e) {
                var t, i, n, r, a, s, o, l, u, c, d, p, h, f, v, m, g, y, b, w = "sizzle" + 1 * new Date,
                    x = e.document,
                    T = 0,
                    S = 0,
                    C = se(),
                    E = se(),
                    k = se(),
                    P = function(e, t) {
                        return e === t && (d = !0), 0
                    },
                    M = {}.hasOwnProperty,
                    A = [],
                    O = A.pop,
                    L = A.push,
                    N = A.push,
                    z = A.slice,
                    D = function(e, t) {
                        for (var i = 0, n = e.length; i < n; i++)
                            if (e[i] === t) return i;
                        return -1
                    },
                    j = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                    I = "[\\x20\\t\\r\\n\\f]",
                    $ = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
                    H = "\\[" + I + "*(" + $ + ")(?:" + I + "*([*^$|!~]?=)" + I + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + $ + "))|)" + I + "*\\]",
                    _ = ":(" + $ + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + H + ")*)|.*)\\)|)",
                    q = new RegExp(I + "+", "g"),
                    V = new RegExp("^" + I + "+|((?:^|[^\\\\])(?:\\\\.)*)" + I + "+$", "g"),
                    F = new RegExp("^" + I + "*," + I + "*"),
                    R = new RegExp("^" + I + "*([>+~]|" + I + ")" + I + "*"),
                    B = new RegExp("=" + I + "*([^\\]'\"]*?)" + I + "*\\]", "g"),
                    W = new RegExp(_),
                    X = new RegExp("^" + $ + "$"),
                    G = {
                        ID: new RegExp("^#(" + $ + ")"),
                        CLASS: new RegExp("^\\.(" + $ + ")"),
                        TAG: new RegExp("^(" + $ + "|[*])"),
                        ATTR: new RegExp("^" + H),
                        PSEUDO: new RegExp("^" + _),
                        CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + I + "*(even|odd|(([+-]|)(\\d*)n|)" + I + "*(?:([+-]|)" + I + "*(\\d+)|))" + I + "*\\)|)", "i"),
                        bool: new RegExp("^(?:" + j + ")$", "i"),
                        needsContext: new RegExp("^" + I + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + I + "*((?:-\\d)?\\d*)" + I + "*\\)|)(?=[^-]|$)", "i")
                    },
                    Y = /^(?:input|select|textarea|button)$/i,
                    U = /^h\d$/i,
                    K = /^[^{]+\{\s*\[native \w/,
                    Q = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
                    J = /[+~]/,
                    Z = new RegExp("\\\\([\\da-f]{1,6}" + I + "?|(" + I + ")|.)", "ig"),
                    ee = function(e, t, i) {
                        var n = "0x" + t - 65536;
                        return n != n || i ? t : n < 0 ? String.fromCharCode(n + 65536) : String.fromCharCode(n >> 10 | 55296, 1023 & n | 56320)
                    },
                    te = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
                    ie = function(e, t) {
                        return t ? "\0" === e ? "�" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e
                    },
                    ne = function() {
                        p()
                    },
                    re = ye(function(e) {
                        return !0 === e.disabled && ("form" in e || "label" in e)
                    }, {
                        dir: "parentNode",
                        next: "legend"
                    });
                try {
                    N.apply(A = z.call(x.childNodes), x.childNodes), A[x.childNodes.length].nodeType
                } catch (e) {
                    N = {
                        apply: A.length ? function(e, t) {
                            L.apply(e, z.call(t))
                        } : function(e, t) {
                            for (var i = e.length, n = 0; e[i++] = t[n++];);
                            e.length = i - 1
                        }
                    }
                }

                function ae(e, t, n, r) {
                    var a, o, u, c, d, f, g, y = t && t.ownerDocument,
                        T = t ? t.nodeType : 9;
                    if (n = n || [], "string" != typeof e || !e || 1 !== T && 9 !== T && 11 !== T) return n;
                    if (!r && ((t ? t.ownerDocument || t : x) !== h && p(t), t = t || h, v)) {
                        if (11 !== T && (d = Q.exec(e)))
                            if (a = d[1]) {
                                if (9 === T) {
                                    if (!(u = t.getElementById(a))) return n;
                                    if (u.id === a) return n.push(u), n
                                } else if (y && (u = y.getElementById(a)) && b(t, u) && u.id === a) return n.push(u), n
                            } else {
                                if (d[2]) return N.apply(n, t.getElementsByTagName(e)), n;
                                if ((a = d[3]) && i.getElementsByClassName && t.getElementsByClassName) return N.apply(n, t.getElementsByClassName(a)), n
                            }
                        if (i.qsa && !k[e + " "] && (!m || !m.test(e))) {
                            if (1 !== T) y = t, g = e;
                            else if ("object" !== t.nodeName.toLowerCase()) {
                                for ((c = t.getAttribute("id")) ? c = c.replace(te, ie) : t.setAttribute("id", c = w), o = (f = s(e)).length; o--;) f[o] = "#" + c + " " + ge(f[o]);
                                g = f.join(","), y = J.test(e) && ve(t.parentNode) || t
                            }
                            if (g) try {
                                return N.apply(n, y.querySelectorAll(g)), n
                            } catch (e) {} finally {
                                c === w && t.removeAttribute("id")
                            }
                        }
                    }
                    return l(e.replace(V, "$1"), t, n, r)
                }

                function se() {
                    var e = [];
                    return function t(i, r) {
                        return e.push(i + " ") > n.cacheLength && delete t[e.shift()], t[i + " "] = r
                    }
                }

                function oe(e) {
                    return e[w] = !0, e
                }

                function le(e) {
                    var t = h.createElement("fieldset");
                    try {
                        return !!e(t)
                    } catch (e) {
                        return !1
                    } finally {
                        t.parentNode && t.parentNode.removeChild(t), t = null
                    }
                }

                function ue(e, t) {
                    for (var i = e.split("|"), r = i.length; r--;) n.attrHandle[i[r]] = t
                }

                function ce(e, t) {
                    var i = t && e,
                        n = i && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
                    if (n) return n;
                    if (i)
                        for (; i = i.nextSibling;)
                            if (i === t) return -1;
                    return e ? 1 : -1
                }

                function de(e) {
                    return function(t) {
                        return "input" === t.nodeName.toLowerCase() && t.type === e
                    }
                }

                function pe(e) {
                    return function(t) {
                        var i = t.nodeName.toLowerCase();
                        return ("input" === i || "button" === i) && t.type === e
                    }
                }

                function he(e) {
                    return function(t) {
                        return "form" in t ? t.parentNode && !1 === t.disabled ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === e : t.disabled === e : t.isDisabled === e || t.isDisabled !== !e && re(t) === e : t.disabled === e : "label" in t && t.disabled === e
                    }
                }

                function fe(e) {
                    return oe(function(t) {
                        return t = +t, oe(function(i, n) {
                            for (var r, a = e([], i.length, t), s = a.length; s--;) i[r = a[s]] && (i[r] = !(n[r] = i[r]))
                        })
                    })
                }

                function ve(e) {
                    return e && void 0 !== e.getElementsByTagName && e
                }
                for (t in i = ae.support = {}, a = ae.isXML = function(e) {
                        var t = e && (e.ownerDocument || e).documentElement;
                        return !!t && "HTML" !== t.nodeName
                    }, p = ae.setDocument = function(e) {
                        var t, r, s = e ? e.ownerDocument || e : x;
                        return s !== h && 9 === s.nodeType && s.documentElement ? (f = (h = s).documentElement, v = !a(h), x !== h && (r = h.defaultView) && r.top !== r && (r.addEventListener ? r.addEventListener("unload", ne, !1) : r.attachEvent && r.attachEvent("onunload", ne)), i.attributes = le(function(e) {
                            return e.className = "i", !e.getAttribute("className")
                        }), i.getElementsByTagName = le(function(e) {
                            return e.appendChild(h.createComment("")), !e.getElementsByTagName("*").length
                        }), i.getElementsByClassName = K.test(h.getElementsByClassName), i.getById = le(function(e) {
                            return f.appendChild(e).id = w, !h.getElementsByName || !h.getElementsByName(w).length
                        }), i.getById ? (n.filter.ID = function(e) {
                            var t = e.replace(Z, ee);
                            return function(e) {
                                return e.getAttribute("id") === t
                            }
                        }, n.find.ID = function(e, t) {
                            if (void 0 !== t.getElementById && v) {
                                var i = t.getElementById(e);
                                return i ? [i] : []
                            }
                        }) : (n.filter.ID = function(e) {
                            var t = e.replace(Z, ee);
                            return function(e) {
                                var i = void 0 !== e.getAttributeNode && e.getAttributeNode("id");
                                return i && i.value === t
                            }
                        }, n.find.ID = function(e, t) {
                            if (void 0 !== t.getElementById && v) {
                                var i, n, r, a = t.getElementById(e);
                                if (a) {
                                    if ((i = a.getAttributeNode("id")) && i.value === e) return [a];
                                    for (r = t.getElementsByName(e), n = 0; a = r[n++];)
                                        if ((i = a.getAttributeNode("id")) && i.value === e) return [a]
                                }
                                return []
                            }
                        }), n.find.TAG = i.getElementsByTagName ? function(e, t) {
                            return void 0 !== t.getElementsByTagName ? t.getElementsByTagName(e) : i.qsa ? t.querySelectorAll(e) : void 0
                        } : function(e, t) {
                            var i, n = [],
                                r = 0,
                                a = t.getElementsByTagName(e);
                            if ("*" === e) {
                                for (; i = a[r++];) 1 === i.nodeType && n.push(i);
                                return n
                            }
                            return a
                        }, n.find.CLASS = i.getElementsByClassName && function(e, t) {
                            if (void 0 !== t.getElementsByClassName && v) return t.getElementsByClassName(e)
                        }, g = [], m = [], (i.qsa = K.test(h.querySelectorAll)) && (le(function(e) {
                            f.appendChild(e).innerHTML = "<a id='" + w + "'></a><select id='" + w + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && m.push("[*^$]=" + I + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || m.push("\\[" + I + "*(?:value|" + j + ")"), e.querySelectorAll("[id~=" + w + "-]").length || m.push("~="), e.querySelectorAll(":checked").length || m.push(":checked"), e.querySelectorAll("a#" + w + "+*").length || m.push(".#.+[+~]")
                        }), le(function(e) {
                            e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                            var t = h.createElement("input");
                            t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && m.push("name" + I + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && m.push(":enabled", ":disabled"), f.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && m.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), m.push(",.*:")
                        })), (i.matchesSelector = K.test(y = f.matches || f.webkitMatchesSelector || f.mozMatchesSelector || f.oMatchesSelector || f.msMatchesSelector)) && le(function(e) {
                            i.disconnectedMatch = y.call(e, "*"), y.call(e, "[s!='']:x"), g.push("!=", _)
                        }), m = m.length && new RegExp(m.join("|")), g = g.length && new RegExp(g.join("|")), t = K.test(f.compareDocumentPosition), b = t || K.test(f.contains) ? function(e, t) {
                            var i = 9 === e.nodeType ? e.documentElement : e,
                                n = t && t.parentNode;
                            return e === n || !(!n || 1 !== n.nodeType || !(i.contains ? i.contains(n) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(n)))
                        } : function(e, t) {
                            if (t)
                                for (; t = t.parentNode;)
                                    if (t === e) return !0;
                            return !1
                        }, P = t ? function(e, t) {
                            if (e === t) return d = !0, 0;
                            var n = !e.compareDocumentPosition - !t.compareDocumentPosition;
                            return n || (1 & (n = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !i.sortDetached && t.compareDocumentPosition(e) === n ? e === h || e.ownerDocument === x && b(x, e) ? -1 : t === h || t.ownerDocument === x && b(x, t) ? 1 : c ? D(c, e) - D(c, t) : 0 : 4 & n ? -1 : 1)
                        } : function(e, t) {
                            if (e === t) return d = !0, 0;
                            var i, n = 0,
                                r = e.parentNode,
                                a = t.parentNode,
                                s = [e],
                                o = [t];
                            if (!r || !a) return e === h ? -1 : t === h ? 1 : r ? -1 : a ? 1 : c ? D(c, e) - D(c, t) : 0;
                            if (r === a) return ce(e, t);
                            for (i = e; i = i.parentNode;) s.unshift(i);
                            for (i = t; i = i.parentNode;) o.unshift(i);
                            for (; s[n] === o[n];) n++;
                            return n ? ce(s[n], o[n]) : s[n] === x ? -1 : o[n] === x ? 1 : 0
                        }, h) : h
                    }, ae.matches = function(e, t) {
                        return ae(e, null, null, t)
                    }, ae.matchesSelector = function(e, t) {
                        if ((e.ownerDocument || e) !== h && p(e), t = t.replace(B, "='$1']"), i.matchesSelector && v && !k[t + " "] && (!g || !g.test(t)) && (!m || !m.test(t))) try {
                            var n = y.call(e, t);
                            if (n || i.disconnectedMatch || e.document && 11 !== e.document.nodeType) return n
                        } catch (e) {}
                        return ae(t, h, null, [e]).length > 0
                    }, ae.contains = function(e, t) {
                        return (e.ownerDocument || e) !== h && p(e), b(e, t)
                    }, ae.attr = function(e, t) {
                        (e.ownerDocument || e) !== h && p(e);
                        var r = n.attrHandle[t.toLowerCase()],
                            a = r && M.call(n.attrHandle, t.toLowerCase()) ? r(e, t, !v) : void 0;
                        return void 0 !== a ? a : i.attributes || !v ? e.getAttribute(t) : (a = e.getAttributeNode(t)) && a.specified ? a.value : null
                    }, ae.escape = function(e) {
                        return (e + "").replace(te, ie)
                    }, ae.error = function(e) {
                        throw new Error("Syntax error, unrecognized expression: " + e)
                    }, ae.uniqueSort = function(e) {
                        var t, n = [],
                            r = 0,
                            a = 0;
                        if (d = !i.detectDuplicates, c = !i.sortStable && e.slice(0), e.sort(P), d) {
                            for (; t = e[a++];) t === e[a] && (r = n.push(a));
                            for (; r--;) e.splice(n[r], 1)
                        }
                        return c = null, e
                    }, r = ae.getText = function(e) {
                        var t, i = "",
                            n = 0,
                            a = e.nodeType;
                        if (a) {
                            if (1 === a || 9 === a || 11 === a) {
                                if ("string" == typeof e.textContent) return e.textContent;
                                for (e = e.firstChild; e; e = e.nextSibling) i += r(e)
                            } else if (3 === a || 4 === a) return e.nodeValue
                        } else
                            for (; t = e[n++];) i += r(t);
                        return i
                    }, (n = ae.selectors = {
                        cacheLength: 50,
                        createPseudo: oe,
                        match: G,
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
                            ATTR: function(e) {
                                return e[1] = e[1].replace(Z, ee), e[3] = (e[3] || e[4] || e[5] || "").replace(Z, ee), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4)
                            },
                            CHILD: function(e) {
                                return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || ae.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && ae.error(e[0]), e
                            },
                            PSEUDO: function(e) {
                                var t, i = !e[6] && e[2];
                                return G.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : i && W.test(i) && (t = s(i, !0)) && (t = i.indexOf(")", i.length - t) - i.length) && (e[0] = e[0].slice(0, t), e[2] = i.slice(0, t)), e.slice(0, 3))
                            }
                        },
                        filter: {
                            TAG: function(e) {
                                var t = e.replace(Z, ee).toLowerCase();
                                return "*" === e ? function() {
                                    return !0
                                } : function(e) {
                                    return e.nodeName && e.nodeName.toLowerCase() === t
                                }
                            },
                            CLASS: function(e) {
                                var t = C[e + " "];
                                return t || (t = new RegExp("(^|" + I + ")" + e + "(" + I + "|$)")) && C(e, function(e) {
                                    return t.test("string" == typeof e.className && e.className || void 0 !== e.getAttribute && e.getAttribute("class") || "")
                                })
                            },
                            ATTR: function(e, t, i) {
                                return function(n) {
                                    var r = ae.attr(n, e);
                                    return null == r ? "!=" === t : !t || (r += "", "=" === t ? r === i : "!=" === t ? r !== i : "^=" === t ? i && 0 === r.indexOf(i) : "*=" === t ? i && r.indexOf(i) > -1 : "$=" === t ? i && r.slice(-i.length) === i : "~=" === t ? (" " + r.replace(q, " ") + " ").indexOf(i) > -1 : "|=" === t && (r === i || r.slice(0, i.length + 1) === i + "-"))
                                }
                            },
                            CHILD: function(e, t, i, n, r) {
                                var a = "nth" !== e.slice(0, 3),
                                    s = "last" !== e.slice(-4),
                                    o = "of-type" === t;
                                return 1 === n && 0 === r ? function(e) {
                                    return !!e.parentNode
                                } : function(t, i, l) {
                                    var u, c, d, p, h, f, v = a !== s ? "nextSibling" : "previousSibling",
                                        m = t.parentNode,
                                        g = o && t.nodeName.toLowerCase(),
                                        y = !l && !o,
                                        b = !1;
                                    if (m) {
                                        if (a) {
                                            for (; v;) {
                                                for (p = t; p = p[v];)
                                                    if (o ? p.nodeName.toLowerCase() === g : 1 === p.nodeType) return !1;
                                                f = v = "only" === e && !f && "nextSibling"
                                            }
                                            return !0
                                        }
                                        if (f = [s ? m.firstChild : m.lastChild], s && y) {
                                            for (b = (h = (u = (c = (d = (p = m)[w] || (p[w] = {}))[p.uniqueID] || (d[p.uniqueID] = {}))[e] || [])[0] === T && u[1]) && u[2], p = h && m.childNodes[h]; p = ++h && p && p[v] || (b = h = 0) || f.pop();)
                                                if (1 === p.nodeType && ++b && p === t) {
                                                    c[e] = [T, h, b];
                                                    break
                                                }
                                        } else if (y && (b = h = (u = (c = (d = (p = t)[w] || (p[w] = {}))[p.uniqueID] || (d[p.uniqueID] = {}))[e] || [])[0] === T && u[1]), !1 === b)
                                            for (;
                                                (p = ++h && p && p[v] || (b = h = 0) || f.pop()) && ((o ? p.nodeName.toLowerCase() !== g : 1 !== p.nodeType) || !++b || (y && ((c = (d = p[w] || (p[w] = {}))[p.uniqueID] || (d[p.uniqueID] = {}))[e] = [T, b]), p !== t)););
                                        return (b -= r) === n || b % n == 0 && b / n >= 0
                                    }
                                }
                            },
                            PSEUDO: function(e, t) {
                                var i, r = n.pseudos[e] || n.setFilters[e.toLowerCase()] || ae.error("unsupported pseudo: " + e);
                                return r[w] ? r(t) : r.length > 1 ? (i = [e, e, "", t], n.setFilters.hasOwnProperty(e.toLowerCase()) ? oe(function(e, i) {
                                    for (var n, a = r(e, t), s = a.length; s--;) e[n = D(e, a[s])] = !(i[n] = a[s])
                                }) : function(e) {
                                    return r(e, 0, i)
                                }) : r
                            }
                        },
                        pseudos: {
                            not: oe(function(e) {
                                var t = [],
                                    i = [],
                                    n = o(e.replace(V, "$1"));
                                return n[w] ? oe(function(e, t, i, r) {
                                    for (var a, s = n(e, null, r, []), o = e.length; o--;)(a = s[o]) && (e[o] = !(t[o] = a))
                                }) : function(e, r, a) {
                                    return t[0] = e, n(t, null, a, i), t[0] = null, !i.pop()
                                }
                            }),
                            has: oe(function(e) {
                                return function(t) {
                                    return ae(e, t).length > 0
                                }
                            }),
                            contains: oe(function(e) {
                                return e = e.replace(Z, ee),
                                    function(t) {
                                        return (t.textContent || t.innerText || r(t)).indexOf(e) > -1
                                    }
                            }),
                            lang: oe(function(e) {
                                return X.test(e || "") || ae.error("unsupported lang: " + e), e = e.replace(Z, ee).toLowerCase(),
                                    function(t) {
                                        var i;
                                        do {
                                            if (i = v ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (i = i.toLowerCase()) === e || 0 === i.indexOf(e + "-")
                                        } while ((t = t.parentNode) && 1 === t.nodeType);
                                        return !1
                                    }
                            }),
                            target: function(t) {
                                var i = e.location && e.location.hash;
                                return i && i.slice(1) === t.id
                            },
                            root: function(e) {
                                return e === f
                            },
                            focus: function(e) {
                                return e === h.activeElement && (!h.hasFocus || h.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
                            },
                            enabled: he(!1),
                            disabled: he(!0),
                            checked: function(e) {
                                var t = e.nodeName.toLowerCase();
                                return "input" === t && !!e.checked || "option" === t && !!e.selected
                            },
                            selected: function(e) {
                                return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected
                            },
                            empty: function(e) {
                                for (e = e.firstChild; e; e = e.nextSibling)
                                    if (e.nodeType < 6) return !1;
                                return !0
                            },
                            parent: function(e) {
                                return !n.pseudos.empty(e)
                            },
                            header: function(e) {
                                return U.test(e.nodeName)
                            },
                            input: function(e) {
                                return Y.test(e.nodeName)
                            },
                            button: function(e) {
                                var t = e.nodeName.toLowerCase();
                                return "input" === t && "button" === e.type || "button" === t
                            },
                            text: function(e) {
                                var t;
                                return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
                            },
                            first: fe(function() {
                                return [0]
                            }),
                            last: fe(function(e, t) {
                                return [t - 1]
                            }),
                            eq: fe(function(e, t, i) {
                                return [i < 0 ? i + t : i]
                            }),
                            even: fe(function(e, t) {
                                for (var i = 0; i < t; i += 2) e.push(i);
                                return e
                            }),
                            odd: fe(function(e, t) {
                                for (var i = 1; i < t; i += 2) e.push(i);
                                return e
                            }),
                            lt: fe(function(e, t, i) {
                                for (var n = i < 0 ? i + t : i; --n >= 0;) e.push(n);
                                return e
                            }),
                            gt: fe(function(e, t, i) {
                                for (var n = i < 0 ? i + t : i; ++n < t;) e.push(n);
                                return e
                            })
                        }
                    }).pseudos.nth = n.pseudos.eq, {
                        radio: !0,
                        checkbox: !0,
                        file: !0,
                        password: !0,
                        image: !0
                    }) n.pseudos[t] = de(t);
                for (t in {
                        submit: !0,
                        reset: !0
                    }) n.pseudos[t] = pe(t);

                function me() {}

                function ge(e) {
                    for (var t = 0, i = e.length, n = ""; t < i; t++) n += e[t].value;
                    return n
                }

                function ye(e, t, i) {
                    var n = t.dir,
                        r = t.next,
                        a = r || n,
                        s = i && "parentNode" === a,
                        o = S++;
                    return t.first ? function(t, i, r) {
                        for (; t = t[n];)
                            if (1 === t.nodeType || s) return e(t, i, r);
                        return !1
                    } : function(t, i, l) {
                        var u, c, d, p = [T, o];
                        if (l) {
                            for (; t = t[n];)
                                if ((1 === t.nodeType || s) && e(t, i, l)) return !0
                        } else
                            for (; t = t[n];)
                                if (1 === t.nodeType || s)
                                    if (c = (d = t[w] || (t[w] = {}))[t.uniqueID] || (d[t.uniqueID] = {}), r && r === t.nodeName.toLowerCase()) t = t[n] || t;
                                    else {
                                        if ((u = c[a]) && u[0] === T && u[1] === o) return p[2] = u[2];
                                        if (c[a] = p, p[2] = e(t, i, l)) return !0
                                    } return !1
                    }
                }

                function be(e) {
                    return e.length > 1 ? function(t, i, n) {
                        for (var r = e.length; r--;)
                            if (!e[r](t, i, n)) return !1;
                        return !0
                    } : e[0]
                }

                function we(e, t, i, n, r) {
                    for (var a, s = [], o = 0, l = e.length, u = null != t; o < l; o++)(a = e[o]) && (i && !i(a, n, r) || (s.push(a), u && t.push(o)));
                    return s
                }

                function xe(e, t, i, n, r, a) {
                    return n && !n[w] && (n = xe(n)), r && !r[w] && (r = xe(r, a)), oe(function(a, s, o, l) {
                        var u, c, d, p = [],
                            h = [],
                            f = s.length,
                            v = a || function(e, t, i) {
                                for (var n = 0, r = t.length; n < r; n++) ae(e, t[n], i);
                                return i
                            }(t || "*", o.nodeType ? [o] : o, []),
                            m = !e || !a && t ? v : we(v, p, e, o, l),
                            g = i ? r || (a ? e : f || n) ? [] : s : m;
                        if (i && i(m, g, o, l), n)
                            for (u = we(g, h), n(u, [], o, l), c = u.length; c--;)(d = u[c]) && (g[h[c]] = !(m[h[c]] = d));
                        if (a) {
                            if (r || e) {
                                if (r) {
                                    for (u = [], c = g.length; c--;)(d = g[c]) && u.push(m[c] = d);
                                    r(null, g = [], u, l)
                                }
                                for (c = g.length; c--;)(d = g[c]) && (u = r ? D(a, d) : p[c]) > -1 && (a[u] = !(s[u] = d))
                            }
                        } else g = we(g === s ? g.splice(f, g.length) : g), r ? r(null, s, g, l) : N.apply(s, g)
                    })
                }

                function Te(e) {
                    for (var t, i, r, a = e.length, s = n.relative[e[0].type], o = s || n.relative[" "], l = s ? 1 : 0, c = ye(function(e) {
                            return e === t
                        }, o, !0), d = ye(function(e) {
                            return D(t, e) > -1
                        }, o, !0), p = [function(e, i, n) {
                            var r = !s && (n || i !== u) || ((t = i).nodeType ? c(e, i, n) : d(e, i, n));
                            return t = null, r
                        }]; l < a; l++)
                        if (i = n.relative[e[l].type]) p = [ye(be(p), i)];
                        else {
                            if ((i = n.filter[e[l].type].apply(null, e[l].matches))[w]) {
                                for (r = ++l; r < a && !n.relative[e[r].type]; r++);
                                return xe(l > 1 && be(p), l > 1 && ge(e.slice(0, l - 1).concat({
                                    value: " " === e[l - 2].type ? "*" : ""
                                })).replace(V, "$1"), i, l < r && Te(e.slice(l, r)), r < a && Te(e = e.slice(r)), r < a && ge(e))
                            }
                            p.push(i)
                        }
                    return be(p)
                }
                return me.prototype = n.filters = n.pseudos, n.setFilters = new me, s = ae.tokenize = function(e, t) {
                    var i, r, a, s, o, l, u, c = E[e + " "];
                    if (c) return t ? 0 : c.slice(0);
                    for (o = e, l = [], u = n.preFilter; o;) {
                        for (s in i && !(r = F.exec(o)) || (r && (o = o.slice(r[0].length) || o), l.push(a = [])), i = !1, (r = R.exec(o)) && (i = r.shift(), a.push({
                                value: i,
                                type: r[0].replace(V, " ")
                            }), o = o.slice(i.length)), n.filter) !(r = G[s].exec(o)) || u[s] && !(r = u[s](r)) || (i = r.shift(), a.push({
                            value: i,
                            type: s,
                            matches: r
                        }), o = o.slice(i.length));
                        if (!i) break
                    }
                    return t ? o.length : o ? ae.error(e) : E(e, l).slice(0)
                }, o = ae.compile = function(e, t) {
                    var i, r = [],
                        a = [],
                        o = k[e + " "];
                    if (!o) {
                        for (t || (t = s(e)), i = t.length; i--;)(o = Te(t[i]))[w] ? r.push(o) : a.push(o);
                        (o = k(e, function(e, t) {
                            var i = t.length > 0,
                                r = e.length > 0,
                                a = function(a, s, o, l, c) {
                                    var d, f, m, g = 0,
                                        y = "0",
                                        b = a && [],
                                        w = [],
                                        x = u,
                                        S = a || r && n.find.TAG("*", c),
                                        C = T += null == x ? 1 : Math.random() || .1,
                                        E = S.length;
                                    for (c && (u = s === h || s || c); y !== E && null != (d = S[y]); y++) {
                                        if (r && d) {
                                            for (f = 0, s || d.ownerDocument === h || (p(d), o = !v); m = e[f++];)
                                                if (m(d, s || h, o)) {
                                                    l.push(d);
                                                    break
                                                }
                                            c && (T = C)
                                        }
                                        i && ((d = !m && d) && g--, a && b.push(d))
                                    }
                                    if (g += y, i && y !== g) {
                                        for (f = 0; m = t[f++];) m(b, w, s, o);
                                        if (a) {
                                            if (g > 0)
                                                for (; y--;) b[y] || w[y] || (w[y] = O.call(l));
                                            w = we(w)
                                        }
                                        N.apply(l, w), c && !a && w.length > 0 && g + t.length > 1 && ae.uniqueSort(l)
                                    }
                                    return c && (T = C, u = x), b
                                };
                            return i ? oe(a) : a
                        }(a, r))).selector = e
                    }
                    return o
                }, l = ae.select = function(e, t, i, r) {
                    var a, l, u, c, d, p = "function" == typeof e && e,
                        h = !r && s(e = p.selector || e);
                    if (i = i || [], 1 === h.length) {
                        if ((l = h[0] = h[0].slice(0)).length > 2 && "ID" === (u = l[0]).type && 9 === t.nodeType && v && n.relative[l[1].type]) {
                            if (!(t = (n.find.ID(u.matches[0].replace(Z, ee), t) || [])[0])) return i;
                            p && (t = t.parentNode), e = e.slice(l.shift().value.length)
                        }
                        for (a = G.needsContext.test(e) ? 0 : l.length; a-- && (u = l[a], !n.relative[c = u.type]);)
                            if ((d = n.find[c]) && (r = d(u.matches[0].replace(Z, ee), J.test(l[0].type) && ve(t.parentNode) || t))) {
                                if (l.splice(a, 1), !(e = r.length && ge(l))) return N.apply(i, r), i;
                                break
                            }
                    }
                    return (p || o(e, h))(r, t, !v, i, !t || J.test(e) && ve(t.parentNode) || t), i
                }, i.sortStable = w.split("").sort(P).join("") === w, i.detectDuplicates = !!d, p(), i.sortDetached = le(function(e) {
                    return 1 & e.compareDocumentPosition(h.createElement("fieldset"))
                }), le(function(e) {
                    return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href")
                }) || ue("type|href|height|width", function(e, t, i) {
                    if (!i) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
                }), i.attributes && le(function(e) {
                    return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value")
                }) || ue("value", function(e, t, i) {
                    if (!i && "input" === e.nodeName.toLowerCase()) return e.defaultValue
                }), le(function(e) {
                    return null == e.getAttribute("disabled")
                }) || ue(j, function(e, t, i) {
                    var n;
                    if (!i) return !0 === e[t] ? t.toLowerCase() : (n = e.getAttributeNode(t)) && n.specified ? n.value : null
                }), ae
            }(i);
        S.find = k, S.expr = k.selectors, S.expr[":"] = S.expr.pseudos, S.uniqueSort = S.unique = k.uniqueSort, S.text = k.getText, S.isXMLDoc = k.isXML, S.contains = k.contains, S.escapeSelector = k.escape;
        var P = function(e, t, i) {
                for (var n = [], r = void 0 !== i;
                    (e = e[t]) && 9 !== e.nodeType;)
                    if (1 === e.nodeType) {
                        if (r && S(e).is(i)) break;
                        n.push(e)
                    }
                return n
            },
            M = function(e, t) {
                for (var i = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && i.push(e);
                return i
            },
            A = S.expr.match.needsContext;

        function O(e, t) {
            return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
        }
        var L = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

        function N(e, t, i) {
            return y(t) ? S.grep(e, function(e, n) {
                return !!t.call(e, n, e) !== i
            }) : t.nodeType ? S.grep(e, function(e) {
                return e === t !== i
            }) : "string" != typeof t ? S.grep(e, function(e) {
                return d.call(t, e) > -1 !== i
            }) : S.filter(t, e, i)
        }
        S.filter = function(e, t, i) {
            var n = t[0];
            return i && (e = ":not(" + e + ")"), 1 === t.length && 1 === n.nodeType ? S.find.matchesSelector(n, e) ? [n] : [] : S.find.matches(e, S.grep(t, function(e) {
                return 1 === e.nodeType
            }))
        }, S.fn.extend({
            find: function(e) {
                var t, i, n = this.length,
                    r = this;
                if ("string" != typeof e) return this.pushStack(S(e).filter(function() {
                    for (t = 0; t < n; t++)
                        if (S.contains(r[t], this)) return !0
                }));
                for (i = this.pushStack([]), t = 0; t < n; t++) S.find(e, r[t], i);
                return n > 1 ? S.uniqueSort(i) : i
            },
            filter: function(e) {
                return this.pushStack(N(this, e || [], !1))
            },
            not: function(e) {
                return this.pushStack(N(this, e || [], !0))
            },
            is: function(e) {
                return !!N(this, "string" == typeof e && A.test(e) ? S(e) : e || [], !1).length
            }
        });
        var z, D = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
        (S.fn.init = function(e, t, i) {
            var n, r;
            if (!e) return this;
            if (i = i || z, "string" == typeof e) {
                if (!(n = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : D.exec(e)) || !n[1] && t) return !t || t.jquery ? (t || i).find(e) : this.constructor(t).find(e);
                if (n[1]) {
                    if (t = t instanceof S ? t[0] : t, S.merge(this, S.parseHTML(n[1], t && t.nodeType ? t.ownerDocument || t : s, !0)), L.test(n[1]) && S.isPlainObject(t))
                        for (n in t) y(this[n]) ? this[n](t[n]) : this.attr(n, t[n]);
                    return this
                }
                return (r = s.getElementById(n[2])) && (this[0] = r, this.length = 1), this
            }
            return e.nodeType ? (this[0] = e, this.length = 1, this) : y(e) ? void 0 !== i.ready ? i.ready(e) : e(S) : S.makeArray(e, this)
        }).prototype = S.fn, z = S(s);
        var j = /^(?:parents|prev(?:Until|All))/,
            I = {
                children: !0,
                contents: !0,
                next: !0,
                prev: !0
            };

        function $(e, t) {
            for (;
                (e = e[t]) && 1 !== e.nodeType;);
            return e
        }
        S.fn.extend({
            has: function(e) {
                var t = S(e, this),
                    i = t.length;
                return this.filter(function() {
                    for (var e = 0; e < i; e++)
                        if (S.contains(this, t[e])) return !0
                })
            },
            closest: function(e, t) {
                var i, n = 0,
                    r = this.length,
                    a = [],
                    s = "string" != typeof e && S(e);
                if (!A.test(e))
                    for (; n < r; n++)
                        for (i = this[n]; i && i !== t; i = i.parentNode)
                            if (i.nodeType < 11 && (s ? s.index(i) > -1 : 1 === i.nodeType && S.find.matchesSelector(i, e))) {
                                a.push(i);
                                break
                            }
                return this.pushStack(a.length > 1 ? S.uniqueSort(a) : a)
            },
            index: function(e) {
                return e ? "string" == typeof e ? d.call(S(e), this[0]) : d.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
            },
            add: function(e, t) {
                return this.pushStack(S.uniqueSort(S.merge(this.get(), S(e, t))))
            },
            addBack: function(e) {
                return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
            }
        }), S.each({
            parent: function(e) {
                var t = e.parentNode;
                return t && 11 !== t.nodeType ? t : null
            },
            parents: function(e) {
                return P(e, "parentNode")
            },
            parentsUntil: function(e, t, i) {
                return P(e, "parentNode", i)
            },
            next: function(e) {
                return $(e, "nextSibling")
            },
            prev: function(e) {
                return $(e, "previousSibling")
            },
            nextAll: function(e) {
                return P(e, "nextSibling")
            },
            prevAll: function(e) {
                return P(e, "previousSibling")
            },
            nextUntil: function(e, t, i) {
                return P(e, "nextSibling", i)
            },
            prevUntil: function(e, t, i) {
                return P(e, "previousSibling", i)
            },
            siblings: function(e) {
                return M((e.parentNode || {}).firstChild, e)
            },
            children: function(e) {
                return M(e.firstChild)
            },
            contents: function(e) {
                return O(e, "iframe") ? e.contentDocument : (O(e, "template") && (e = e.content || e), S.merge([], e.childNodes))
            }
        }, function(e, t) {
            S.fn[e] = function(i, n) {
                var r = S.map(this, t, i);
                return "Until" !== e.slice(-5) && (n = i), n && "string" == typeof n && (r = S.filter(n, r)), this.length > 1 && (I[e] || S.uniqueSort(r), j.test(e) && r.reverse()), this.pushStack(r)
            }
        });
        var H = /[^\x20\t\r\n\f]+/g;

        function _(e) {
            return e
        }

        function q(e) {
            throw e
        }

        function V(e, t, i, n) {
            var r;
            try {
                e && y(r = e.promise) ? r.call(e).done(t).fail(i) : e && y(r = e.then) ? r.call(e, t, i) : t.apply(void 0, [e].slice(n))
            } catch (e) {
                i.apply(void 0, [e])
            }
        }
        S.Callbacks = function(e) {
            e = "string" == typeof e ? function(e) {
                var t = {};
                return S.each(e.match(H) || [], function(e, i) {
                    t[i] = !0
                }), t
            }(e) : S.extend({}, e);
            var t, i, n, r, a = [],
                s = [],
                o = -1,
                l = function() {
                    for (r = r || e.once, n = t = !0; s.length; o = -1)
                        for (i = s.shift(); ++o < a.length;) !1 === a[o].apply(i[0], i[1]) && e.stopOnFalse && (o = a.length, i = !1);
                    e.memory || (i = !1), t = !1, r && (a = i ? [] : "")
                },
                u = {
                    add: function() {
                        return a && (i && !t && (o = a.length - 1, s.push(i)), function t(i) {
                            S.each(i, function(i, n) {
                                y(n) ? e.unique && u.has(n) || a.push(n) : n && n.length && "string" !== T(n) && t(n)
                            })
                        }(arguments), i && !t && l()), this
                    },
                    remove: function() {
                        return S.each(arguments, function(e, t) {
                            for (var i;
                                (i = S.inArray(t, a, i)) > -1;) a.splice(i, 1), i <= o && o--
                        }), this
                    },
                    has: function(e) {
                        return e ? S.inArray(e, a) > -1 : a.length > 0
                    },
                    empty: function() {
                        return a && (a = []), this
                    },
                    disable: function() {
                        return r = s = [], a = i = "", this
                    },
                    disabled: function() {
                        return !a
                    },
                    lock: function() {
                        return r = s = [], i || t || (a = i = ""), this
                    },
                    locked: function() {
                        return !!r
                    },
                    fireWith: function(e, i) {
                        return r || (i = [e, (i = i || []).slice ? i.slice() : i], s.push(i), t || l()), this
                    },
                    fire: function() {
                        return u.fireWith(this, arguments), this
                    },
                    fired: function() {
                        return !!n
                    }
                };
            return u
        }, S.extend({
            Deferred: function(e) {
                var t = [
                        ["notify", "progress", S.Callbacks("memory"), S.Callbacks("memory"), 2],
                        ["resolve", "done", S.Callbacks("once memory"), S.Callbacks("once memory"), 0, "resolved"],
                        ["reject", "fail", S.Callbacks("once memory"), S.Callbacks("once memory"), 1, "rejected"]
                    ],
                    n = "pending",
                    r = {
                        state: function() {
                            return n
                        },
                        always: function() {
                            return a.done(arguments).fail(arguments), this
                        },
                        catch: function(e) {
                            return r.then(null, e)
                        },
                        pipe: function() {
                            var e = arguments;
                            return S.Deferred(function(i) {
                                S.each(t, function(t, n) {
                                    var r = y(e[n[4]]) && e[n[4]];
                                    a[n[1]](function() {
                                        var e = r && r.apply(this, arguments);
                                        e && y(e.promise) ? e.promise().progress(i.notify).done(i.resolve).fail(i.reject) : i[n[0] + "With"](this, r ? [e] : arguments)
                                    })
                                }), e = null
                            }).promise()
                        },
                        then: function(e, n, r) {
                            var a = 0;

                            function s(e, t, n, r) {
                                return function() {
                                    var o = this,
                                        l = arguments,
                                        u = function() {
                                            var i, u;
                                            if (!(e < a)) {
                                                if ((i = n.apply(o, l)) === t.promise()) throw new TypeError("Thenable self-resolution");
                                                u = i && ("object" == typeof i || "function" == typeof i) && i.then, y(u) ? r ? u.call(i, s(a, t, _, r), s(a, t, q, r)) : (a++, u.call(i, s(a, t, _, r), s(a, t, q, r), s(a, t, _, t.notifyWith))) : (n !== _ && (o = void 0, l = [i]), (r || t.resolveWith)(o, l))
                                            }
                                        },
                                        c = r ? u : function() {
                                            try {
                                                u()
                                            } catch (i) {
                                                S.Deferred.exceptionHook && S.Deferred.exceptionHook(i, c.stackTrace), e + 1 >= a && (n !== q && (o = void 0, l = [i]), t.rejectWith(o, l))
                                            }
                                        };
                                    e ? c() : (S.Deferred.getStackHook && (c.stackTrace = S.Deferred.getStackHook()), i.setTimeout(c))
                                }
                            }
                            return S.Deferred(function(i) {
                                t[0][3].add(s(0, i, y(r) ? r : _, i.notifyWith)), t[1][3].add(s(0, i, y(e) ? e : _)), t[2][3].add(s(0, i, y(n) ? n : q))
                            }).promise()
                        },
                        promise: function(e) {
                            return null != e ? S.extend(e, r) : r
                        }
                    },
                    a = {};
                return S.each(t, function(e, i) {
                    var s = i[2],
                        o = i[5];
                    r[i[1]] = s.add, o && s.add(function() {
                        n = o
                    }, t[3 - e][2].disable, t[3 - e][3].disable, t[0][2].lock, t[0][3].lock), s.add(i[3].fire), a[i[0]] = function() {
                        return a[i[0] + "With"](this === a ? void 0 : this, arguments), this
                    }, a[i[0] + "With"] = s.fireWith
                }), r.promise(a), e && e.call(a, a), a
            },
            when: function(e) {
                var t = arguments.length,
                    i = t,
                    n = Array(i),
                    r = l.call(arguments),
                    a = S.Deferred(),
                    s = function(e) {
                        return function(i) {
                            n[e] = this, r[e] = arguments.length > 1 ? l.call(arguments) : i, --t || a.resolveWith(n, r)
                        }
                    };
                if (t <= 1 && (V(e, a.done(s(i)).resolve, a.reject, !t), "pending" === a.state() || y(r[i] && r[i].then))) return a.then();
                for (; i--;) V(r[i], s(i), a.reject);
                return a.promise()
            }
        });
        var F = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
        S.Deferred.exceptionHook = function(e, t) {
            i.console && i.console.warn && e && F.test(e.name) && i.console.warn("jQuery.Deferred exception: " + e.message, e.stack, t)
        }, S.readyException = function(e) {
            i.setTimeout(function() {
                throw e
            })
        };
        var R = S.Deferred();

        function B() {
            s.removeEventListener("DOMContentLoaded", B), i.removeEventListener("load", B), S.ready()
        }
        S.fn.ready = function(e) {
            return R.then(e).catch(function(e) {
                S.readyException(e)
            }), this
        }, S.extend({
            isReady: !1,
            readyWait: 1,
            ready: function(e) {
                (!0 === e ? --S.readyWait : S.isReady) || (S.isReady = !0, !0 !== e && --S.readyWait > 0 || R.resolveWith(s, [S]))
            }
        }), S.ready.then = R.then, "complete" === s.readyState || "loading" !== s.readyState && !s.documentElement.doScroll ? i.setTimeout(S.ready) : (s.addEventListener("DOMContentLoaded", B), i.addEventListener("load", B));
        var W = function(e, t, i, n, r, a, s) {
                var o = 0,
                    l = e.length,
                    u = null == i;
                if ("object" === T(i))
                    for (o in r = !0, i) W(e, t, o, i[o], !0, a, s);
                else if (void 0 !== n && (r = !0, y(n) || (s = !0), u && (s ? (t.call(e, n), t = null) : (u = t, t = function(e, t, i) {
                        return u.call(S(e), i)
                    })), t))
                    for (; o < l; o++) t(e[o], i, s ? n : n.call(e[o], o, t(e[o], i)));
                return r ? e : u ? t.call(e) : l ? t(e[0], i) : a
            },
            X = /^-ms-/,
            G = /-([a-z])/g;

        function Y(e, t) {
            return t.toUpperCase()
        }

        function U(e) {
            return e.replace(X, "ms-").replace(G, Y)
        }
        var K = function(e) {
            return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
        };

        function Q() {
            this.expando = S.expando + Q.uid++
        }
        Q.uid = 1, Q.prototype = {
            cache: function(e) {
                var t = e[this.expando];
                return t || (t = {}, K(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
                    value: t,
                    configurable: !0
                }))), t
            },
            set: function(e, t, i) {
                var n, r = this.cache(e);
                if ("string" == typeof t) r[U(t)] = i;
                else
                    for (n in t) r[U(n)] = t[n];
                return r
            },
            get: function(e, t) {
                return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][U(t)]
            },
            access: function(e, t, i) {
                return void 0 === t || t && "string" == typeof t && void 0 === i ? this.get(e, t) : (this.set(e, t, i), void 0 !== i ? i : t)
            },
            remove: function(e, t) {
                var i, n = e[this.expando];
                if (void 0 !== n) {
                    if (void 0 !== t) {
                        i = (t = Array.isArray(t) ? t.map(U) : (t = U(t)) in n ? [t] : t.match(H) || []).length;
                        for (; i--;) delete n[t[i]]
                    }(void 0 === t || S.isEmptyObject(n)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando])
                }
            },
            hasData: function(e) {
                var t = e[this.expando];
                return void 0 !== t && !S.isEmptyObject(t)
            }
        };
        var J = new Q,
            Z = new Q,
            ee = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
            te = /[A-Z]/g;

        function ie(e, t, i) {
            var n;
            if (void 0 === i && 1 === e.nodeType)
                if (n = "data-" + t.replace(te, "-$&").toLowerCase(), "string" == typeof(i = e.getAttribute(n))) {
                    try {
                        i = function(e) {
                            return "true" === e || "false" !== e && ("null" === e ? null : e === +e + "" ? +e : ee.test(e) ? JSON.parse(e) : e)
                        }(i)
                    } catch (e) {}
                    Z.set(e, t, i)
                } else i = void 0;
            return i
        }
        S.extend({
            hasData: function(e) {
                return Z.hasData(e) || J.hasData(e)
            },
            data: function(e, t, i) {
                return Z.access(e, t, i)
            },
            removeData: function(e, t) {
                Z.remove(e, t)
            },
            _data: function(e, t, i) {
                return J.access(e, t, i)
            },
            _removeData: function(e, t) {
                J.remove(e, t)
            }
        }), S.fn.extend({
            data: function(e, t) {
                var i, n, r, a = this[0],
                    s = a && a.attributes;
                if (void 0 === e) {
                    if (this.length && (r = Z.get(a), 1 === a.nodeType && !J.get(a, "hasDataAttrs"))) {
                        for (i = s.length; i--;) s[i] && 0 === (n = s[i].name).indexOf("data-") && (n = U(n.slice(5)), ie(a, n, r[n]));
                        J.set(a, "hasDataAttrs", !0)
                    }
                    return r
                }
                return "object" == typeof e ? this.each(function() {
                    Z.set(this, e)
                }) : W(this, function(t) {
                    var i;
                    if (a && void 0 === t) return void 0 !== (i = Z.get(a, e)) ? i : void 0 !== (i = ie(a, e)) ? i : void 0;
                    this.each(function() {
                        Z.set(this, e, t)
                    })
                }, null, t, arguments.length > 1, null, !0)
            },
            removeData: function(e) {
                return this.each(function() {
                    Z.remove(this, e)
                })
            }
        }), S.extend({
            queue: function(e, t, i) {
                var n;
                if (e) return t = (t || "fx") + "queue", n = J.get(e, t), i && (!n || Array.isArray(i) ? n = J.access(e, t, S.makeArray(i)) : n.push(i)), n || []
            },
            dequeue: function(e, t) {
                t = t || "fx";
                var i = S.queue(e, t),
                    n = i.length,
                    r = i.shift(),
                    a = S._queueHooks(e, t);
                "inprogress" === r && (r = i.shift(), n--), r && ("fx" === t && i.unshift("inprogress"), delete a.stop, r.call(e, function() {
                    S.dequeue(e, t)
                }, a)), !n && a && a.empty.fire()
            },
            _queueHooks: function(e, t) {
                var i = t + "queueHooks";
                return J.get(e, i) || J.access(e, i, {
                    empty: S.Callbacks("once memory").add(function() {
                        J.remove(e, [t + "queue", i])
                    })
                })
            }
        }), S.fn.extend({
            queue: function(e, t) {
                var i = 2;
                return "string" != typeof e && (t = e, e = "fx", i--), arguments.length < i ? S.queue(this[0], e) : void 0 === t ? this : this.each(function() {
                    var i = S.queue(this, e, t);
                    S._queueHooks(this, e), "fx" === e && "inprogress" !== i[0] && S.dequeue(this, e)
                })
            },
            dequeue: function(e) {
                return this.each(function() {
                    S.dequeue(this, e)
                })
            },
            clearQueue: function(e) {
                return this.queue(e || "fx", [])
            },
            promise: function(e, t) {
                var i, n = 1,
                    r = S.Deferred(),
                    a = this,
                    s = this.length,
                    o = function() {
                        --n || r.resolveWith(a, [a])
                    };
                for ("string" != typeof e && (t = e, e = void 0), e = e || "fx"; s--;)(i = J.get(a[s], e + "queueHooks")) && i.empty && (n++, i.empty.add(o));
                return o(), r.promise(t)
            }
        });
        var ne = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
            re = new RegExp("^(?:([+-])=|)(" + ne + ")([a-z%]*)$", "i"),
            ae = ["Top", "Right", "Bottom", "Left"],
            se = function(e, t) {
                return "none" === (e = t || e).style.display || "" === e.style.display && S.contains(e.ownerDocument, e) && "none" === S.css(e, "display")
            },
            oe = function(e, t, i, n) {
                var r, a, s = {};
                for (a in t) s[a] = e.style[a], e.style[a] = t[a];
                for (a in r = i.apply(e, n || []), t) e.style[a] = s[a];
                return r
            };

        function le(e, t, i, n) {
            var r, a, s = 20,
                o = n ? function() {
                    return n.cur()
                } : function() {
                    return S.css(e, t, "")
                },
                l = o(),
                u = i && i[3] || (S.cssNumber[t] ? "" : "px"),
                c = (S.cssNumber[t] || "px" !== u && +l) && re.exec(S.css(e, t));
            if (c && c[3] !== u) {
                for (l /= 2, u = u || c[3], c = +l || 1; s--;) S.style(e, t, c + u), (1 - a) * (1 - (a = o() / l || .5)) <= 0 && (s = 0), c /= a;
                c *= 2, S.style(e, t, c + u), i = i || []
            }
            return i && (c = +c || +l || 0, r = i[1] ? c + (i[1] + 1) * i[2] : +i[2], n && (n.unit = u, n.start = c, n.end = r)), r
        }
        var ue = {};

        function ce(e) {
            var t, i = e.ownerDocument,
                n = e.nodeName,
                r = ue[n];
            return r || (t = i.body.appendChild(i.createElement(n)), r = S.css(t, "display"), t.parentNode.removeChild(t), "none" === r && (r = "block"), ue[n] = r, r)
        }

        function de(e, t) {
            for (var i, n, r = [], a = 0, s = e.length; a < s; a++)(n = e[a]).style && (i = n.style.display, t ? ("none" === i && (r[a] = J.get(n, "display") || null, r[a] || (n.style.display = "")), "" === n.style.display && se(n) && (r[a] = ce(n))) : "none" !== i && (r[a] = "none", J.set(n, "display", i)));
            for (a = 0; a < s; a++) null != r[a] && (e[a].style.display = r[a]);
            return e
        }
        S.fn.extend({
            show: function() {
                return de(this, !0)
            },
            hide: function() {
                return de(this)
            },
            toggle: function(e) {
                return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function() {
                    se(this) ? S(this).show() : S(this).hide()
                })
            }
        });
        var pe = /^(?:checkbox|radio)$/i,
            he = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i,
            fe = /^$|^module$|\/(?:java|ecma)script/i,
            ve = {
                option: [1, "<select multiple='multiple'>", "</select>"],
                thead: [1, "<table>", "</table>"],
                col: [2, "<table><colgroup>", "</colgroup></table>"],
                tr: [2, "<table><tbody>", "</tbody></table>"],
                td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
                _default: [0, "", ""]
            };

        function me(e, t) {
            var i;
            return i = void 0 !== e.getElementsByTagName ? e.getElementsByTagName(t || "*") : void 0 !== e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && O(e, t) ? S.merge([e], i) : i
        }

        function ge(e, t) {
            for (var i = 0, n = e.length; i < n; i++) J.set(e[i], "globalEval", !t || J.get(t[i], "globalEval"))
        }
        ve.optgroup = ve.option, ve.tbody = ve.tfoot = ve.colgroup = ve.caption = ve.thead, ve.th = ve.td;
        var ye, be, we = /<|&#?\w+;/;

        function xe(e, t, i, n, r) {
            for (var a, s, o, l, u, c, d = t.createDocumentFragment(), p = [], h = 0, f = e.length; h < f; h++)
                if ((a = e[h]) || 0 === a)
                    if ("object" === T(a)) S.merge(p, a.nodeType ? [a] : a);
                    else if (we.test(a)) {
                for (s = s || d.appendChild(t.createElement("div")), o = (he.exec(a) || ["", ""])[1].toLowerCase(), l = ve[o] || ve._default, s.innerHTML = l[1] + S.htmlPrefilter(a) + l[2], c = l[0]; c--;) s = s.lastChild;
                S.merge(p, s.childNodes), (s = d.firstChild).textContent = ""
            } else p.push(t.createTextNode(a));
            for (d.textContent = "", h = 0; a = p[h++];)
                if (n && S.inArray(a, n) > -1) r && r.push(a);
                else if (u = S.contains(a.ownerDocument, a), s = me(d.appendChild(a), "script"), u && ge(s), i)
                for (c = 0; a = s[c++];) fe.test(a.type || "") && i.push(a);
            return d
        }
        ye = s.createDocumentFragment().appendChild(s.createElement("div")), (be = s.createElement("input")).setAttribute("type", "radio"), be.setAttribute("checked", "checked"), be.setAttribute("name", "t"), ye.appendChild(be), g.checkClone = ye.cloneNode(!0).cloneNode(!0).lastChild.checked, ye.innerHTML = "<textarea>x</textarea>", g.noCloneChecked = !!ye.cloneNode(!0).lastChild.defaultValue;
        var Te = s.documentElement,
            Se = /^key/,
            Ce = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
            Ee = /^([^.]*)(?:\.(.+)|)/;

        function ke() {
            return !0
        }

        function Pe() {
            return !1
        }

        function Me() {
            try {
                return s.activeElement
            } catch (e) {}
        }

        function Ae(e, t, i, n, r, a) {
            var s, o;
            if ("object" == typeof t) {
                for (o in "string" != typeof i && (n = n || i, i = void 0), t) Ae(e, o, i, n, t[o], a);
                return e
            }
            if (null == n && null == r ? (r = i, n = i = void 0) : null == r && ("string" == typeof i ? (r = n, n = void 0) : (r = n, n = i, i = void 0)), !1 === r) r = Pe;
            else if (!r) return e;
            return 1 === a && (s = r, (r = function(e) {
                return S().off(e), s.apply(this, arguments)
            }).guid = s.guid || (s.guid = S.guid++)), e.each(function() {
                S.event.add(this, t, r, n, i)
            })
        }
        S.event = {
            global: {},
            add: function(e, t, i, n, r) {
                var a, s, o, l, u, c, d, p, h, f, v, m = J.get(e);
                if (m)
                    for (i.handler && (i = (a = i).handler, r = a.selector), r && S.find.matchesSelector(Te, r), i.guid || (i.guid = S.guid++), (l = m.events) || (l = m.events = {}), (s = m.handle) || (s = m.handle = function(t) {
                            return void 0 !== S && S.event.triggered !== t.type ? S.event.dispatch.apply(e, arguments) : void 0
                        }), u = (t = (t || "").match(H) || [""]).length; u--;) h = v = (o = Ee.exec(t[u]) || [])[1], f = (o[2] || "").split(".").sort(), h && (d = S.event.special[h] || {}, h = (r ? d.delegateType : d.bindType) || h, d = S.event.special[h] || {}, c = S.extend({
                        type: h,
                        origType: v,
                        data: n,
                        handler: i,
                        guid: i.guid,
                        selector: r,
                        needsContext: r && S.expr.match.needsContext.test(r),
                        namespace: f.join(".")
                    }, a), (p = l[h]) || ((p = l[h] = []).delegateCount = 0, d.setup && !1 !== d.setup.call(e, n, f, s) || e.addEventListener && e.addEventListener(h, s)), d.add && (d.add.call(e, c), c.handler.guid || (c.handler.guid = i.guid)), r ? p.splice(p.delegateCount++, 0, c) : p.push(c), S.event.global[h] = !0)
            },
            remove: function(e, t, i, n, r) {
                var a, s, o, l, u, c, d, p, h, f, v, m = J.hasData(e) && J.get(e);
                if (m && (l = m.events)) {
                    for (u = (t = (t || "").match(H) || [""]).length; u--;)
                        if (h = v = (o = Ee.exec(t[u]) || [])[1], f = (o[2] || "").split(".").sort(), h) {
                            for (d = S.event.special[h] || {}, p = l[h = (n ? d.delegateType : d.bindType) || h] || [], o = o[2] && new RegExp("(^|\\.)" + f.join("\\.(?:.*\\.|)") + "(\\.|$)"), s = a = p.length; a--;) c = p[a], !r && v !== c.origType || i && i.guid !== c.guid || o && !o.test(c.namespace) || n && n !== c.selector && ("**" !== n || !c.selector) || (p.splice(a, 1), c.selector && p.delegateCount--, d.remove && d.remove.call(e, c));
                            s && !p.length && (d.teardown && !1 !== d.teardown.call(e, f, m.handle) || S.removeEvent(e, h, m.handle), delete l[h])
                        } else
                            for (h in l) S.event.remove(e, h + t[u], i, n, !0);
                    S.isEmptyObject(l) && J.remove(e, "handle events")
                }
            },
            dispatch: function(e) {
                var t, i, n, r, a, s, o = S.event.fix(e),
                    l = new Array(arguments.length),
                    u = (J.get(this, "events") || {})[o.type] || [],
                    c = S.event.special[o.type] || {};
                for (l[0] = o, t = 1; t < arguments.length; t++) l[t] = arguments[t];
                if (o.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, o)) {
                    for (s = S.event.handlers.call(this, o, u), t = 0;
                        (r = s[t++]) && !o.isPropagationStopped();)
                        for (o.currentTarget = r.elem, i = 0;
                            (a = r.handlers[i++]) && !o.isImmediatePropagationStopped();) o.rnamespace && !o.rnamespace.test(a.namespace) || (o.handleObj = a, o.data = a.data, void 0 !== (n = ((S.event.special[a.origType] || {}).handle || a.handler).apply(r.elem, l)) && !1 === (o.result = n) && (o.preventDefault(), o.stopPropagation()));
                    return c.postDispatch && c.postDispatch.call(this, o), o.result
                }
            },
            handlers: function(e, t) {
                var i, n, r, a, s, o = [],
                    l = t.delegateCount,
                    u = e.target;
                if (l && u.nodeType && !("click" === e.type && e.button >= 1))
                    for (; u !== this; u = u.parentNode || this)
                        if (1 === u.nodeType && ("click" !== e.type || !0 !== u.disabled)) {
                            for (a = [], s = {}, i = 0; i < l; i++) void 0 === s[r = (n = t[i]).selector + " "] && (s[r] = n.needsContext ? S(r, this).index(u) > -1 : S.find(r, this, null, [u]).length), s[r] && a.push(n);
                            a.length && o.push({
                                elem: u,
                                handlers: a
                            })
                        }
                return u = this, l < t.length && o.push({
                    elem: u,
                    handlers: t.slice(l)
                }), o
            },
            addProp: function(e, t) {
                Object.defineProperty(S.Event.prototype, e, {
                    enumerable: !0,
                    configurable: !0,
                    get: y(t) ? function() {
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
            fix: function(e) {
                return e[S.expando] ? e : new S.Event(e)
            },
            special: {
                load: {
                    noBubble: !0
                },
                focus: {
                    trigger: function() {
                        if (this !== Me() && this.focus) return this.focus(), !1
                    },
                    delegateType: "focusin"
                },
                blur: {
                    trigger: function() {
                        if (this === Me() && this.blur) return this.blur(), !1
                    },
                    delegateType: "focusout"
                },
                click: {
                    trigger: function() {
                        if ("checkbox" === this.type && this.click && O(this, "input")) return this.click(), !1
                    },
                    _default: function(e) {
                        return O(e.target, "a")
                    }
                },
                beforeunload: {
                    postDispatch: function(e) {
                        void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
                    }
                }
            }
        }, S.removeEvent = function(e, t, i) {
            e.removeEventListener && e.removeEventListener(t, i)
        }, S.Event = function(e, t) {
            if (!(this instanceof S.Event)) return new S.Event(e, t);
            e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? ke : Pe, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && S.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), this[S.expando] = !0
        }, S.Event.prototype = {
            constructor: S.Event,
            isDefaultPrevented: Pe,
            isPropagationStopped: Pe,
            isImmediatePropagationStopped: Pe,
            isSimulated: !1,
            preventDefault: function() {
                var e = this.originalEvent;
                this.isDefaultPrevented = ke, e && !this.isSimulated && e.preventDefault()
            },
            stopPropagation: function() {
                var e = this.originalEvent;
                this.isPropagationStopped = ke, e && !this.isSimulated && e.stopPropagation()
            },
            stopImmediatePropagation: function() {
                var e = this.originalEvent;
                this.isImmediatePropagationStopped = ke, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation()
            }
        }, S.each({
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
            which: function(e) {
                var t = e.button;
                return null == e.which && Se.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && Ce.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which
            }
        }, S.event.addProp), S.each({
            mouseenter: "mouseover",
            mouseleave: "mouseout",
            pointerenter: "pointerover",
            pointerleave: "pointerout"
        }, function(e, t) {
            S.event.special[e] = {
                delegateType: t,
                bindType: t,
                handle: function(e) {
                    var i, n = this,
                        r = e.relatedTarget,
                        a = e.handleObj;
                    return r && (r === n || S.contains(n, r)) || (e.type = a.origType, i = a.handler.apply(this, arguments), e.type = t), i
                }
            }
        }), S.fn.extend({
            on: function(e, t, i, n) {
                return Ae(this, e, t, i, n)
            },
            one: function(e, t, i, n) {
                return Ae(this, e, t, i, n, 1)
            },
            off: function(e, t, i) {
                var n, r;
                if (e && e.preventDefault && e.handleObj) return n = e.handleObj, S(e.delegateTarget).off(n.namespace ? n.origType + "." + n.namespace : n.origType, n.selector, n.handler), this;
                if ("object" == typeof e) {
                    for (r in e) this.off(r, t, e[r]);
                    return this
                }
                return !1 !== t && "function" != typeof t || (i = t, t = void 0), !1 === i && (i = Pe), this.each(function() {
                    S.event.remove(this, e, i, t)
                })
            }
        });
        var Oe = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
            Le = /<script|<style|<link/i,
            Ne = /checked\s*(?:[^=]|=\s*.checked.)/i,
            ze = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

        function De(e, t) {
            return O(e, "table") && O(11 !== t.nodeType ? t : t.firstChild, "tr") && S(e).children("tbody")[0] || e
        }

        function je(e) {
            return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e
        }

        function Ie(e) {
            return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e
        }

        function $e(e, t) {
            var i, n, r, a, s, o, l, u;
            if (1 === t.nodeType) {
                if (J.hasData(e) && (a = J.access(e), s = J.set(t, a), u = a.events))
                    for (r in delete s.handle, s.events = {}, u)
                        for (i = 0, n = u[r].length; i < n; i++) S.event.add(t, r, u[r][i]);
                Z.hasData(e) && (o = Z.access(e), l = S.extend({}, o), Z.set(t, l))
            }
        }

        function He(e, t) {
            var i = t.nodeName.toLowerCase();
            "input" === i && pe.test(e.type) ? t.checked = e.checked : "input" !== i && "textarea" !== i || (t.defaultValue = e.defaultValue)
        }

        function _e(e, t, i, n) {
            t = u.apply([], t);
            var r, a, s, o, l, c, d = 0,
                p = e.length,
                h = p - 1,
                f = t[0],
                v = y(f);
            if (v || p > 1 && "string" == typeof f && !g.checkClone && Ne.test(f)) return e.each(function(r) {
                var a = e.eq(r);
                v && (t[0] = f.call(this, r, a.html())), _e(a, t, i, n)
            });
            if (p && (a = (r = xe(t, e[0].ownerDocument, !1, e, n)).firstChild, 1 === r.childNodes.length && (r = a), a || n)) {
                for (o = (s = S.map(me(r, "script"), je)).length; d < p; d++) l = r, d !== h && (l = S.clone(l, !0, !0), o && S.merge(s, me(l, "script"))), i.call(e[d], l, d);
                if (o)
                    for (c = s[s.length - 1].ownerDocument, S.map(s, Ie), d = 0; d < o; d++) l = s[d], fe.test(l.type || "") && !J.access(l, "globalEval") && S.contains(c, l) && (l.src && "module" !== (l.type || "").toLowerCase() ? S._evalUrl && S._evalUrl(l.src) : x(l.textContent.replace(ze, ""), c, l))
            }
            return e
        }

        function qe(e, t, i) {
            for (var n, r = t ? S.filter(t, e) : e, a = 0; null != (n = r[a]); a++) i || 1 !== n.nodeType || S.cleanData(me(n)), n.parentNode && (i && S.contains(n.ownerDocument, n) && ge(me(n, "script")), n.parentNode.removeChild(n));
            return e
        }
        S.extend({
            htmlPrefilter: function(e) {
                return e.replace(Oe, "<$1></$2>")
            },
            clone: function(e, t, i) {
                var n, r, a, s, o = e.cloneNode(!0),
                    l = S.contains(e.ownerDocument, e);
                if (!(g.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || S.isXMLDoc(e)))
                    for (s = me(o), n = 0, r = (a = me(e)).length; n < r; n++) He(a[n], s[n]);
                if (t)
                    if (i)
                        for (a = a || me(e), s = s || me(o), n = 0, r = a.length; n < r; n++) $e(a[n], s[n]);
                    else $e(e, o);
                return (s = me(o, "script")).length > 0 && ge(s, !l && me(e, "script")), o
            },
            cleanData: function(e) {
                for (var t, i, n, r = S.event.special, a = 0; void 0 !== (i = e[a]); a++)
                    if (K(i)) {
                        if (t = i[J.expando]) {
                            if (t.events)
                                for (n in t.events) r[n] ? S.event.remove(i, n) : S.removeEvent(i, n, t.handle);
                            i[J.expando] = void 0
                        }
                        i[Z.expando] && (i[Z.expando] = void 0)
                    }
            }
        }), S.fn.extend({
            detach: function(e) {
                return qe(this, e, !0)
            },
            remove: function(e) {
                return qe(this, e)
            },
            text: function(e) {
                return W(this, function(e) {
                    return void 0 === e ? S.text(this) : this.empty().each(function() {
                        1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e)
                    })
                }, null, e, arguments.length)
            },
            append: function() {
                return _e(this, arguments, function(e) {
                    1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || De(this, e).appendChild(e)
                })
            },
            prepend: function() {
                return _e(this, arguments, function(e) {
                    if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                        var t = De(this, e);
                        t.insertBefore(e, t.firstChild)
                    }
                })
            },
            before: function() {
                return _e(this, arguments, function(e) {
                    this.parentNode && this.parentNode.insertBefore(e, this)
                })
            },
            after: function() {
                return _e(this, arguments, function(e) {
                    this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
                })
            },
            empty: function() {
                for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (S.cleanData(me(e, !1)), e.textContent = "");
                return this
            },
            clone: function(e, t) {
                return e = null != e && e, t = null == t ? e : t, this.map(function() {
                    return S.clone(this, e, t)
                })
            },
            html: function(e) {
                return W(this, function(e) {
                    var t = this[0] || {},
                        i = 0,
                        n = this.length;
                    if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
                    if ("string" == typeof e && !Le.test(e) && !ve[(he.exec(e) || ["", ""])[1].toLowerCase()]) {
                        e = S.htmlPrefilter(e);
                        try {
                            for (; i < n; i++) 1 === (t = this[i] || {}).nodeType && (S.cleanData(me(t, !1)), t.innerHTML = e);
                            t = 0
                        } catch (e) {}
                    }
                    t && this.empty().append(e)
                }, null, e, arguments.length)
            },
            replaceWith: function() {
                var e = [];
                return _e(this, arguments, function(t) {
                    var i = this.parentNode;
                    S.inArray(this, e) < 0 && (S.cleanData(me(this)), i && i.replaceChild(t, this))
                }, e)
            }
        }), S.each({
            appendTo: "append",
            prependTo: "prepend",
            insertBefore: "before",
            insertAfter: "after",
            replaceAll: "replaceWith"
        }, function(e, t) {
            S.fn[e] = function(e) {
                for (var i, n = [], r = S(e), a = r.length - 1, s = 0; s <= a; s++) i = s === a ? this : this.clone(!0), S(r[s])[t](i), c.apply(n, i.get());
                return this.pushStack(n)
            }
        });
        var Ve = new RegExp("^(" + ne + ")(?!px)[a-z%]+$", "i"),
            Fe = function(e) {
                var t = e.ownerDocument.defaultView;
                return t && t.opener || (t = i), t.getComputedStyle(e)
            },
            Re = new RegExp(ae.join("|"), "i");

        function Be(e, t, i) {
            var n, r, a, s, o = e.style;
            return (i = i || Fe(e)) && ("" !== (s = i.getPropertyValue(t) || i[t]) || S.contains(e.ownerDocument, e) || (s = S.style(e, t)), !g.pixelBoxStyles() && Ve.test(s) && Re.test(t) && (n = o.width, r = o.minWidth, a = o.maxWidth, o.minWidth = o.maxWidth = o.width = s, s = i.width, o.width = n, o.minWidth = r, o.maxWidth = a)), void 0 !== s ? s + "" : s
        }

        function We(e, t) {
            return {
                get: function() {
                    if (!e()) return (this.get = t).apply(this, arguments);
                    delete this.get
                }
            }
        }! function() {
            function e() {
                if (c) {
                    u.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", c.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", Te.appendChild(u).appendChild(c);
                    var e = i.getComputedStyle(c);
                    n = "1%" !== e.top, l = 12 === t(e.marginLeft), c.style.right = "60%", o = 36 === t(e.right), r = 36 === t(e.width), c.style.position = "absolute", a = 36 === c.offsetWidth || "absolute", Te.removeChild(u), c = null
                }
            }

            function t(e) {
                return Math.round(parseFloat(e))
            }
            var n, r, a, o, l, u = s.createElement("div"),
                c = s.createElement("div");
            c.style && (c.style.backgroundClip = "content-box", c.cloneNode(!0).style.backgroundClip = "", g.clearCloneStyle = "content-box" === c.style.backgroundClip, S.extend(g, {
                boxSizingReliable: function() {
                    return e(), r
                },
                pixelBoxStyles: function() {
                    return e(), o
                },
                pixelPosition: function() {
                    return e(), n
                },
                reliableMarginLeft: function() {
                    return e(), l
                },
                scrollboxSize: function() {
                    return e(), a
                }
            }))
        }();
        var Xe = /^(none|table(?!-c[ea]).+)/,
            Ge = /^--/,
            Ye = {
                position: "absolute",
                visibility: "hidden",
                display: "block"
            },
            Ue = {
                letterSpacing: "0",
                fontWeight: "400"
            },
            Ke = ["Webkit", "Moz", "ms"],
            Qe = s.createElement("div").style;

        function Je(e) {
            var t = S.cssProps[e];
            return t || (t = S.cssProps[e] = function(e) {
                if (e in Qe) return e;
                for (var t = e[0].toUpperCase() + e.slice(1), i = Ke.length; i--;)
                    if ((e = Ke[i] + t) in Qe) return e
            }(e) || e), t
        }

        function Ze(e, t, i) {
            var n = re.exec(t);
            return n ? Math.max(0, n[2] - (i || 0)) + (n[3] || "px") : t
        }

        function et(e, t, i, n, r, a) {
            var s = "width" === t ? 1 : 0,
                o = 0,
                l = 0;
            if (i === (n ? "border" : "content")) return 0;
            for (; s < 4; s += 2) "margin" === i && (l += S.css(e, i + ae[s], !0, r)), n ? ("content" === i && (l -= S.css(e, "padding" + ae[s], !0, r)), "margin" !== i && (l -= S.css(e, "border" + ae[s] + "Width", !0, r))) : (l += S.css(e, "padding" + ae[s], !0, r), "padding" !== i ? l += S.css(e, "border" + ae[s] + "Width", !0, r) : o += S.css(e, "border" + ae[s] + "Width", !0, r));
            return !n && a >= 0 && (l += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - a - l - o - .5))), l
        }

        function tt(e, t, i) {
            var n = Fe(e),
                r = Be(e, t, n),
                a = "border-box" === S.css(e, "boxSizing", !1, n),
                s = a;
            if (Ve.test(r)) {
                if (!i) return r;
                r = "auto"
            }
            return s = s && (g.boxSizingReliable() || r === e.style[t]), ("auto" === r || !parseFloat(r) && "inline" === S.css(e, "display", !1, n)) && (r = e["offset" + t[0].toUpperCase() + t.slice(1)], s = !0), (r = parseFloat(r) || 0) + et(e, t, i || (a ? "border" : "content"), s, n, r) + "px"
        }

        function it(e, t, i, n, r) {
            return new it.prototype.init(e, t, i, n, r)
        }
        S.extend({
            cssHooks: {
                opacity: {
                    get: function(e, t) {
                        if (t) {
                            var i = Be(e, "opacity");
                            return "" === i ? "1" : i
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
            cssProps: {},
            style: function(e, t, i, n) {
                if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                    var r, a, s, o = U(t),
                        l = Ge.test(t),
                        u = e.style;
                    if (l || (t = Je(o)), s = S.cssHooks[t] || S.cssHooks[o], void 0 === i) return s && "get" in s && void 0 !== (r = s.get(e, !1, n)) ? r : u[t];
                    "string" === (a = typeof i) && (r = re.exec(i)) && r[1] && (i = le(e, t, r), a = "number"), null != i && i == i && ("number" === a && (i += r && r[3] || (S.cssNumber[o] ? "" : "px")), g.clearCloneStyle || "" !== i || 0 !== t.indexOf("background") || (u[t] = "inherit"), s && "set" in s && void 0 === (i = s.set(e, i, n)) || (l ? u.setProperty(t, i) : u[t] = i))
                }
            },
            css: function(e, t, i, n) {
                var r, a, s, o = U(t);
                return Ge.test(t) || (t = Je(o)), (s = S.cssHooks[t] || S.cssHooks[o]) && "get" in s && (r = s.get(e, !0, i)), void 0 === r && (r = Be(e, t, n)), "normal" === r && t in Ue && (r = Ue[t]), "" === i || i ? (a = parseFloat(r), !0 === i || isFinite(a) ? a || 0 : r) : r
            }
        }), S.each(["height", "width"], function(e, t) {
            S.cssHooks[t] = {
                get: function(e, i, n) {
                    if (i) return !Xe.test(S.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? tt(e, t, n) : oe(e, Ye, function() {
                        return tt(e, t, n)
                    })
                },
                set: function(e, i, n) {
                    var r, a = Fe(e),
                        s = "border-box" === S.css(e, "boxSizing", !1, a),
                        o = n && et(e, t, n, s, a);
                    return s && g.scrollboxSize() === a.position && (o -= Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - parseFloat(a[t]) - et(e, t, "border", !1, a) - .5)), o && (r = re.exec(i)) && "px" !== (r[3] || "px") && (e.style[t] = i, i = S.css(e, t)), Ze(0, i, o)
                }
            }
        }), S.cssHooks.marginLeft = We(g.reliableMarginLeft, function(e, t) {
            if (t) return (parseFloat(Be(e, "marginLeft")) || e.getBoundingClientRect().left - oe(e, {
                marginLeft: 0
            }, function() {
                return e.getBoundingClientRect().left
            })) + "px"
        }), S.each({
            margin: "",
            padding: "",
            border: "Width"
        }, function(e, t) {
            S.cssHooks[e + t] = {
                expand: function(i) {
                    for (var n = 0, r = {}, a = "string" == typeof i ? i.split(" ") : [i]; n < 4; n++) r[e + ae[n] + t] = a[n] || a[n - 2] || a[0];
                    return r
                }
            }, "margin" !== e && (S.cssHooks[e + t].set = Ze)
        }), S.fn.extend({
            css: function(e, t) {
                return W(this, function(e, t, i) {
                    var n, r, a = {},
                        s = 0;
                    if (Array.isArray(t)) {
                        for (n = Fe(e), r = t.length; s < r; s++) a[t[s]] = S.css(e, t[s], !1, n);
                        return a
                    }
                    return void 0 !== i ? S.style(e, t, i) : S.css(e, t)
                }, e, t, arguments.length > 1)
            }
        }), S.Tween = it, it.prototype = {
            constructor: it,
            init: function(e, t, i, n, r, a) {
                this.elem = e, this.prop = i, this.easing = r || S.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = n, this.unit = a || (S.cssNumber[i] ? "" : "px")
            },
            cur: function() {
                var e = it.propHooks[this.prop];
                return e && e.get ? e.get(this) : it.propHooks._default.get(this)
            },
            run: function(e) {
                var t, i = it.propHooks[this.prop];
                return this.options.duration ? this.pos = t = S.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), i && i.set ? i.set(this) : it.propHooks._default.set(this), this
            }
        }, it.prototype.init.prototype = it.prototype, it.propHooks = {
            _default: {
                get: function(e) {
                    var t;
                    return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = S.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0
                },
                set: function(e) {
                    S.fx.step[e.prop] ? S.fx.step[e.prop](e) : 1 !== e.elem.nodeType || null == e.elem.style[S.cssProps[e.prop]] && !S.cssHooks[e.prop] ? e.elem[e.prop] = e.now : S.style(e.elem, e.prop, e.now + e.unit)
                }
            }
        }, it.propHooks.scrollTop = it.propHooks.scrollLeft = {
            set: function(e) {
                e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
            }
        }, S.easing = {
            linear: function(e) {
                return e
            },
            swing: function(e) {
                return .5 - Math.cos(e * Math.PI) / 2
            },
            _default: "swing"
        }, S.fx = it.prototype.init, S.fx.step = {};
        var nt, rt, at = /^(?:toggle|show|hide)$/,
            st = /queueHooks$/;

        function ot() {
            rt && (!1 === s.hidden && i.requestAnimationFrame ? i.requestAnimationFrame(ot) : i.setTimeout(ot, S.fx.interval), S.fx.tick())
        }

        function lt() {
            return i.setTimeout(function() {
                nt = void 0
            }), nt = Date.now()
        }

        function ut(e, t) {
            var i, n = 0,
                r = {
                    height: e
                };
            for (t = t ? 1 : 0; n < 4; n += 2 - t) r["margin" + (i = ae[n])] = r["padding" + i] = e;
            return t && (r.opacity = r.width = e), r
        }

        function ct(e, t, i) {
            for (var n, r = (dt.tweeners[t] || []).concat(dt.tweeners["*"]), a = 0, s = r.length; a < s; a++)
                if (n = r[a].call(i, t, e)) return n
        }

        function dt(e, t, i) {
            var n, r, a = 0,
                s = dt.prefilters.length,
                o = S.Deferred().always(function() {
                    delete l.elem
                }),
                l = function() {
                    if (r) return !1;
                    for (var t = nt || lt(), i = Math.max(0, u.startTime + u.duration - t), n = 1 - (i / u.duration || 0), a = 0, s = u.tweens.length; a < s; a++) u.tweens[a].run(n);
                    return o.notifyWith(e, [u, n, i]), n < 1 && s ? i : (s || o.notifyWith(e, [u, 1, 0]), o.resolveWith(e, [u]), !1)
                },
                u = o.promise({
                    elem: e,
                    props: S.extend({}, t),
                    opts: S.extend(!0, {
                        specialEasing: {},
                        easing: S.easing._default
                    }, i),
                    originalProperties: t,
                    originalOptions: i,
                    startTime: nt || lt(),
                    duration: i.duration,
                    tweens: [],
                    createTween: function(t, i) {
                        var n = S.Tween(e, u.opts, t, i, u.opts.specialEasing[t] || u.opts.easing);
                        return u.tweens.push(n), n
                    },
                    stop: function(t) {
                        var i = 0,
                            n = t ? u.tweens.length : 0;
                        if (r) return this;
                        for (r = !0; i < n; i++) u.tweens[i].run(1);
                        return t ? (o.notifyWith(e, [u, 1, 0]), o.resolveWith(e, [u, t])) : o.rejectWith(e, [u, t]), this
                    }
                }),
                c = u.props;
            for (! function(e, t) {
                    var i, n, r, a, s;
                    for (i in e)
                        if (r = t[n = U(i)], a = e[i], Array.isArray(a) && (r = a[1], a = e[i] = a[0]), i !== n && (e[n] = a, delete e[i]), (s = S.cssHooks[n]) && "expand" in s)
                            for (i in a = s.expand(a), delete e[n], a) i in e || (e[i] = a[i], t[i] = r);
                        else t[n] = r
                }(c, u.opts.specialEasing); a < s; a++)
                if (n = dt.prefilters[a].call(u, e, c, u.opts)) return y(n.stop) && (S._queueHooks(u.elem, u.opts.queue).stop = n.stop.bind(n)), n;
            return S.map(c, ct, u), y(u.opts.start) && u.opts.start.call(e, u), u.progress(u.opts.progress).done(u.opts.done, u.opts.complete).fail(u.opts.fail).always(u.opts.always), S.fx.timer(S.extend(l, {
                elem: e,
                anim: u,
                queue: u.opts.queue
            })), u
        }
        S.Animation = S.extend(dt, {
                tweeners: {
                    "*": [function(e, t) {
                        var i = this.createTween(e, t);
                        return le(i.elem, e, re.exec(t), i), i
                    }]
                },
                tweener: function(e, t) {
                    y(e) ? (t = e, e = ["*"]) : e = e.match(H);
                    for (var i, n = 0, r = e.length; n < r; n++) i = e[n], dt.tweeners[i] = dt.tweeners[i] || [], dt.tweeners[i].unshift(t)
                },
                prefilters: [function(e, t, i) {
                    var n, r, a, s, o, l, u, c, d = "width" in t || "height" in t,
                        p = this,
                        h = {},
                        f = e.style,
                        v = e.nodeType && se(e),
                        m = J.get(e, "fxshow");
                    for (n in i.queue || (null == (s = S._queueHooks(e, "fx")).unqueued && (s.unqueued = 0, o = s.empty.fire, s.empty.fire = function() {
                            s.unqueued || o()
                        }), s.unqueued++, p.always(function() {
                            p.always(function() {
                                s.unqueued--, S.queue(e, "fx").length || s.empty.fire()
                            })
                        })), t)
                        if (r = t[n], at.test(r)) {
                            if (delete t[n], a = a || "toggle" === r, r === (v ? "hide" : "show")) {
                                if ("show" !== r || !m || void 0 === m[n]) continue;
                                v = !0
                            }
                            h[n] = m && m[n] || S.style(e, n)
                        }
                    if ((l = !S.isEmptyObject(t)) || !S.isEmptyObject(h))
                        for (n in d && 1 === e.nodeType && (i.overflow = [f.overflow, f.overflowX, f.overflowY], null == (u = m && m.display) && (u = J.get(e, "display")), "none" === (c = S.css(e, "display")) && (u ? c = u : (de([e], !0), u = e.style.display || u, c = S.css(e, "display"), de([e]))), ("inline" === c || "inline-block" === c && null != u) && "none" === S.css(e, "float") && (l || (p.done(function() {
                                f.display = u
                            }), null == u && (c = f.display, u = "none" === c ? "" : c)), f.display = "inline-block")), i.overflow && (f.overflow = "hidden", p.always(function() {
                                f.overflow = i.overflow[0], f.overflowX = i.overflow[1], f.overflowY = i.overflow[2]
                            })), l = !1, h) l || (m ? "hidden" in m && (v = m.hidden) : m = J.access(e, "fxshow", {
                            display: u
                        }), a && (m.hidden = !v), v && de([e], !0), p.done(function() {
                            for (n in v || de([e]), J.remove(e, "fxshow"), h) S.style(e, n, h[n])
                        })), l = ct(v ? m[n] : 0, n, p), n in m || (m[n] = l.start, v && (l.end = l.start, l.start = 0))
                }],
                prefilter: function(e, t) {
                    t ? dt.prefilters.unshift(e) : dt.prefilters.push(e)
                }
            }), S.speed = function(e, t, i) {
                var n = e && "object" == typeof e ? S.extend({}, e) : {
                    complete: i || !i && t || y(e) && e,
                    duration: e,
                    easing: i && t || t && !y(t) && t
                };
                return S.fx.off ? n.duration = 0 : "number" != typeof n.duration && (n.duration in S.fx.speeds ? n.duration = S.fx.speeds[n.duration] : n.duration = S.fx.speeds._default), null != n.queue && !0 !== n.queue || (n.queue = "fx"), n.old = n.complete, n.complete = function() {
                    y(n.old) && n.old.call(this), n.queue && S.dequeue(this, n.queue)
                }, n
            }, S.fn.extend({
                fadeTo: function(e, t, i, n) {
                    return this.filter(se).css("opacity", 0).show().end().animate({
                        opacity: t
                    }, e, i, n)
                },
                animate: function(e, t, i, n) {
                    var r = S.isEmptyObject(e),
                        a = S.speed(t, i, n),
                        s = function() {
                            var t = dt(this, S.extend({}, e), a);
                            (r || J.get(this, "finish")) && t.stop(!0)
                        };
                    return s.finish = s, r || !1 === a.queue ? this.each(s) : this.queue(a.queue, s)
                },
                stop: function(e, t, i) {
                    var n = function(e) {
                        var t = e.stop;
                        delete e.stop, t(i)
                    };
                    return "string" != typeof e && (i = t, t = e, e = void 0), t && !1 !== e && this.queue(e || "fx", []), this.each(function() {
                        var t = !0,
                            r = null != e && e + "queueHooks",
                            a = S.timers,
                            s = J.get(this);
                        if (r) s[r] && s[r].stop && n(s[r]);
                        else
                            for (r in s) s[r] && s[r].stop && st.test(r) && n(s[r]);
                        for (r = a.length; r--;) a[r].elem !== this || null != e && a[r].queue !== e || (a[r].anim.stop(i), t = !1, a.splice(r, 1));
                        !t && i || S.dequeue(this, e)
                    })
                },
                finish: function(e) {
                    return !1 !== e && (e = e || "fx"), this.each(function() {
                        var t, i = J.get(this),
                            n = i[e + "queue"],
                            r = i[e + "queueHooks"],
                            a = S.timers,
                            s = n ? n.length : 0;
                        for (i.finish = !0, S.queue(this, e, []), r && r.stop && r.stop.call(this, !0), t = a.length; t--;) a[t].elem === this && a[t].queue === e && (a[t].anim.stop(!0), a.splice(t, 1));
                        for (t = 0; t < s; t++) n[t] && n[t].finish && n[t].finish.call(this);
                        delete i.finish
                    })
                }
            }), S.each(["toggle", "show", "hide"], function(e, t) {
                var i = S.fn[t];
                S.fn[t] = function(e, n, r) {
                    return null == e || "boolean" == typeof e ? i.apply(this, arguments) : this.animate(ut(t, !0), e, n, r)
                }
            }), S.each({
                slideDown: ut("show"),
                slideUp: ut("hide"),
                slideToggle: ut("toggle"),
                fadeIn: {
                    opacity: "show"
                },
                fadeOut: {
                    opacity: "hide"
                },
                fadeToggle: {
                    opacity: "toggle"
                }
            }, function(e, t) {
                S.fn[e] = function(e, i, n) {
                    return this.animate(t, e, i, n)
                }
            }), S.timers = [], S.fx.tick = function() {
                var e, t = 0,
                    i = S.timers;
                for (nt = Date.now(); t < i.length; t++)(e = i[t])() || i[t] !== e || i.splice(t--, 1);
                i.length || S.fx.stop(), nt = void 0
            }, S.fx.timer = function(e) {
                S.timers.push(e), S.fx.start()
            }, S.fx.interval = 13, S.fx.start = function() {
                rt || (rt = !0, ot())
            }, S.fx.stop = function() {
                rt = null
            }, S.fx.speeds = {
                slow: 600,
                fast: 200,
                _default: 400
            }, S.fn.delay = function(e, t) {
                return e = S.fx && S.fx.speeds[e] || e, t = t || "fx", this.queue(t, function(t, n) {
                    var r = i.setTimeout(t, e);
                    n.stop = function() {
                        i.clearTimeout(r)
                    }
                })
            },
            function() {
                var e = s.createElement("input"),
                    t = s.createElement("select").appendChild(s.createElement("option"));
                e.type = "checkbox", g.checkOn = "" !== e.value, g.optSelected = t.selected, (e = s.createElement("input")).value = "t", e.type = "radio", g.radioValue = "t" === e.value
            }();
        var pt, ht = S.expr.attrHandle;
        S.fn.extend({
            attr: function(e, t) {
                return W(this, S.attr, e, t, arguments.length > 1)
            },
            removeAttr: function(e) {
                return this.each(function() {
                    S.removeAttr(this, e)
                })
            }
        }), S.extend({
            attr: function(e, t, i) {
                var n, r, a = e.nodeType;
                if (3 !== a && 8 !== a && 2 !== a) return void 0 === e.getAttribute ? S.prop(e, t, i) : (1 === a && S.isXMLDoc(e) || (r = S.attrHooks[t.toLowerCase()] || (S.expr.match.bool.test(t) ? pt : void 0)), void 0 !== i ? null === i ? void S.removeAttr(e, t) : r && "set" in r && void 0 !== (n = r.set(e, i, t)) ? n : (e.setAttribute(t, i + ""), i) : r && "get" in r && null !== (n = r.get(e, t)) ? n : null == (n = S.find.attr(e, t)) ? void 0 : n)
            },
            attrHooks: {
                type: {
                    set: function(e, t) {
                        if (!g.radioValue && "radio" === t && O(e, "input")) {
                            var i = e.value;
                            return e.setAttribute("type", t), i && (e.value = i), t
                        }
                    }
                }
            },
            removeAttr: function(e, t) {
                var i, n = 0,
                    r = t && t.match(H);
                if (r && 1 === e.nodeType)
                    for (; i = r[n++];) e.removeAttribute(i)
            }
        }), pt = {
            set: function(e, t, i) {
                return !1 === t ? S.removeAttr(e, i) : e.setAttribute(i, i), i
            }
        }, S.each(S.expr.match.bool.source.match(/\w+/g), function(e, t) {
            var i = ht[t] || S.find.attr;
            ht[t] = function(e, t, n) {
                var r, a, s = t.toLowerCase();
                return n || (a = ht[s], ht[s] = r, r = null != i(e, t, n) ? s : null, ht[s] = a), r
            }
        });
        var ft = /^(?:input|select|textarea|button)$/i,
            vt = /^(?:a|area)$/i;

        function mt(e) {
            return (e.match(H) || []).join(" ")
        }

        function gt(e) {
            return e.getAttribute && e.getAttribute("class") || ""
        }

        function yt(e) {
            return Array.isArray(e) ? e : "string" == typeof e && e.match(H) || []
        }
        S.fn.extend({
            prop: function(e, t) {
                return W(this, S.prop, e, t, arguments.length > 1)
            },
            removeProp: function(e) {
                return this.each(function() {
                    delete this[S.propFix[e] || e]
                })
            }
        }), S.extend({
            prop: function(e, t, i) {
                var n, r, a = e.nodeType;
                if (3 !== a && 8 !== a && 2 !== a) return 1 === a && S.isXMLDoc(e) || (t = S.propFix[t] || t, r = S.propHooks[t]), void 0 !== i ? r && "set" in r && void 0 !== (n = r.set(e, i, t)) ? n : e[t] = i : r && "get" in r && null !== (n = r.get(e, t)) ? n : e[t]
            },
            propHooks: {
                tabIndex: {
                    get: function(e) {
                        var t = S.find.attr(e, "tabindex");
                        return t ? parseInt(t, 10) : ft.test(e.nodeName) || vt.test(e.nodeName) && e.href ? 0 : -1
                    }
                }
            },
            propFix: {
                for: "htmlFor",
                class: "className"
            }
        }), g.optSelected || (S.propHooks.selected = {
            get: function(e) {
                var t = e.parentNode;
                return t && t.parentNode && t.parentNode.selectedIndex, null
            },
            set: function(e) {
                var t = e.parentNode;
                t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
            }
        }), S.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
            S.propFix[this.toLowerCase()] = this
        }), S.fn.extend({
            addClass: function(e) {
                var t, i, n, r, a, s, o, l = 0;
                if (y(e)) return this.each(function(t) {
                    S(this).addClass(e.call(this, t, gt(this)))
                });
                if ((t = yt(e)).length)
                    for (; i = this[l++];)
                        if (r = gt(i), n = 1 === i.nodeType && " " + mt(r) + " ") {
                            for (s = 0; a = t[s++];) n.indexOf(" " + a + " ") < 0 && (n += a + " ");
                            r !== (o = mt(n)) && i.setAttribute("class", o)
                        }
                return this
            },
            removeClass: function(e) {
                var t, i, n, r, a, s, o, l = 0;
                if (y(e)) return this.each(function(t) {
                    S(this).removeClass(e.call(this, t, gt(this)))
                });
                if (!arguments.length) return this.attr("class", "");
                if ((t = yt(e)).length)
                    for (; i = this[l++];)
                        if (r = gt(i), n = 1 === i.nodeType && " " + mt(r) + " ") {
                            for (s = 0; a = t[s++];)
                                for (; n.indexOf(" " + a + " ") > -1;) n = n.replace(" " + a + " ", " ");
                            r !== (o = mt(n)) && i.setAttribute("class", o)
                        }
                return this
            },
            toggleClass: function(e, t) {
                var i = typeof e,
                    n = "string" === i || Array.isArray(e);
                return "boolean" == typeof t && n ? t ? this.addClass(e) : this.removeClass(e) : y(e) ? this.each(function(i) {
                    S(this).toggleClass(e.call(this, i, gt(this), t), t)
                }) : this.each(function() {
                    var t, r, a, s;
                    if (n)
                        for (r = 0, a = S(this), s = yt(e); t = s[r++];) a.hasClass(t) ? a.removeClass(t) : a.addClass(t);
                    else void 0 !== e && "boolean" !== i || ((t = gt(this)) && J.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === e ? "" : J.get(this, "__className__") || ""))
                })
            },
            hasClass: function(e) {
                var t, i, n = 0;
                for (t = " " + e + " "; i = this[n++];)
                    if (1 === i.nodeType && (" " + mt(gt(i)) + " ").indexOf(t) > -1) return !0;
                return !1
            }
        });
        var bt = /\r/g;
        S.fn.extend({
            val: function(e) {
                var t, i, n, r = this[0];
                return arguments.length ? (n = y(e), this.each(function(i) {
                    var r;
                    1 === this.nodeType && (null == (r = n ? e.call(this, i, S(this).val()) : e) ? r = "" : "number" == typeof r ? r += "" : Array.isArray(r) && (r = S.map(r, function(e) {
                        return null == e ? "" : e + ""
                    })), (t = S.valHooks[this.type] || S.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, r, "value") || (this.value = r))
                })) : r ? (t = S.valHooks[r.type] || S.valHooks[r.nodeName.toLowerCase()]) && "get" in t && void 0 !== (i = t.get(r, "value")) ? i : "string" == typeof(i = r.value) ? i.replace(bt, "") : null == i ? "" : i : void 0
            }
        }), S.extend({
            valHooks: {
                option: {
                    get: function(e) {
                        var t = S.find.attr(e, "value");
                        return null != t ? t : mt(S.text(e))
                    }
                },
                select: {
                    get: function(e) {
                        var t, i, n, r = e.options,
                            a = e.selectedIndex,
                            s = "select-one" === e.type,
                            o = s ? null : [],
                            l = s ? a + 1 : r.length;
                        for (n = a < 0 ? l : s ? a : 0; n < l; n++)
                            if (((i = r[n]).selected || n === a) && !i.disabled && (!i.parentNode.disabled || !O(i.parentNode, "optgroup"))) {
                                if (t = S(i).val(), s) return t;
                                o.push(t)
                            }
                        return o
                    },
                    set: function(e, t) {
                        for (var i, n, r = e.options, a = S.makeArray(t), s = r.length; s--;)((n = r[s]).selected = S.inArray(S.valHooks.option.get(n), a) > -1) && (i = !0);
                        return i || (e.selectedIndex = -1), a
                    }
                }
            }
        }), S.each(["radio", "checkbox"], function() {
            S.valHooks[this] = {
                set: function(e, t) {
                    if (Array.isArray(t)) return e.checked = S.inArray(S(e).val(), t) > -1
                }
            }, g.checkOn || (S.valHooks[this].get = function(e) {
                return null === e.getAttribute("value") ? "on" : e.value
            })
        }), g.focusin = "onfocusin" in i;
        var wt = /^(?:focusinfocus|focusoutblur)$/,
            xt = function(e) {
                e.stopPropagation()
            };
        S.extend(S.event, {
            trigger: function(e, t, n, r) {
                var a, o, l, u, c, d, p, h, v = [n || s],
                    m = f.call(e, "type") ? e.type : e,
                    g = f.call(e, "namespace") ? e.namespace.split(".") : [];
                if (o = h = l = n = n || s, 3 !== n.nodeType && 8 !== n.nodeType && !wt.test(m + S.event.triggered) && (m.indexOf(".") > -1 && (g = m.split("."), m = g.shift(), g.sort()), c = m.indexOf(":") < 0 && "on" + m, (e = e[S.expando] ? e : new S.Event(m, "object" == typeof e && e)).isTrigger = r ? 2 : 3, e.namespace = g.join("."), e.rnamespace = e.namespace ? new RegExp("(^|\\.)" + g.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, e.result = void 0, e.target || (e.target = n), t = null == t ? [e] : S.makeArray(t, [e]), p = S.event.special[m] || {}, r || !p.trigger || !1 !== p.trigger.apply(n, t))) {
                    if (!r && !p.noBubble && !b(n)) {
                        for (u = p.delegateType || m, wt.test(u + m) || (o = o.parentNode); o; o = o.parentNode) v.push(o), l = o;
                        l === (n.ownerDocument || s) && v.push(l.defaultView || l.parentWindow || i)
                    }
                    for (a = 0;
                        (o = v[a++]) && !e.isPropagationStopped();) h = o, e.type = a > 1 ? u : p.bindType || m, (d = (J.get(o, "events") || {})[e.type] && J.get(o, "handle")) && d.apply(o, t), (d = c && o[c]) && d.apply && K(o) && (e.result = d.apply(o, t), !1 === e.result && e.preventDefault());
                    return e.type = m, r || e.isDefaultPrevented() || p._default && !1 !== p._default.apply(v.pop(), t) || !K(n) || c && y(n[m]) && !b(n) && ((l = n[c]) && (n[c] = null), S.event.triggered = m, e.isPropagationStopped() && h.addEventListener(m, xt), n[m](), e.isPropagationStopped() && h.removeEventListener(m, xt), S.event.triggered = void 0, l && (n[c] = l)), e.result
                }
            },
            simulate: function(e, t, i) {
                var n = S.extend(new S.Event, i, {
                    type: e,
                    isSimulated: !0
                });
                S.event.trigger(n, null, t)
            }
        }), S.fn.extend({
            trigger: function(e, t) {
                return this.each(function() {
                    S.event.trigger(e, t, this)
                })
            },
            triggerHandler: function(e, t) {
                var i = this[0];
                if (i) return S.event.trigger(e, t, i, !0)
            }
        }), g.focusin || S.each({
            focus: "focusin",
            blur: "focusout"
        }, function(e, t) {
            var i = function(e) {
                S.event.simulate(t, e.target, S.event.fix(e))
            };
            S.event.special[t] = {
                setup: function() {
                    var n = this.ownerDocument || this,
                        r = J.access(n, t);
                    r || n.addEventListener(e, i, !0), J.access(n, t, (r || 0) + 1)
                },
                teardown: function() {
                    var n = this.ownerDocument || this,
                        r = J.access(n, t) - 1;
                    r ? J.access(n, t, r) : (n.removeEventListener(e, i, !0), J.remove(n, t))
                }
            }
        });
        var Tt = i.location,
            St = Date.now(),
            Ct = /\?/;
        S.parseXML = function(e) {
            var t;
            if (!e || "string" != typeof e) return null;
            try {
                t = (new i.DOMParser).parseFromString(e, "text/xml")
            } catch (e) {
                t = void 0
            }
            return t && !t.getElementsByTagName("parsererror").length || S.error("Invalid XML: " + e), t
        };
        var Et = /\[\]$/,
            kt = /\r?\n/g,
            Pt = /^(?:submit|button|image|reset|file)$/i,
            Mt = /^(?:input|select|textarea|keygen)/i;

        function At(e, t, i, n) {
            var r;
            if (Array.isArray(t)) S.each(t, function(t, r) {
                i || Et.test(e) ? n(e, r) : At(e + "[" + ("object" == typeof r && null != r ? t : "") + "]", r, i, n)
            });
            else if (i || "object" !== T(t)) n(e, t);
            else
                for (r in t) At(e + "[" + r + "]", t[r], i, n)
        }
        S.param = function(e, t) {
            var i, n = [],
                r = function(e, t) {
                    var i = y(t) ? t() : t;
                    n[n.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == i ? "" : i)
                };
            if (Array.isArray(e) || e.jquery && !S.isPlainObject(e)) S.each(e, function() {
                r(this.name, this.value)
            });
            else
                for (i in e) At(i, e[i], t, r);
            return n.join("&")
        }, S.fn.extend({
            serialize: function() {
                return S.param(this.serializeArray())
            },
            serializeArray: function() {
                return this.map(function() {
                    var e = S.prop(this, "elements");
                    return e ? S.makeArray(e) : this
                }).filter(function() {
                    var e = this.type;
                    return this.name && !S(this).is(":disabled") && Mt.test(this.nodeName) && !Pt.test(e) && (this.checked || !pe.test(e))
                }).map(function(e, t) {
                    var i = S(this).val();
                    return null == i ? null : Array.isArray(i) ? S.map(i, function(e) {
                        return {
                            name: t.name,
                            value: e.replace(kt, "\r\n")
                        }
                    }) : {
                        name: t.name,
                        value: i.replace(kt, "\r\n")
                    }
                }).get()
            }
        });
        var Ot = /%20/g,
            Lt = /#.*$/,
            Nt = /([?&])_=[^&]*/,
            zt = /^(.*?):[ \t]*([^\r\n]*)$/gm,
            Dt = /^(?:GET|HEAD)$/,
            jt = /^\/\//,
            It = {},
            $t = {},
            Ht = "*/".concat("*"),
            _t = s.createElement("a");

        function qt(e) {
            return function(t, i) {
                "string" != typeof t && (i = t, t = "*");
                var n, r = 0,
                    a = t.toLowerCase().match(H) || [];
                if (y(i))
                    for (; n = a[r++];) "+" === n[0] ? (n = n.slice(1) || "*", (e[n] = e[n] || []).unshift(i)) : (e[n] = e[n] || []).push(i)
            }
        }

        function Vt(e, t, i, n) {
            var r = {},
                a = e === $t;

            function s(o) {
                var l;
                return r[o] = !0, S.each(e[o] || [], function(e, o) {
                    var u = o(t, i, n);
                    return "string" != typeof u || a || r[u] ? a ? !(l = u) : void 0 : (t.dataTypes.unshift(u), s(u), !1)
                }), l
            }
            return s(t.dataTypes[0]) || !r["*"] && s("*")
        }

        function Ft(e, t) {
            var i, n, r = S.ajaxSettings.flatOptions || {};
            for (i in t) void 0 !== t[i] && ((r[i] ? e : n || (n = {}))[i] = t[i]);
            return n && S.extend(!0, e, n), e
        }
        _t.href = Tt.href, S.extend({
            active: 0,
            lastModified: {},
            etag: {},
            ajaxSettings: {
                url: Tt.href,
                type: "GET",
                isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(Tt.protocol),
                global: !0,
                processData: !0,
                async: !0,
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                accepts: {
                    "*": Ht,
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
                    "text xml": S.parseXML
                },
                flatOptions: {
                    url: !0,
                    context: !0
                }
            },
            ajaxSetup: function(e, t) {
                return t ? Ft(Ft(e, S.ajaxSettings), t) : Ft(S.ajaxSettings, e)
            },
            ajaxPrefilter: qt(It),
            ajaxTransport: qt($t),
            ajax: function(e, t) {
                "object" == typeof e && (t = e, e = void 0), t = t || {};
                var n, r, a, o, l, u, c, d, p, h, f = S.ajaxSetup({}, t),
                    v = f.context || f,
                    m = f.context && (v.nodeType || v.jquery) ? S(v) : S.event,
                    g = S.Deferred(),
                    y = S.Callbacks("once memory"),
                    b = f.statusCode || {},
                    w = {},
                    x = {},
                    T = "canceled",
                    C = {
                        readyState: 0,
                        getResponseHeader: function(e) {
                            var t;
                            if (c) {
                                if (!o)
                                    for (o = {}; t = zt.exec(a);) o[t[1].toLowerCase()] = t[2];
                                t = o[e.toLowerCase()]
                            }
                            return null == t ? null : t
                        },
                        getAllResponseHeaders: function() {
                            return c ? a : null
                        },
                        setRequestHeader: function(e, t) {
                            return null == c && (e = x[e.toLowerCase()] = x[e.toLowerCase()] || e, w[e] = t), this
                        },
                        overrideMimeType: function(e) {
                            return null == c && (f.mimeType = e), this
                        },
                        statusCode: function(e) {
                            var t;
                            if (e)
                                if (c) C.always(e[C.status]);
                                else
                                    for (t in e) b[t] = [b[t], e[t]];
                            return this
                        },
                        abort: function(e) {
                            var t = e || T;
                            return n && n.abort(t), E(0, t), this
                        }
                    };
                if (g.promise(C), f.url = ((e || f.url || Tt.href) + "").replace(jt, Tt.protocol + "//"), f.type = t.method || t.type || f.method || f.type, f.dataTypes = (f.dataType || "*").toLowerCase().match(H) || [""], null == f.crossDomain) {
                    u = s.createElement("a");
                    try {
                        u.href = f.url, u.href = u.href, f.crossDomain = _t.protocol + "//" + _t.host != u.protocol + "//" + u.host
                    } catch (e) {
                        f.crossDomain = !0
                    }
                }
                if (f.data && f.processData && "string" != typeof f.data && (f.data = S.param(f.data, f.traditional)), Vt(It, f, t, C), c) return C;
                for (p in (d = S.event && f.global) && 0 == S.active++ && S.event.trigger("ajaxStart"), f.type = f.type.toUpperCase(), f.hasContent = !Dt.test(f.type), r = f.url.replace(Lt, ""), f.hasContent ? f.data && f.processData && 0 === (f.contentType || "").indexOf("application/x-www-form-urlencoded") && (f.data = f.data.replace(Ot, "+")) : (h = f.url.slice(r.length), f.data && (f.processData || "string" == typeof f.data) && (r += (Ct.test(r) ? "&" : "?") + f.data, delete f.data), !1 === f.cache && (r = r.replace(Nt, "$1"), h = (Ct.test(r) ? "&" : "?") + "_=" + St++ + h), f.url = r + h), f.ifModified && (S.lastModified[r] && C.setRequestHeader("If-Modified-Since", S.lastModified[r]), S.etag[r] && C.setRequestHeader("If-None-Match", S.etag[r])), (f.data && f.hasContent && !1 !== f.contentType || t.contentType) && C.setRequestHeader("Content-Type", f.contentType), C.setRequestHeader("Accept", f.dataTypes[0] && f.accepts[f.dataTypes[0]] ? f.accepts[f.dataTypes[0]] + ("*" !== f.dataTypes[0] ? ", " + Ht + "; q=0.01" : "") : f.accepts["*"]), f.headers) C.setRequestHeader(p, f.headers[p]);
                if (f.beforeSend && (!1 === f.beforeSend.call(v, C, f) || c)) return C.abort();
                if (T = "abort", y.add(f.complete), C.done(f.success), C.fail(f.error), n = Vt($t, f, t, C)) {
                    if (C.readyState = 1, d && m.trigger("ajaxSend", [C, f]), c) return C;
                    f.async && f.timeout > 0 && (l = i.setTimeout(function() {
                        C.abort("timeout")
                    }, f.timeout));
                    try {
                        c = !1, n.send(w, E)
                    } catch (e) {
                        if (c) throw e;
                        E(-1, e)
                    }
                } else E(-1, "No Transport");

                function E(e, t, s, o) {
                    var u, p, h, w, x, T = t;
                    c || (c = !0, l && i.clearTimeout(l), n = void 0, a = o || "", C.readyState = e > 0 ? 4 : 0, u = e >= 200 && e < 300 || 304 === e, s && (w = function(e, t, i) {
                        for (var n, r, a, s, o = e.contents, l = e.dataTypes;
                            "*" === l[0];) l.shift(), void 0 === n && (n = e.mimeType || t.getResponseHeader("Content-Type"));
                        if (n)
                            for (r in o)
                                if (o[r] && o[r].test(n)) {
                                    l.unshift(r);
                                    break
                                }
                        if (l[0] in i) a = l[0];
                        else {
                            for (r in i) {
                                if (!l[0] || e.converters[r + " " + l[0]]) {
                                    a = r;
                                    break
                                }
                                s || (s = r)
                            }
                            a = a || s
                        }
                        if (a) return a !== l[0] && l.unshift(a), i[a]
                    }(f, C, s)), w = function(e, t, i, n) {
                        var r, a, s, o, l, u = {},
                            c = e.dataTypes.slice();
                        if (c[1])
                            for (s in e.converters) u[s.toLowerCase()] = e.converters[s];
                        for (a = c.shift(); a;)
                            if (e.responseFields[a] && (i[e.responseFields[a]] = t), !l && n && e.dataFilter && (t = e.dataFilter(t, e.dataType)), l = a, a = c.shift())
                                if ("*" === a) a = l;
                                else if ("*" !== l && l !== a) {
                            if (!(s = u[l + " " + a] || u["* " + a]))
                                for (r in u)
                                    if ((o = r.split(" "))[1] === a && (s = u[l + " " + o[0]] || u["* " + o[0]])) {
                                        !0 === s ? s = u[r] : !0 !== u[r] && (a = o[0], c.unshift(o[1]));
                                        break
                                    }
                            if (!0 !== s)
                                if (s && e.throws) t = s(t);
                                else try {
                                    t = s(t)
                                } catch (e) {
                                    return {
                                        state: "parsererror",
                                        error: s ? e : "No conversion from " + l + " to " + a
                                    }
                                }
                        }
                        return {
                            state: "success",
                            data: t
                        }
                    }(f, w, C, u), u ? (f.ifModified && ((x = C.getResponseHeader("Last-Modified")) && (S.lastModified[r] = x), (x = C.getResponseHeader("etag")) && (S.etag[r] = x)), 204 === e || "HEAD" === f.type ? T = "nocontent" : 304 === e ? T = "notmodified" : (T = w.state, p = w.data, u = !(h = w.error))) : (h = T, !e && T || (T = "error", e < 0 && (e = 0))), C.status = e, C.statusText = (t || T) + "", u ? g.resolveWith(v, [p, T, C]) : g.rejectWith(v, [C, T, h]), C.statusCode(b), b = void 0, d && m.trigger(u ? "ajaxSuccess" : "ajaxError", [C, f, u ? p : h]), y.fireWith(v, [C, T]), d && (m.trigger("ajaxComplete", [C, f]), --S.active || S.event.trigger("ajaxStop")))
                }
                return C
            },
            getJSON: function(e, t, i) {
                return S.get(e, t, i, "json")
            },
            getScript: function(e, t) {
                return S.get(e, void 0, t, "script")
            }
        }), S.each(["get", "post"], function(e, t) {
            S[t] = function(e, i, n, r) {
                return y(i) && (r = r || n, n = i, i = void 0), S.ajax(S.extend({
                    url: e,
                    type: t,
                    dataType: r,
                    data: i,
                    success: n
                }, S.isPlainObject(e) && e))
            }
        }), S._evalUrl = function(e) {
            return S.ajax({
                url: e,
                type: "GET",
                dataType: "script",
                cache: !0,
                async: !1,
                global: !1,
                throws: !0
            })
        }, S.fn.extend({
            wrapAll: function(e) {
                var t;
                return this[0] && (y(e) && (e = e.call(this[0])), t = S(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function() {
                    for (var e = this; e.firstElementChild;) e = e.firstElementChild;
                    return e
                }).append(this)), this
            },
            wrapInner: function(e) {
                return y(e) ? this.each(function(t) {
                    S(this).wrapInner(e.call(this, t))
                }) : this.each(function() {
                    var t = S(this),
                        i = t.contents();
                    i.length ? i.wrapAll(e) : t.append(e)
                })
            },
            wrap: function(e) {
                var t = y(e);
                return this.each(function(i) {
                    S(this).wrapAll(t ? e.call(this, i) : e)
                })
            },
            unwrap: function(e) {
                return this.parent(e).not("body").each(function() {
                    S(this).replaceWith(this.childNodes)
                }), this
            }
        }), S.expr.pseudos.hidden = function(e) {
            return !S.expr.pseudos.visible(e)
        }, S.expr.pseudos.visible = function(e) {
            return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length)
        }, S.ajaxSettings.xhr = function() {
            try {
                return new i.XMLHttpRequest
            } catch (e) {}
        };
        var Rt = {
                0: 200,
                1223: 204
            },
            Bt = S.ajaxSettings.xhr();
        g.cors = !!Bt && "withCredentials" in Bt, g.ajax = Bt = !!Bt, S.ajaxTransport(function(e) {
            var t, n;
            if (g.cors || Bt && !e.crossDomain) return {
                send: function(r, a) {
                    var s, o = e.xhr();
                    if (o.open(e.type, e.url, e.async, e.username, e.password), e.xhrFields)
                        for (s in e.xhrFields) o[s] = e.xhrFields[s];
                    for (s in e.mimeType && o.overrideMimeType && o.overrideMimeType(e.mimeType), e.crossDomain || r["X-Requested-With"] || (r["X-Requested-With"] = "XMLHttpRequest"), r) o.setRequestHeader(s, r[s]);
                    t = function(e) {
                        return function() {
                            t && (t = n = o.onload = o.onerror = o.onabort = o.ontimeout = o.onreadystatechange = null, "abort" === e ? o.abort() : "error" === e ? "number" != typeof o.status ? a(0, "error") : a(o.status, o.statusText) : a(Rt[o.status] || o.status, o.statusText, "text" !== (o.responseType || "text") || "string" != typeof o.responseText ? {
                                binary: o.response
                            } : {
                                text: o.responseText
                            }, o.getAllResponseHeaders()))
                        }
                    }, o.onload = t(), n = o.onerror = o.ontimeout = t("error"), void 0 !== o.onabort ? o.onabort = n : o.onreadystatechange = function() {
                        4 === o.readyState && i.setTimeout(function() {
                            t && n()
                        })
                    }, t = t("abort");
                    try {
                        o.send(e.hasContent && e.data || null)
                    } catch (e) {
                        if (t) throw e
                    }
                },
                abort: function() {
                    t && t()
                }
            }
        }), S.ajaxPrefilter(function(e) {
            e.crossDomain && (e.contents.script = !1)
        }), S.ajaxSetup({
            accepts: {
                script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
            },
            contents: {
                script: /\b(?:java|ecma)script\b/
            },
            converters: {
                "text script": function(e) {
                    return S.globalEval(e), e
                }
            }
        }), S.ajaxPrefilter("script", function(e) {
            void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET")
        }), S.ajaxTransport("script", function(e) {
            var t, i;
            if (e.crossDomain) return {
                send: function(n, r) {
                    t = S("<script>").prop({
                        charset: e.scriptCharset,
                        src: e.url
                    }).on("load error", i = function(e) {
                        t.remove(), i = null, e && r("error" === e.type ? 404 : 200, e.type)
                    }), s.head.appendChild(t[0])
                },
                abort: function() {
                    i && i()
                }
            }
        });
        var Wt, Xt = [],
            Gt = /(=)\?(?=&|$)|\?\?/;
        S.ajaxSetup({
            jsonp: "callback",
            jsonpCallback: function() {
                var e = Xt.pop() || S.expando + "_" + St++;
                return this[e] = !0, e
            }
        }), S.ajaxPrefilter("json jsonp", function(e, t, n) {
            var r, a, s, o = !1 !== e.jsonp && (Gt.test(e.url) ? "url" : "string" == typeof e.data && 0 === (e.contentType || "").indexOf("application/x-www-form-urlencoded") && Gt.test(e.data) && "data");
            if (o || "jsonp" === e.dataTypes[0]) return r = e.jsonpCallback = y(e.jsonpCallback) ? e.jsonpCallback() : e.jsonpCallback, o ? e[o] = e[o].replace(Gt, "$1" + r) : !1 !== e.jsonp && (e.url += (Ct.test(e.url) ? "&" : "?") + e.jsonp + "=" + r), e.converters["script json"] = function() {
                return s || S.error(r + " was not called"), s[0]
            }, e.dataTypes[0] = "json", a = i[r], i[r] = function() {
                s = arguments
            }, n.always(function() {
                void 0 === a ? S(i).removeProp(r) : i[r] = a, e[r] && (e.jsonpCallback = t.jsonpCallback, Xt.push(r)), s && y(a) && a(s[0]), s = a = void 0
            }), "script"
        }), g.createHTMLDocument = ((Wt = s.implementation.createHTMLDocument("").body).innerHTML = "<form></form><form></form>", 2 === Wt.childNodes.length), S.parseHTML = function(e, t, i) {
            return "string" != typeof e ? [] : ("boolean" == typeof t && (i = t, t = !1), t || (g.createHTMLDocument ? ((n = (t = s.implementation.createHTMLDocument("")).createElement("base")).href = s.location.href, t.head.appendChild(n)) : t = s), a = !i && [], (r = L.exec(e)) ? [t.createElement(r[1])] : (r = xe([e], t, a), a && a.length && S(a).remove(), S.merge([], r.childNodes)));
            var n, r, a
        }, S.fn.load = function(e, t, i) {
            var n, r, a, s = this,
                o = e.indexOf(" ");
            return o > -1 && (n = mt(e.slice(o)), e = e.slice(0, o)), y(t) ? (i = t, t = void 0) : t && "object" == typeof t && (r = "POST"), s.length > 0 && S.ajax({
                url: e,
                type: r || "GET",
                dataType: "html",
                data: t
            }).done(function(e) {
                a = arguments, s.html(n ? S("<div>").append(S.parseHTML(e)).find(n) : e)
            }).always(i && function(e, t) {
                s.each(function() {
                    i.apply(this, a || [e.responseText, t, e])
                })
            }), this
        }, S.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(e, t) {
            S.fn[t] = function(e) {
                return this.on(t, e)
            }
        }), S.expr.pseudos.animated = function(e) {
            return S.grep(S.timers, function(t) {
                return e === t.elem
            }).length
        }, S.offset = {
            setOffset: function(e, t, i) {
                var n, r, a, s, o, l, u = S.css(e, "position"),
                    c = S(e),
                    d = {};
                "static" === u && (e.style.position = "relative"), o = c.offset(), a = S.css(e, "top"), l = S.css(e, "left"), ("absolute" === u || "fixed" === u) && (a + l).indexOf("auto") > -1 ? (s = (n = c.position()).top, r = n.left) : (s = parseFloat(a) || 0, r = parseFloat(l) || 0), y(t) && (t = t.call(e, i, S.extend({}, o))), null != t.top && (d.top = t.top - o.top + s), null != t.left && (d.left = t.left - o.left + r), "using" in t ? t.using.call(e, d) : c.css(d)
            }
        }, S.fn.extend({
            offset: function(e) {
                if (arguments.length) return void 0 === e ? this : this.each(function(t) {
                    S.offset.setOffset(this, e, t)
                });
                var t, i, n = this[0];
                return n ? n.getClientRects().length ? (t = n.getBoundingClientRect(), i = n.ownerDocument.defaultView, {
                    top: t.top + i.pageYOffset,
                    left: t.left + i.pageXOffset
                }) : {
                    top: 0,
                    left: 0
                } : void 0
            },
            position: function() {
                if (this[0]) {
                    var e, t, i, n = this[0],
                        r = {
                            top: 0,
                            left: 0
                        };
                    if ("fixed" === S.css(n, "position")) t = n.getBoundingClientRect();
                    else {
                        for (t = this.offset(), i = n.ownerDocument, e = n.offsetParent || i.documentElement; e && (e === i.body || e === i.documentElement) && "static" === S.css(e, "position");) e = e.parentNode;
                        e && e !== n && 1 === e.nodeType && ((r = S(e).offset()).top += S.css(e, "borderTopWidth", !0), r.left += S.css(e, "borderLeftWidth", !0))
                    }
                    return {
                        top: t.top - r.top - S.css(n, "marginTop", !0),
                        left: t.left - r.left - S.css(n, "marginLeft", !0)
                    }
                }
            },
            offsetParent: function() {
                return this.map(function() {
                    for (var e = this.offsetParent; e && "static" === S.css(e, "position");) e = e.offsetParent;
                    return e || Te
                })
            }
        }), S.each({
            scrollLeft: "pageXOffset",
            scrollTop: "pageYOffset"
        }, function(e, t) {
            var i = "pageYOffset" === t;
            S.fn[e] = function(n) {
                return W(this, function(e, n, r) {
                    var a;
                    if (b(e) ? a = e : 9 === e.nodeType && (a = e.defaultView), void 0 === r) return a ? a[t] : e[n];
                    a ? a.scrollTo(i ? a.pageXOffset : r, i ? r : a.pageYOffset) : e[n] = r
                }, e, n, arguments.length)
            }
        }), S.each(["top", "left"], function(e, t) {
            S.cssHooks[t] = We(g.pixelPosition, function(e, i) {
                if (i) return i = Be(e, t), Ve.test(i) ? S(e).position()[t] + "px" : i
            })
        }), S.each({
            Height: "height",
            Width: "width"
        }, function(e, t) {
            S.each({
                padding: "inner" + e,
                content: t,
                "": "outer" + e
            }, function(i, n) {
                S.fn[n] = function(r, a) {
                    var s = arguments.length && (i || "boolean" != typeof r),
                        o = i || (!0 === r || !0 === a ? "margin" : "border");
                    return W(this, function(t, i, r) {
                        var a;
                        return b(t) ? 0 === n.indexOf("outer") ? t["inner" + e] : t.document.documentElement["client" + e] : 9 === t.nodeType ? (a = t.documentElement, Math.max(t.body["scroll" + e], a["scroll" + e], t.body["offset" + e], a["offset" + e], a["client" + e])) : void 0 === r ? S.css(t, i, o) : S.style(t, i, r, o)
                    }, t, s ? r : void 0, s)
                }
            })
        }), S.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function(e, t) {
            S.fn[t] = function(e, i) {
                return arguments.length > 0 ? this.on(t, null, e, i) : this.trigger(t)
            }
        }), S.fn.extend({
            hover: function(e, t) {
                return this.mouseenter(e).mouseleave(t || e)
            }
        }), S.fn.extend({
            bind: function(e, t, i) {
                return this.on(e, null, t, i)
            },
            unbind: function(e, t) {
                return this.off(e, null, t)
            },
            delegate: function(e, t, i, n) {
                return this.on(t, e, i, n)
            },
            undelegate: function(e, t, i) {
                return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", i)
            }
        }), S.proxy = function(e, t) {
            var i, n, r;
            if ("string" == typeof t && (i = e[t], t = e, e = i), y(e)) return n = l.call(arguments, 2), (r = function() {
                return e.apply(t || this, n.concat(l.call(arguments)))
            }).guid = e.guid = e.guid || S.guid++, r
        }, S.holdReady = function(e) {
            e ? S.readyWait++ : S.ready(!0)
        }, S.isArray = Array.isArray, S.parseJSON = JSON.parse, S.nodeName = O, S.isFunction = y, S.isWindow = b, S.camelCase = U, S.type = T, S.now = Date.now, S.isNumeric = function(e) {
            var t = S.type(e);
            return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e))
        }, void 0 === (n = function() {
            return S
        }.apply(t, [])) || (e.exports = n);
        var Yt = i.jQuery,
            Ut = i.$;
        return S.noConflict = function(e) {
            return i.$ === S && (i.$ = Ut), e && i.jQuery === S && (i.jQuery = Yt), S
        }, r || (i.jQuery = i.$ = S), S
    })
}, function(e, t, i) {
    var n, r; /*! VelocityJS.org (1.5.2). (C) 2014 Julian Shapiro. MIT @license: en.wikipedia.org/wiki/MIT_License */
    /*! VelocityJS.org jQuery Shim (1.0.1). (C) 2014 The jQuery Foundation. MIT @license: en.wikipedia.org/wiki/MIT_License. */
    /*! VelocityJS.org (1.5.2). (C) 2014 Julian Shapiro. MIT @license: en.wikipedia.org/wiki/MIT_License */
    /*! VelocityJS.org jQuery Shim (1.0.1). (C) 2014 The jQuery Foundation. MIT @license: en.wikipedia.org/wiki/MIT_License. */
    ! function(e) {
        "use strict";
        if (!e.jQuery) {
            var t = function(e, i) {
                return new t.fn.init(e, i)
            };
            t.isWindow = function(e) {
                return e && e === e.window
            }, t.type = function(e) {
                return e ? "object" == typeof e || "function" == typeof e ? n[a.call(e)] || "object" : typeof e : e + ""
            }, t.isArray = Array.isArray || function(e) {
                return "array" === t.type(e)
            }, t.isPlainObject = function(e) {
                var i;
                if (!e || "object" !== t.type(e) || e.nodeType || t.isWindow(e)) return !1;
                try {
                    if (e.constructor && !r.call(e, "constructor") && !r.call(e.constructor.prototype, "isPrototypeOf")) return !1
                } catch (e) {
                    return !1
                }
                for (i in e);
                return void 0 === i || r.call(e, i)
            }, t.each = function(e, t, i) {
                var n = 0,
                    r = e.length,
                    a = l(e);
                if (i) {
                    if (a)
                        for (; n < r && !1 !== t.apply(e[n], i); n++);
                    else
                        for (n in e)
                            if (e.hasOwnProperty(n) && !1 === t.apply(e[n], i)) break
                } else if (a)
                    for (; n < r && !1 !== t.call(e[n], n, e[n]); n++);
                else
                    for (n in e)
                        if (e.hasOwnProperty(n) && !1 === t.call(e[n], n, e[n])) break;
                return e
            }, t.data = function(e, n, r) {
                if (void 0 === r) {
                    var a = e[t.expando],
                        s = a && i[a];
                    if (void 0 === n) return s;
                    if (s && n in s) return s[n]
                } else if (void 0 !== n) {
                    var o = e[t.expando] || (e[t.expando] = ++t.uuid);
                    return i[o] = i[o] || {}, i[o][n] = r, r
                }
            }, t.removeData = function(e, n) {
                var r = e[t.expando],
                    a = r && i[r];
                a && (n ? t.each(n, function(e, t) {
                    delete a[t]
                }) : delete i[r])
            }, t.extend = function() {
                var e, i, n, r, a, s, o = arguments[0] || {},
                    l = 1,
                    u = arguments.length,
                    c = !1;
                for ("boolean" == typeof o && (c = o, o = arguments[l] || {}, l++), "object" != typeof o && "function" !== t.type(o) && (o = {}), l === u && (o = this, l--); l < u; l++)
                    if (a = arguments[l])
                        for (r in a) a.hasOwnProperty(r) && (e = o[r], o !== (n = a[r]) && (c && n && (t.isPlainObject(n) || (i = t.isArray(n))) ? (i ? (i = !1, s = e && t.isArray(e) ? e : []) : s = e && t.isPlainObject(e) ? e : {}, o[r] = t.extend(c, s, n)) : void 0 !== n && (o[r] = n)));
                return o
            }, t.queue = function(e, i, n) {
                if (e) {
                    i = (i || "fx") + "queue";
                    var r, a, s, o = t.data(e, i);
                    return n ? (!o || t.isArray(n) ? o = t.data(e, i, (s = a || [], (r = n) && (l(Object(r)) ? function(e, t) {
                        for (var i = +t.length, n = 0, r = e.length; n < i;) e[r++] = t[n++];
                        if (i != i)
                            for (; void 0 !== t[n];) e[r++] = t[n++];
                        e.length = r
                    }(s, "string" == typeof r ? [r] : r) : [].push.call(s, r)), s)) : o.push(n), o) : o || []
                }
            }, t.dequeue = function(e, i) {
                t.each(e.nodeType ? [e] : e, function(e, n) {
                    i = i || "fx";
                    var r = t.queue(n, i),
                        a = r.shift();
                    "inprogress" === a && (a = r.shift()), a && ("fx" === i && r.unshift("inprogress"), a.call(n, function() {
                        t.dequeue(n, i)
                    }))
                })
            }, t.fn = t.prototype = {
                init: function(e) {
                    if (e.nodeType) return this[0] = e, this;
                    throw new Error("Not a DOM node.")
                },
                offset: function() {
                    var t = this[0].getBoundingClientRect ? this[0].getBoundingClientRect() : {
                        top: 0,
                        left: 0
                    };
                    return {
                        top: t.top + (e.pageYOffset || document.scrollTop || 0) - (document.clientTop || 0),
                        left: t.left + (e.pageXOffset || document.scrollLeft || 0) - (document.clientLeft || 0)
                    }
                },
                position: function() {
                    var e = this[0],
                        i = function(e) {
                            for (var t = e.offsetParent; t && "html" !== t.nodeName.toLowerCase() && t.style && "static" === t.style.position.toLowerCase();) t = t.offsetParent;
                            return t || document
                        }(e),
                        n = this.offset(),
                        r = /^(?:body|html)$/i.test(i.nodeName) ? {
                            top: 0,
                            left: 0
                        } : t(i).offset();
                    return n.top -= parseFloat(e.style.marginTop) || 0, n.left -= parseFloat(e.style.marginLeft) || 0, i.style && (r.top += parseFloat(i.style.borderTopWidth) || 0, r.left += parseFloat(i.style.borderLeftWidth) || 0), {
                        top: n.top - r.top,
                        left: n.left - r.left
                    }
                }
            };
            var i = {};
            t.expando = "velocity" + (new Date).getTime(), t.uuid = 0;
            for (var n = {}, r = n.hasOwnProperty, a = n.toString, s = "Boolean Number String Function Array Date RegExp Object Error".split(" "), o = 0; o < s.length; o++) n["[object " + s[o] + "]"] = s[o].toLowerCase();
            t.fn.init.prototype = t.fn, e.Velocity = {
                Utilities: t
            }
        }

        function l(e) {
            var i = e.length,
                n = t.type(e);
            return "function" !== n && !t.isWindow(e) && (!(1 !== e.nodeType || !i) || ("array" === n || 0 === i || "number" == typeof i && i > 0 && i - 1 in e))
        }
    }(window),
    function(a) {
        "use strict";
        "object" == typeof e.exports ? e.exports = a() : void 0 === (r = "function" == typeof(n = a) ? n.call(t, i, t, e) : n) || (e.exports = r)
    }(function() {
        "use strict";
        return function(e, t, i, n) {
            var r, a = function() {
                    if (i.documentMode) return i.documentMode;
                    for (var e = 7; e > 4; e--) {
                        var t = i.createElement("div");
                        if (t.innerHTML = "\x3c!--[if IE " + e + "]><span></span><![endif]--\x3e", t.getElementsByTagName("span").length) return t = null, e
                    }
                    return n
                }(),
                s = (r = 0, t.webkitRequestAnimationFrame || t.mozRequestAnimationFrame || function(e) {
                    var t, i = (new Date).getTime();
                    return t = Math.max(0, 16 - (i - r)), r = i + t, setTimeout(function() {
                        e(i + t)
                    }, t)
                }),
                o = function() {
                    var e = t.performance || {};
                    if ("function" != typeof e.now) {
                        var i = e.timing && e.timing.navigationStart ? e.timing.navigationStart : (new Date).getTime();
                        e.now = function() {
                            return (new Date).getTime() - i
                        }
                    }
                    return e
                }();
            var l = function() {
                    var e = Array.prototype.slice;
                    try {
                        return e.call(i.documentElement), e
                    } catch (t) {
                        return function(t, i) {
                            var n = this.length;
                            if ("number" != typeof t && (t = 0), "number" != typeof i && (i = n), this.slice) return e.call(this, t, i);
                            var r, a = [],
                                s = t >= 0 ? t : Math.max(0, n + t),
                                o = (i < 0 ? n + i : Math.min(i, n)) - s;
                            if (o > 0)
                                if (a = new Array(o), this.charAt)
                                    for (r = 0; r < o; r++) a[r] = this.charAt(s + r);
                                else
                                    for (r = 0; r < o; r++) a[r] = this[s + r];
                            return a
                        }
                    }
                }(),
                u = function() {
                    return Array.prototype.includes ? function(e, t) {
                        return e.includes(t)
                    } : Array.prototype.indexOf ? function(e, t) {
                        return e.indexOf(t) >= 0
                    } : function(e, t) {
                        for (var i = 0; i < e.length; i++)
                            if (e[i] === t) return !0;
                        return !1
                    }
                };

            function c(e) {
                return p.isWrapped(e) ? e = l.call(e) : p.isNode(e) && (e = [e]), e
            }
            var d, p = {
                    isNumber: function(e) {
                        return "number" == typeof e
                    },
                    isString: function(e) {
                        return "string" == typeof e
                    },
                    isArray: Array.isArray || function(e) {
                        return "[object Array]" === Object.prototype.toString.call(e)
                    },
                    isFunction: function(e) {
                        return "[object Function]" === Object.prototype.toString.call(e)
                    },
                    isNode: function(e) {
                        return e && e.nodeType
                    },
                    isWrapped: function(e) {
                        return e && e !== t && p.isNumber(e.length) && !p.isString(e) && !p.isFunction(e) && !p.isNode(e) && (0 === e.length || p.isNode(e[0]))
                    },
                    isSVG: function(e) {
                        return t.SVGElement && e instanceof t.SVGElement
                    },
                    isEmptyObject: function(e) {
                        for (var t in e)
                            if (e.hasOwnProperty(t)) return !1;
                        return !0
                    }
                },
                h = !1;
            if (e.fn && e.fn.jquery ? (d = e, h = !0) : d = t.Velocity.Utilities, a <= 8 && !h) throw new Error("Velocity: IE8 and below require jQuery to be loaded before Velocity.");
            if (!(a <= 7)) {
                var f = 400,
                    v = "swing",
                    m = {
                        State: {
                            isMobile: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(t.navigator.userAgent),
                            isAndroid: /Android/i.test(t.navigator.userAgent),
                            isGingerbread: /Android 2\.3\.[3-7]/i.test(t.navigator.userAgent),
                            isChrome: t.chrome,
                            isFirefox: /Firefox/i.test(t.navigator.userAgent),
                            prefixElement: i.createElement("div"),
                            prefixMatches: {},
                            scrollAnchor: null,
                            scrollPropertyLeft: null,
                            scrollPropertyTop: null,
                            isTicking: !1,
                            calls: [],
                            delayedElements: {
                                count: 0
                            }
                        },
                        CSS: {},
                        Utilities: d,
                        Redirects: {},
                        Easings: {},
                        Promise: t.Promise,
                        defaults: {
                            queue: "",
                            duration: f,
                            easing: v,
                            begin: n,
                            complete: n,
                            progress: n,
                            display: n,
                            visibility: n,
                            loop: !1,
                            delay: !1,
                            mobileHA: !0,
                            _cacheValues: !0,
                            promiseRejectEmpty: !0
                        },
                        init: function(e) {
                            d.data(e, "velocity", {
                                isSVG: p.isSVG(e),
                                isAnimating: !1,
                                computedStyle: null,
                                tweensContainer: null,
                                rootPropertyValueCache: {},
                                transformCache: {}
                            })
                        },
                        hook: null,
                        mock: !1,
                        version: {
                            major: 1,
                            minor: 5,
                            patch: 2
                        },
                        debug: !1,
                        timestamp: !0,
                        pauseAll: function(e) {
                            var t = (new Date).getTime();
                            d.each(m.State.calls, function(t, i) {
                                if (i) {
                                    if (e !== n && (i[2].queue !== e || !1 === i[2].queue)) return !0;
                                    i[5] = {
                                        resume: !1
                                    }
                                }
                            }), d.each(m.State.delayedElements, function(e, i) {
                                i && S(i, t)
                            })
                        },
                        resumeAll: function(e) {
                            var t = (new Date).getTime();
                            d.each(m.State.calls, function(t, i) {
                                if (i) {
                                    if (e !== n && (i[2].queue !== e || !1 === i[2].queue)) return !0;
                                    i[5] && (i[5].resume = !0)
                                }
                            }), d.each(m.State.delayedElements, function(e, i) {
                                i && C(i, t)
                            })
                        }
                    };
                t.pageYOffset !== n ? (m.State.scrollAnchor = t, m.State.scrollPropertyLeft = "pageXOffset", m.State.scrollPropertyTop = "pageYOffset") : (m.State.scrollAnchor = i.documentElement || i.body.parentNode || i.body, m.State.scrollPropertyLeft = "scrollLeft", m.State.scrollPropertyTop = "scrollTop");
                var g = function() {
                    function e(e) {
                        return -e.tension * e.x - e.friction * e.v
                    }

                    function t(t, i, n) {
                        var r = {
                            x: t.x + n.dx * i,
                            v: t.v + n.dv * i,
                            tension: t.tension,
                            friction: t.friction
                        };
                        return {
                            dx: r.v,
                            dv: e(r)
                        }
                    }

                    function i(i, n) {
                        var r = {
                                dx: i.v,
                                dv: e(i)
                            },
                            a = t(i, .5 * n, r),
                            s = t(i, .5 * n, a),
                            o = t(i, n, s),
                            l = 1 / 6 * (r.dx + 2 * (a.dx + s.dx) + o.dx),
                            u = 1 / 6 * (r.dv + 2 * (a.dv + s.dv) + o.dv);
                        return i.x = i.x + l * n, i.v = i.v + u * n, i
                    }
                    return function e(t, n, r) {
                        var a, s, o, l = {
                                x: -1,
                                v: 0,
                                tension: null,
                                friction: null
                            },
                            u = [0],
                            c = 0;
                        for (t = parseFloat(t) || 500, n = parseFloat(n) || 20, r = r || null, l.tension = t, l.friction = n, s = (a = null !== r) ? (c = e(t, n)) / r * .016 : .016; o = i(o || l, s), u.push(1 + o.x), c += 16, Math.abs(o.x) > 1e-4 && Math.abs(o.v) > 1e-4;);
                        return a ? function(e) {
                            return u[e * (u.length - 1) | 0]
                        } : c
                    }
                }();
                m.Easings = {
                    linear: function(e) {
                        return e
                    },
                    swing: function(e) {
                        return .5 - Math.cos(e * Math.PI) / 2
                    },
                    spring: function(e) {
                        return 1 - Math.cos(4.5 * e * Math.PI) * Math.exp(6 * -e)
                    }
                }, d.each([
                    ["ease", [.25, .1, .25, 1]],
                    ["ease-in", [.42, 0, 1, 1]],
                    ["ease-out", [0, 0, .58, 1]],
                    ["ease-in-out", [.42, 0, .58, 1]],
                    ["easeInSine", [.47, 0, .745, .715]],
                    ["easeOutSine", [.39, .575, .565, 1]],
                    ["easeInOutSine", [.445, .05, .55, .95]],
                    ["easeInQuad", [.55, .085, .68, .53]],
                    ["easeOutQuad", [.25, .46, .45, .94]],
                    ["easeInOutQuad", [.455, .03, .515, .955]],
                    ["easeInCubic", [.55, .055, .675, .19]],
                    ["easeOutCubic", [.215, .61, .355, 1]],
                    ["easeInOutCubic", [.645, .045, .355, 1]],
                    ["easeInQuart", [.895, .03, .685, .22]],
                    ["easeOutQuart", [.165, .84, .44, 1]],
                    ["easeInOutQuart", [.77, 0, .175, 1]],
                    ["easeInQuint", [.755, .05, .855, .06]],
                    ["easeOutQuint", [.23, 1, .32, 1]],
                    ["easeInOutQuint", [.86, 0, .07, 1]],
                    ["easeInExpo", [.95, .05, .795, .035]],
                    ["easeOutExpo", [.19, 1, .22, 1]],
                    ["easeInOutExpo", [1, 0, 0, 1]],
                    ["easeInCirc", [.6, .04, .98, .335]],
                    ["easeOutCirc", [.075, .82, .165, 1]],
                    ["easeInOutCirc", [.785, .135, .15, .86]]
                ], function(e, t) {
                    m.Easings[t[0]] = E.apply(null, t[1])
                });
                var y = m.CSS = {
                    RegEx: {
                        isHex: /^#([A-f\d]{3}){1,2}$/i,
                        valueUnwrap: /^[A-z]+\((.*)\)$/i,
                        wrappedValueAlreadyExtracted: /[0-9.]+ [0-9.]+ [0-9.]+( [0-9.]+)?/,
                        valueSplit: /([A-z]+\(.+\))|(([A-z0-9#-.]+?)(?=\s|$))/gi
                    },
                    Lists: {
                        colors: ["fill", "stroke", "stopColor", "color", "backgroundColor", "borderColor", "borderTopColor", "borderRightColor", "borderBottomColor", "borderLeftColor", "outlineColor"],
                        transformsBase: ["translateX", "translateY", "scale", "scaleX", "scaleY", "skewX", "skewY", "rotateZ"],
                        transforms3D: ["transformPerspective", "translateZ", "scaleZ", "rotateX", "rotateY"],
                        units: ["%", "em", "ex", "ch", "rem", "vw", "vh", "vmin", "vmax", "cm", "mm", "Q", "in", "pc", "pt", "px", "deg", "grad", "rad", "turn", "s", "ms"],
                        colorNames: {
                            aliceblue: "240,248,255",
                            antiquewhite: "250,235,215",
                            aquamarine: "127,255,212",
                            aqua: "0,255,255",
                            azure: "240,255,255",
                            beige: "245,245,220",
                            bisque: "255,228,196",
                            black: "0,0,0",
                            blanchedalmond: "255,235,205",
                            blueviolet: "138,43,226",
                            blue: "0,0,255",
                            brown: "165,42,42",
                            burlywood: "222,184,135",
                            cadetblue: "95,158,160",
                            chartreuse: "127,255,0",
                            chocolate: "210,105,30",
                            coral: "255,127,80",
                            cornflowerblue: "100,149,237",
                            cornsilk: "255,248,220",
                            crimson: "220,20,60",
                            cyan: "0,255,255",
                            darkblue: "0,0,139",
                            darkcyan: "0,139,139",
                            darkgoldenrod: "184,134,11",
                            darkgray: "169,169,169",
                            darkgrey: "169,169,169",
                            darkgreen: "0,100,0",
                            darkkhaki: "189,183,107",
                            darkmagenta: "139,0,139",
                            darkolivegreen: "85,107,47",
                            darkorange: "255,140,0",
                            darkorchid: "153,50,204",
                            darkred: "139,0,0",
                            darksalmon: "233,150,122",
                            darkseagreen: "143,188,143",
                            darkslateblue: "72,61,139",
                            darkslategray: "47,79,79",
                            darkturquoise: "0,206,209",
                            darkviolet: "148,0,211",
                            deeppink: "255,20,147",
                            deepskyblue: "0,191,255",
                            dimgray: "105,105,105",
                            dimgrey: "105,105,105",
                            dodgerblue: "30,144,255",
                            firebrick: "178,34,34",
                            floralwhite: "255,250,240",
                            forestgreen: "34,139,34",
                            fuchsia: "255,0,255",
                            gainsboro: "220,220,220",
                            ghostwhite: "248,248,255",
                            gold: "255,215,0",
                            goldenrod: "218,165,32",
                            gray: "128,128,128",
                            grey: "128,128,128",
                            greenyellow: "173,255,47",
                            green: "0,128,0",
                            honeydew: "240,255,240",
                            hotpink: "255,105,180",
                            indianred: "205,92,92",
                            indigo: "75,0,130",
                            ivory: "255,255,240",
                            khaki: "240,230,140",
                            lavenderblush: "255,240,245",
                            lavender: "230,230,250",
                            lawngreen: "124,252,0",
                            lemonchiffon: "255,250,205",
                            lightblue: "173,216,230",
                            lightcoral: "240,128,128",
                            lightcyan: "224,255,255",
                            lightgoldenrodyellow: "250,250,210",
                            lightgray: "211,211,211",
                            lightgrey: "211,211,211",
                            lightgreen: "144,238,144",
                            lightpink: "255,182,193",
                            lightsalmon: "255,160,122",
                            lightseagreen: "32,178,170",
                            lightskyblue: "135,206,250",
                            lightslategray: "119,136,153",
                            lightsteelblue: "176,196,222",
                            lightyellow: "255,255,224",
                            limegreen: "50,205,50",
                            lime: "0,255,0",
                            linen: "250,240,230",
                            magenta: "255,0,255",
                            maroon: "128,0,0",
                            mediumaquamarine: "102,205,170",
                            mediumblue: "0,0,205",
                            mediumorchid: "186,85,211",
                            mediumpurple: "147,112,219",
                            mediumseagreen: "60,179,113",
                            mediumslateblue: "123,104,238",
                            mediumspringgreen: "0,250,154",
                            mediumturquoise: "72,209,204",
                            mediumvioletred: "199,21,133",
                            midnightblue: "25,25,112",
                            mintcream: "245,255,250",
                            mistyrose: "255,228,225",
                            moccasin: "255,228,181",
                            navajowhite: "255,222,173",
                            navy: "0,0,128",
                            oldlace: "253,245,230",
                            olivedrab: "107,142,35",
                            olive: "128,128,0",
                            orangered: "255,69,0",
                            orange: "255,165,0",
                            orchid: "218,112,214",
                            palegoldenrod: "238,232,170",
                            palegreen: "152,251,152",
                            paleturquoise: "175,238,238",
                            palevioletred: "219,112,147",
                            papayawhip: "255,239,213",
                            peachpuff: "255,218,185",
                            peru: "205,133,63",
                            pink: "255,192,203",
                            plum: "221,160,221",
                            powderblue: "176,224,230",
                            purple: "128,0,128",
                            red: "255,0,0",
                            rosybrown: "188,143,143",
                            royalblue: "65,105,225",
                            saddlebrown: "139,69,19",
                            salmon: "250,128,114",
                            sandybrown: "244,164,96",
                            seagreen: "46,139,87",
                            seashell: "255,245,238",
                            sienna: "160,82,45",
                            silver: "192,192,192",
                            skyblue: "135,206,235",
                            slateblue: "106,90,205",
                            slategray: "112,128,144",
                            snow: "255,250,250",
                            springgreen: "0,255,127",
                            steelblue: "70,130,180",
                            tan: "210,180,140",
                            teal: "0,128,128",
                            thistle: "216,191,216",
                            tomato: "255,99,71",
                            turquoise: "64,224,208",
                            violet: "238,130,238",
                            wheat: "245,222,179",
                            whitesmoke: "245,245,245",
                            white: "255,255,255",
                            yellowgreen: "154,205,50",
                            yellow: "255,255,0"
                        }
                    },
                    Hooks: {
                        templates: {
                            textShadow: ["Color X Y Blur", "black 0px 0px 0px"],
                            boxShadow: ["Color X Y Blur Spread", "black 0px 0px 0px 0px"],
                            clip: ["Top Right Bottom Left", "0px 0px 0px 0px"],
                            backgroundPosition: ["X Y", "0% 0%"],
                            transformOrigin: ["X Y Z", "50% 50% 0px"],
                            perspectiveOrigin: ["X Y", "50% 50%"]
                        },
                        registered: {},
                        register: function() {
                            for (var e = 0; e < y.Lists.colors.length; e++) {
                                var t = "color" === y.Lists.colors[e] ? "0 0 0 1" : "255 255 255 1";
                                y.Hooks.templates[y.Lists.colors[e]] = ["Red Green Blue Alpha", t]
                            }
                            var i, n, r;
                            if (a)
                                for (i in y.Hooks.templates)
                                    if (y.Hooks.templates.hasOwnProperty(i)) {
                                        r = (n = y.Hooks.templates[i])[0].split(" ");
                                        var s = n[1].match(y.RegEx.valueSplit);
                                        "Color" === r[0] && (r.push(r.shift()), s.push(s.shift()), y.Hooks.templates[i] = [r.join(" "), s.join(" ")])
                                    }
                            for (i in y.Hooks.templates)
                                if (y.Hooks.templates.hasOwnProperty(i))
                                    for (var o in r = (n = y.Hooks.templates[i])[0].split(" "))
                                        if (r.hasOwnProperty(o)) {
                                            var l = i + r[o],
                                                u = o;
                                            y.Hooks.registered[l] = [i, u]
                                        }
                        },
                        getRoot: function(e) {
                            var t = y.Hooks.registered[e];
                            return t ? t[0] : e
                        },
                        getUnit: function(e, t) {
                            var i = (e.substr(t || 0, 5).match(/^[a-z%]+/) || [])[0] || "";
                            return i && u(y.Lists.units, i) ? i : ""
                        },
                        fixColors: function(e) {
                            return e.replace(/(rgba?\(\s*)?(\b[a-z]+\b)/g, function(e, t, i) {
                                return y.Lists.colorNames.hasOwnProperty(i) ? (t || "rgba(") + y.Lists.colorNames[i] + (t ? "" : ",1)") : t + i
                            })
                        },
                        cleanRootPropertyValue: function(e, t) {
                            return y.RegEx.valueUnwrap.test(t) && (t = t.match(y.RegEx.valueUnwrap)[1]), y.Values.isCSSNullValue(t) && (t = y.Hooks.templates[e][1]), t
                        },
                        extractValue: function(e, t) {
                            var i = y.Hooks.registered[e];
                            if (i) {
                                var n = i[0],
                                    r = i[1];
                                return (t = y.Hooks.cleanRootPropertyValue(n, t)).toString().match(y.RegEx.valueSplit)[r]
                            }
                            return t
                        },
                        injectValue: function(e, t, i) {
                            var n = y.Hooks.registered[e];
                            if (n) {
                                var r, a = n[0],
                                    s = n[1];
                                return (r = (i = y.Hooks.cleanRootPropertyValue(a, i)).toString().match(y.RegEx.valueSplit))[s] = t, r.join(" ")
                            }
                            return i
                        }
                    },
                    Normalizations: {
                        registered: {
                            clip: function(e, t, i) {
                                switch (e) {
                                    case "name":
                                        return "clip";
                                    case "extract":
                                        var n;
                                        return n = y.RegEx.wrappedValueAlreadyExtracted.test(i) ? i : (n = i.toString().match(y.RegEx.valueUnwrap)) ? n[1].replace(/,(\s+)?/g, " ") : i;
                                    case "inject":
                                        return "rect(" + i + ")"
                                }
                            },
                            blur: function(e, t, i) {
                                switch (e) {
                                    case "name":
                                        return m.State.isFirefox ? "filter" : "-webkit-filter";
                                    case "extract":
                                        var n = parseFloat(i);
                                        if (!n && 0 !== n) {
                                            var r = i.toString().match(/blur\(([0-9]+[A-z]+)\)/i);
                                            n = r ? r[1] : 0
                                        }
                                        return n;
                                    case "inject":
                                        return parseFloat(i) ? "blur(" + i + ")" : "none"
                                }
                            },
                            opacity: function(e, t, i) {
                                if (a <= 8) switch (e) {
                                    case "name":
                                        return "filter";
                                    case "extract":
                                        var n = i.toString().match(/alpha\(opacity=(.*)\)/i);
                                        return i = n ? n[1] / 100 : 1;
                                    case "inject":
                                        return t.style.zoom = 1, parseFloat(i) >= 1 ? "" : "alpha(opacity=" + parseInt(100 * parseFloat(i), 10) + ")"
                                } else switch (e) {
                                    case "name":
                                        return "opacity";
                                    case "extract":
                                    case "inject":
                                        return i
                                }
                            }
                        },
                        register: function() {
                            a && !(a > 9) || m.State.isGingerbread || (y.Lists.transformsBase = y.Lists.transformsBase.concat(y.Lists.transforms3D));
                            for (var e = 0; e < y.Lists.transformsBase.length; e++) ! function() {
                                var t = y.Lists.transformsBase[e];
                                y.Normalizations.registered[t] = function(e, i, r) {
                                    switch (e) {
                                        case "name":
                                            return "transform";
                                        case "extract":
                                            return T(i) === n || T(i).transformCache[t] === n ? /^scale/i.test(t) ? 1 : 0 : T(i).transformCache[t].replace(/[()]/g, "");
                                        case "inject":
                                            var a = !1;
                                            switch (t.substr(0, t.length - 1)) {
                                                case "translate":
                                                    a = !/(%|px|em|rem|vw|vh|\d)$/i.test(r);
                                                    break;
                                                case "scal":
                                                case "scale":
                                                    m.State.isAndroid && T(i).transformCache[t] === n && r < 1 && (r = 1), a = !/(\d)$/i.test(r);
                                                    break;
                                                case "skew":
                                                case "rotate":
                                                    a = !/(deg|\d)$/i.test(r)
                                            }
                                            return a || (T(i).transformCache[t] = "(" + r + ")"), T(i).transformCache[t]
                                    }
                                }
                            }();
                            for (var t = 0; t < y.Lists.colors.length; t++) ! function() {
                                var e = y.Lists.colors[t];
                                y.Normalizations.registered[e] = function(t, i, r) {
                                    switch (t) {
                                        case "name":
                                            return e;
                                        case "extract":
                                            var s;
                                            if (y.RegEx.wrappedValueAlreadyExtracted.test(r)) s = r;
                                            else {
                                                var o, l = {
                                                    black: "rgb(0, 0, 0)",
                                                    blue: "rgb(0, 0, 255)",
                                                    gray: "rgb(128, 128, 128)",
                                                    green: "rgb(0, 128, 0)",
                                                    red: "rgb(255, 0, 0)",
                                                    white: "rgb(255, 255, 255)"
                                                };
                                                /^[A-z]+$/i.test(r) ? o = l[r] !== n ? l[r] : l.black : y.RegEx.isHex.test(r) ? o = "rgb(" + y.Values.hexToRgb(r).join(" ") + ")" : /^rgba?\(/i.test(r) || (o = l.black), s = (o || r).toString().match(y.RegEx.valueUnwrap)[1].replace(/,(\s+)?/g, " ")
                                            }
                                            return (!a || a > 8) && 3 === s.split(" ").length && (s += " 1"), s;
                                        case "inject":
                                            return /^rgb/.test(r) ? r : (a <= 8 ? 4 === r.split(" ").length && (r = r.split(/\s+/).slice(0, 3).join(" ")) : 3 === r.split(" ").length && (r += " 1"), (a <= 8 ? "rgb" : "rgba") + "(" + r.replace(/\s+/g, ",").replace(/\.(\d)+(?=,)/g, "") + ")")
                                    }
                                }
                            }();

                            function i(e, t, i) {
                                if ("border-box" === y.getPropertyValue(t, "boxSizing").toString().toLowerCase() === (i || !1)) {
                                    var n, r, a = 0,
                                        s = "width" === e ? ["Left", "Right"] : ["Top", "Bottom"],
                                        o = ["padding" + s[0], "padding" + s[1], "border" + s[0] + "Width", "border" + s[1] + "Width"];
                                    for (n = 0; n < o.length; n++) r = parseFloat(y.getPropertyValue(t, o[n])), isNaN(r) || (a += r);
                                    return i ? -a : a
                                }
                                return 0
                            }

                            function r(e, t) {
                                return function(n, r, a) {
                                    switch (n) {
                                        case "name":
                                            return e;
                                        case "extract":
                                            return parseFloat(a) + i(e, r, t);
                                        case "inject":
                                            return parseFloat(a) - i(e, r, t) + "px"
                                    }
                                }
                            }
                            y.Normalizations.registered.innerWidth = r("width", !0), y.Normalizations.registered.innerHeight = r("height", !0), y.Normalizations.registered.outerWidth = r("width"), y.Normalizations.registered.outerHeight = r("height")
                        }
                    },
                    Names: {
                        camelCase: function(e) {
                            return e.replace(/-(\w)/g, function(e, t) {
                                return t.toUpperCase()
                            })
                        },
                        SVGAttribute: function(e) {
                            var t = "width|height|x|y|cx|cy|r|rx|ry|x1|x2|y1|y2";
                            return (a || m.State.isAndroid && !m.State.isChrome) && (t += "|transform"), new RegExp("^(" + t + ")$", "i").test(e)
                        },
                        prefixCheck: function(e) {
                            if (m.State.prefixMatches[e]) return [m.State.prefixMatches[e], !0];
                            for (var t = ["", "Webkit", "Moz", "ms", "O"], i = 0, n = t.length; i < n; i++) {
                                var r;
                                if (r = 0 === i ? e : t[i] + e.replace(/^\w/, function(e) {
                                        return e.toUpperCase()
                                    }), p.isString(m.State.prefixElement.style[r])) return m.State.prefixMatches[e] = r, [r, !0]
                            }
                            return [e, !1]
                        }
                    },
                    Values: {
                        hexToRgb: function(e) {
                            var t;
                            return e = e.replace(/^#?([a-f\d])([a-f\d])([a-f\d])$/i, function(e, t, i, n) {
                                return t + t + i + i + n + n
                            }), (t = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(e)) ? [parseInt(t[1], 16), parseInt(t[2], 16), parseInt(t[3], 16)] : [0, 0, 0]
                        },
                        isCSSNullValue: function(e) {
                            return !e || /^(none|auto|transparent|(rgba\(0, ?0, ?0, ?0\)))$/i.test(e)
                        },
                        getUnitType: function(e) {
                            return /^(rotate|skew)/i.test(e) ? "deg" : /(^(scale|scaleX|scaleY|scaleZ|alpha|flexGrow|flexHeight|zIndex|fontWeight)$)|((opacity|red|green|blue|alpha)$)/i.test(e) ? "" : "px"
                        },
                        getDisplayType: function(e) {
                            var t = e && e.tagName.toString().toLowerCase();
                            return /^(b|big|i|small|tt|abbr|acronym|cite|code|dfn|em|kbd|strong|samp|var|a|bdo|br|img|map|object|q|script|span|sub|sup|button|input|label|select|textarea)$/i.test(t) ? "inline" : /^(li)$/i.test(t) ? "list-item" : /^(tr)$/i.test(t) ? "table-row" : /^(table)$/i.test(t) ? "table" : /^(tbody)$/i.test(t) ? "table-row-group" : "block"
                        },
                        addClass: function(e, t) {
                            if (e)
                                if (e.classList) e.classList.add(t);
                                else if (p.isString(e.className)) e.className += (e.className.length ? " " : "") + t;
                            else {
                                var i = e.getAttribute(a <= 7 ? "className" : "class") || "";
                                e.setAttribute("class", i + (i ? " " : "") + t)
                            }
                        },
                        removeClass: function(e, t) {
                            if (e)
                                if (e.classList) e.classList.remove(t);
                                else if (p.isString(e.className)) e.className = e.className.toString().replace(new RegExp("(^|\\s)" + t.split(" ").join("|") + "(\\s|$)", "gi"), " ");
                            else {
                                var i = e.getAttribute(a <= 7 ? "className" : "class") || "";
                                e.setAttribute("class", i.replace(new RegExp("(^|s)" + t.split(" ").join("|") + "(s|$)", "gi"), " "))
                            }
                        }
                    },
                    getPropertyValue: function(e, i, r, s) {
                        function o(e, i) {
                            var r = 0;
                            if (a <= 8) r = d.css(e, i);
                            else {
                                var l = !1;
                                /^(width|height)$/.test(i) && 0 === y.getPropertyValue(e, "display") && (l = !0, y.setPropertyValue(e, "display", y.Values.getDisplayType(e)));
                                var u, c = function() {
                                    l && y.setPropertyValue(e, "display", "none")
                                };
                                if (!s) {
                                    if ("height" === i && "border-box" !== y.getPropertyValue(e, "boxSizing").toString().toLowerCase()) {
                                        var p = e.offsetHeight - (parseFloat(y.getPropertyValue(e, "borderTopWidth")) || 0) - (parseFloat(y.getPropertyValue(e, "borderBottomWidth")) || 0) - (parseFloat(y.getPropertyValue(e, "paddingTop")) || 0) - (parseFloat(y.getPropertyValue(e, "paddingBottom")) || 0);
                                        return c(), p
                                    }
                                    if ("width" === i && "border-box" !== y.getPropertyValue(e, "boxSizing").toString().toLowerCase()) {
                                        var h = e.offsetWidth - (parseFloat(y.getPropertyValue(e, "borderLeftWidth")) || 0) - (parseFloat(y.getPropertyValue(e, "borderRightWidth")) || 0) - (parseFloat(y.getPropertyValue(e, "paddingLeft")) || 0) - (parseFloat(y.getPropertyValue(e, "paddingRight")) || 0);
                                        return c(), h
                                    }
                                }
                                u = T(e) === n ? t.getComputedStyle(e, null) : T(e).computedStyle ? T(e).computedStyle : T(e).computedStyle = t.getComputedStyle(e, null), "borderColor" === i && (i = "borderTopColor"), "" !== (r = 9 === a && "filter" === i ? u.getPropertyValue(i) : u[i]) && null !== r || (r = e.style[i]), c()
                            }
                            if ("auto" === r && /^(top|right|bottom|left)$/i.test(i)) {
                                var f = o(e, "position");
                                ("fixed" === f || "absolute" === f && /top|left/i.test(i)) && (r = d(e).position()[i] + "px")
                            }
                            return r
                        }
                        var l;
                        if (y.Hooks.registered[i]) {
                            var u = i,
                                c = y.Hooks.getRoot(u);
                            r === n && (r = y.getPropertyValue(e, y.Names.prefixCheck(c)[0])), y.Normalizations.registered[c] && (r = y.Normalizations.registered[c]("extract", e, r)), l = y.Hooks.extractValue(u, r)
                        } else if (y.Normalizations.registered[i]) {
                            var p, h;
                            "transform" !== (p = y.Normalizations.registered[i]("name", e)) && (h = o(e, y.Names.prefixCheck(p)[0]), y.Values.isCSSNullValue(h) && y.Hooks.templates[i] && (h = y.Hooks.templates[i][1])), l = y.Normalizations.registered[i]("extract", e, h)
                        }
                        if (!/^[\d-]/.test(l)) {
                            var f = T(e);
                            if (f && f.isSVG && y.Names.SVGAttribute(i))
                                if (/^(height|width)$/i.test(i)) try {
                                    l = e.getBBox()[i]
                                } catch (e) {
                                    l = 0
                                } else l = e.getAttribute(i);
                                else l = o(e, y.Names.prefixCheck(i)[0])
                        }
                        return y.Values.isCSSNullValue(l) && (l = 0), m.debug >= 2 && console.log("Get " + i + ": " + l), l
                    },
                    setPropertyValue: function(e, i, n, r, s) {
                        var o = i;
                        if ("scroll" === i) s.container ? s.container["scroll" + s.direction] = n : "Left" === s.direction ? t.scrollTo(n, s.alternateValue) : t.scrollTo(s.alternateValue, n);
                        else if (y.Normalizations.registered[i] && "transform" === y.Normalizations.registered[i]("name", e)) y.Normalizations.registered[i]("inject", e, n), o = "transform", n = T(e).transformCache[i];
                        else {
                            if (y.Hooks.registered[i]) {
                                var l = i,
                                    u = y.Hooks.getRoot(i);
                                r = r || y.getPropertyValue(e, u), n = y.Hooks.injectValue(l, n, r), i = u
                            }
                            if (y.Normalizations.registered[i] && (n = y.Normalizations.registered[i]("inject", e, n), i = y.Normalizations.registered[i]("name", e)), o = y.Names.prefixCheck(i)[0], a <= 8) try {
                                e.style[o] = n
                            } catch (e) {
                                m.debug && console.log("Browser does not support [" + n + "] for [" + o + "]")
                            } else {
                                var c = T(e);
                                c && c.isSVG && y.Names.SVGAttribute(i) ? e.setAttribute(i, n) : e.style[o] = n
                            }
                            m.debug >= 2 && console.log("Set " + i + " (" + o + "): " + n)
                        }
                        return [o, n]
                    },
                    flushTransformCache: function(e) {
                        var t = "",
                            i = T(e);
                        if ((a || m.State.isAndroid && !m.State.isChrome) && i && i.isSVG) {
                            var n = function(t) {
                                    return parseFloat(y.getPropertyValue(e, t))
                                },
                                r = {
                                    translate: [n("translateX"), n("translateY")],
                                    skewX: [n("skewX")],
                                    skewY: [n("skewY")],
                                    scale: 1 !== n("scale") ? [n("scale"), n("scale")] : [n("scaleX"), n("scaleY")],
                                    rotate: [n("rotateZ"), 0, 0]
                                };
                            d.each(T(e).transformCache, function(e) {
                                /^translate/i.test(e) ? e = "translate" : /^scale/i.test(e) ? e = "scale" : /^rotate/i.test(e) && (e = "rotate"), r[e] && (t += e + "(" + r[e].join(" ") + ") ", delete r[e])
                            })
                        } else {
                            var s, o;
                            d.each(T(e).transformCache, function(i) {
                                if (s = T(e).transformCache[i], "transformPerspective" === i) return o = s, !0;
                                9 === a && "rotateZ" === i && (i = "rotate"), t += i + s + " "
                            }), o && (t = "perspective" + o + " " + t)
                        }
                        y.setPropertyValue(e, "transform", t)
                    }
                };
                y.Hooks.register(), y.Normalizations.register(), m.hook = function(e, t, i) {
                    var r;
                    return e = c(e), d.each(e, function(e, a) {
                        if (T(a) === n && m.init(a), i === n) r === n && (r = y.getPropertyValue(a, t));
                        else {
                            var s = y.setPropertyValue(a, t, i);
                            "transform" === s[0] && m.CSS.flushTransformCache(a), r = s
                        }
                    }), r
                };
                var b = function() {
                    var e;

                    function r() {
                        return a ? w.promise || null : s
                    }
                    var a, s, o, l, h, v, g = arguments[0] && (arguments[0].p || d.isPlainObject(arguments[0].properties) && !arguments[0].properties.names || p.isString(arguments[0].properties));
                    p.isWrapped(this) ? (a = !1, o = 0, l = this, s = this) : (a = !0, o = 1, l = g ? arguments[0].elements || arguments[0].e : arguments[0]);
                    var w = {
                        promise: null,
                        resolver: null,
                        rejecter: null
                    };
                    if (a && m.Promise && (w.promise = new m.Promise(function(e, t) {
                            w.resolver = e, w.rejecter = t
                        })), g ? (h = arguments[0].properties || arguments[0].p, v = arguments[0].options || arguments[0].o) : (h = arguments[o], v = arguments[o + 1]), l = c(l)) {
                        var x, E = l.length,
                            A = 0;
                        if (!/^(stop|finish|finishAll|pause|resume)$/i.test(h) && !d.isPlainObject(v)) {
                            var O = o + 1;
                            v = {};
                            for (var L = O; L < arguments.length; L++) p.isArray(arguments[L]) || !/^(fast|normal|slow)$/i.test(arguments[L]) && !/^\d/.test(arguments[L]) ? p.isString(arguments[L]) || p.isArray(arguments[L]) ? v.easing = arguments[L] : p.isFunction(arguments[L]) && (v.complete = arguments[L]) : v.duration = arguments[L]
                        }
                        switch (h) {
                            case "scroll":
                                x = "scroll";
                                break;
                            case "reverse":
                                x = "reverse";
                                break;
                            case "pause":
                                var N = (new Date).getTime();
                                return d.each(l, function(e, t) {
                                    S(t, N)
                                }), d.each(m.State.calls, function(e, t) {
                                    var i = !1;
                                    t && d.each(t[1], function(e, r) {
                                        var a = v === n ? "" : v;
                                        return !0 !== a && t[2].queue !== a && (v !== n || !1 !== t[2].queue) || (d.each(l, function(e, n) {
                                            if (n === r) return t[5] = {
                                                resume: !1
                                            }, i = !0, !1
                                        }), !i && void 0)
                                    })
                                }), r();
                            case "resume":
                                return d.each(l, function(e, t) {
                                    C(t)
                                }), d.each(m.State.calls, function(e, t) {
                                    var i = !1;
                                    t && d.each(t[1], function(e, r) {
                                        var a = v === n ? "" : v;
                                        return !0 !== a && t[2].queue !== a && (v !== n || !1 !== t[2].queue) || (!t[5] || (d.each(l, function(e, n) {
                                            if (n === r) return t[5].resume = !0, i = !0, !1
                                        }), !i && void 0))
                                    })
                                }), r();
                            case "finish":
                            case "finishAll":
                            case "stop":
                                d.each(l, function(e, t) {
                                    T(t) && T(t).delayTimer && (clearTimeout(T(t).delayTimer.setTimeout), T(t).delayTimer.next && T(t).delayTimer.next(), delete T(t).delayTimer), "finishAll" !== h || !0 !== v && !p.isString(v) || (d.each(d.queue(t, p.isString(v) ? v : ""), function(e, t) {
                                        p.isFunction(t) && t()
                                    }), d.queue(t, p.isString(v) ? v : "", []))
                                });
                                var z = [];
                                return d.each(m.State.calls, function(e, t) {
                                    t && d.each(t[1], function(i, r) {
                                        var a = v === n ? "" : v;
                                        if (!0 !== a && t[2].queue !== a && (v !== n || !1 !== t[2].queue)) return !0;
                                        d.each(l, function(i, n) {
                                            if (n === r)
                                                if ((!0 === v || p.isString(v)) && (d.each(d.queue(n, p.isString(v) ? v : ""), function(e, t) {
                                                        p.isFunction(t) && t(null, !0)
                                                    }), d.queue(n, p.isString(v) ? v : "", [])), "stop" === h) {
                                                    var s = T(n);
                                                    s && s.tweensContainer && (!0 === a || "" === a) && d.each(s.tweensContainer, function(e, t) {
                                                        t.endValue = t.currentValue
                                                    }), z.push(e)
                                                } else "finish" !== h && "finishAll" !== h || (t[2].duration = 1)
                                        })
                                    })
                                }), "stop" === h && (d.each(z, function(e, t) {
                                    M(t, !0)
                                }), w.promise && w.resolver(l)), r();
                            default:
                                if (!d.isPlainObject(h) || p.isEmptyObject(h)) {
                                    if (p.isString(h) && m.Redirects[h]) {
                                        var D = (e = d.extend({}, v)).duration,
                                            j = e.delay || 0;
                                        return !0 === e.backwards && (l = d.extend(!0, [], l).reverse()), d.each(l, function(t, i) {
                                            parseFloat(e.stagger) ? e.delay = j + parseFloat(e.stagger) * t : p.isFunction(e.stagger) && (e.delay = j + e.stagger.call(i, t, E)), e.drag && (e.duration = parseFloat(D) || (/^(callout|transition)/.test(h) ? 1e3 : f), e.duration = Math.max(e.duration * (e.backwards ? 1 - t / E : (t + 1) / E), .75 * e.duration, 200)), m.Redirects[h].call(i, i, e || {}, t, E, l, w.promise ? w : n)
                                        }), r()
                                    }
                                    var I = "Velocity: First argument (" + h + ") was not a property map, a known action, or a registered redirect. Aborting.";
                                    return w.promise ? w.rejecter(new Error(I)) : t.console && console.log(I), r()
                                }
                                x = "start"
                        }
                        var $ = {
                                lastParent: null,
                                lastPosition: null,
                                lastFontSize: null,
                                lastPercentToPxWidth: null,
                                lastPercentToPxHeight: null,
                                lastEmToPx: null,
                                remToPx: null,
                                vwToPx: null,
                                vhToPx: null
                            },
                            H = [];
                        d.each(l, function(e, t) {
                            p.isNode(t) && F(t, e)
                        }), (e = d.extend({}, m.defaults, v)).loop = parseInt(e.loop, 10);
                        var _ = 2 * e.loop - 1;
                        if (e.loop)
                            for (var q = 0; q < _; q++) {
                                var V = {
                                    delay: e.delay,
                                    progress: e.progress
                                };
                                q === _ - 1 && (V.display = e.display, V.visibility = e.visibility, V.complete = e.complete), b(l, "reverse", V)
                            }
                        return r()
                    }

                    function F(e, r) {
                        var a, s, o = d.extend({}, m.defaults, v),
                            c = {};
                        switch (T(e) === n && m.init(e), parseFloat(o.delay) && !1 !== o.queue && d.queue(e, o.queue, function(t, i) {
                            if (!0 === i) return !0;
                            m.velocityQueueEntryFlag = !0;
                            var n = m.State.delayedElements.count++;
                            m.State.delayedElements[n] = e;
                            var r, a = (r = n, function() {
                                m.State.delayedElements[r] = !1, t()
                            });
                            T(e).delayBegin = (new Date).getTime(), T(e).delay = parseFloat(o.delay), T(e).delayTimer = {
                                setTimeout: setTimeout(t, parseFloat(o.delay)),
                                next: a
                            }
                        }), o.duration.toString().toLowerCase()) {
                            case "fast":
                                o.duration = 200;
                                break;
                            case "normal":
                                o.duration = f;
                                break;
                            case "slow":
                                o.duration = 600;
                                break;
                            default:
                                o.duration = parseFloat(o.duration) || 1
                        }

                        function g(s) {
                            var f, g;
                            if (o.begin && 0 === A) try {
                                o.begin.call(l, l)
                            } catch (e) {
                                setTimeout(function() {
                                    throw e
                                }, 1)
                            }
                            if ("scroll" === x) {
                                var b, S, C, M = /^x$/i.test(o.axis) ? "Left" : "Top",
                                    O = parseFloat(o.offset) || 0;
                                o.container ? p.isWrapped(o.container) || p.isNode(o.container) ? (o.container = o.container[0] || o.container, C = (b = o.container["scroll" + M]) + d(e).position()[M.toLowerCase()] + O) : o.container = null : (b = m.State.scrollAnchor[m.State["scrollProperty" + M]], S = m.State.scrollAnchor[m.State["scrollProperty" + ("Left" === M ? "Top" : "Left")]], C = d(e).offset()[M.toLowerCase()] + O), c = {
                                    scroll: {
                                        rootPropertyValue: !1,
                                        startValue: b,
                                        currentValue: b,
                                        endValue: C,
                                        unitType: "",
                                        easing: o.easing,
                                        scrollData: {
                                            container: o.container,
                                            direction: M,
                                            alternateValue: S
                                        }
                                    },
                                    element: e
                                }, m.debug && console.log("tweensContainer (scroll): ", c.scroll, e)
                            } else if ("reverse" === x) {
                                if (!(f = T(e))) return;
                                if (!f.tweensContainer) return void d.dequeue(e, o.queue);
                                for (var L in "none" === f.opts.display && (f.opts.display = "auto"), "hidden" === f.opts.visibility && (f.opts.visibility = "visible"), f.opts.loop = !1, f.opts.begin = null, f.opts.complete = null, v.easing || delete o.easing, v.duration || delete o.duration, o = d.extend({}, f.opts, o), g = d.extend(!0, {}, f ? f.tweensContainer : null))
                                    if (g.hasOwnProperty(L) && "element" !== L) {
                                        var N = g[L].startValue;
                                        g[L].startValue = g[L].currentValue = g[L].endValue, g[L].endValue = N, p.isEmptyObject(v) || (g[L].easing = o.easing), m.debug && console.log("reverse tweensContainer (" + L + "): " + JSON.stringify(g[L]), e)
                                    }
                                c = g
                            } else if ("start" === x) {
                                (f = T(e)) && f.tweensContainer && !0 === f.isAnimating && (g = f.tweensContainer);
                                var z = function(t, i) {
                                        var n, a, s;
                                        return p.isFunction(t) && (t = t.call(e, r, E)), p.isArray(t) ? (n = t[0], !p.isArray(t[1]) && /^[\d-]/.test(t[1]) || p.isFunction(t[1]) || y.RegEx.isHex.test(t[1]) ? s = t[1] : p.isString(t[1]) && !y.RegEx.isHex.test(t[1]) && m.Easings[t[1]] || p.isArray(t[1]) ? (a = i ? t[1] : k(t[1], o.duration), s = t[2]) : s = t[1] || t[2]) : n = t, i || (a = a || o.easing), p.isFunction(n) && (n = n.call(e, r, E)), p.isFunction(s) && (s = s.call(e, r, E)), [n || 0, a, s]
                                    },
                                    D = function(r, s) {
                                        var l, u = y.Hooks.getRoot(r),
                                            h = !1,
                                            v = s[0],
                                            b = s[1],
                                            w = s[2];
                                        if (f && f.isSVG || "tween" === u || !1 !== y.Names.prefixCheck(u)[1] || y.Normalizations.registered[u] !== n) {
                                            (o.display !== n && null !== o.display && "none" !== o.display || o.visibility !== n && "hidden" !== o.visibility) && /opacity|filter/.test(r) && !w && 0 !== v && (w = 0), o._cacheValues && g && g[r] ? (w === n && (w = g[r].endValue + g[r].unitType), h = f.rootPropertyValueCache[u]) : y.Hooks.registered[r] ? w === n ? (h = y.getPropertyValue(e, u), w = y.getPropertyValue(e, r, h)) : h = y.Hooks.templates[u][1] : w === n && (w = y.getPropertyValue(e, r));
                                            var x, T, S, C = !1,
                                                E = function(e, t) {
                                                    var i, n;
                                                    return n = (t || "0").toString().toLowerCase().replace(/[%A-z]+$/, function(e) {
                                                        return i = e, ""
                                                    }), i || (i = y.Values.getUnitType(e)), [n, i]
                                                };
                                            if (w !== v && p.isString(w) && p.isString(v)) {
                                                l = "";
                                                var k = 0,
                                                    P = 0,
                                                    M = [],
                                                    A = [],
                                                    O = 0,
                                                    L = 0,
                                                    N = 0;
                                                for (w = y.Hooks.fixColors(w), v = y.Hooks.fixColors(v); k < w.length && P < v.length;) {
                                                    var z = w[k],
                                                        D = v[P];
                                                    if (/[\d\.-]/.test(z) && /[\d\.-]/.test(D)) {
                                                        for (var j = z, I = D, H = ".", _ = "."; ++k < w.length;) {
                                                            if ((z = w[k]) === H) H = "..";
                                                            else if (!/\d/.test(z)) break;
                                                            j += z
                                                        }
                                                        for (; ++P < v.length;) {
                                                            if ((D = v[P]) === _) _ = "..";
                                                            else if (!/\d/.test(D)) break;
                                                            I += D
                                                        }
                                                        var q = y.Hooks.getUnit(w, k),
                                                            V = y.Hooks.getUnit(v, P);
                                                        if (k += q.length, P += V.length, q === V) j === I ? l += j + q : (l += "{" + M.length + (L ? "!" : "") + "}" + q, M.push(parseFloat(j)), A.push(parseFloat(I)));
                                                        else {
                                                            var F = parseFloat(j),
                                                                R = parseFloat(I);
                                                            l += (O < 5 ? "calc" : "") + "(" + (F ? "{" + M.length + (L ? "!" : "") + "}" : "0") + q + " + " + (R ? "{" + (M.length + (F ? 1 : 0)) + (L ? "!" : "") + "}" : "0") + V + ")", F && (M.push(F), A.push(0)), R && (M.push(0), A.push(R))
                                                        }
                                                    } else {
                                                        if (z !== D) {
                                                            O = 0;
                                                            break
                                                        }
                                                        l += z, k++, P++, 0 === O && "c" === z || 1 === O && "a" === z || 2 === O && "l" === z || 3 === O && "c" === z || O >= 4 && "(" === z ? O++ : (O && O < 5 || O >= 4 && ")" === z && --O < 5) && (O = 0), 0 === L && "r" === z || 1 === L && "g" === z || 2 === L && "b" === z || 3 === L && "a" === z || L >= 3 && "(" === z ? (3 === L && "a" === z && (N = 1), L++) : N && "," === z ? ++N > 3 && (L = N = 0) : (N && L < (N ? 5 : 4) || L >= (N ? 4 : 3) && ")" === z && --L < (N ? 5 : 4)) && (L = N = 0)
                                                    }
                                                }
                                                k === w.length && P === v.length || (m.debug && console.error('Trying to pattern match mis-matched strings ["' + v + '", "' + w + '"]'), l = n), l && (M.length ? (m.debug && console.log('Pattern found "' + l + '" -> ', M, A, "[" + w + "," + v + "]"), w = M, v = A, T = S = "") : l = n)
                                            }
                                            l || (w = (x = E(r, w))[0], S = x[1], v = (x = E(r, v))[0].replace(/^([+-\/*])=/, function(e, t) {
                                                return C = t, ""
                                            }), T = x[1], w = parseFloat(w) || 0, v = parseFloat(v) || 0, "%" === T && (/^(fontSize|lineHeight)$/.test(r) ? (v /= 100, T = "em") : /^scale/.test(r) ? (v /= 100, T = "") : /(Red|Green|Blue)$/i.test(r) && (v = v / 100 * 255, T = "")));
                                            if (/[\/*]/.test(C)) T = S;
                                            else if (S !== T && 0 !== w)
                                                if (0 === v) T = S;
                                                else {
                                                    a = a || function() {
                                                        var n = {
                                                                myParent: e.parentNode || i.body,
                                                                position: y.getPropertyValue(e, "position"),
                                                                fontSize: y.getPropertyValue(e, "fontSize")
                                                            },
                                                            r = n.position === $.lastPosition && n.myParent === $.lastParent,
                                                            a = n.fontSize === $.lastFontSize;
                                                        $.lastParent = n.myParent, $.lastPosition = n.position, $.lastFontSize = n.fontSize;
                                                        var s = {};
                                                        if (a && r) s.emToPx = $.lastEmToPx, s.percentToPxWidth = $.lastPercentToPxWidth, s.percentToPxHeight = $.lastPercentToPxHeight;
                                                        else {
                                                            var o = f && f.isSVG ? i.createElementNS("http://www.w3.org/2000/svg", "rect") : i.createElement("div");
                                                            m.init(o), n.myParent.appendChild(o), d.each(["overflow", "overflowX", "overflowY"], function(e, t) {
                                                                m.CSS.setPropertyValue(o, t, "hidden")
                                                            }), m.CSS.setPropertyValue(o, "position", n.position), m.CSS.setPropertyValue(o, "fontSize", n.fontSize), m.CSS.setPropertyValue(o, "boxSizing", "content-box"), d.each(["minWidth", "maxWidth", "width", "minHeight", "maxHeight", "height"], function(e, t) {
                                                                m.CSS.setPropertyValue(o, t, "100%")
                                                            }), m.CSS.setPropertyValue(o, "paddingLeft", "100em"), s.percentToPxWidth = $.lastPercentToPxWidth = (parseFloat(y.getPropertyValue(o, "width", null, !0)) || 1) / 100, s.percentToPxHeight = $.lastPercentToPxHeight = (parseFloat(y.getPropertyValue(o, "height", null, !0)) || 1) / 100, s.emToPx = $.lastEmToPx = (parseFloat(y.getPropertyValue(o, "paddingLeft")) || 1) / 100, n.myParent.removeChild(o)
                                                        }
                                                        return null === $.remToPx && ($.remToPx = parseFloat(y.getPropertyValue(i.body, "fontSize")) || 16), null === $.vwToPx && ($.vwToPx = parseFloat(t.innerWidth) / 100, $.vhToPx = parseFloat(t.innerHeight) / 100), s.remToPx = $.remToPx, s.vwToPx = $.vwToPx, s.vhToPx = $.vhToPx, m.debug >= 1 && console.log("Unit ratios: " + JSON.stringify(s), e), s
                                                    }();
                                                    var B = /margin|padding|left|right|width|text|word|letter/i.test(r) || /X$/.test(r) || "x" === r ? "x" : "y";
                                                    switch (S) {
                                                        case "%":
                                                            w *= "x" === B ? a.percentToPxWidth : a.percentToPxHeight;
                                                            break;
                                                        case "px":
                                                            break;
                                                        default:
                                                            w *= a[S + "ToPx"]
                                                    }
                                                    switch (T) {
                                                        case "%":
                                                            w *= 1 / ("x" === B ? a.percentToPxWidth : a.percentToPxHeight);
                                                            break;
                                                        case "px":
                                                            break;
                                                        default:
                                                            w *= 1 / a[T + "ToPx"]
                                                    }
                                                }
                                            switch (C) {
                                                case "+":
                                                    v = w + v;
                                                    break;
                                                case "-":
                                                    v = w - v;
                                                    break;
                                                case "*":
                                                    v *= w;
                                                    break;
                                                case "/":
                                                    v = w / v
                                            }
                                            c[r] = {
                                                rootPropertyValue: h,
                                                startValue: w,
                                                currentValue: w,
                                                endValue: v,
                                                unitType: T,
                                                easing: b
                                            }, l && (c[r].pattern = l), m.debug && console.log("tweensContainer (" + r + "): " + JSON.stringify(c[r]), e)
                                        } else m.debug && console.log("Skipping [" + u + "] due to a lack of browser support.")
                                    };
                                for (var j in h)
                                    if (h.hasOwnProperty(j)) {
                                        var I = y.Names.camelCase(j),
                                            _ = z(h[j]);
                                        if (u(y.Lists.colors, I)) {
                                            var q = _[0],
                                                V = _[1],
                                                F = _[2];
                                            if (y.RegEx.isHex.test(q)) {
                                                for (var R = ["Red", "Green", "Blue"], B = y.Values.hexToRgb(q), W = F ? y.Values.hexToRgb(F) : n, X = 0; X < R.length; X++) {
                                                    var G = [B[X]];
                                                    V && G.push(V), W !== n && G.push(W[X]), D(I + R[X], G)
                                                }
                                                continue
                                            }
                                        }
                                        D(I, _)
                                    }
                                c.element = e
                            }
                            c.element && (y.Values.addClass(e, "velocity-animating"), H.push(c), (f = T(e)) && ("" === o.queue && (f.tweensContainer = c, f.opts = o), f.isAnimating = !0), A === E - 1 ? (m.State.calls.push([H, l, o, null, w.resolver, null, 0]), !1 === m.State.isTicking && (m.State.isTicking = !0, P())) : A++)
                        }
                        if (!1 !== m.mock && (!0 === m.mock ? o.duration = o.delay = 1 : (o.duration *= parseFloat(m.mock) || 1, o.delay *= parseFloat(m.mock) || 1)), o.easing = k(o.easing, o.duration), o.begin && !p.isFunction(o.begin) && (o.begin = null), o.progress && !p.isFunction(o.progress) && (o.progress = null), o.complete && !p.isFunction(o.complete) && (o.complete = null), o.display !== n && null !== o.display && (o.display = o.display.toString().toLowerCase(), "auto" === o.display && (o.display = m.CSS.Values.getDisplayType(e))), o.visibility !== n && null !== o.visibility && (o.visibility = o.visibility.toString().toLowerCase()), o.mobileHA = o.mobileHA && m.State.isMobile && !m.State.isGingerbread, !1 === o.queue)
                            if (o.delay) {
                                var b = m.State.delayedElements.count++;
                                m.State.delayedElements[b] = e;
                                var S = (s = b, function() {
                                    m.State.delayedElements[s] = !1, g()
                                });
                                T(e).delayBegin = (new Date).getTime(), T(e).delay = parseFloat(o.delay), T(e).delayTimer = {
                                    setTimeout: setTimeout(g, parseFloat(o.delay)),
                                    next: S
                                }
                            } else g();
                        else d.queue(e, o.queue, function(e, t) {
                            if (!0 === t) return w.promise && w.resolver(l), !0;
                            m.velocityQueueEntryFlag = !0, g()
                        });
                        "" !== o.queue && "fx" !== o.queue || "inprogress" === d.queue(e)[0] || d.dequeue(e)
                    }
                    w.promise && (h && v && !1 === v.promiseRejectEmpty ? w.resolver() : w.rejecter())
                };
                (m = d.extend(b, m)).animate = b;
                var w = t.requestAnimationFrame || s;
                if (!m.State.isMobile && i.hidden !== n) {
                    var x = function() {
                        i.hidden ? (w = function(e) {
                            return setTimeout(function() {
                                e(!0)
                            }, 16)
                        }, P()) : w = t.requestAnimationFrame || s
                    };
                    x(), i.addEventListener("visibilitychange", x)
                }
                return e.Velocity = m, e !== t && (e.fn.velocity = b, e.fn.velocity.defaults = m.defaults), d.each(["Down", "Up"], function(e, t) {
                    m.Redirects["slide" + t] = function(e, i, r, a, s, o) {
                        var l = d.extend({}, i),
                            u = l.begin,
                            c = l.complete,
                            p = {},
                            h = {
                                height: "",
                                marginTop: "",
                                marginBottom: "",
                                paddingTop: "",
                                paddingBottom: ""
                            };
                        l.display === n && (l.display = "Down" === t ? "inline" === m.CSS.Values.getDisplayType(e) ? "inline-block" : "block" : "none"), l.begin = function() {
                            for (var i in 0 === r && u && u.call(s, s), h)
                                if (h.hasOwnProperty(i)) {
                                    p[i] = e.style[i];
                                    var n = y.getPropertyValue(e, i);
                                    h[i] = "Down" === t ? [n, 0] : [0, n]
                                }
                            p.overflow = e.style.overflow, e.style.overflow = "hidden"
                        }, l.complete = function() {
                            for (var t in p) p.hasOwnProperty(t) && (e.style[t] = p[t]);
                            r === a - 1 && (c && c.call(s, s), o && o.resolver(s))
                        }, m(e, h, l)
                    }
                }), d.each(["In", "Out"], function(e, t) {
                    m.Redirects["fade" + t] = function(e, i, r, a, s, o) {
                        var l = d.extend({}, i),
                            u = l.complete,
                            c = {
                                opacity: "In" === t ? 1 : 0
                            };
                        0 !== r && (l.begin = null), l.complete = r !== a - 1 ? null : function() {
                            u && u.call(s, s), o && o.resolver(s)
                        }, l.display === n && (l.display = "In" === t ? "auto" : "none"), m(this, c, l)
                    }
                }), m
            }

            function T(e) {
                var t = d.data(e, "velocity");
                return null === t ? n : t
            }

            function S(e, t) {
                var i = T(e);
                i && i.delayTimer && !i.delayPaused && (i.delayRemaining = i.delay - t + i.delayBegin, i.delayPaused = !0, clearTimeout(i.delayTimer.setTimeout))
            }

            function C(e, t) {
                var i = T(e);
                i && i.delayTimer && i.delayPaused && (i.delayPaused = !1, i.delayTimer.setTimeout = setTimeout(i.delayTimer.next, i.delayRemaining))
            }

            function E(e, i, n, r) {
                var a = 4,
                    s = .001,
                    o = 1e-7,
                    l = 10,
                    u = 11,
                    c = 1 / (u - 1),
                    d = "Float32Array" in t;
                if (4 !== arguments.length) return !1;
                for (var p = 0; p < 4; ++p)
                    if ("number" != typeof arguments[p] || isNaN(arguments[p]) || !isFinite(arguments[p])) return !1;
                e = Math.min(e, 1), n = Math.min(n, 1), e = Math.max(e, 0), n = Math.max(n, 0);
                var h = d ? new Float32Array(u) : new Array(u);

                function f(e, t) {
                    return 1 - 3 * t + 3 * e
                }

                function v(e, t) {
                    return 3 * t - 6 * e
                }

                function m(e) {
                    return 3 * e
                }

                function g(e, t, i) {
                    return ((f(t, i) * e + v(t, i)) * e + m(t)) * e
                }

                function y(e, t, i) {
                    return 3 * f(t, i) * e * e + 2 * v(t, i) * e + m(t)
                }

                function b(t) {
                    for (var i = 0, r = 1, d = u - 1; r !== d && h[r] <= t; ++r) i += c;
                    var p = i + (t - h[--r]) / (h[r + 1] - h[r]) * c,
                        f = y(p, e, n);
                    return f >= s ? function(t, i) {
                        for (var r = 0; r < a; ++r) {
                            var s = y(i, e, n);
                            if (0 === s) return i;
                            i -= (g(i, e, n) - t) / s
                        }
                        return i
                    }(t, p) : 0 === f ? p : function(t, i, r) {
                        var a, s, u = 0;
                        do {
                            (a = g(s = i + (r - i) / 2, e, n) - t) > 0 ? r = s : i = s
                        } while (Math.abs(a) > o && ++u < l);
                        return s
                    }(t, i, i + c)
                }
                var w = !1;

                function x() {
                    w = !0, e === i && n === r || function() {
                        for (var t = 0; t < u; ++t) h[t] = g(t * c, e, n)
                    }()
                }
                var T = function(t) {
                    return w || x(), e === i && n === r ? t : 0 === t ? 0 : 1 === t ? 1 : g(b(t), i, r)
                };
                T.getControlPoints = function() {
                    return [{
                        x: e,
                        y: i
                    }, {
                        x: n,
                        y: r
                    }]
                };
                var S = "generateBezier(" + [e, i, n, r] + ")";
                return T.toString = function() {
                    return S
                }, T
            }

            function k(e, t) {
                var i = e;
                return p.isString(e) ? m.Easings[e] || (i = !1) : i = p.isArray(e) && 1 === e.length ? function(e) {
                    return function(t) {
                        return Math.round(t * e) * (1 / e)
                    }
                }.apply(null, e) : p.isArray(e) && 2 === e.length ? g.apply(null, e.concat([t])) : !(!p.isArray(e) || 4 !== e.length) && E.apply(null, e), !1 === i && (i = m.Easings[m.defaults.easing] ? m.defaults.easing : v), i
            }

            function P(e) {
                if (e) {
                    var t = m.timestamp && !0 !== e ? e : o.now(),
                        i = m.State.calls.length;
                    i > 1e4 && (m.State.calls = function(e) {
                        for (var t = -1, i = e ? e.length : 0, n = []; ++t < i;) {
                            var r = e[t];
                            r && n.push(r)
                        }
                        return n
                    }(m.State.calls), i = m.State.calls.length);
                    for (var r = 0; r < i; r++)
                        if (m.State.calls[r]) {
                            var s = m.State.calls[r],
                                l = s[0],
                                u = s[2],
                                c = s[3],
                                h = !c,
                                f = null,
                                v = s[5],
                                g = s[6];
                            if (c || (c = m.State.calls[r][3] = t - 16), v) {
                                if (!0 !== v.resume) continue;
                                c = s[3] = Math.round(t - g - 16), s[5] = null
                            }
                            g = s[6] = t - c;
                            for (var b = Math.min(g / u.duration, 1), x = 0, S = l.length; x < S; x++) {
                                var C = l[x],
                                    E = C.element;
                                if (T(E)) {
                                    var k = !1;
                                    if (u.display !== n && null !== u.display && "none" !== u.display) {
                                        if ("flex" === u.display) {
                                            d.each(["-webkit-box", "-moz-box", "-ms-flexbox", "-webkit-flex"], function(e, t) {
                                                y.setPropertyValue(E, "display", t)
                                            })
                                        }
                                        y.setPropertyValue(E, "display", u.display)
                                    }
                                    for (var A in u.visibility !== n && "hidden" !== u.visibility && y.setPropertyValue(E, "visibility", u.visibility), C)
                                        if (C.hasOwnProperty(A) && "element" !== A) {
                                            var O, L = C[A],
                                                N = p.isString(L.easing) ? m.Easings[L.easing] : L.easing;
                                            if (p.isString(L.pattern)) {
                                                var z = 1 === b ? function(e, t, i) {
                                                    var n = L.endValue[t];
                                                    return i ? Math.round(n) : n
                                                } : function(e, t, i) {
                                                    var n = L.startValue[t],
                                                        r = L.endValue[t] - n,
                                                        a = n + r * N(b, u, r);
                                                    return i ? Math.round(a) : a
                                                };
                                                O = L.pattern.replace(/{(\d+)(!)?}/g, z)
                                            } else if (1 === b) O = L.endValue;
                                            else {
                                                var D = L.endValue - L.startValue;
                                                O = L.startValue + D * N(b, u, D)
                                            }
                                            if (!h && O === L.currentValue) continue;
                                            if (L.currentValue = O, "tween" === A) f = O;
                                            else {
                                                var j;
                                                if (y.Hooks.registered[A]) {
                                                    j = y.Hooks.getRoot(A);
                                                    var I = T(E).rootPropertyValueCache[j];
                                                    I && (L.rootPropertyValue = I)
                                                }
                                                var $ = y.setPropertyValue(E, A, L.currentValue + (a < 9 && 0 === parseFloat(O) ? "" : L.unitType), L.rootPropertyValue, L.scrollData);
                                                y.Hooks.registered[A] && (y.Normalizations.registered[j] ? T(E).rootPropertyValueCache[j] = y.Normalizations.registered[j]("extract", null, $[1]) : T(E).rootPropertyValueCache[j] = $[1]), "transform" === $[0] && (k = !0)
                                            }
                                        }
                                    u.mobileHA && T(E).transformCache.translate3d === n && (T(E).transformCache.translate3d = "(0px, 0px, 0px)", k = !0), k && y.flushTransformCache(E)
                                }
                            }
                            u.display !== n && "none" !== u.display && (m.State.calls[r][2].display = !1), u.visibility !== n && "hidden" !== u.visibility && (m.State.calls[r][2].visibility = !1), u.progress && u.progress.call(s[1], s[1], b, Math.max(0, c + u.duration - t), c, f), 1 === b && M(r)
                        }
                }
                m.State.isTicking && w(P)
            }

            function M(e, t) {
                if (!m.State.calls[e]) return !1;
                for (var i = m.State.calls[e][0], r = m.State.calls[e][1], a = m.State.calls[e][2], s = m.State.calls[e][4], o = !1, l = 0, u = i.length; l < u; l++) {
                    var c = i[l].element;
                    t || a.loop || ("none" === a.display && y.setPropertyValue(c, "display", a.display), "hidden" === a.visibility && y.setPropertyValue(c, "visibility", a.visibility));
                    var p = T(c);
                    if (!0 !== a.loop && (d.queue(c)[1] === n || !/\.velocityQueueEntryFlag/i.test(d.queue(c)[1])) && p) {
                        p.isAnimating = !1, p.rootPropertyValueCache = {};
                        var h = !1;
                        d.each(y.Lists.transforms3D, function(e, t) {
                            var i = /^scale/.test(t) ? 1 : 0,
                                r = p.transformCache[t];
                            p.transformCache[t] !== n && new RegExp("^\\(" + i + "[^.]").test(r) && (h = !0, delete p.transformCache[t])
                        }), a.mobileHA && (h = !0, delete p.transformCache.translate3d), h && y.flushTransformCache(c), y.Values.removeClass(c, "velocity-animating")
                    }
                    if (!t && a.complete && !a.loop && l === u - 1) try {
                        a.complete.call(r, r)
                    } catch (e) {
                        setTimeout(function() {
                            throw e
                        }, 1)
                    }
                    s && !0 !== a.loop && s(r), p && !0 === a.loop && !t && (d.each(p.tweensContainer, function(e, t) {
                        if (/^rotate/.test(e) && (parseFloat(t.startValue) - parseFloat(t.endValue)) % 360 == 0) {
                            var i = t.startValue;
                            t.startValue = t.endValue, t.endValue = i
                        }
                        /^backgroundPosition/.test(e) && 100 === parseFloat(t.endValue) && "%" === t.unitType && (t.endValue = 0, t.startValue = 100)
                    }), m(c, "reverse", {
                        loop: !0,
                        delay: a.delay
                    })), !1 !== a.queue && d.dequeue(c, a.queue)
                }
                m.State.calls[e] = !1;
                for (var f = 0, v = m.State.calls.length; f < v; f++)
                    if (!1 !== m.State.calls[f]) {
                        o = !0;
                        break
                    }!1 === o && (m.State.isTicking = !1, delete m.State.calls, m.State.calls = [])
            }
            jQuery.fn.velocity = jQuery.fn.animate
        }(window.jQuery || window.Zepto || window, window, window ? window.document : void 0)
    })
}, function(e, t, i) {
    var n = i(29)("wks"),
        r = i(31),
        a = i(4).Symbol,
        s = "function" == typeof a;
    (e.exports = function(e) {
        return n[e] || (n[e] = s && a[e] || (s ? a : r)("Symbol." + e))
    }).store = n
}, function(e, t, i) {
    var n; /*! skrollr 0.6.30 (2015-08-12) | Alexander Prinzhorn - https://github.com/Prinzhorn/skrollr | Free to use under terms of MIT license */
    ! function(i, r, a) {
        "use strict";

        function s(e) {
            if (o = r.documentElement, l = r.body, W(), se = this, de = (e = e || {}).constants || {}, e.easing)
                for (var t in e.easing) Y[t] = e.easing[t];
            ye = e.edgeStrategy || "set", ue = {
                beforerender: e.beforerender,
                render: e.render,
                keyframe: e.keyframe
            }, (ce = !1 !== e.forceHeight) && (je = e.scale || 1), pe = e.mobileDeceleration || k, fe = !1 !== e.smoothScrolling, ve = e.smoothScrollingDuration || M, me = {
                targetTop: se.getScrollTop()
            }, (Re = (e.mobileCheck || function() {
                return /Android|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent || navigator.vendor || i.opera)
            })()) ? ((le = r.getElementById(e.skrollrBody || P)) && ae(), U(), Ae(o, [x, C], [T])) : Ae(o, [x, S], [T]), se.refresh(), xe(i, "resize orientationchange", function() {
                var e = o.clientWidth,
                    t = o.clientHeight;
                (t !== qe || e !== _e) && (qe = t, _e = e, Ve = !0)
            });
            var n = X();
            return function e() {
                Q(), we = n(e)
            }(), se
        }
        var o, l, u = {
                get: function() {
                    return se
                },
                init: function(e) {
                    return se || new s(e)
                },
                VERSION: "0.6.30"
            },
            c = Object.prototype.hasOwnProperty,
            d = i.Math,
            p = i.getComputedStyle,
            h = "touchstart",
            f = "touchmove",
            v = "touchcancel",
            m = "touchend",
            g = "skrollable",
            y = g + "-before",
            b = g + "-between",
            w = g + "-after",
            x = "skrollr",
            T = "no-" + x,
            S = x + "-desktop",
            C = x + "-mobile",
            E = "linear",
            k = .004,
            P = "skrollr-body",
            M = 200,
            A = "center",
            O = "bottom",
            L = "___skrollable_id",
            N = /^(?:input|textarea|button|select)$/i,
            z = /^\s+|\s+$/g,
            D = /^data(?:-(_\w+))?(?:-?(-?\d*\.?\d+p?))?(?:-?(start|end|top|center|bottom))?(?:-?(top|center|bottom))?$/,
            j = /\s*(@?[\w\-\[\]]+)\s*:\s*(.+?)\s*(?:;|$)/gi,
            I = /^(@?[a-z\-]+)\[(\w+)\]$/,
            $ = /-([a-z0-9_])/g,
            H = function(e, t) {
                return t.toUpperCase()
            },
            _ = /[\-+]?[\d]*\.?[\d]+/g,
            q = /\{\?\}/g,
            V = /rgba?\(\s*-?\d+\s*,\s*-?\d+\s*,\s*-?\d+/g,
            F = /[a-z\-]+-gradient/g,
            R = "",
            B = "",
            W = function() {
                var e = /^(?:O|Moz|webkit|ms)|(?:-(?:o|moz|webkit|ms)-)/;
                if (p) {
                    var t = p(l, null);
                    for (var i in t)
                        if (R = i.match(e) || +i == i && t[i].match(e)) break;
                    if (!R) return void(R = B = "");
                    "-" === (R = R[0]).slice(0, 1) ? (B = R, R = {
                        "-webkit-": "webkit",
                        "-moz-": "Moz",
                        "-ms-": "ms",
                        "-o-": "O"
                    }[R]) : B = "-" + R.toLowerCase() + "-"
                }
            },
            X = function() {
                var e = i.requestAnimationFrame || i[R.toLowerCase() + "RequestAnimationFrame"],
                    t = Ne();
                return (Re || !e) && (e = function(e) {
                    var n = Ne() - t,
                        r = d.max(0, 1e3 / 60 - n);
                    return i.setTimeout(function() {
                        t = Ne(), e()
                    }, r)
                }), e
            },
            G = function() {
                var e = i.cancelAnimationFrame || i[R.toLowerCase() + "CancelAnimationFrame"];
                return (Re || !e) && (e = function(e) {
                    return i.clearTimeout(e)
                }), e
            },
            Y = {
                begin: function() {
                    return 0
                },
                end: function() {
                    return 1
                },
                linear: function(e) {
                    return e
                },
                quadratic: function(e) {
                    return e * e
                },
                cubic: function(e) {
                    return e * e * e
                },
                swing: function(e) {
                    return -d.cos(e * d.PI) / 2 + .5
                },
                sqrt: function(e) {
                    return d.sqrt(e)
                },
                outCubic: function(e) {
                    return d.pow(e - 1, 3) + 1
                },
                bounce: function(e) {
                    var t;
                    if (.5083 >= e) t = 3;
                    else if (.8489 >= e) t = 9;
                    else if (.96208 >= e) t = 27;
                    else {
                        if (!(.99981 >= e)) return 1;
                        t = 91
                    }
                    return 1 - d.abs(3 * d.cos(e * t * 1.028) / t)
                }
            };
        s.prototype.refresh = function(e) {
            var t, i, n = !1;
            for (e === a ? (n = !0, oe = [], Fe = 0, e = r.getElementsByTagName("*")) : e.length === a && (e = [e]), t = 0, i = e.length; i > t; t++) {
                var s = e[t],
                    o = s,
                    l = [],
                    u = fe,
                    c = ye,
                    d = !1;
                if (n && L in s && delete s[L], s.attributes) {
                    for (var p = 0, h = s.attributes.length; h > p; p++) {
                        var f = s.attributes[p];
                        if ("data-anchor-target" !== f.name)
                            if ("data-smooth-scrolling" !== f.name)
                                if ("data-edge-strategy" !== f.name)
                                    if ("data-emit-events" !== f.name) {
                                        var v = f.name.match(D);
                                        if (null !== v) {
                                            var m = {
                                                props: f.value,
                                                element: s,
                                                eventType: f.name.replace($, H)
                                            };
                                            l.push(m);
                                            var y = v[1];
                                            y && (m.constant = y.substr(1));
                                            var b = v[2];
                                            /p$/.test(b) ? (m.isPercentage = !0, m.offset = (0 | b.slice(0, -1)) / 100) : m.offset = 0 | b;
                                            var w = v[3],
                                                x = v[4] || w;
                                            w && "start" !== w && "end" !== w ? (m.mode = "relative", m.anchors = [w, x]) : (m.mode = "absolute", "end" === w ? m.isEnd = !0 : m.isPercentage || (m.offset = m.offset * je))
                                        }
                                    } else d = !0;
                        else c = f.value;
                        else u = "off" !== f.value;
                        else if (null === (o = r.querySelector(f.value))) throw 'Unable to find anchor target "' + f.value + '"'
                    }
                    var T, S, C;
                    if (l.length) !n && L in s ? (C = s[L], T = oe[C].styleAttr, S = oe[C].classAttr) : (C = s[L] = Fe++, T = s.style.cssText, S = Me(s)), oe[C] = {
                        element: s,
                        styleAttr: T,
                        classAttr: S,
                        anchorTarget: o,
                        keyFrames: l,
                        smoothScrolling: u,
                        edgeStrategy: c,
                        emitEvents: d,
                        lastFrameIndex: -1
                    }, Ae(s, [g], [])
                }
            }
            for (Ee(), t = 0, i = e.length; i > t; t++) {
                var E = oe[e[t][L]];
                E !== a && (J(E), ee(E))
            }
            return se
        }, s.prototype.relativeToAbsolute = function(e, t, i) {
            var n = o.clientHeight,
                r = e.getBoundingClientRect(),
                a = r.top,
                s = r.bottom - r.top;
            return t === O ? a -= n : t === A && (a -= n / 2), i === O ? a += s : i === A && (a += s / 2), (a += se.getScrollTop()) + .5 | 0
        }, s.prototype.animateTo = function(e, t) {
            t = t || {};
            var i = Ne(),
                n = se.getScrollTop(),
                r = t.duration === a ? 1e3 : t.duration;
            return (he = {
                startTop: n,
                topDiff: e - n,
                targetTop: e,
                duration: r,
                startTime: i,
                endTime: i + r,
                easing: Y[t.easing || E],
                done: t.done
            }).topDiff || (he.done && he.done.call(se, !1), he = a), se
        }, s.prototype.stopAnimateTo = function() {
            he && he.done && he.done.call(se, !0), he = a
        }, s.prototype.isAnimatingTo = function() {
            return !!he
        }, s.prototype.isMobile = function() {
            return Re
        }, s.prototype.setScrollTop = function(e, t) {
            return ge = !0 === t, Re ? Be = d.min(d.max(e, 0), De) : i.scrollTo(0, e), se
        }, s.prototype.getScrollTop = function() {
            return Re ? Be : i.pageYOffset || o.scrollTop || l.scrollTop || 0
        }, s.prototype.getMaxScrollTop = function() {
            return De
        }, s.prototype.on = function(e, t) {
            return ue[e] = t, se
        }, s.prototype.off = function(e) {
            return delete ue[e], se
        }, s.prototype.destroy = function() {
            G()(we), Se(), Ae(o, [T], [x, S, C]);
            for (var e = 0, t = oe.length; t > e; e++) re(oe[e].element);
            o.style.overflow = l.style.overflow = "", o.style.height = l.style.height = "", le && u.setStyle(le, "transform", "none"), se = a, le = a, ue = a, ce = a, De = 0, je = 1, de = a, pe = a, Ie = "down", $e = -1, _e = 0, qe = 0, Ve = !1, he = a, fe = a, ve = a, me = a, ge = a, Fe = 0, ye = a, Re = !1, Be = 0, be = a
        };
        var U = function() {
                var e, t, n, s, u, c, p, g, y, b, w;
                xe(o, [h, f, v, m].join(" "), function(i) {
                    var o = i.changedTouches[0];
                    for (s = i.target; 3 === s.nodeType;) s = s.parentNode;
                    switch (u = o.clientY, c = o.clientX, y = i.timeStamp, N.test(s.tagName) || i.preventDefault(), i.type) {
                        case h:
                            e && e.blur(), se.stopAnimateTo(), e = s, t = p = u, n = c, y;
                            break;
                        case f:
                            N.test(s.tagName) && r.activeElement !== s && i.preventDefault(), g = u - p, w = y - b, se.setScrollTop(Be - g, !0), p = u, b = y;
                            break;
                        default:
                        case v:
                        case m:
                            var l = t - u,
                                x = n - c;
                            if (49 > x * x + l * l) {
                                if (!N.test(e.tagName)) {
                                    e.focus();
                                    var T = r.createEvent("MouseEvents");
                                    T.initMouseEvent("click", !0, !0, i.view, 1, o.screenX, o.screenY, o.clientX, o.clientY, i.ctrlKey, i.altKey, i.shiftKey, i.metaKey, 0, null), e.dispatchEvent(T)
                                }
                                return
                            }
                            e = a;
                            var S = g / w;
                            S = d.max(d.min(S, 3), -3);
                            var C = d.abs(S / pe),
                                E = S * C + .5 * pe * C * C,
                                k = se.getScrollTop() - E,
                                P = 0;
                            k > De ? (P = (De - k) / E, k = De) : 0 > k && (P = -k / E, k = 0), C *= 1 - P, se.animateTo(k + .5 | 0, {
                                easing: "outCubic",
                                duration: C
                            })
                    }
                }), i.scrollTo(0, 0), o.style.overflow = l.style.overflow = "hidden"
            },
            K = function(e, t) {
                for (var i = 0, n = oe.length; n > i; i++) {
                    var r, a, s = oe[i],
                        o = s.element,
                        l = s.smoothScrolling ? e : t,
                        d = s.keyFrames,
                        p = d.length,
                        h = d[0],
                        f = d[d.length - 1],
                        v = l < h.frame,
                        m = l > f.frame,
                        x = v ? h : f,
                        T = s.emitEvents,
                        S = s.lastFrameIndex;
                    if (v || m) {
                        if (v && -1 === s.edge || m && 1 === s.edge) continue;
                        switch (v ? (Ae(o, [y], [w, b]), T && S > -1 && (Ce(o, h.eventType, Ie), s.lastFrameIndex = -1)) : (Ae(o, [w], [y, b]), T && p > S && (Ce(o, f.eventType, Ie), s.lastFrameIndex = p)), s.edge = v ? -1 : 1, s.edgeStrategy) {
                            case "reset":
                                re(o);
                                continue;
                            case "ease":
                                l = x.frame;
                                break;
                            default:
                            case "set":
                                var C = x.props;
                                for (r in C) c.call(C, r) && (a = ne(C[r].value), 0 === r.indexOf("@") ? o.setAttribute(r.substr(1), a) : u.setStyle(o, r, a));
                                continue
                        }
                    } else 0 !== s.edge && (Ae(o, [g, b], [y, w]), s.edge = 0);
                    for (var E = 0; p - 1 > E; E++)
                        if (l >= d[E].frame && l <= d[E + 1].frame) {
                            var k = d[E],
                                P = d[E + 1];
                            for (r in k.props)
                                if (c.call(k.props, r)) {
                                    var M = (l - k.frame) / (P.frame - k.frame);
                                    M = k.props[r].easing(M), a = ie(k.props[r].value, P.props[r].value, M), a = ne(a), 0 === r.indexOf("@") ? o.setAttribute(r.substr(1), a) : u.setStyle(o, r, a)
                                }
                            T && S !== E && (Ce(o, "down" === Ie ? k.eventType : P.eventType, Ie), s.lastFrameIndex = E);
                            break
                        }
                }
            },
            Q = function() {
                Ve && (Ve = !1, Ee());
                var e, t, i = se.getScrollTop(),
                    n = Ne();
                if (he) n >= he.endTime ? (i = he.targetTop, e = he.done, he = a) : (t = he.easing((n - he.startTime) / he.duration), i = he.startTop + t * he.topDiff | 0), se.setScrollTop(i, !0);
                else if (!ge) {
                    me.targetTop - i && (me = {
                        startTop: $e,
                        topDiff: i - $e,
                        targetTop: i,
                        startTime: He,
                        endTime: He + ve
                    }), n <= me.endTime && (t = Y.sqrt((n - me.startTime) / ve), i = me.startTop + t * me.topDiff | 0)
                }
                if (ge || $e !== i) {
                    ge = !1;
                    var r = {
                        curTop: i,
                        lastTop: $e,
                        maxTop: De,
                        direction: Ie = i > $e ? "down" : $e > i ? "up" : Ie
                    };
                    !1 !== (ue.beforerender && ue.beforerender.call(se, r)) && (K(i, se.getScrollTop()), Re && le && u.setStyle(le, "transform", "translate(0, " + -Be + "px) " + be), $e = i, ue.render && ue.render.call(se, r)), e && e.call(se, !1)
                }
                He = n
            },
            J = function(e) {
                for (var t = 0, i = e.keyFrames.length; i > t; t++) {
                    for (var n, r, a, s, o = e.keyFrames[t], l = {}; null !== (s = j.exec(o.props));) a = s[1], r = s[2], null !== (n = a.match(I)) ? (a = n[1], n = n[2]) : n = E, r = r.indexOf("!") ? Z(r) : [r.slice(1)], l[a] = {
                        value: r,
                        easing: Y[n]
                    };
                    o.props = l
                }
            },
            Z = function(e) {
                var t = [];
                return V.lastIndex = 0, e = e.replace(V, function(e) {
                    return e.replace(_, function(e) {
                        return e / 255 * 100 + "%"
                    })
                }), B && (F.lastIndex = 0, e = e.replace(F, function(e) {
                    return B + e
                })), e = e.replace(_, function(e) {
                    return t.push(+e), "{?}"
                }), t.unshift(e), t
            },
            ee = function(e) {
                var t, i, n = {};
                for (t = 0, i = e.keyFrames.length; i > t; t++) te(e.keyFrames[t], n);
                for (n = {}, t = e.keyFrames.length - 1; t >= 0; t--) te(e.keyFrames[t], n)
            },
            te = function(e, t) {
                var i;
                for (i in t) c.call(e.props, i) || (e.props[i] = t[i]);
                for (i in e.props) t[i] = e.props[i]
            },
            ie = function(e, t, i) {
                var n, r = e.length;
                if (r !== t.length) throw "Can't interpolate between \"" + e[0] + '" and "' + t[0] + '"';
                var a = [e[0]];
                for (n = 1; r > n; n++) a[n] = e[n] + (t[n] - e[n]) * i;
                return a
            },
            ne = function(e) {
                var t = 1;
                return q.lastIndex = 0, e[0].replace(q, function() {
                    return e[t++]
                })
            },
            re = function(e, t) {
                for (var i, n, r = 0, a = (e = [].concat(e)).length; a > r; r++) n = e[r], (i = oe[n[L]]) && (t ? (n.style.cssText = i.dirtyStyleAttr, Ae(n, i.dirtyClassAttr)) : (i.dirtyStyleAttr = n.style.cssText, i.dirtyClassAttr = Me(n), n.style.cssText = i.styleAttr, Ae(n, i.classAttr)))
            },
            ae = function() {
                be = "translateZ(0)", u.setStyle(le, "transform", be);
                var e = p(le),
                    t = e.getPropertyValue("transform"),
                    i = e.getPropertyValue(B + "transform");
                t && "none" !== t || i && "none" !== i || (be = "")
            };
        u.setStyle = function(e, t, i) {
            var n = e.style;
            if ("zIndex" === (t = t.replace($, H).replace("-", ""))) isNaN(i) ? n[t] = i : n[t] = "" + (0 | i);
            else if ("float" === t) n.styleFloat = n.cssFloat = i;
            else try {
                R && (n[R + t.slice(0, 1).toUpperCase() + t.slice(1)] = i), n[t] = i
            } catch (e) {}
        };
        var se, oe, le, ue, ce, de, pe, he, fe, ve, me, ge, ye, be, we, xe = u.addEvent = function(e, t, n) {
                for (var r, a = function(e) {
                        return (e = e || i.event).target || (e.target = e.srcElement), e.preventDefault || (e.preventDefault = function() {
                            e.returnValue = !1, e.defaultPrevented = !0
                        }), n.call(this, e)
                    }, s = 0, o = (t = t.split(" ")).length; o > s; s++) r = t[s], e.addEventListener ? e.addEventListener(r, n, !1) : e.attachEvent("on" + r, a), We.push({
                    element: e,
                    name: r,
                    listener: n
                })
            },
            Te = u.removeEvent = function(e, t, i) {
                for (var n = 0, r = (t = t.split(" ")).length; r > n; n++) e.removeEventListener ? e.removeEventListener(t[n], i, !1) : e.detachEvent("on" + t[n], i)
            },
            Se = function() {
                for (var e, t = 0, i = We.length; i > t; t++) e = We[t], Te(e.element, e.name, e.listener);
                We = []
            },
            Ce = function(e, t, i) {
                ue.keyframe && ue.keyframe.call(se, e, t, i)
            },
            Ee = function() {
                var e = se.getScrollTop();
                De = 0, ce && !Re && (l.style.height = ""),
                    function() {
                        var e, t, i, n, r, a, s, l, u, c, p, h = o.clientHeight,
                            f = ke();
                        for (l = 0, u = oe.length; u > l; l++)
                            for (t = (e = oe[l]).element, i = e.anchorTarget, r = 0, a = (n = e.keyFrames).length; a > r; r++) c = (s = n[r]).offset, p = f[s.constant] || 0, s.frame = c, s.isPercentage && (c *= h, s.frame = c), "relative" === s.mode && (re(t), s.frame = se.relativeToAbsolute(i, s.anchors[0], s.anchors[1]) - c, re(t, !0)), s.frame += p, ce && !s.isEnd && s.frame > De && (De = s.frame);
                        for (De = d.max(De, Pe()), l = 0, u = oe.length; u > l; l++) {
                            for (r = 0, a = (n = (e = oe[l]).keyFrames).length; a > r; r++) p = f[(s = n[r]).constant] || 0, s.isEnd && (s.frame = De - s.offset + p);
                            e.keyFrames.sort(ze)
                        }
                    }(), ce && !Re && (l.style.height = De + o.clientHeight + "px"), Re ? se.setScrollTop(d.min(se.getScrollTop(), De)) : se.setScrollTop(e, !0), ge = !0
            },
            ke = function() {
                var e, t, i = o.clientHeight,
                    n = {};
                for (e in de) "function" == typeof(t = de[e]) ? t = t.call(se) : /p$/.test(t) && (t = t.slice(0, -1) / 100 * i), n[e] = t;
                return n
            },
            Pe = function() {
                var e = 0;
                return le && (e = d.max(le.offsetHeight, le.scrollHeight)), d.max(e, l.scrollHeight, l.offsetHeight, o.scrollHeight, o.offsetHeight, o.clientHeight) - o.clientHeight
            },
            Me = function(e) {
                var t = "className";
                return i.SVGElement && e instanceof i.SVGElement && (e = e[t], t = "baseVal"), e[t]
            },
            Ae = function(e, t, n) {
                var r = "className";
                if (i.SVGElement && e instanceof i.SVGElement && (e = e[r], r = "baseVal"), n !== a) {
                    for (var s = e[r], o = 0, l = n.length; l > o; o++) s = Le(s).replace(Le(n[o]), " ");
                    s = Oe(s);
                    for (var u = 0, c = t.length; c > u; u++) - 1 === Le(s).indexOf(Le(t[u])) && (s += " " + t[u]);
                    e[r] = Oe(s)
                } else e[r] = t
            },
            Oe = function(e) {
                return e.replace(z, "")
            },
            Le = function(e) {
                return " " + e + " "
            },
            Ne = Date.now || function() {
                return +new Date
            },
            ze = function(e, t) {
                return e.frame - t.frame
            },
            De = 0,
            je = 1,
            Ie = "down",
            $e = -1,
            He = Ne(),
            _e = 0,
            qe = 0,
            Ve = !1,
            Fe = 0,
            Re = !1,
            Be = 0,
            We = [];
        void 0 === (n = function() {
            return u
        }.apply(t, [])) || (e.exports = n)
    }(window, document)
}, function(e, t) {
    var i = e.exports = "undefined" != typeof window && window.Math == Math ? window : "undefined" != typeof self && self.Math == Math ? self : Function("return this")();
    "number" == typeof __g && (__g = i)
}, function(e, t, i) {
    var n = i(6);
    e.exports = function(e) {
        if (!n(e)) throw TypeError(e + " is not an object!");
        return e
    }
}, function(e, t) {
    e.exports = function(e) {
        return "object" == typeof e ? null !== e : "function" == typeof e
    }
}, function(e, t, i) {
    var n = i(15),
        r = i(35);
    e.exports = i(16) ? function(e, t, i) {
        return n.f(e, t, r(1, i))
    } : function(e, t, i) {
        return e[t] = i, e
    }
}, function(e, t, i) {
    var n = i(24),
        r = Math.min;
    e.exports = function(e) {
        return e > 0 ? r(n(e), 9007199254740991) : 0
    }
}, function(e, t) {
    var i = {}.toString;
    e.exports = function(e) {
        return i.call(e).slice(8, -1)
    }
}, function(e, t) {
    var i = e.exports = {
        version: "2.6.5"
    };
    "number" == typeof __e && (__e = i)
}, function(e, t, i) {
    var n = i(4),
        r = i(10),
        a = i(7),
        s = i(18),
        o = i(12),
        l = function(e, t, i) {
            var u, c, d, p, h = e & l.F,
                f = e & l.G,
                v = e & l.S,
                m = e & l.P,
                g = e & l.B,
                y = f ? n : v ? n[t] || (n[t] = {}) : (n[t] || {}).prototype,
                b = f ? r : r[t] || (r[t] = {}),
                w = b.prototype || (b.prototype = {});
            for (u in f && (i = t), i) d = ((c = !h && y && void 0 !== y[u]) ? y : i)[u], p = g && c ? o(d, n) : m && "function" == typeof d ? o(Function.call, d) : d, y && s(y, u, d, e & l.U), b[u] != d && a(b, u, p), m && w[u] != d && (w[u] = d)
        };
    n.core = r, l.F = 1, l.G = 2, l.S = 4, l.P = 8, l.B = 16, l.W = 32, l.U = 64, l.R = 128, e.exports = l
}, function(e, t, i) {
    var n = i(26);
    e.exports = function(e, t, i) {
        if (n(e), void 0 === t) return e;
        switch (i) {
            case 1:
                return function(i) {
                    return e.call(t, i)
                };
            case 2:
                return function(i, n) {
                    return e.call(t, i, n)
                };
            case 3:
                return function(i, n, r) {
                    return e.call(t, i, n, r)
                }
        }
        return function() {
            return e.apply(t, arguments)
        }
    }
}, function(e, t, i) {
    (function(t) {
        e.exports = function() {
            "use strict";
            var e = "undefined" != typeof window ? window : void 0 !== t ? t : "undefined" != typeof self ? self : {},
                i = "Expected a function",
                n = NaN,
                r = "[object Symbol]",
                a = /^\s+|\s+$/g,
                s = /^[-+]0x[0-9a-f]+$/i,
                o = /^0b[01]+$/i,
                l = /^0o[0-7]+$/i,
                u = parseInt,
                c = "object" == typeof e && e && e.Object === Object && e,
                d = "object" == typeof self && self && self.Object === Object && self,
                p = c || d || Function("return this")(),
                h = Object.prototype.toString,
                f = Math.max,
                v = Math.min,
                m = function() {
                    return p.Date.now()
                };

            function g(e) {
                var t = typeof e;
                return !!e && ("object" == t || "function" == t)
            }

            function y(e) {
                if ("number" == typeof e) return e;
                if (function(e) {
                        return "symbol" == typeof e || function(e) {
                            return !!e && "object" == typeof e
                        }(e) && h.call(e) == r
                    }(e)) return n;
                if (g(e)) {
                    var t = "function" == typeof e.valueOf ? e.valueOf() : e;
                    e = g(t) ? t + "" : t
                }
                if ("string" != typeof e) return 0 === e ? e : +e;
                e = e.replace(a, "");
                var i = o.test(e);
                return i || l.test(e) ? u(e.slice(2), i ? 2 : 8) : s.test(e) ? n : +e
            }
            var b = function(e, t, n) {
                    var r = !0,
                        a = !0;
                    if ("function" != typeof e) throw new TypeError(i);
                    return g(n) && (r = "leading" in n ? !!n.leading : r, a = "trailing" in n ? !!n.trailing : a),
                        function(e, t, n) {
                            var r, a, s, o, l, u, c = 0,
                                d = !1,
                                p = !1,
                                h = !0;
                            if ("function" != typeof e) throw new TypeError(i);

                            function b(t) {
                                var i = r,
                                    n = a;
                                return r = a = void 0, c = t, o = e.apply(n, i)
                            }

                            function w(e) {
                                var i = e - u;
                                return void 0 === u || i >= t || i < 0 || p && e - c >= s
                            }

                            function x() {
                                var e = m();
                                if (w(e)) return T(e);
                                l = setTimeout(x, function(e) {
                                    var i = t - (e - u);
                                    return p ? v(i, s - (e - c)) : i
                                }(e))
                            }

                            function T(e) {
                                return l = void 0, h && r ? b(e) : (r = a = void 0, o)
                            }

                            function S() {
                                var e = m(),
                                    i = w(e);
                                if (r = arguments, a = this, u = e, i) {
                                    if (void 0 === l) return function(e) {
                                        return c = e, l = setTimeout(x, t), d ? b(e) : o
                                    }(u);
                                    if (p) return l = setTimeout(x, t), b(u)
                                }
                                return void 0 === l && (l = setTimeout(x, t)), o
                            }
                            return t = y(t) || 0, g(n) && (d = !!n.leading, s = (p = "maxWait" in n) ? f(y(n.maxWait) || 0, t) : s, h = "trailing" in n ? !!n.trailing : h), S.cancel = function() {
                                void 0 !== l && clearTimeout(l), c = 0, r = u = a = l = void 0
                            }, S.flush = function() {
                                return void 0 === l ? o : T(m())
                            }, S
                        }(e, t, {
                            leading: r,
                            maxWait: t,
                            trailing: a
                        })
                },
                w = NaN,
                x = "[object Symbol]",
                T = /^\s+|\s+$/g,
                S = /^[-+]0x[0-9a-f]+$/i,
                C = /^0b[01]+$/i,
                E = /^0o[0-7]+$/i,
                k = parseInt,
                P = "object" == typeof e && e && e.Object === Object && e,
                M = "object" == typeof self && self && self.Object === Object && self,
                A = P || M || Function("return this")(),
                O = Object.prototype.toString,
                L = Math.max,
                N = Math.min,
                z = function() {
                    return A.Date.now()
                };

            function D(e) {
                var t = typeof e;
                return !!e && ("object" == t || "function" == t)
            }

            function j(e) {
                if ("number" == typeof e) return e;
                if (function(e) {
                        return "symbol" == typeof e || function(e) {
                            return !!e && "object" == typeof e
                        }(e) && O.call(e) == x
                    }(e)) return w;
                if (D(e)) {
                    var t = "function" == typeof e.valueOf ? e.valueOf() : e;
                    e = D(t) ? t + "" : t
                }
                if ("string" != typeof e) return 0 === e ? e : +e;
                e = e.replace(T, "");
                var i = C.test(e);
                return i || E.test(e) ? k(e.slice(2), i ? 2 : 8) : S.test(e) ? w : +e
            }
            var I = function(e, t, i) {
                    var n, r, a, s, o, l, u = 0,
                        c = !1,
                        d = !1,
                        p = !0;
                    if ("function" != typeof e) throw new TypeError("Expected a function");

                    function h(t) {
                        var i = n,
                            a = r;
                        return n = r = void 0, u = t, s = e.apply(a, i)
                    }

                    function f(e) {
                        var i = e - l;
                        return void 0 === l || i >= t || i < 0 || d && e - u >= a
                    }

                    function v() {
                        var e = z();
                        if (f(e)) return m(e);
                        o = setTimeout(v, function(e) {
                            var i = t - (e - l);
                            return d ? N(i, a - (e - u)) : i
                        }(e))
                    }

                    function m(e) {
                        return o = void 0, p && n ? h(e) : (n = r = void 0, s)
                    }

                    function g() {
                        var e = z(),
                            i = f(e);
                        if (n = arguments, r = this, l = e, i) {
                            if (void 0 === o) return function(e) {
                                return u = e, o = setTimeout(v, t), c ? h(e) : s
                            }(l);
                            if (d) return o = setTimeout(v, t), h(l)
                        }
                        return void 0 === o && (o = setTimeout(v, t)), s
                    }
                    return t = j(t) || 0, D(i) && (c = !!i.leading, a = (d = "maxWait" in i) ? L(j(i.maxWait) || 0, t) : a, p = "trailing" in i ? !!i.trailing : p), g.cancel = function() {
                        void 0 !== o && clearTimeout(o), u = 0, n = l = r = o = void 0
                    }, g.flush = function() {
                        return void 0 === o ? s : m(z())
                    }, g
                },
                $ = function() {};

            function H(e) {
                e && e.forEach(function(e) {
                    var t = Array.prototype.slice.call(e.addedNodes),
                        i = Array.prototype.slice.call(e.removedNodes);
                    if (function e(t) {
                            var i = void 0,
                                n = void 0;
                            for (i = 0; i < t.length; i += 1) {
                                if ((n = t[i]).dataset && n.dataset.aos) return !0;
                                if (n.children && e(n.children)) return !0
                            }
                            return !1
                        }(t.concat(i))) return $()
                })
            }

            function _() {
                return window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver
            }
            var q = {
                    isSupported: function() {
                        return !!_()
                    },
                    ready: function(e, t) {
                        var i = window.document,
                            n = new(_())(H);
                        $ = t, n.observe(i.documentElement, {
                            childList: !0,
                            subtree: !0,
                            removedNodes: !0
                        })
                    }
                },
                V = function(e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                },
                F = function() {
                    function e(e, t) {
                        for (var i = 0; i < t.length; i++) {
                            var n = t[i];
                            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                        }
                    }
                    return function(t, i, n) {
                        return i && e(t.prototype, i), n && e(t, n), t
                    }
                }(),
                R = Object.assign || function(e) {
                    for (var t = 1; t < arguments.length; t++) {
                        var i = arguments[t];
                        for (var n in i) Object.prototype.hasOwnProperty.call(i, n) && (e[n] = i[n])
                    }
                    return e
                },
                B = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i,
                W = /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i,
                X = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i,
                G = /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i;

            function Y() {
                return navigator.userAgent || navigator.vendor || window.opera || ""
            }
            var U = new(function() {
                    function e() {
                        V(this, e)
                    }
                    return F(e, [{
                        key: "phone",
                        value: function() {
                            var e = Y();
                            return !(!B.test(e) && !W.test(e.substr(0, 4)))
                        }
                    }, {
                        key: "mobile",
                        value: function() {
                            var e = Y();
                            return !(!X.test(e) && !G.test(e.substr(0, 4)))
                        }
                    }, {
                        key: "tablet",
                        value: function() {
                            return this.mobile() && !this.phone()
                        }
                    }, {
                        key: "ie11",
                        value: function() {
                            return "-ms-scroll-limit" in document.documentElement.style && "-ms-ime-align" in document.documentElement.style
                        }
                    }]), e
                }()),
                K = function(e, t) {
                    var i = void 0;
                    return U.ie11() ? (i = document.createEvent("CustomEvent")).initCustomEvent(e, !0, !0, {
                        detail: t
                    }) : i = new CustomEvent(e, {
                        detail: t
                    }), document.dispatchEvent(i)
                },
                Q = function(e) {
                    return e.forEach(function(e, t) {
                        return function(e, t) {
                            var i = e.options,
                                n = e.position,
                                r = e.node,
                                a = (e.data, function() {
                                    e.animated && (function(e, t) {
                                        t && t.forEach(function(t) {
                                            return e.classList.remove(t)
                                        })
                                    }(r, i.animatedClassNames), K("aos:out", r), e.options.id && K("aos:in:" + e.options.id, r), e.animated = !1)
                                });
                            i.mirror && t >= n.out && !i.once ? a() : t >= n.in ? e.animated || (function(e, t) {
                                t && t.forEach(function(t) {
                                    return e.classList.add(t)
                                })
                            }(r, i.animatedClassNames), K("aos:in", r), e.options.id && K("aos:in:" + e.options.id, r), e.animated = !0) : e.animated && !i.once && a()
                        }(e, window.pageYOffset)
                    })
                },
                J = function(e) {
                    for (var t = 0, i = 0; e && !isNaN(e.offsetLeft) && !isNaN(e.offsetTop);) t += e.offsetLeft - ("BODY" != e.tagName ? e.scrollLeft : 0), i += e.offsetTop - ("BODY" != e.tagName ? e.scrollTop : 0), e = e.offsetParent;
                    return {
                        top: i,
                        left: t
                    }
                },
                Z = function(e, t, i) {
                    var n = e.getAttribute("data-aos-" + t);
                    if (void 0 !== n) {
                        if ("true" === n) return !0;
                        if ("false" === n) return !1
                    }
                    return n || i
                },
                ee = function(e, t) {
                    return e.forEach(function(e, i) {
                        var n = Z(e.node, "mirror", t.mirror),
                            r = Z(e.node, "once", t.once),
                            a = Z(e.node, "id"),
                            s = t.useClassNames && e.node.getAttribute("data-aos"),
                            o = [t.animatedClassName].concat(s ? s.split(" ") : []).filter(function(e) {
                                return "string" == typeof e
                            });
                        t.initClassName && e.node.classList.add(t.initClassName), e.position = { in: function(e, t, i) {
                                var n = window.innerHeight,
                                    r = Z(e, "anchor"),
                                    a = Z(e, "anchor-placement"),
                                    s = Number(Z(e, "offset", a ? 0 : t)),
                                    o = a || i,
                                    l = e;
                                r && document.querySelectorAll(r) && (l = document.querySelectorAll(r)[0]);
                                var u = J(l).top - n;
                                switch (o) {
                                    case "top-bottom":
                                        break;
                                    case "center-bottom":
                                        u += l.offsetHeight / 2;
                                        break;
                                    case "bottom-bottom":
                                        u += l.offsetHeight;
                                        break;
                                    case "top-center":
                                        u += n / 2;
                                        break;
                                    case "center-center":
                                        u += n / 2 + l.offsetHeight / 2;
                                        break;
                                    case "bottom-center":
                                        u += n / 2 + l.offsetHeight;
                                        break;
                                    case "top-top":
                                        u += n;
                                        break;
                                    case "bottom-top":
                                        u += n + l.offsetHeight;
                                        break;
                                    case "center-top":
                                        u += n + l.offsetHeight / 2
                                }
                                return u + s
                            }(e.node, t.offset, t.anchorPlacement),
                            out: n && function(e, t) {
                                window.innerHeight;
                                var i = Z(e, "anchor"),
                                    n = Z(e, "offset", t),
                                    r = e;
                                return i && document.querySelectorAll(i) && (r = document.querySelectorAll(i)[0]), J(r).top + r.offsetHeight - n
                            }(e.node, t.offset)
                        }, e.options = {
                            once: r,
                            mirror: n,
                            animatedClassNames: o,
                            id: a
                        }
                    }), e
                },
                te = function() {
                    var e = document.querySelectorAll("[data-aos]");
                    return Array.prototype.map.call(e, function(e) {
                        return {
                            node: e
                        }
                    })
                },
                ie = [],
                ne = !1,
                re = {
                    offset: 120,
                    delay: 0,
                    easing: "ease",
                    duration: 400,
                    disable: !1,
                    once: !1,
                    mirror: !1,
                    anchorPlacement: "top-bottom",
                    startEvent: "DOMContentLoaded",
                    animatedClassName: "aos-animate",
                    initClassName: "aos-init",
                    useClassNames: !1,
                    disableMutationObserver: !1,
                    throttleDelay: 99,
                    debounceDelay: 50
                },
                ae = function() {
                    return document.all && !window.atob
                },
                se = function() {
                    arguments.length > 0 && void 0 !== arguments[0] && arguments[0] && (ne = !0), ne && (ie = ee(ie, re), Q(ie), window.addEventListener("scroll", b(function() {
                        Q(ie, re.once)
                    }, re.throttleDelay)))
                },
                oe = function() {
                    if (ie = te(), ue(re.disable) || ae()) return le();
                    se()
                },
                le = function() {
                    ie.forEach(function(e, t) {
                        e.node.removeAttribute("data-aos"), e.node.removeAttribute("data-aos-easing"), e.node.removeAttribute("data-aos-duration"), e.node.removeAttribute("data-aos-delay"), re.initClassName && e.node.classList.remove(re.initClassName), re.animatedClassName && e.node.classList.remove(re.animatedClassName)
                    })
                },
                ue = function(e) {
                    return !0 === e || "mobile" === e && U.mobile() || "phone" === e && U.phone() || "tablet" === e && U.tablet() || "function" == typeof e && !0 === e()
                };
            return {
                init: function(e) {
                    return re = R(re, e), ie = te(), re.disableMutationObserver || q.isSupported() || (console.info('\n      aos: MutationObserver is not supported on this browser,\n      code mutations observing has been disabled.\n      You may have to call "refreshHard()" by yourself.\n    '), re.disableMutationObserver = !0), re.disableMutationObserver || q.ready("[data-aos]", oe), ue(re.disable) || ae() ? le() : (document.querySelector("body").setAttribute("data-aos-easing", re.easing), document.querySelector("body").setAttribute("data-aos-duration", re.duration), document.querySelector("body").setAttribute("data-aos-delay", re.delay), -1 === ["DOMContentLoaded", "load"].indexOf(re.startEvent) ? document.addEventListener(re.startEvent, function() {
                        se(!0)
                    }) : window.addEventListener("load", function() {
                        se(!0)
                    }), "DOMContentLoaded" === re.startEvent && ["complete", "interactive"].indexOf(document.readyState) > -1 && se(!0), window.addEventListener("resize", I(se, re.debounceDelay, !0)), window.addEventListener("orientationchange", I(se, re.debounceDelay, !0)), ie)
                },
                refresh: se,
                refreshHard: oe
            }
        }()
    }).call(this, i(54))
}, function(e, t, i) {
    var n = i(23);
    e.exports = function(e) {
        return Object(n(e))
    }
}, function(e, t, i) {
    var n = i(5),
        r = i(69),
        a = i(70),
        s = Object.defineProperty;
    t.f = i(16) ? Object.defineProperty : function(e, t, i) {
        if (n(e), t = a(t, !0), n(i), r) try {
            return s(e, t, i)
        } catch (e) {}
        if ("get" in i || "set" in i) throw TypeError("Accessors not supported!");
        return "value" in i && (e[t] = i.value), e
    }
}, function(e, t, i) {
    e.exports = !i(17)(function() {
        return 7 != Object.defineProperty({}, "a", {
            get: function() {
                return 7
            }
        }).a
    })
}, function(e, t) {
    e.exports = function(e) {
        try {
            return !!e()
        } catch (e) {
            return !0
        }
    }
}, function(e, t, i) {
    var n = i(4),
        r = i(7),
        a = i(25),
        s = i(31)("src"),
        o = i(71),
        l = ("" + o).split("toString");
    i(10).inspectSource = function(e) {
        return o.call(e)
    }, (e.exports = function(e, t, i, o) {
        var u = "function" == typeof i;
        u && (a(i, "name") || r(i, "name", t)), e[t] !== i && (u && (a(i, s) || r(i, s, e[t] ? "" + e[t] : l.join(String(t)))), e === n ? e[t] = i : o ? e[t] ? e[t] = i : r(e, t, i) : (delete e[t], r(e, t, i)))
    })(Function.prototype, "toString", function() {
        return "function" == typeof this && this[s] || o.call(this)
    })
}, function(e, t, i) {
    for (var n = i(20), r = i(37), a = i(18), s = i(4), o = i(7), l = i(21), u = i(2), c = u("iterator"), d = u("toStringTag"), p = l.Array, h = {
            CSSRuleList: !0,
            CSSStyleDeclaration: !1,
            CSSValueList: !1,
            ClientRectList: !1,
            DOMRectList: !1,
            DOMStringList: !1,
            DOMTokenList: !0,
            DataTransferItemList: !1,
            FileList: !1,
            HTMLAllCollection: !1,
            HTMLCollection: !1,
            HTMLFormElement: !1,
            HTMLSelectElement: !1,
            MediaList: !0,
            MimeTypeArray: !1,
            NamedNodeMap: !1,
            NodeList: !0,
            PaintRequestList: !1,
            Plugin: !1,
            PluginArray: !1,
            SVGLengthList: !1,
            SVGNumberList: !1,
            SVGPathSegList: !1,
            SVGPointList: !1,
            SVGStringList: !1,
            SVGTransformList: !1,
            SourceBufferList: !1,
            StyleSheetList: !0,
            TextTrackCueList: !1,
            TextTrackList: !1,
            TouchList: !1
        }, f = r(h), v = 0; v < f.length; v++) {
        var m, g = f[v],
            y = h[g],
            b = s[g],
            w = b && b.prototype;
        if (w && (w[c] || o(w, c, p), w[d] || o(w, d, g), l[g] = p, y))
            for (m in n) w[m] || a(w, m, n[m], !0)
    }
}, function(e, t, i) {
    "use strict";
    var n = i(49),
        r = i(73),
        a = i(21),
        s = i(36);
    e.exports = i(51)(Array, "Array", function(e, t) {
        this._t = s(e), this._i = 0, this._k = t
    }, function() {
        var e = this._t,
            t = this._k,
            i = this._i++;
        return !e || i >= e.length ? (this._t = void 0, r(1)) : r(0, "keys" == t ? i : "values" == t ? e[i] : [i, e[i]])
    }, "values"), a.Arguments = a.Array, n("keys"), n("values"), n("entries")
}, function(e, t) {
    e.exports = {}
}, function(e, t, i) {
    "use strict";
    var n = i(11),
        r = i(85)(5),
        a = !0;
    "find" in [] && Array(1).find(function() {
        a = !1
    }), n(n.P + n.F * a, "Array", {
        find: function(e) {
            return r(this, e, arguments.length > 1 ? arguments[1] : void 0)
        }
    }), i(49)("find")
}, function(e, t) {
    e.exports = function(e) {
        if (null == e) throw TypeError("Can't call method on  " + e);
        return e
    }
}, function(e, t) {
    var i = Math.ceil,
        n = Math.floor;
    e.exports = function(e) {
        return isNaN(e = +e) ? 0 : (e > 0 ? n : i)(e)
    }
}, function(e, t) {
    var i = {}.hasOwnProperty;
    e.exports = function(e, t) {
        return i.call(e, t)
    }
}, function(e, t) {
    e.exports = function(e) {
        if ("function" != typeof e) throw TypeError(e + " is not a function!");
        return e
    }
}, function(e, t, i) {
    "use strict";
    var n = i(28),
        r = RegExp.prototype.exec;
    e.exports = function(e, t) {
        var i = e.exec;
        if ("function" == typeof i) {
            var a = i.call(e, t);
            if ("object" != typeof a) throw new TypeError("RegExp exec method returned something other than an Object or null");
            return a
        }
        if ("RegExp" !== n(e)) throw new TypeError("RegExp#exec called on incompatible receiver");
        return r.call(e, t)
    }
}, function(e, t, i) {
    var n = i(9),
        r = i(2)("toStringTag"),
        a = "Arguments" == n(function() {
            return arguments
        }());
    e.exports = function(e) {
        var t, i, s;
        return void 0 === e ? "Undefined" : null === e ? "Null" : "string" == typeof(i = function(e, t) {
            try {
                return e[t]
            } catch (e) {}
        }(t = Object(e), r)) ? i : a ? n(t) : "Object" == (s = n(t)) && "function" == typeof t.callee ? "Arguments" : s
    }
}, function(e, t, i) {
    var n = i(10),
        r = i(4),
        a = r["__core-js_shared__"] || (r["__core-js_shared__"] = {});
    (e.exports = function(e, t) {
        return a[e] || (a[e] = void 0 !== t ? t : {})
    })("versions", []).push({
        version: n.version,
        mode: i(30) ? "pure" : "global",
        copyright: "© 2019 Denis Pushkarev (zloirock.ru)"
    })
}, function(e, t) {
    e.exports = !1
}, function(e, t) {
    var i = 0,
        n = Math.random();
    e.exports = function(e) {
        return "Symbol(".concat(void 0 === e ? "" : e, ")_", (++i + n).toString(36))
    }
}, function(e, t, i) {
    "use strict";
    i(67);
    var n = i(18),
        r = i(7),
        a = i(17),
        s = i(23),
        o = i(2),
        l = i(33),
        u = o("species"),
        c = !a(function() {
            var e = /./;
            return e.exec = function() {
                var e = [];
                return e.groups = {
                    a: "7"
                }, e
            }, "7" !== "".replace(e, "$<a>")
        }),
        d = function() {
            var e = /(?:)/,
                t = e.exec;
            e.exec = function() {
                return t.apply(this, arguments)
            };
            var i = "ab".split(e);
            return 2 === i.length && "a" === i[0] && "b" === i[1]
        }();
    e.exports = function(e, t, i) {
        var p = o(e),
            h = !a(function() {
                var t = {};
                return t[p] = function() {
                    return 7
                }, 7 != "" [e](t)
            }),
            f = h ? !a(function() {
                var t = !1,
                    i = /a/;
                return i.exec = function() {
                    return t = !0, null
                }, "split" === e && (i.constructor = {}, i.constructor[u] = function() {
                    return i
                }), i[p](""), !t
            }) : void 0;
        if (!h || !f || "replace" === e && !c || "split" === e && !d) {
            var v = /./ [p],
                m = i(s, p, "" [e], function(e, t, i, n, r) {
                    return t.exec === l ? h && !r ? {
                        done: !0,
                        value: v.call(t, i, n)
                    } : {
                        done: !0,
                        value: e.call(i, t, n)
                    } : {
                        done: !1
                    }
                }),
                g = m[0],
                y = m[1];
            n(String.prototype, e, g), r(RegExp.prototype, p, 2 == t ? function(e, t) {
                return y.call(e, this, t)
            } : function(e) {
                return y.call(e, this)
            })
        }
    }
}, function(e, t, i) {
    "use strict";
    var n, r, a = i(68),
        s = RegExp.prototype.exec,
        o = String.prototype.replace,
        l = s,
        u = (n = /a/, r = /b*/g, s.call(n, "a"), s.call(r, "a"), 0 !== n.lastIndex || 0 !== r.lastIndex),
        c = void 0 !== /()??/.exec("")[1];
    (u || c) && (l = function(e) {
        var t, i, n, r, l = this;
        return c && (i = new RegExp("^" + l.source + "$(?!\\s)", a.call(l))), u && (t = l.lastIndex), n = s.call(l, e), u && n && (l.lastIndex = l.global ? n.index + n[0].length : t), c && n && n.length > 1 && o.call(n[0], i, function() {
            for (r = 1; r < arguments.length - 2; r++) void 0 === arguments[r] && (n[r] = void 0)
        }), n
    }), e.exports = l
}, function(e, t, i) {
    var n = i(6),
        r = i(4).document,
        a = n(r) && n(r.createElement);
    e.exports = function(e) {
        return a ? r.createElement(e) : {}
    }
}, function(e, t) {
    e.exports = function(e, t) {
        return {
            enumerable: !(1 & e),
            configurable: !(2 & e),
            writable: !(4 & e),
            value: t
        }
    }
}, function(e, t, i) {
    var n = i(50),
        r = i(23);
    e.exports = function(e) {
        return n(r(e))
    }
}, function(e, t, i) {
    var n = i(77),
        r = i(52);
    e.exports = Object.keys || function(e) {
        return n(e, r)
    }
}, function(e, t, i) {
    var n = i(29)("keys"),
        r = i(31);
    e.exports = function(e) {
        return n[e] || (n[e] = r(e))
    }
}, function(e, t, i) {
    var n = i(15).f,
        r = i(25),
        a = i(2)("toStringTag");
    e.exports = function(e, t, i) {
        e && !r(e = i ? e : e.prototype, a) && n(e, a, {
            configurable: !0,
            value: t
        })
    }
}, function(e, t) {
    e.exports = function(e) {
        var t = typeof e;
        return null != e && ("object" == t || "function" == t)
    }
}, function(e, t, i) {
    "use strict";
    var n, r, a, s, o = i(30),
        l = i(4),
        u = i(12),
        c = i(28),
        d = i(11),
        p = i(6),
        h = i(26),
        f = i(101),
        v = i(102),
        m = i(48),
        g = i(60).set,
        y = i(104)(),
        b = i(61),
        w = i(105),
        x = i(106),
        T = i(107),
        S = l.TypeError,
        C = l.process,
        E = C && C.versions,
        k = E && E.v8 || "",
        P = l.Promise,
        M = "process" == c(C),
        A = function() {},
        O = r = b.f,
        L = !! function() {
            try {
                var e = P.resolve(1),
                    t = (e.constructor = {})[i(2)("species")] = function(e) {
                        e(A, A)
                    };
                return (M || "function" == typeof PromiseRejectionEvent) && e.then(A) instanceof t && 0 !== k.indexOf("6.6") && -1 === x.indexOf("Chrome/66")
            } catch (e) {}
        }(),
        N = function(e) {
            var t;
            return !(!p(e) || "function" != typeof(t = e.then)) && t
        },
        z = function(e, t) {
            if (!e._n) {
                e._n = !0;
                var i = e._c;
                y(function() {
                    for (var n = e._v, r = 1 == e._s, a = 0, s = function(t) {
                            var i, a, s, o = r ? t.ok : t.fail,
                                l = t.resolve,
                                u = t.reject,
                                c = t.domain;
                            try {
                                o ? (r || (2 == e._h && I(e), e._h = 1), !0 === o ? i = n : (c && c.enter(), i = o(n), c && (c.exit(), s = !0)), i === t.promise ? u(S("Promise-chain cycle")) : (a = N(i)) ? a.call(i, l, u) : l(i)) : u(n)
                            } catch (e) {
                                c && !s && c.exit(), u(e)
                            }
                        }; i.length > a;) s(i[a++]);
                    e._c = [], e._n = !1, t && !e._h && D(e)
                })
            }
        },
        D = function(e) {
            g.call(l, function() {
                var t, i, n, r = e._v,
                    a = j(e);
                if (a && (t = w(function() {
                        M ? C.emit("unhandledRejection", r, e) : (i = l.onunhandledrejection) ? i({
                            promise: e,
                            reason: r
                        }) : (n = l.console) && n.error && n.error("Unhandled promise rejection", r)
                    }), e._h = M || j(e) ? 2 : 1), e._a = void 0, a && t.e) throw t.v
            })
        },
        j = function(e) {
            return 1 !== e._h && 0 === (e._a || e._c).length
        },
        I = function(e) {
            g.call(l, function() {
                var t;
                M ? C.emit("rejectionHandled", e) : (t = l.onrejectionhandled) && t({
                    promise: e,
                    reason: e._v
                })
            })
        },
        $ = function(e) {
            var t = this;
            t._d || (t._d = !0, (t = t._w || t)._v = e, t._s = 2, t._a || (t._a = t._c.slice()), z(t, !0))
        },
        H = function(e) {
            var t, i = this;
            if (!i._d) {
                i._d = !0, i = i._w || i;
                try {
                    if (i === e) throw S("Promise can't be resolved itself");
                    (t = N(e)) ? y(function() {
                        var n = {
                            _w: i,
                            _d: !1
                        };
                        try {
                            t.call(e, u(H, n, 1), u($, n, 1))
                        } catch (e) {
                            $.call(n, e)
                        }
                    }): (i._v = e, i._s = 1, z(i, !1))
                } catch (e) {
                    $.call({
                        _w: i,
                        _d: !1
                    }, e)
                }
            }
        };
    L || (P = function(e) {
        f(this, P, "Promise", "_h"), h(e), n.call(this);
        try {
            e(u(H, this, 1), u($, this, 1))
        } catch (e) {
            $.call(this, e)
        }
    }, (n = function(e) {
        this._c = [], this._a = void 0, this._s = 0, this._d = !1, this._v = void 0, this._h = 0, this._n = !1
    }).prototype = i(108)(P.prototype, {
        then: function(e, t) {
            var i = O(m(this, P));
            return i.ok = "function" != typeof e || e, i.fail = "function" == typeof t && t, i.domain = M ? C.domain : void 0, this._c.push(i), this._a && this._a.push(i), this._s && z(this, !1), i.promise
        },
        catch: function(e) {
            return this.then(void 0, e)
        }
    }), a = function() {
        var e = new n;
        this.promise = e, this.resolve = u(H, e, 1), this.reject = u($, e, 1)
    }, b.f = O = function(e) {
        return e === P || e === s ? new a(e) : r(e)
    }), d(d.G + d.W + d.F * !L, {
        Promise: P
    }), i(39)(P, "Promise"), i(109)("Promise"), s = i(10).Promise, d(d.S + d.F * !L, "Promise", {
        reject: function(e) {
            var t = O(this);
            return (0, t.reject)(e), t.promise
        }
    }), d(d.S + d.F * (o || !L), "Promise", {
        resolve: function(e) {
            return T(o && this === s ? P : this, e)
        }
    }), d(d.S + d.F * !(L && i(62)(function(e) {
        P.all(e).catch(A)
    })), "Promise", {
        all: function(e) {
            var t = this,
                i = O(t),
                n = i.resolve,
                r = i.reject,
                a = w(function() {
                    var i = [],
                        a = 0,
                        s = 1;
                    v(e, !1, function(e) {
                        var o = a++,
                            l = !1;
                        i.push(void 0), s++, t.resolve(e).then(function(e) {
                            l || (l = !0, i[o] = e, --s || n(i))
                        }, r)
                    }), --s || n(i)
                });
            return a.e && r(a.v), i.promise
        },
        race: function(e) {
            var t = this,
                i = O(t),
                n = i.reject,
                r = w(function() {
                    v(e, !1, function(e) {
                        t.resolve(e).then(i.resolve, n)
                    })
                });
            return r.e && n(r.v), i.promise
        }
    })
}, function(e, t, i) {
    "use strict";
    var n = i(46)(!0);
    i(51)(String, "String", function(e) {
        this._t = String(e), this._i = 0
    }, function() {
        var e, t = this._t,
            i = this._i;
        return i >= t.length ? {
            value: void 0,
            done: !0
        } : (e = n(t, i), this._i += e.length, {
            value: e,
            done: !1
        })
    })
}, function(e, t, i) {
    var n, r;
    /*!
     * JavaScript Cookie v2.2.0
     * https://github.com/js-cookie/js-cookie
     *
     * Copyright 2006, 2015 Klaus Hartl & Fagner Brack
     * Released under the MIT license
     */
    ! function(a) {
        if (void 0 === (r = "function" == typeof(n = a) ? n.call(t, i, t, e) : n) || (e.exports = r), !0, e.exports = a(), !!0) {
            var s = window.Cookies,
                o = window.Cookies = a();
            o.noConflict = function() {
                return window.Cookies = s, o
            }
        }
    }(function() {
        function e() {
            for (var e = 0, t = {}; e < arguments.length; e++) {
                var i = arguments[e];
                for (var n in i) t[n] = i[n]
            }
            return t
        }
        return function t(i) {
            function n(t, r, a) {
                var s;
                if ("undefined" != typeof document) {
                    if (arguments.length > 1) {
                        if ("number" == typeof(a = e({
                                path: "/"
                            }, n.defaults, a)).expires) {
                            var o = new Date;
                            o.setMilliseconds(o.getMilliseconds() + 864e5 * a.expires), a.expires = o
                        }
                        a.expires = a.expires ? a.expires.toUTCString() : "";
                        try {
                            s = JSON.stringify(r), /^[\{\[]/.test(s) && (r = s)
                        } catch (e) {}
                        r = i.write ? i.write(r, t) : encodeURIComponent(String(r)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent), t = (t = (t = encodeURIComponent(String(t))).replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent)).replace(/[\(\)]/g, escape);
                        var l = "";
                        for (var u in a) a[u] && (l += "; " + u, !0 !== a[u] && (l += "=" + a[u]));
                        return document.cookie = t + "=" + r + l
                    }
                    t || (s = {});
                    for (var c = document.cookie ? document.cookie.split("; ") : [], d = /(%[0-9A-Z]{2})+/g, p = 0; p < c.length; p++) {
                        var h = c[p].split("="),
                            f = h.slice(1).join("=");
                        this.json || '"' !== f.charAt(0) || (f = f.slice(1, -1));
                        try {
                            var v = h[0].replace(d, decodeURIComponent);
                            if (f = i.read ? i.read(f, v) : i(f, v) || f.replace(d, decodeURIComponent), this.json) try {
                                f = JSON.parse(f)
                            } catch (e) {}
                            if (t === v) {
                                s = f;
                                break
                            }
                            t || (s[v] = f)
                        } catch (e) {}
                    }
                    return s
                }
            }
            return n.set = n, n.get = function(e) {
                return n.call(n, e)
            }, n.getJSON = function() {
                return n.apply({
                    json: !0
                }, [].slice.call(arguments))
            }, n.defaults = {}, n.remove = function(t, i) {
                n(t, "", e(i, {
                    expires: -1
                }))
            }, n.withConverter = t, n
        }(function() {})
    })
}, function(e, t, i) {
    "use strict";
    var n = i(5),
        r = i(14),
        a = i(8),
        s = i(24),
        o = i(45),
        l = i(27),
        u = Math.max,
        c = Math.min,
        d = Math.floor,
        p = /\$([$&`']|\d\d?|<[^>]*>)/g,
        h = /\$([$&`']|\d\d?)/g;
    i(32)("replace", 2, function(e, t, i, f) {
        return [function(n, r) {
            var a = e(this),
                s = null == n ? void 0 : n[t];
            return void 0 !== s ? s.call(n, a, r) : i.call(String(a), n, r)
        }, function(e, t) {
            var r = f(i, e, this, t);
            if (r.done) return r.value;
            var d = n(e),
                p = String(this),
                h = "function" == typeof t;
            h || (t = String(t));
            var m = d.global;
            if (m) {
                var g = d.unicode;
                d.lastIndex = 0
            }
            for (var y = [];;) {
                var b = l(d, p);
                if (null === b) break;
                if (y.push(b), !m) break;
                "" === String(b[0]) && (d.lastIndex = o(p, a(d.lastIndex), g))
            }
            for (var w, x = "", T = 0, S = 0; S < y.length; S++) {
                b = y[S];
                for (var C = String(b[0]), E = u(c(s(b.index), p.length), 0), k = [], P = 1; P < b.length; P++) k.push(void 0 === (w = b[P]) ? w : String(w));
                var M = b.groups;
                if (h) {
                    var A = [C].concat(k, E, p);
                    void 0 !== M && A.push(M);
                    var O = String(t.apply(void 0, A))
                } else O = v(C, p, E, k, M, t);
                E >= T && (x += p.slice(T, E) + O, T = E + C.length)
            }
            return x + p.slice(T)
        }];

        function v(e, t, n, a, s, o) {
            var l = n + e.length,
                u = a.length,
                c = h;
            return void 0 !== s && (s = r(s), c = p), i.call(o, c, function(i, r) {
                var o;
                switch (r.charAt(0)) {
                    case "$":
                        return "$";
                    case "&":
                        return e;
                    case "`":
                        return t.slice(0, n);
                    case "'":
                        return t.slice(l);
                    case "<":
                        o = s[r.slice(1, -1)];
                        break;
                    default:
                        var c = +r;
                        if (0 === c) return i;
                        if (c > u) {
                            var p = d(c / 10);
                            return 0 === p ? i : p <= u ? void 0 === a[p - 1] ? r.charAt(1) : a[p - 1] + r.charAt(1) : i
                        }
                        o = a[c - 1]
                }
                return void 0 === o ? "" : o
            })
        }
    })
}, function(e, t, i) {
    "use strict";
    var n = i(46)(!0);
    e.exports = function(e, t, i) {
        return t + (i ? n(e, t).length : 1)
    }
}, function(e, t, i) {
    var n = i(24),
        r = i(23);
    e.exports = function(e) {
        return function(t, i) {
            var a, s, o = String(r(t)),
                l = n(i),
                u = o.length;
            return l < 0 || l >= u ? e ? "" : void 0 : (a = o.charCodeAt(l)) < 55296 || a > 56319 || l + 1 === u || (s = o.charCodeAt(l + 1)) < 56320 || s > 57343 ? e ? o.charAt(l) : a : e ? o.slice(l, l + 2) : s - 56320 + (a - 55296 << 10) + 65536
        }
    }
}, function(e, t, i) {
    "use strict";
    var n = i(72),
        r = i(5),
        a = i(48),
        s = i(45),
        o = i(8),
        l = i(27),
        u = i(33),
        c = i(17),
        d = Math.min,
        p = [].push,
        h = !c(function() {
            RegExp(4294967295, "y")
        });
    i(32)("split", 2, function(e, t, i, c) {
        var f;
        return f = "c" == "abbc".split(/(b)*/)[1] || 4 != "test".split(/(?:)/, -1).length || 2 != "ab".split(/(?:ab)*/).length || 4 != ".".split(/(.?)(.?)/).length || ".".split(/()()/).length > 1 || "".split(/.?/).length ? function(e, t) {
            var r = String(this);
            if (void 0 === e && 0 === t) return [];
            if (!n(e)) return i.call(r, e, t);
            for (var a, s, o, l = [], c = (e.ignoreCase ? "i" : "") + (e.multiline ? "m" : "") + (e.unicode ? "u" : "") + (e.sticky ? "y" : ""), d = 0, h = void 0 === t ? 4294967295 : t >>> 0, f = new RegExp(e.source, c + "g");
                (a = u.call(f, r)) && !((s = f.lastIndex) > d && (l.push(r.slice(d, a.index)), a.length > 1 && a.index < r.length && p.apply(l, a.slice(1)), o = a[0].length, d = s, l.length >= h));) f.lastIndex === a.index && f.lastIndex++;
            return d === r.length ? !o && f.test("") || l.push("") : l.push(r.slice(d)), l.length > h ? l.slice(0, h) : l
        } : "0".split(void 0, 0).length ? function(e, t) {
            return void 0 === e && 0 === t ? [] : i.call(this, e, t)
        } : i, [function(i, n) {
            var r = e(this),
                a = null == i ? void 0 : i[t];
            return void 0 !== a ? a.call(i, r, n) : f.call(String(r), i, n)
        }, function(e, t) {
            var n = c(f, e, this, t, f !== i);
            if (n.done) return n.value;
            var u = r(e),
                p = String(this),
                v = a(u, RegExp),
                m = u.unicode,
                g = (u.ignoreCase ? "i" : "") + (u.multiline ? "m" : "") + (u.unicode ? "u" : "") + (h ? "y" : "g"),
                y = new v(h ? u : "^(?:" + u.source + ")", g),
                b = void 0 === t ? 4294967295 : t >>> 0;
            if (0 === b) return [];
            if (0 === p.length) return null === l(y, p) ? [p] : [];
            for (var w = 0, x = 0, T = []; x < p.length;) {
                y.lastIndex = h ? x : 0;
                var S, C = l(y, h ? p : p.slice(x));
                if (null === C || (S = d(o(y.lastIndex + (h ? 0 : x)), p.length)) === w) x = s(p, x, m);
                else {
                    if (T.push(p.slice(w, x)), T.length === b) return T;
                    for (var E = 1; E <= C.length - 1; E++)
                        if (T.push(C[E]), T.length === b) return T;
                    x = w = S
                }
            }
            return T.push(p.slice(w)), T
        }]
    })
}, function(e, t, i) {
    var n = i(5),
        r = i(26),
        a = i(2)("species");
    e.exports = function(e, t) {
        var i, s = n(e).constructor;
        return void 0 === s || null == (i = n(s)[a]) ? t : r(i)
    }
}, function(e, t, i) {
    var n = i(2)("unscopables"),
        r = Array.prototype;
    null == r[n] && i(7)(r, n, {}), e.exports = function(e) {
        r[n][e] = !0
    }
}, function(e, t, i) {
    var n = i(9);
    e.exports = Object("z").propertyIsEnumerable(0) ? Object : function(e) {
        return "String" == n(e) ? e.split("") : Object(e)
    }
}, function(e, t, i) {
    "use strict";
    var n = i(30),
        r = i(11),
        a = i(18),
        s = i(7),
        o = i(21),
        l = i(74),
        u = i(39),
        c = i(80),
        d = i(2)("iterator"),
        p = !([].keys && "next" in [].keys()),
        h = function() {
            return this
        };
    e.exports = function(e, t, i, f, v, m, g) {
        l(i, t, f);
        var y, b, w, x = function(e) {
                if (!p && e in E) return E[e];
                switch (e) {
                    case "keys":
                    case "values":
                        return function() {
                            return new i(this, e)
                        }
                }
                return function() {
                    return new i(this, e)
                }
            },
            T = t + " Iterator",
            S = "values" == v,
            C = !1,
            E = e.prototype,
            k = E[d] || E["@@iterator"] || v && E[v],
            P = k || x(v),
            M = v ? S ? x("entries") : P : void 0,
            A = "Array" == t && E.entries || k;
        if (A && (w = c(A.call(new e))) !== Object.prototype && w.next && (u(w, T, !0), n || "function" == typeof w[d] || s(w, d, h)), S && k && "values" !== k.name && (C = !0, P = function() {
                return k.call(this)
            }), n && !g || !p && !C && E[d] || s(E, d, P), o[t] = P, o[T] = h, v)
            if (y = {
                    values: S ? P : x("values"),
                    keys: m ? P : x("keys"),
                    entries: M
                }, g)
                for (b in y) b in E || a(E, b, y[b]);
            else r(r.P + r.F * (p || C), t, y);
        return y
    }
}, function(e, t) {
    e.exports = "constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(",")
}, function(e, t, i) {
    var n = i(4).document;
    e.exports = n && n.documentElement
}, function(e, t) {
    var i;
    i = function() {
        return this
    }();
    try {
        i = i || new Function("return this")()
    } catch (e) {
        "object" == typeof window && (i = window)
    }
    e.exports = i
}, function(e, t, i) {
    var n = i(91),
        r = "object" == typeof self && self && self.Object === Object && self,
        a = n || r || Function("return this")();
    e.exports = a
}, function(e, t, i) {
    var n = i(55).Symbol;
    e.exports = n
}, function(e, t, i) {
    var n = i(5);
    e.exports = function(e, t, i, r) {
        try {
            return r ? t(n(i)[0], i[1]) : t(i)
        } catch (t) {
            var a = e.return;
            throw void 0 !== a && n(a.call(e)), t
        }
    }
}, function(e, t, i) {
    var n = i(21),
        r = i(2)("iterator"),
        a = Array.prototype;
    e.exports = function(e) {
        return void 0 !== e && (n.Array === e || a[r] === e)
    }
}, function(e, t, i) {
    var n = i(28),
        r = i(2)("iterator"),
        a = i(21);
    e.exports = i(10).getIteratorMethod = function(e) {
        if (null != e) return e[r] || e["@@iterator"] || a[n(e)]
    }
}, function(e, t, i) {
    var n, r, a, s = i(12),
        o = i(103),
        l = i(53),
        u = i(34),
        c = i(4),
        d = c.process,
        p = c.setImmediate,
        h = c.clearImmediate,
        f = c.MessageChannel,
        v = c.Dispatch,
        m = 0,
        g = {},
        y = function() {
            var e = +this;
            if (g.hasOwnProperty(e)) {
                var t = g[e];
                delete g[e], t()
            }
        },
        b = function(e) {
            y.call(e.data)
        };
    p && h || (p = function(e) {
        for (var t = [], i = 1; arguments.length > i;) t.push(arguments[i++]);
        return g[++m] = function() {
            o("function" == typeof e ? e : Function(e), t)
        }, n(m), m
    }, h = function(e) {
        delete g[e]
    }, "process" == i(9)(d) ? n = function(e) {
        d.nextTick(s(y, e, 1))
    } : v && v.now ? n = function(e) {
        v.now(s(y, e, 1))
    } : f ? (a = (r = new f).port2, r.port1.onmessage = b, n = s(a.postMessage, a, 1)) : c.addEventListener && "function" == typeof postMessage && !c.importScripts ? (n = function(e) {
        c.postMessage(e + "", "*")
    }, c.addEventListener("message", b, !1)) : n = "onreadystatechange" in u("script") ? function(e) {
        l.appendChild(u("script")).onreadystatechange = function() {
            l.removeChild(this), y.call(e)
        }
    } : function(e) {
        setTimeout(s(y, e, 1), 0)
    }), e.exports = {
        set: p,
        clear: h
    }
}, function(e, t, i) {
    "use strict";
    var n = i(26);

    function r(e) {
        var t, i;
        this.promise = new e(function(e, n) {
            if (void 0 !== t || void 0 !== i) throw TypeError("Bad Promise constructor");
            t = e, i = n
        }), this.resolve = n(t), this.reject = n(i)
    }
    e.exports.f = function(e) {
        return new r(e)
    }
}, function(e, t, i) {
    var n = i(2)("iterator"),
        r = !1;
    try {
        var a = [7][n]();
        a.return = function() {
            r = !0
        }, Array.from(a, function() {
            throw 2
        })
    } catch (e) {}
    e.exports = function(e, t) {
        if (!t && !r) return !1;
        var i = !1;
        try {
            var a = [7],
                s = a[n]();
            s.next = function() {
                return {
                    done: i = !0
                }
            }, a[n] = function() {
                return s
            }, e(a)
        } catch (e) {}
        return i
    }
}, function(e, t, i) {
    var n, r, a;
    r = [e, t], void 0 === (a = "function" == typeof(n = function(e, t) {
        "use strict";
        var i, n;

        function r(e, t) {
            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
        }
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var a = function() {
            function e(e, t) {
                for (var i = 0; i < t.length; i++) {
                    var n = t[i];
                    n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
                }
            }
            return function(t, i, n) {
                return i && e(t.prototype, i), n && e(t, n), t
            }
        }();

        function s(e, t) {
            return t.indexOf(e) >= 0
        }

        function o(e, t, i) {
            null != e.addEventListener ? e.addEventListener(t, i, !1) : null != e.attachEvent ? e.attachEvent("on" + t, i) : e[t] = i
        }

        function l(e, t, i) {
            null != e.removeEventListener ? e.removeEventListener(t, i, !1) : null != e.detachEvent ? e.detachEvent("on" + t, i) : delete e[t]
        }
        var u = window.WeakMap || window.MozWeakMap || function() {
                function e() {
                    r(this, e), this.keys = [], this.values = []
                }
                return a(e, [{
                    key: "get",
                    value: function(e) {
                        for (var t = 0; t < this.keys.length; t++) {
                            var i = this.keys[t];
                            if (i === e) return this.values[t]
                        }
                    }
                }, {
                    key: "set",
                    value: function(e, t) {
                        for (var i = 0; i < this.keys.length; i++) {
                            var n = this.keys[i];
                            if (n === e) return this.values[i] = t, this
                        }
                        return this.keys.push(e), this.values.push(t), this
                    }
                }]), e
            }(),
            c = window.MutationObserver || window.WebkitMutationObserver || window.MozMutationObserver || (n = i = function() {
                function e() {
                    r(this, e), "undefined" != typeof console && null !== console && (console.warn("MutationObserver is not supported by your browser."), console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content."))
                }
                return a(e, [{
                    key: "observe",
                    value: function() {}
                }]), e
            }(), i.notSupported = !0, n),
            d = window.getComputedStyle || function(e) {
                var t = /(\-([a-z]){1})/g;
                return {
                    getPropertyValue: function(i) {
                        "float" === i && (i = "styleFloat"), t.test(i) && i.replace(t, function(e, t) {
                            return t.toUpperCase()
                        });
                        var n = e.currentStyle;
                        return (null != n ? n[i] : void 0) || null
                    }
                }
            },
            p = function() {
                function e() {
                    var t = arguments.length <= 0 || void 0 === arguments[0] ? {} : arguments[0];
                    r(this, e), this.defaults = {
                        boxClass: "wow",
                        animateClass: "animated",
                        offset: 0,
                        mobile: !0,
                        live: !0,
                        callback: null,
                        scrollContainer: null
                    }, this.animate = "requestAnimationFrame" in window ? function(e) {
                        return window.requestAnimationFrame(e)
                    } : function(e) {
                        return e()
                    }, this.vendors = ["moz", "webkit"], this.start = this.start.bind(this), this.resetAnimation = this.resetAnimation.bind(this), this.scrollHandler = this.scrollHandler.bind(this), this.scrollCallback = this.scrollCallback.bind(this), this.scrolled = !0, this.config = function(e, t) {
                        for (var i in t)
                            if (null == e[i]) {
                                var n = t[i];
                                e[i] = n
                            }
                        return e
                    }(t, this.defaults), null != t.scrollContainer && (this.config.scrollContainer = document.querySelector(t.scrollContainer)), this.animationNameCache = new u, this.wowEvent = function(e) {
                        var t = !(arguments.length <= 1 || void 0 === arguments[1]) && arguments[1],
                            i = !(arguments.length <= 2 || void 0 === arguments[2]) && arguments[2],
                            n = arguments.length <= 3 || void 0 === arguments[3] ? null : arguments[3],
                            r = void 0;
                        return null != document.createEvent ? (r = document.createEvent("CustomEvent")).initCustomEvent(e, t, i, n) : null != document.createEventObject ? (r = document.createEventObject()).eventType = e : r.eventName = e, r
                    }(this.config.boxClass)
                }
                return a(e, [{
                    key: "init",
                    value: function() {
                        this.element = window.document.documentElement, s(document.readyState, ["interactive", "complete"]) ? this.start() : o(document, "DOMContentLoaded", this.start), this.finished = []
                    }
                }, {
                    key: "start",
                    value: function() {
                        var e = this;
                        if (this.stopped = !1, this.boxes = [].slice.call(this.element.querySelectorAll("." + this.config.boxClass)), this.all = this.boxes.slice(0), this.boxes.length)
                            if (this.disabled()) this.resetStyle();
                            else
                                for (var t = 0; t < this.boxes.length; t++) {
                                    var i = this.boxes[t];
                                    this.applyStyle(i, !0)
                                }
                        if (this.disabled() || (o(this.config.scrollContainer || window, "scroll", this.scrollHandler), o(window, "resize", this.scrollHandler), this.interval = setInterval(this.scrollCallback, 50)), this.config.live) {
                            var n = new c(function(t) {
                                for (var i = 0; i < t.length; i++)
                                    for (var n = t[i], r = 0; r < n.addedNodes.length; r++) {
                                        var a = n.addedNodes[r];
                                        e.doSync(a)
                                    }
                            });
                            n.observe(document.body, {
                                childList: !0,
                                subtree: !0
                            })
                        }
                    }
                }, {
                    key: "stop",
                    value: function() {
                        this.stopped = !0, l(this.config.scrollContainer || window, "scroll", this.scrollHandler), l(window, "resize", this.scrollHandler), null != this.interval && clearInterval(this.interval)
                    }
                }, {
                    key: "sync",
                    value: function() {
                        c.notSupported && this.doSync(this.element)
                    }
                }, {
                    key: "doSync",
                    value: function(e) {
                        if (null == e && (e = this.element), 1 === e.nodeType)
                            for (var t = (e = e.parentNode || e).querySelectorAll("." + this.config.boxClass), i = 0; i < t.length; i++) {
                                var n = t[i];
                                s(n, this.all) || (this.boxes.push(n), this.all.push(n), this.stopped || this.disabled() ? this.resetStyle() : this.applyStyle(n, !0), this.scrolled = !0)
                            }
                    }
                }, {
                    key: "show",
                    value: function(e) {
                        var t, i;
                        return this.applyStyle(e), e.className = e.className + " " + this.config.animateClass, null != this.config.callback && this.config.callback(e), t = e, i = this.wowEvent, null != t.dispatchEvent ? t.dispatchEvent(i) : i in (null != t) ? t[i]() : "on" + i in (null != t) && t["on" + i](), o(e, "animationend", this.resetAnimation), o(e, "oanimationend", this.resetAnimation), o(e, "webkitAnimationEnd", this.resetAnimation), o(e, "MSAnimationEnd", this.resetAnimation), e
                    }
                }, {
                    key: "applyStyle",
                    value: function(e, t) {
                        var i = this,
                            n = e.getAttribute("data-wow-duration"),
                            r = e.getAttribute("data-wow-delay"),
                            a = e.getAttribute("data-wow-iteration");
                        return this.animate(function() {
                            return i.customStyle(e, t, n, r, a)
                        })
                    }
                }, {
                    key: "resetStyle",
                    value: function() {
                        for (var e = 0; e < this.boxes.length; e++) {
                            var t = this.boxes[e];
                            t.style.visibility = "visible"
                        }
                    }
                }, {
                    key: "resetAnimation",
                    value: function(e) {
                        if (e.type.toLowerCase().indexOf("animationend") >= 0) {
                            var t = e.target || e.srcElement;
                            t.className = t.className.replace(this.config.animateClass, "").trim()
                        }
                    }
                }, {
                    key: "customStyle",
                    value: function(e, t, i, n, r) {
                        return t && this.cacheAnimationName(e), e.style.visibility = t ? "hidden" : "visible", i && this.vendorSet(e.style, {
                            animationDuration: i
                        }), n && this.vendorSet(e.style, {
                            animationDelay: n
                        }), r && this.vendorSet(e.style, {
                            animationIterationCount: r
                        }), this.vendorSet(e.style, {
                            animationName: t ? "none" : this.cachedAnimationName(e)
                        }), e
                    }
                }, {
                    key: "vendorSet",
                    value: function(e, t) {
                        for (var i in t)
                            if (t.hasOwnProperty(i)) {
                                var n = t[i];
                                e["" + i] = n;
                                for (var r = 0; r < this.vendors.length; r++) {
                                    var a = this.vendors[r];
                                    e["" + a + i.charAt(0).toUpperCase() + i.substr(1)] = n
                                }
                            }
                    }
                }, {
                    key: "vendorCSS",
                    value: function(e, t) {
                        for (var i = d(e), n = i.getPropertyCSSValue(t), r = 0; r < this.vendors.length; r++) {
                            var a = this.vendors[r];
                            n = n || i.getPropertyCSSValue("-" + a + "-" + t)
                        }
                        return n
                    }
                }, {
                    key: "animationName",
                    value: function(e) {
                        var t = void 0;
                        try {
                            t = this.vendorCSS(e, "animation-name").cssText
                        } catch (i) {
                            t = d(e).getPropertyValue("animation-name")
                        }
                        return "none" === t ? "" : t
                    }
                }, {
                    key: "cacheAnimationName",
                    value: function(e) {
                        return this.animationNameCache.set(e, this.animationName(e))
                    }
                }, {
                    key: "cachedAnimationName",
                    value: function(e) {
                        return this.animationNameCache.get(e)
                    }
                }, {
                    key: "scrollHandler",
                    value: function() {
                        this.scrolled = !0
                    }
                }, {
                    key: "scrollCallback",
                    value: function() {
                        if (this.scrolled) {
                            this.scrolled = !1;
                            for (var e = [], t = 0; t < this.boxes.length; t++) {
                                var i = this.boxes[t];
                                if (i) {
                                    if (this.isVisible(i)) {
                                        this.show(i);
                                        continue
                                    }
                                    e.push(i)
                                }
                            }
                            this.boxes = e, this.boxes.length || this.config.live || this.stop()
                        }
                    }
                }, {
                    key: "offsetTop",
                    value: function(e) {
                        for (; void 0 === e.offsetTop;) e = e.parentNode;
                        for (var t = e.offsetTop; e.offsetParent;) e = e.offsetParent, t += e.offsetTop;
                        return t
                    }
                }, {
                    key: "isVisible",
                    value: function(e) {
                        var t = e.getAttribute("data-wow-offset") || this.config.offset,
                            i = this.config.scrollContainer && this.config.scrollContainer.scrollTop || window.pageYOffset,
                            n = i + Math.min(this.element.clientHeight, "innerHeight" in window ? window.innerHeight : document.documentElement.clientHeight) - t,
                            r = this.offsetTop(e),
                            a = r + e.clientHeight;
                        return r <= n && a >= i
                    }
                }, {
                    key: "disabled",
                    value: function() {
                        return !this.config.mobile && (e = navigator.userAgent, /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(e));
                        var e
                    }
                }]), e
            }();
        t.default = p, e.exports = t.default
    }) ? n.apply(t, r) : n) || (e.exports = a)
}, function(e, t, i) {
    var n = i(89),
        r = i(40),
        a = "Expected a function";
    e.exports = function(e, t, i) {
        var s = !0,
            o = !0;
        if ("function" != typeof e) throw new TypeError(a);
        return r(i) && (s = "leading" in i ? !!i.leading : s, o = "trailing" in i ? !!i.trailing : o), n(e, t, {
            leading: s,
            maxWait: t,
            trailing: o
        })
    }
}, function(e, t, i) {
    "use strict";
    var n = i(98),
        r = i(99),
        a = i(100);

    function s(e, t) {
        return t.encode ? t.strict ? n(e) : encodeURIComponent(e) : e
    }

    function o(e) {
        var t = e.indexOf("?");
        return -1 === t ? "" : e.slice(t + 1)
    }

    function l(e, t) {
        var i = function(e) {
                var t;
                switch (e.arrayFormat) {
                    case "index":
                        return function(e, i, n) {
                            t = /\[(\d*)\]$/.exec(e), e = e.replace(/\[\d*\]$/, ""), t ? (void 0 === n[e] && (n[e] = {}), n[e][t[1]] = i) : n[e] = i
                        };
                    case "bracket":
                        return function(e, i, n) {
                            t = /(\[\])$/.exec(e), e = e.replace(/\[\]$/, ""), t ? void 0 !== n[e] ? n[e] = [].concat(n[e], i) : n[e] = [i] : n[e] = i
                        };
                    default:
                        return function(e, t, i) {
                            void 0 !== i[e] ? i[e] = [].concat(i[e], t) : i[e] = t
                        }
                }
            }(t = r({
                arrayFormat: "none"
            }, t)),
            n = Object.create(null);
        return "string" != typeof e ? n : (e = e.trim().replace(/^[?#&]/, "")) ? (e.split("&").forEach(function(e) {
            var t = e.replace(/\+/g, " ").split("="),
                r = t.shift(),
                s = t.length > 0 ? t.join("=") : void 0;
            s = void 0 === s ? null : a(s), i(a(r), s, n)
        }), Object.keys(n).sort().reduce(function(e, t) {
            var i = n[t];
            return Boolean(i) && "object" == typeof i && !Array.isArray(i) ? e[t] = function e(t) {
                return Array.isArray(t) ? t.sort() : "object" == typeof t ? e(Object.keys(t)).sort(function(e, t) {
                    return Number(e) - Number(t)
                }).map(function(e) {
                    return t[e]
                }) : t
            }(i) : e[t] = i, e
        }, Object.create(null))) : n
    }
    t.extract = o, t.parse = l, t.stringify = function(e, t) {
        !1 === (t = r({
            encode: !0,
            strict: !0,
            arrayFormat: "none"
        }, t)).sort && (t.sort = function() {});
        var i = function(e) {
            switch (e.arrayFormat) {
                case "index":
                    return function(t, i, n) {
                        return null === i ? [s(t, e), "[", n, "]"].join("") : [s(t, e), "[", s(n, e), "]=", s(i, e)].join("")
                    };
                case "bracket":
                    return function(t, i) {
                        return null === i ? s(t, e) : [s(t, e), "[]=", s(i, e)].join("")
                    };
                default:
                    return function(t, i) {
                        return null === i ? s(t, e) : [s(t, e), "=", s(i, e)].join("")
                    }
            }
        }(t);
        return e ? Object.keys(e).sort(t.sort).map(function(n) {
            var r = e[n];
            if (void 0 === r) return "";
            if (null === r) return s(n, t);
            if (Array.isArray(r)) {
                var a = [];
                return r.slice().forEach(function(e) {
                    void 0 !== e && a.push(i(n, e, a.length))
                }), a.join("&")
            }
            return s(n, t) + "=" + s(r, t)
        }).filter(function(e) {
            return e.length > 0
        }).join("&") : ""
    }, t.parseUrl = function(e, t) {
        return {
            url: e.split("?")[0] || "",
            query: l(o(e), t)
        }
    }
}, function(e, t, i) {
    e.exports = function() {
        "use strict";
        var e = "undefined" == typeof document ? {
                body: {},
                addEventListener: function() {},
                removeEventListener: function() {},
                activeElement: {
                    blur: function() {},
                    nodeName: ""
                },
                querySelector: function() {
                    return null
                },
                querySelectorAll: function() {
                    return []
                },
                getElementById: function() {
                    return null
                },
                createEvent: function() {
                    return {
                        initEvent: function() {}
                    }
                },
                createElement: function() {
                    return {
                        children: [],
                        childNodes: [],
                        style: {},
                        setAttribute: function() {},
                        getElementsByTagName: function() {
                            return []
                        }
                    }
                },
                location: {
                    hash: ""
                }
            } : document,
            t = "undefined" == typeof window ? {
                document: e,
                navigator: {
                    userAgent: ""
                },
                location: {},
                history: {},
                CustomEvent: function() {
                    return this
                },
                addEventListener: function() {},
                removeEventListener: function() {},
                getComputedStyle: function() {
                    return {
                        getPropertyValue: function() {
                            return ""
                        }
                    }
                },
                Image: function() {},
                Date: function() {},
                screen: {},
                setTimeout: function() {},
                clearTimeout: function() {}
            } : window,
            i = function(e) {
                for (var t = 0; t < e.length; t += 1) this[t] = e[t];
                return this.length = e.length, this
            };

        function n(n, r) {
            var a = [],
                s = 0;
            if (n && !r && n instanceof i) return n;
            if (n)
                if ("string" == typeof n) {
                    var o, l, u = n.trim();
                    if (u.indexOf("<") >= 0 && u.indexOf(">") >= 0) {
                        var c = "div";
                        for (0 === u.indexOf("<li") && (c = "ul"), 0 === u.indexOf("<tr") && (c = "tbody"), 0 !== u.indexOf("<td") && 0 !== u.indexOf("<th") || (c = "tr"), 0 === u.indexOf("<tbody") && (c = "table"), 0 === u.indexOf("<option") && (c = "select"), (l = e.createElement(c)).innerHTML = u, s = 0; s < l.childNodes.length; s += 1) a.push(l.childNodes[s])
                    } else
                        for (o = r || "#" !== n[0] || n.match(/[ .<>:~]/) ? (r || e).querySelectorAll(n.trim()) : [e.getElementById(n.trim().split("#")[1])], s = 0; s < o.length; s += 1) o[s] && a.push(o[s])
                } else if (n.nodeType || n === t || n === e) a.push(n);
            else if (n.length > 0 && n[0].nodeType)
                for (s = 0; s < n.length; s += 1) a.push(n[s]);
            return new i(a)
        }

        function r(e) {
            for (var t = [], i = 0; i < e.length; i += 1) - 1 === t.indexOf(e[i]) && t.push(e[i]);
            return t
        }
        n.fn = i.prototype, n.Class = i, n.Dom7 = i;
        var a = {
            addClass: function(e) {
                if (void 0 === e) return this;
                for (var t = e.split(" "), i = 0; i < t.length; i += 1)
                    for (var n = 0; n < this.length; n += 1) void 0 !== this[n] && void 0 !== this[n].classList && this[n].classList.add(t[i]);
                return this
            },
            removeClass: function(e) {
                for (var t = e.split(" "), i = 0; i < t.length; i += 1)
                    for (var n = 0; n < this.length; n += 1) void 0 !== this[n] && void 0 !== this[n].classList && this[n].classList.remove(t[i]);
                return this
            },
            hasClass: function(e) {
                return !!this[0] && this[0].classList.contains(e)
            },
            toggleClass: function(e) {
                for (var t = e.split(" "), i = 0; i < t.length; i += 1)
                    for (var n = 0; n < this.length; n += 1) void 0 !== this[n] && void 0 !== this[n].classList && this[n].classList.toggle(t[i]);
                return this
            },
            attr: function(e, t) {
                var i = arguments;
                if (1 === arguments.length && "string" == typeof e) return this[0] ? this[0].getAttribute(e) : void 0;
                for (var n = 0; n < this.length; n += 1)
                    if (2 === i.length) this[n].setAttribute(e, t);
                    else
                        for (var r in e) this[n][r] = e[r], this[n].setAttribute(r, e[r]);
                return this
            },
            removeAttr: function(e) {
                for (var t = 0; t < this.length; t += 1) this[t].removeAttribute(e);
                return this
            },
            data: function(e, t) {
                var i;
                if (void 0 !== t) {
                    for (var n = 0; n < this.length; n += 1)(i = this[n]).dom7ElementDataStorage || (i.dom7ElementDataStorage = {}), i.dom7ElementDataStorage[e] = t;
                    return this
                }
                if (i = this[0]) {
                    if (i.dom7ElementDataStorage && e in i.dom7ElementDataStorage) return i.dom7ElementDataStorage[e];
                    var r = i.getAttribute("data-" + e);
                    return r || void 0
                }
            },
            transform: function(e) {
                for (var t = 0; t < this.length; t += 1) {
                    var i = this[t].style;
                    i.webkitTransform = e, i.transform = e
                }
                return this
            },
            transition: function(e) {
                "string" != typeof e && (e += "ms");
                for (var t = 0; t < this.length; t += 1) {
                    var i = this[t].style;
                    i.webkitTransitionDuration = e, i.transitionDuration = e
                }
                return this
            },
            on: function() {
                for (var e, t = [], i = arguments.length; i--;) t[i] = arguments[i];
                var r = t[0],
                    a = t[1],
                    s = t[2],
                    o = t[3];

                function l(e) {
                    var t = e.target;
                    if (t) {
                        var i = e.target.dom7EventData || [];
                        if (i.indexOf(e) < 0 && i.unshift(e), n(t).is(a)) s.apply(t, i);
                        else
                            for (var r = n(t).parents(), o = 0; o < r.length; o += 1) n(r[o]).is(a) && s.apply(r[o], i)
                    }
                }

                function u(e) {
                    var t = e && e.target && e.target.dom7EventData || [];
                    t.indexOf(e) < 0 && t.unshift(e), s.apply(this, t)
                }
                "function" == typeof t[1] && (r = (e = t)[0], s = e[1], o = e[2], a = void 0), o || (o = !1);
                for (var c, d = r.split(" "), p = 0; p < this.length; p += 1) {
                    var h = this[p];
                    if (a)
                        for (c = 0; c < d.length; c += 1) {
                            var f = d[c];
                            h.dom7LiveListeners || (h.dom7LiveListeners = {}), h.dom7LiveListeners[f] || (h.dom7LiveListeners[f] = []), h.dom7LiveListeners[f].push({
                                listener: s,
                                proxyListener: l
                            }), h.addEventListener(f, l, o)
                        } else
                            for (c = 0; c < d.length; c += 1) {
                                var v = d[c];
                                h.dom7Listeners || (h.dom7Listeners = {}), h.dom7Listeners[v] || (h.dom7Listeners[v] = []), h.dom7Listeners[v].push({
                                    listener: s,
                                    proxyListener: u
                                }), h.addEventListener(v, u, o)
                            }
                }
                return this
            },
            off: function() {
                for (var e, t = [], i = arguments.length; i--;) t[i] = arguments[i];
                var n = t[0],
                    r = t[1],
                    a = t[2],
                    s = t[3];
                "function" == typeof t[1] && (n = (e = t)[0], a = e[1], s = e[2], r = void 0), s || (s = !1);
                for (var o = n.split(" "), l = 0; l < o.length; l += 1)
                    for (var u = o[l], c = 0; c < this.length; c += 1) {
                        var d = this[c],
                            p = void 0;
                        if (!r && d.dom7Listeners ? p = d.dom7Listeners[u] : r && d.dom7LiveListeners && (p = d.dom7LiveListeners[u]), p && p.length)
                            for (var h = p.length - 1; h >= 0; h -= 1) {
                                var f = p[h];
                                a && f.listener === a ? (d.removeEventListener(u, f.proxyListener, s), p.splice(h, 1)) : a || (d.removeEventListener(u, f.proxyListener, s), p.splice(h, 1))
                            }
                    }
                return this
            },
            trigger: function() {
                for (var i = [], n = arguments.length; n--;) i[n] = arguments[n];
                for (var r = i[0].split(" "), a = i[1], s = 0; s < r.length; s += 1)
                    for (var o = r[s], l = 0; l < this.length; l += 1) {
                        var u = this[l],
                            c = void 0;
                        try {
                            c = new t.CustomEvent(o, {
                                detail: a,
                                bubbles: !0,
                                cancelable: !0
                            })
                        } catch (t) {
                            (c = e.createEvent("Event")).initEvent(o, !0, !0), c.detail = a
                        }
                        u.dom7EventData = i.filter(function(e, t) {
                            return t > 0
                        }), u.dispatchEvent(c), u.dom7EventData = [], delete u.dom7EventData
                    }
                return this
            },
            transitionEnd: function(e) {
                var t, i = ["webkitTransitionEnd", "transitionend"],
                    n = this;

                function r(a) {
                    if (a.target === this)
                        for (e.call(this, a), t = 0; t < i.length; t += 1) n.off(i[t], r)
                }
                if (e)
                    for (t = 0; t < i.length; t += 1) n.on(i[t], r);
                return this
            },
            outerWidth: function(e) {
                if (this.length > 0) {
                    if (e) {
                        var t = this.styles();
                        return this[0].offsetWidth + parseFloat(t.getPropertyValue("margin-right")) + parseFloat(t.getPropertyValue("margin-left"))
                    }
                    return this[0].offsetWidth
                }
                return null
            },
            outerHeight: function(e) {
                if (this.length > 0) {
                    if (e) {
                        var t = this.styles();
                        return this[0].offsetHeight + parseFloat(t.getPropertyValue("margin-top")) + parseFloat(t.getPropertyValue("margin-bottom"))
                    }
                    return this[0].offsetHeight
                }
                return null
            },
            offset: function() {
                if (this.length > 0) {
                    var i = this[0],
                        n = i.getBoundingClientRect(),
                        r = e.body,
                        a = i.clientTop || r.clientTop || 0,
                        s = i.clientLeft || r.clientLeft || 0,
                        o = i === t ? t.scrollY : i.scrollTop,
                        l = i === t ? t.scrollX : i.scrollLeft;
                    return {
                        top: n.top + o - a,
                        left: n.left + l - s
                    }
                }
                return null
            },
            css: function(e, i) {
                var n;
                if (1 === arguments.length) {
                    if ("string" != typeof e) {
                        for (n = 0; n < this.length; n += 1)
                            for (var r in e) this[n].style[r] = e[r];
                        return this
                    }
                    if (this[0]) return t.getComputedStyle(this[0], null).getPropertyValue(e)
                }
                if (2 === arguments.length && "string" == typeof e) {
                    for (n = 0; n < this.length; n += 1) this[n].style[e] = i;
                    return this
                }
                return this
            },
            each: function(e) {
                if (!e) return this;
                for (var t = 0; t < this.length; t += 1)
                    if (!1 === e.call(this[t], t, this[t])) return this;
                return this
            },
            html: function(e) {
                if (void 0 === e) return this[0] ? this[0].innerHTML : void 0;
                for (var t = 0; t < this.length; t += 1) this[t].innerHTML = e;
                return this
            },
            text: function(e) {
                if (void 0 === e) return this[0] ? this[0].textContent.trim() : null;
                for (var t = 0; t < this.length; t += 1) this[t].textContent = e;
                return this
            },
            is: function(r) {
                var a, s, o = this[0];
                if (!o || void 0 === r) return !1;
                if ("string" == typeof r) {
                    if (o.matches) return o.matches(r);
                    if (o.webkitMatchesSelector) return o.webkitMatchesSelector(r);
                    if (o.msMatchesSelector) return o.msMatchesSelector(r);
                    for (a = n(r), s = 0; s < a.length; s += 1)
                        if (a[s] === o) return !0;
                    return !1
                }
                if (r === e) return o === e;
                if (r === t) return o === t;
                if (r.nodeType || r instanceof i) {
                    for (a = r.nodeType ? [r] : r, s = 0; s < a.length; s += 1)
                        if (a[s] === o) return !0;
                    return !1
                }
                return !1
            },
            index: function() {
                var e, t = this[0];
                if (t) {
                    for (e = 0; null !== (t = t.previousSibling);) 1 === t.nodeType && (e += 1);
                    return e
                }
            },
            eq: function(e) {
                if (void 0 === e) return this;
                var t, n = this.length;
                return new i(e > n - 1 ? [] : e < 0 ? (t = n + e) < 0 ? [] : [this[t]] : [this[e]])
            },
            append: function() {
                for (var t, n = [], r = arguments.length; r--;) n[r] = arguments[r];
                for (var a = 0; a < n.length; a += 1) {
                    t = n[a];
                    for (var s = 0; s < this.length; s += 1)
                        if ("string" == typeof t) {
                            var o = e.createElement("div");
                            for (o.innerHTML = t; o.firstChild;) this[s].appendChild(o.firstChild)
                        } else if (t instanceof i)
                        for (var l = 0; l < t.length; l += 1) this[s].appendChild(t[l]);
                    else this[s].appendChild(t)
                }
                return this
            },
            prepend: function(t) {
                var n, r;
                for (n = 0; n < this.length; n += 1)
                    if ("string" == typeof t) {
                        var a = e.createElement("div");
                        for (a.innerHTML = t, r = a.childNodes.length - 1; r >= 0; r -= 1) this[n].insertBefore(a.childNodes[r], this[n].childNodes[0])
                    } else if (t instanceof i)
                    for (r = 0; r < t.length; r += 1) this[n].insertBefore(t[r], this[n].childNodes[0]);
                else this[n].insertBefore(t, this[n].childNodes[0]);
                return this
            },
            next: function(e) {
                return this.length > 0 ? e ? this[0].nextElementSibling && n(this[0].nextElementSibling).is(e) ? new i([this[0].nextElementSibling]) : new i([]) : this[0].nextElementSibling ? new i([this[0].nextElementSibling]) : new i([]) : new i([])
            },
            nextAll: function(e) {
                var t = [],
                    r = this[0];
                if (!r) return new i([]);
                for (; r.nextElementSibling;) {
                    var a = r.nextElementSibling;
                    e ? n(a).is(e) && t.push(a) : t.push(a), r = a
                }
                return new i(t)
            },
            prev: function(e) {
                if (this.length > 0) {
                    var t = this[0];
                    return e ? t.previousElementSibling && n(t.previousElementSibling).is(e) ? new i([t.previousElementSibling]) : new i([]) : t.previousElementSibling ? new i([t.previousElementSibling]) : new i([])
                }
                return new i([])
            },
            prevAll: function(e) {
                var t = [],
                    r = this[0];
                if (!r) return new i([]);
                for (; r.previousElementSibling;) {
                    var a = r.previousElementSibling;
                    e ? n(a).is(e) && t.push(a) : t.push(a), r = a
                }
                return new i(t)
            },
            parent: function(e) {
                for (var t = [], i = 0; i < this.length; i += 1) null !== this[i].parentNode && (e ? n(this[i].parentNode).is(e) && t.push(this[i].parentNode) : t.push(this[i].parentNode));
                return n(r(t))
            },
            parents: function(e) {
                for (var t = [], i = 0; i < this.length; i += 1)
                    for (var a = this[i].parentNode; a;) e ? n(a).is(e) && t.push(a) : t.push(a), a = a.parentNode;
                return n(r(t))
            },
            closest: function(e) {
                var t = this;
                return void 0 === e ? new i([]) : (t.is(e) || (t = t.parents(e).eq(0)), t)
            },
            find: function(e) {
                for (var t = [], n = 0; n < this.length; n += 1)
                    for (var r = this[n].querySelectorAll(e), a = 0; a < r.length; a += 1) t.push(r[a]);
                return new i(t)
            },
            children: function(e) {
                for (var t = [], a = 0; a < this.length; a += 1)
                    for (var s = this[a].childNodes, o = 0; o < s.length; o += 1) e ? 1 === s[o].nodeType && n(s[o]).is(e) && t.push(s[o]) : 1 === s[o].nodeType && t.push(s[o]);
                return new i(r(t))
            },
            remove: function() {
                for (var e = 0; e < this.length; e += 1) this[e].parentNode && this[e].parentNode.removeChild(this[e]);
                return this
            },
            add: function() {
                for (var e, t, i = [], r = arguments.length; r--;) i[r] = arguments[r];
                for (e = 0; e < i.length; e += 1) {
                    var a = n(i[e]);
                    for (t = 0; t < a.length; t += 1) this[this.length] = a[t], this.length += 1
                }
                return this
            },
            styles: function() {
                return this[0] ? t.getComputedStyle(this[0], null) : {}
            }
        };
        Object.keys(a).forEach(function(e) {
            n.fn[e] = a[e]
        });
        var s, o, l = {
                deleteProps: function(e) {
                    var t = e;
                    Object.keys(t).forEach(function(e) {
                        try {
                            t[e] = null
                        } catch (e) {}
                        try {
                            delete t[e]
                        } catch (e) {}
                    })
                },
                nextTick: function(e, t) {
                    return void 0 === t && (t = 0), setTimeout(e, t)
                },
                now: function() {
                    return Date.now()
                },
                getTranslate: function(e, i) {
                    var n, r, a;
                    void 0 === i && (i = "x");
                    var s = t.getComputedStyle(e, null);
                    return t.WebKitCSSMatrix ? ((r = s.transform || s.webkitTransform).split(",").length > 6 && (r = r.split(", ").map(function(e) {
                        return e.replace(",", ".")
                    }).join(", ")), a = new t.WebKitCSSMatrix("none" === r ? "" : r)) : (a = s.MozTransform || s.OTransform || s.MsTransform || s.msTransform || s.transform || s.getPropertyValue("transform").replace("translate(", "matrix(1, 0, 0, 1,"), n = a.toString().split(",")), "x" === i && (r = t.WebKitCSSMatrix ? a.m41 : 16 === n.length ? parseFloat(n[12]) : parseFloat(n[4])), "y" === i && (r = t.WebKitCSSMatrix ? a.m42 : 16 === n.length ? parseFloat(n[13]) : parseFloat(n[5])), r || 0
                },
                parseUrlQuery: function(e) {
                    var i, n, r, a, s = {},
                        o = e || t.location.href;
                    if ("string" == typeof o && o.length)
                        for (o = o.indexOf("?") > -1 ? o.replace(/\S*\?/, "") : "", n = o.split("&").filter(function(e) {
                                return "" !== e
                            }), a = n.length, i = 0; i < a; i += 1) r = n[i].replace(/#\S+/g, "").split("="), s[decodeURIComponent(r[0])] = void 0 === r[1] ? void 0 : decodeURIComponent(r[1]) || "";
                    return s
                },
                isObject: function(e) {
                    return "object" == typeof e && null !== e && e.constructor && e.constructor === Object
                },
                extend: function() {
                    for (var e = [], t = arguments.length; t--;) e[t] = arguments[t];
                    for (var i = Object(e[0]), n = 1; n < e.length; n += 1) {
                        var r = e[n];
                        if (null != r)
                            for (var a = Object.keys(Object(r)), s = 0, o = a.length; s < o; s += 1) {
                                var u = a[s],
                                    c = Object.getOwnPropertyDescriptor(r, u);
                                void 0 !== c && c.enumerable && (l.isObject(i[u]) && l.isObject(r[u]) ? l.extend(i[u], r[u]) : !l.isObject(i[u]) && l.isObject(r[u]) ? (i[u] = {}, l.extend(i[u], r[u])) : i[u] = r[u])
                            }
                    }
                    return i
                }
            },
            u = (o = e.createElement("div"), {
                touch: t.Modernizr && !0 === t.Modernizr.touch || !!(t.navigator.maxTouchPoints > 0 || "ontouchstart" in t || t.DocumentTouch && e instanceof t.DocumentTouch),
                pointerEvents: !!(t.navigator.pointerEnabled || t.PointerEvent || "maxTouchPoints" in t.navigator),
                prefixedPointerEvents: !!t.navigator.msPointerEnabled,
                transition: (s = o.style, "transition" in s || "webkitTransition" in s || "MozTransition" in s),
                transforms3d: t.Modernizr && !0 === t.Modernizr.csstransforms3d || function() {
                    var e = o.style;
                    return "webkitPerspective" in e || "MozPerspective" in e || "OPerspective" in e || "MsPerspective" in e || "perspective" in e
                }(),
                flexbox: function() {
                    for (var e = o.style, t = "alignItems webkitAlignItems webkitBoxAlign msFlexAlign mozBoxAlign webkitFlexDirection msFlexDirection mozBoxDirection mozBoxOrient webkitBoxDirection webkitBoxOrient".split(" "), i = 0; i < t.length; i += 1)
                        if (t[i] in e) return !0;
                    return !1
                }(),
                observer: "MutationObserver" in t || "WebkitMutationObserver" in t,
                passiveListener: function() {
                    var e = !1;
                    try {
                        var i = Object.defineProperty({}, "passive", {
                            get: function() {
                                e = !0
                            }
                        });
                        t.addEventListener("testPassiveListener", null, i)
                    } catch (e) {}
                    return e
                }(),
                gestures: "ongesturestart" in t
            }),
            c = function(e) {
                void 0 === e && (e = {});
                var t = this;
                t.params = e, t.eventsListeners = {}, t.params && t.params.on && Object.keys(t.params.on).forEach(function(e) {
                    t.on(e, t.params.on[e])
                })
            },
            d = {
                components: {
                    configurable: !0
                }
            };
        c.prototype.on = function(e, t, i) {
            var n = this;
            if ("function" != typeof t) return n;
            var r = i ? "unshift" : "push";
            return e.split(" ").forEach(function(e) {
                n.eventsListeners[e] || (n.eventsListeners[e] = []), n.eventsListeners[e][r](t)
            }), n
        }, c.prototype.once = function(e, t, i) {
            var n = this;
            return "function" != typeof t ? n : n.on(e, function i() {
                for (var r = [], a = arguments.length; a--;) r[a] = arguments[a];
                t.apply(n, r), n.off(e, i)
            }, i)
        }, c.prototype.off = function(e, t) {
            var i = this;
            return i.eventsListeners ? (e.split(" ").forEach(function(e) {
                void 0 === t ? i.eventsListeners[e] = [] : i.eventsListeners[e] && i.eventsListeners[e].length && i.eventsListeners[e].forEach(function(n, r) {
                    n === t && i.eventsListeners[e].splice(r, 1)
                })
            }), i) : i
        }, c.prototype.emit = function() {
            for (var e = [], t = arguments.length; t--;) e[t] = arguments[t];
            var i, n, r, a = this;
            if (!a.eventsListeners) return a;
            "string" == typeof e[0] || Array.isArray(e[0]) ? (i = e[0], n = e.slice(1, e.length), r = a) : (i = e[0].events, n = e[0].data, r = e[0].context || a);
            var s = Array.isArray(i) ? i : i.split(" ");
            return s.forEach(function(e) {
                if (a.eventsListeners && a.eventsListeners[e]) {
                    var t = [];
                    a.eventsListeners[e].forEach(function(e) {
                        t.push(e)
                    }), t.forEach(function(e) {
                        e.apply(r, n)
                    })
                }
            }), a
        }, c.prototype.useModulesParams = function(e) {
            var t = this;
            t.modules && Object.keys(t.modules).forEach(function(i) {
                var n = t.modules[i];
                n.params && l.extend(e, n.params)
            })
        }, c.prototype.useModules = function(e) {
            void 0 === e && (e = {});
            var t = this;
            t.modules && Object.keys(t.modules).forEach(function(i) {
                var n = t.modules[i],
                    r = e[i] || {};
                n.instance && Object.keys(n.instance).forEach(function(e) {
                    var i = n.instance[e];
                    t[e] = "function" == typeof i ? i.bind(t) : i
                }), n.on && t.on && Object.keys(n.on).forEach(function(e) {
                    t.on(e, n.on[e])
                }), n.create && n.create.bind(t)(r)
            })
        }, d.components.set = function(e) {
            this.use && this.use(e)
        }, c.installModule = function(e) {
            for (var t = [], i = arguments.length - 1; i-- > 0;) t[i] = arguments[i + 1];
            var n = this;
            n.prototype.modules || (n.prototype.modules = {});
            var r = e.name || Object.keys(n.prototype.modules).length + "_" + l.now();
            return n.prototype.modules[r] = e, e.proto && Object.keys(e.proto).forEach(function(t) {
                n.prototype[t] = e.proto[t]
            }), e.static && Object.keys(e.static).forEach(function(t) {
                n[t] = e.static[t]
            }), e.install && e.install.apply(n, t), n
        }, c.use = function(e) {
            for (var t = [], i = arguments.length - 1; i-- > 0;) t[i] = arguments[i + 1];
            var n = this;
            return Array.isArray(e) ? (e.forEach(function(e) {
                return n.installModule(e)
            }), n) : n.installModule.apply(n, [e].concat(t))
        }, Object.defineProperties(c, d);
        var p = {
                updateSize: function() {
                    var e, t, i = this.$el;
                    e = void 0 !== this.params.width ? this.params.width : i[0].clientWidth, t = void 0 !== this.params.height ? this.params.height : i[0].clientHeight, 0 === e && this.isHorizontal() || 0 === t && this.isVertical() || (e = e - parseInt(i.css("padding-left"), 10) - parseInt(i.css("padding-right"), 10), t = t - parseInt(i.css("padding-top"), 10) - parseInt(i.css("padding-bottom"), 10), l.extend(this, {
                        width: e,
                        height: t,
                        size: this.isHorizontal() ? e : t
                    }))
                },
                updateSlides: function() {
                    var e = this.params,
                        i = this.$wrapperEl,
                        n = this.size,
                        r = this.rtlTranslate,
                        a = this.wrongRTL,
                        s = this.virtual && e.virtual.enabled,
                        o = s ? this.virtual.slides.length : this.slides.length,
                        c = i.children("." + this.params.slideClass),
                        d = s ? this.virtual.slides.length : c.length,
                        p = [],
                        h = [],
                        f = [],
                        v = e.slidesOffsetBefore;
                    "function" == typeof v && (v = e.slidesOffsetBefore.call(this));
                    var m = e.slidesOffsetAfter;
                    "function" == typeof m && (m = e.slidesOffsetAfter.call(this));
                    var g, y, b = this.snapGrid.length,
                        w = this.snapGrid.length,
                        x = e.spaceBetween,
                        T = -v,
                        S = 0,
                        C = 0;
                    if (void 0 !== n) {
                        "string" == typeof x && x.indexOf("%") >= 0 && (x = parseFloat(x.replace("%", "")) / 100 * n), this.virtualSize = -x, r ? c.css({
                            marginLeft: "",
                            marginTop: ""
                        }) : c.css({
                            marginRight: "",
                            marginBottom: ""
                        }), e.slidesPerColumn > 1 && (g = Math.floor(d / e.slidesPerColumn) === d / this.params.slidesPerColumn ? d : Math.ceil(d / e.slidesPerColumn) * e.slidesPerColumn, "auto" !== e.slidesPerView && "row" === e.slidesPerColumnFill && (g = Math.max(g, e.slidesPerView * e.slidesPerColumn)));
                        for (var E, k = e.slidesPerColumn, P = g / k, M = Math.floor(d / e.slidesPerColumn), A = 0; A < d; A += 1) {
                            y = 0;
                            var O = c.eq(A);
                            if (e.slidesPerColumn > 1) {
                                var L = void 0,
                                    N = void 0,
                                    z = void 0;
                                "column" === e.slidesPerColumnFill ? (N = Math.floor(A / k), z = A - N * k, (N > M || N === M && z === k - 1) && (z += 1) >= k && (z = 0, N += 1), L = N + z * g / k, O.css({
                                    "-webkit-box-ordinal-group": L,
                                    "-moz-box-ordinal-group": L,
                                    "-ms-flex-order": L,
                                    "-webkit-order": L,
                                    order: L
                                })) : (z = Math.floor(A / P), N = A - z * P), O.css("margin-" + (this.isHorizontal() ? "top" : "left"), 0 !== z && e.spaceBetween && e.spaceBetween + "px").attr("data-swiper-column", N).attr("data-swiper-row", z)
                            }
                            if ("none" !== O.css("display")) {
                                if ("auto" === e.slidesPerView) {
                                    var D = t.getComputedStyle(O[0], null),
                                        j = O[0].style.transform,
                                        I = O[0].style.webkitTransform;
                                    if (j && (O[0].style.transform = "none"), I && (O[0].style.webkitTransform = "none"), e.roundLengths) y = this.isHorizontal() ? O.outerWidth(!0) : O.outerHeight(!0);
                                    else if (this.isHorizontal()) {
                                        var $ = parseFloat(D.getPropertyValue("width")),
                                            H = parseFloat(D.getPropertyValue("padding-left")),
                                            _ = parseFloat(D.getPropertyValue("padding-right")),
                                            q = parseFloat(D.getPropertyValue("margin-left")),
                                            V = parseFloat(D.getPropertyValue("margin-right")),
                                            F = D.getPropertyValue("box-sizing");
                                        y = F && "border-box" === F ? $ + q + V : $ + H + _ + q + V
                                    } else {
                                        var R = parseFloat(D.getPropertyValue("height")),
                                            B = parseFloat(D.getPropertyValue("padding-top")),
                                            W = parseFloat(D.getPropertyValue("padding-bottom")),
                                            X = parseFloat(D.getPropertyValue("margin-top")),
                                            G = parseFloat(D.getPropertyValue("margin-bottom")),
                                            Y = D.getPropertyValue("box-sizing");
                                        y = Y && "border-box" === Y ? R + X + G : R + B + W + X + G
                                    }
                                    j && (O[0].style.transform = j), I && (O[0].style.webkitTransform = I), e.roundLengths && (y = Math.floor(y))
                                } else y = (n - (e.slidesPerView - 1) * x) / e.slidesPerView, e.roundLengths && (y = Math.floor(y)), c[A] && (this.isHorizontal() ? c[A].style.width = y + "px" : c[A].style.height = y + "px");
                                c[A] && (c[A].swiperSlideSize = y), f.push(y), e.centeredSlides ? (T = T + y / 2 + S / 2 + x, 0 === S && 0 !== A && (T = T - n / 2 - x), 0 === A && (T = T - n / 2 - x), Math.abs(T) < .001 && (T = 0), e.roundLengths && (T = Math.floor(T)), C % e.slidesPerGroup == 0 && p.push(T), h.push(T)) : (e.roundLengths && (T = Math.floor(T)), C % e.slidesPerGroup == 0 && p.push(T), h.push(T), T = T + y + x), this.virtualSize += y + x, S = y, C += 1
                            }
                        }
                        if (this.virtualSize = Math.max(this.virtualSize, n) + m, r && a && ("slide" === e.effect || "coverflow" === e.effect) && i.css({
                                width: this.virtualSize + e.spaceBetween + "px"
                            }), u.flexbox && !e.setWrapperSize || (this.isHorizontal() ? i.css({
                                width: this.virtualSize + e.spaceBetween + "px"
                            }) : i.css({
                                height: this.virtualSize + e.spaceBetween + "px"
                            })), e.slidesPerColumn > 1 && (this.virtualSize = (y + e.spaceBetween) * g, this.virtualSize = Math.ceil(this.virtualSize / e.slidesPerColumn) - e.spaceBetween, this.isHorizontal() ? i.css({
                                width: this.virtualSize + e.spaceBetween + "px"
                            }) : i.css({
                                height: this.virtualSize + e.spaceBetween + "px"
                            }), e.centeredSlides)) {
                            E = [];
                            for (var U = 0; U < p.length; U += 1) {
                                var K = p[U];
                                e.roundLengths && (K = Math.floor(K)), p[U] < this.virtualSize + p[0] && E.push(K)
                            }
                            p = E
                        }
                        if (!e.centeredSlides) {
                            E = [];
                            for (var Q = 0; Q < p.length; Q += 1) {
                                var J = p[Q];
                                e.roundLengths && (J = Math.floor(J)), p[Q] <= this.virtualSize - n && E.push(J)
                            }
                            p = E, Math.floor(this.virtualSize - n) - Math.floor(p[p.length - 1]) > 1 && p.push(this.virtualSize - n)
                        }
                        if (0 === p.length && (p = [0]), 0 !== e.spaceBetween && (this.isHorizontal() ? r ? c.css({
                                marginLeft: x + "px"
                            }) : c.css({
                                marginRight: x + "px"
                            }) : c.css({
                                marginBottom: x + "px"
                            })), e.centerInsufficientSlides) {
                            var Z = 0;
                            if (f.forEach(function(t) {
                                    Z += t + (e.spaceBetween ? e.spaceBetween : 0)
                                }), (Z -= e.spaceBetween) < n) {
                                var ee = (n - Z) / 2;
                                p.forEach(function(e, t) {
                                    p[t] = e - ee
                                }), h.forEach(function(e, t) {
                                    h[t] = e + ee
                                })
                            }
                        }
                        l.extend(this, {
                            slides: c,
                            snapGrid: p,
                            slidesGrid: h,
                            slidesSizesGrid: f
                        }), d !== o && this.emit("slidesLengthChange"), p.length !== b && (this.params.watchOverflow && this.checkOverflow(), this.emit("snapGridLengthChange")), h.length !== w && this.emit("slidesGridLengthChange"), (e.watchSlidesProgress || e.watchSlidesVisibility) && this.updateSlidesOffset()
                    }
                },
                updateAutoHeight: function(e) {
                    var t, i = [],
                        n = 0;
                    if ("number" == typeof e ? this.setTransition(e) : !0 === e && this.setTransition(this.params.speed), "auto" !== this.params.slidesPerView && this.params.slidesPerView > 1)
                        for (t = 0; t < Math.ceil(this.params.slidesPerView); t += 1) {
                            var r = this.activeIndex + t;
                            if (r > this.slides.length) break;
                            i.push(this.slides.eq(r)[0])
                        } else i.push(this.slides.eq(this.activeIndex)[0]);
                    for (t = 0; t < i.length; t += 1)
                        if (void 0 !== i[t]) {
                            var a = i[t].offsetHeight;
                            n = a > n ? a : n
                        }
                    n && this.$wrapperEl.css("height", n + "px")
                },
                updateSlidesOffset: function() {
                    for (var e = this.slides, t = 0; t < e.length; t += 1) e[t].swiperSlideOffset = this.isHorizontal() ? e[t].offsetLeft : e[t].offsetTop
                },
                updateSlidesProgress: function(e) {
                    void 0 === e && (e = this && this.translate || 0);
                    var t = this.params,
                        i = this.slides,
                        r = this.rtlTranslate;
                    if (0 !== i.length) {
                        void 0 === i[0].swiperSlideOffset && this.updateSlidesOffset();
                        var a = -e;
                        r && (a = e), i.removeClass(t.slideVisibleClass), this.visibleSlidesIndexes = [], this.visibleSlides = [];
                        for (var s = 0; s < i.length; s += 1) {
                            var o = i[s],
                                l = (a + (t.centeredSlides ? this.minTranslate() : 0) - o.swiperSlideOffset) / (o.swiperSlideSize + t.spaceBetween);
                            if (t.watchSlidesVisibility) {
                                var u = -(a - o.swiperSlideOffset),
                                    c = u + this.slidesSizesGrid[s],
                                    d = u >= 0 && u < this.size || c > 0 && c <= this.size || u <= 0 && c >= this.size;
                                d && (this.visibleSlides.push(o), this.visibleSlidesIndexes.push(s), i.eq(s).addClass(t.slideVisibleClass))
                            }
                            o.progress = r ? -l : l
                        }
                        this.visibleSlides = n(this.visibleSlides)
                    }
                },
                updateProgress: function(e) {
                    void 0 === e && (e = this && this.translate || 0);
                    var t = this.params,
                        i = this.maxTranslate() - this.minTranslate(),
                        n = this.progress,
                        r = this.isBeginning,
                        a = this.isEnd,
                        s = r,
                        o = a;
                    0 === i ? (n = 0, r = !0, a = !0) : (n = (e - this.minTranslate()) / i, r = n <= 0, a = n >= 1), l.extend(this, {
                        progress: n,
                        isBeginning: r,
                        isEnd: a
                    }), (t.watchSlidesProgress || t.watchSlidesVisibility) && this.updateSlidesProgress(e), r && !s && this.emit("reachBeginning toEdge"), a && !o && this.emit("reachEnd toEdge"), (s && !r || o && !a) && this.emit("fromEdge"), this.emit("progress", n)
                },
                updateSlidesClasses: function() {
                    var e, t = this.slides,
                        i = this.params,
                        n = this.$wrapperEl,
                        r = this.activeIndex,
                        a = this.realIndex,
                        s = this.virtual && i.virtual.enabled;
                    t.removeClass(i.slideActiveClass + " " + i.slideNextClass + " " + i.slidePrevClass + " " + i.slideDuplicateActiveClass + " " + i.slideDuplicateNextClass + " " + i.slideDuplicatePrevClass), (e = s ? this.$wrapperEl.find("." + i.slideClass + '[data-swiper-slide-index="' + r + '"]') : t.eq(r)).addClass(i.slideActiveClass), i.loop && (e.hasClass(i.slideDuplicateClass) ? n.children("." + i.slideClass + ":not(." + i.slideDuplicateClass + ')[data-swiper-slide-index="' + a + '"]').addClass(i.slideDuplicateActiveClass) : n.children("." + i.slideClass + "." + i.slideDuplicateClass + '[data-swiper-slide-index="' + a + '"]').addClass(i.slideDuplicateActiveClass));
                    var o = e.nextAll("." + i.slideClass).eq(0).addClass(i.slideNextClass);
                    i.loop && 0 === o.length && (o = t.eq(0)).addClass(i.slideNextClass);
                    var l = e.prevAll("." + i.slideClass).eq(0).addClass(i.slidePrevClass);
                    i.loop && 0 === l.length && (l = t.eq(-1)).addClass(i.slidePrevClass), i.loop && (o.hasClass(i.slideDuplicateClass) ? n.children("." + i.slideClass + ":not(." + i.slideDuplicateClass + ')[data-swiper-slide-index="' + o.attr("data-swiper-slide-index") + '"]').addClass(i.slideDuplicateNextClass) : n.children("." + i.slideClass + "." + i.slideDuplicateClass + '[data-swiper-slide-index="' + o.attr("data-swiper-slide-index") + '"]').addClass(i.slideDuplicateNextClass), l.hasClass(i.slideDuplicateClass) ? n.children("." + i.slideClass + ":not(." + i.slideDuplicateClass + ')[data-swiper-slide-index="' + l.attr("data-swiper-slide-index") + '"]').addClass(i.slideDuplicatePrevClass) : n.children("." + i.slideClass + "." + i.slideDuplicateClass + '[data-swiper-slide-index="' + l.attr("data-swiper-slide-index") + '"]').addClass(i.slideDuplicatePrevClass))
                },
                updateActiveIndex: function(e) {
                    var t, i = this.rtlTranslate ? this.translate : -this.translate,
                        n = this.slidesGrid,
                        r = this.snapGrid,
                        a = this.params,
                        s = this.activeIndex,
                        o = this.realIndex,
                        u = this.snapIndex,
                        c = e;
                    if (void 0 === c) {
                        for (var d = 0; d < n.length; d += 1) void 0 !== n[d + 1] ? i >= n[d] && i < n[d + 1] - (n[d + 1] - n[d]) / 2 ? c = d : i >= n[d] && i < n[d + 1] && (c = d + 1) : i >= n[d] && (c = d);
                        a.normalizeSlideIndex && (c < 0 || void 0 === c) && (c = 0)
                    }
                    if ((t = r.indexOf(i) >= 0 ? r.indexOf(i) : Math.floor(c / a.slidesPerGroup)) >= r.length && (t = r.length - 1), c !== s) {
                        var p = parseInt(this.slides.eq(c).attr("data-swiper-slide-index") || c, 10);
                        l.extend(this, {
                            snapIndex: t,
                            realIndex: p,
                            previousIndex: s,
                            activeIndex: c
                        }), this.emit("activeIndexChange"), this.emit("snapIndexChange"), o !== p && this.emit("realIndexChange"), this.emit("slideChange")
                    } else t !== u && (this.snapIndex = t, this.emit("snapIndexChange"))
                },
                updateClickedSlide: function(e) {
                    var t = this.params,
                        i = n(e.target).closest("." + t.slideClass)[0],
                        r = !1;
                    if (i)
                        for (var a = 0; a < this.slides.length; a += 1) this.slides[a] === i && (r = !0);
                    if (!i || !r) return this.clickedSlide = void 0, void(this.clickedIndex = void 0);
                    this.clickedSlide = i, this.virtual && this.params.virtual.enabled ? this.clickedIndex = parseInt(n(i).attr("data-swiper-slide-index"), 10) : this.clickedIndex = n(i).index(), t.slideToClickedSlide && void 0 !== this.clickedIndex && this.clickedIndex !== this.activeIndex && this.slideToClickedSlide()
                }
            },
            h = {
                getTranslate: function(e) {
                    void 0 === e && (e = this.isHorizontal() ? "x" : "y");
                    var t = this.params,
                        i = this.rtlTranslate,
                        n = this.translate,
                        r = this.$wrapperEl;
                    if (t.virtualTranslate) return i ? -n : n;
                    var a = l.getTranslate(r[0], e);
                    return i && (a = -a), a || 0
                },
                setTranslate: function(e, t) {
                    var i = this.rtlTranslate,
                        n = this.params,
                        r = this.$wrapperEl,
                        a = this.progress,
                        s = 0,
                        o = 0;
                    this.isHorizontal() ? s = i ? -e : e : o = e, n.roundLengths && (s = Math.floor(s), o = Math.floor(o)), n.virtualTranslate || (u.transforms3d ? r.transform("translate3d(" + s + "px, " + o + "px, 0px)") : r.transform("translate(" + s + "px, " + o + "px)")), this.previousTranslate = this.translate, this.translate = this.isHorizontal() ? s : o;
                    var l = this.maxTranslate() - this.minTranslate();
                    (0 === l ? 0 : (e - this.minTranslate()) / l) !== a && this.updateProgress(e), this.emit("setTranslate", this.translate, t)
                },
                minTranslate: function() {
                    return -this.snapGrid[0]
                },
                maxTranslate: function() {
                    return -this.snapGrid[this.snapGrid.length - 1]
                }
            },
            f = {
                setTransition: function(e, t) {
                    this.$wrapperEl.transition(e), this.emit("setTransition", e, t)
                },
                transitionStart: function(e, t) {
                    void 0 === e && (e = !0);
                    var i = this.activeIndex,
                        n = this.params,
                        r = this.previousIndex;
                    n.autoHeight && this.updateAutoHeight();
                    var a = t;
                    if (a || (a = i > r ? "next" : i < r ? "prev" : "reset"), this.emit("transitionStart"), e && i !== r) {
                        if ("reset" === a) return void this.emit("slideResetTransitionStart");
                        this.emit("slideChangeTransitionStart"), "next" === a ? this.emit("slideNextTransitionStart") : this.emit("slidePrevTransitionStart")
                    }
                },
                transitionEnd: function(e, t) {
                    void 0 === e && (e = !0);
                    var i = this.activeIndex,
                        n = this.previousIndex;
                    this.animating = !1, this.setTransition(0);
                    var r = t;
                    if (r || (r = i > n ? "next" : i < n ? "prev" : "reset"), this.emit("transitionEnd"), e && i !== n) {
                        if ("reset" === r) return void this.emit("slideResetTransitionEnd");
                        this.emit("slideChangeTransitionEnd"), "next" === r ? this.emit("slideNextTransitionEnd") : this.emit("slidePrevTransitionEnd")
                    }
                }
            },
            v = {
                slideTo: function(e, t, i, n) {
                    void 0 === e && (e = 0), void 0 === t && (t = this.params.speed), void 0 === i && (i = !0);
                    var r = this,
                        a = e;
                    a < 0 && (a = 0);
                    var s = r.params,
                        o = r.snapGrid,
                        l = r.slidesGrid,
                        c = r.previousIndex,
                        d = r.activeIndex,
                        p = r.rtlTranslate;
                    if (r.animating && s.preventInteractionOnTransition) return !1;
                    var h = Math.floor(a / s.slidesPerGroup);
                    h >= o.length && (h = o.length - 1), (d || s.initialSlide || 0) === (c || 0) && i && r.emit("beforeSlideChangeStart");
                    var f, v = -o[h];
                    if (r.updateProgress(v), s.normalizeSlideIndex)
                        for (var m = 0; m < l.length; m += 1) - Math.floor(100 * v) >= Math.floor(100 * l[m]) && (a = m);
                    if (r.initialized && a !== d) {
                        if (!r.allowSlideNext && v < r.translate && v < r.minTranslate()) return !1;
                        if (!r.allowSlidePrev && v > r.translate && v > r.maxTranslate() && (d || 0) !== a) return !1
                    }
                    return f = a > d ? "next" : a < d ? "prev" : "reset", p && -v === r.translate || !p && v === r.translate ? (r.updateActiveIndex(a), s.autoHeight && r.updateAutoHeight(), r.updateSlidesClasses(), "slide" !== s.effect && r.setTranslate(v), "reset" !== f && (r.transitionStart(i, f), r.transitionEnd(i, f)), !1) : (0 !== t && u.transition ? (r.setTransition(t), r.setTranslate(v), r.updateActiveIndex(a), r.updateSlidesClasses(), r.emit("beforeTransitionStart", t, n), r.transitionStart(i, f), r.animating || (r.animating = !0, r.onSlideToWrapperTransitionEnd || (r.onSlideToWrapperTransitionEnd = function(e) {
                        r && !r.destroyed && e.target === this && (r.$wrapperEl[0].removeEventListener("transitionend", r.onSlideToWrapperTransitionEnd), r.$wrapperEl[0].removeEventListener("webkitTransitionEnd", r.onSlideToWrapperTransitionEnd), r.onSlideToWrapperTransitionEnd = null, delete r.onSlideToWrapperTransitionEnd, r.transitionEnd(i, f))
                    }), r.$wrapperEl[0].addEventListener("transitionend", r.onSlideToWrapperTransitionEnd), r.$wrapperEl[0].addEventListener("webkitTransitionEnd", r.onSlideToWrapperTransitionEnd))) : (r.setTransition(0), r.setTranslate(v), r.updateActiveIndex(a), r.updateSlidesClasses(), r.emit("beforeTransitionStart", t, n), r.transitionStart(i, f), r.transitionEnd(i, f)), !0)
                },
                slideToLoop: function(e, t, i, n) {
                    void 0 === e && (e = 0), void 0 === t && (t = this.params.speed), void 0 === i && (i = !0);
                    var r = e;
                    return this.params.loop && (r += this.loopedSlides), this.slideTo(r, t, i, n)
                },
                slideNext: function(e, t, i) {
                    void 0 === e && (e = this.params.speed), void 0 === t && (t = !0);
                    var n = this.params,
                        r = this.animating;
                    return n.loop ? !r && (this.loopFix(), this._clientLeft = this.$wrapperEl[0].clientLeft, this.slideTo(this.activeIndex + n.slidesPerGroup, e, t, i)) : this.slideTo(this.activeIndex + n.slidesPerGroup, e, t, i)
                },
                slidePrev: function(e, t, i) {
                    void 0 === e && (e = this.params.speed), void 0 === t && (t = !0);
                    var n = this.params,
                        r = this.animating,
                        a = this.snapGrid,
                        s = this.slidesGrid,
                        o = this.rtlTranslate;
                    if (n.loop) {
                        if (r) return !1;
                        this.loopFix(), this._clientLeft = this.$wrapperEl[0].clientLeft
                    }

                    function l(e) {
                        return e < 0 ? -Math.floor(Math.abs(e)) : Math.floor(e)
                    }
                    var u, c = l(o ? this.translate : -this.translate),
                        d = a.map(function(e) {
                            return l(e)
                        }),
                        p = (s.map(function(e) {
                            return l(e)
                        }), a[d.indexOf(c)], a[d.indexOf(c) - 1]);
                    return void 0 !== p && (u = s.indexOf(p)) < 0 && (u = this.activeIndex - 1), this.slideTo(u, e, t, i)
                },
                slideReset: function(e, t, i) {
                    return void 0 === e && (e = this.params.speed), void 0 === t && (t = !0), this.slideTo(this.activeIndex, e, t, i)
                },
                slideToClosest: function(e, t, i) {
                    void 0 === e && (e = this.params.speed), void 0 === t && (t = !0);
                    var n = this.activeIndex,
                        r = Math.floor(n / this.params.slidesPerGroup);
                    if (r < this.snapGrid.length - 1) {
                        var a = this.rtlTranslate ? this.translate : -this.translate,
                            s = this.snapGrid[r],
                            o = this.snapGrid[r + 1];
                        a - s > (o - s) / 2 && (n = this.params.slidesPerGroup)
                    }
                    return this.slideTo(n, e, t, i)
                },
                slideToClickedSlide: function() {
                    var e, t = this,
                        i = t.params,
                        r = t.$wrapperEl,
                        a = "auto" === i.slidesPerView ? t.slidesPerViewDynamic() : i.slidesPerView,
                        s = t.clickedIndex;
                    if (i.loop) {
                        if (t.animating) return;
                        e = parseInt(n(t.clickedSlide).attr("data-swiper-slide-index"), 10), i.centeredSlides ? s < t.loopedSlides - a / 2 || s > t.slides.length - t.loopedSlides + a / 2 ? (t.loopFix(), s = r.children("." + i.slideClass + '[data-swiper-slide-index="' + e + '"]:not(.' + i.slideDuplicateClass + ")").eq(0).index(), l.nextTick(function() {
                            t.slideTo(s)
                        })) : t.slideTo(s) : s > t.slides.length - a ? (t.loopFix(), s = r.children("." + i.slideClass + '[data-swiper-slide-index="' + e + '"]:not(.' + i.slideDuplicateClass + ")").eq(0).index(), l.nextTick(function() {
                            t.slideTo(s)
                        })) : t.slideTo(s)
                    } else t.slideTo(s)
                }
            },
            m = {
                loopCreate: function() {
                    var t = this,
                        i = t.params,
                        r = t.$wrapperEl;
                    r.children("." + i.slideClass + "." + i.slideDuplicateClass).remove();
                    var a = r.children("." + i.slideClass);
                    if (i.loopFillGroupWithBlank) {
                        var s = i.slidesPerGroup - a.length % i.slidesPerGroup;
                        if (s !== i.slidesPerGroup) {
                            for (var o = 0; o < s; o += 1) {
                                var l = n(e.createElement("div")).addClass(i.slideClass + " " + i.slideBlankClass);
                                r.append(l)
                            }
                            a = r.children("." + i.slideClass)
                        }
                    }
                    "auto" !== i.slidesPerView || i.loopedSlides || (i.loopedSlides = a.length), t.loopedSlides = parseInt(i.loopedSlides || i.slidesPerView, 10), t.loopedSlides += i.loopAdditionalSlides, t.loopedSlides > a.length && (t.loopedSlides = a.length);
                    var u = [],
                        c = [];
                    a.each(function(e, i) {
                        var r = n(i);
                        e < t.loopedSlides && c.push(i), e < a.length && e >= a.length - t.loopedSlides && u.push(i), r.attr("data-swiper-slide-index", e)
                    });
                    for (var d = 0; d < c.length; d += 1) r.append(n(c[d].cloneNode(!0)).addClass(i.slideDuplicateClass));
                    for (var p = u.length - 1; p >= 0; p -= 1) r.prepend(n(u[p].cloneNode(!0)).addClass(i.slideDuplicateClass))
                },
                loopFix: function() {
                    var e, t = this.params,
                        i = this.activeIndex,
                        n = this.slides,
                        r = this.loopedSlides,
                        a = this.allowSlidePrev,
                        s = this.allowSlideNext,
                        o = this.snapGrid,
                        l = this.rtlTranslate;
                    this.allowSlidePrev = !0, this.allowSlideNext = !0;
                    var u = -o[i] - this.getTranslate();
                    if (i < r) {
                        e = n.length - 3 * r + i, e += r;
                        var c = this.slideTo(e, 0, !1, !0);
                        c && 0 !== u && this.setTranslate((l ? -this.translate : this.translate) - u)
                    } else if ("auto" === t.slidesPerView && i >= 2 * r || i >= n.length - r) {
                        e = -n.length + i + r, e += r;
                        var d = this.slideTo(e, 0, !1, !0);
                        d && 0 !== u && this.setTranslate((l ? -this.translate : this.translate) - u)
                    }
                    this.allowSlidePrev = a, this.allowSlideNext = s
                },
                loopDestroy: function() {
                    var e = this.$wrapperEl,
                        t = this.params,
                        i = this.slides;
                    e.children("." + t.slideClass + "." + t.slideDuplicateClass + ",." + t.slideClass + "." + t.slideBlankClass).remove(), i.removeAttr("data-swiper-slide-index")
                }
            },
            g = {
                setGrabCursor: function(e) {
                    if (!(u.touch || !this.params.simulateTouch || this.params.watchOverflow && this.isLocked)) {
                        var t = this.el;
                        t.style.cursor = "move", t.style.cursor = e ? "-webkit-grabbing" : "-webkit-grab", t.style.cursor = e ? "-moz-grabbin" : "-moz-grab", t.style.cursor = e ? "grabbing" : "grab"
                    }
                },
                unsetGrabCursor: function() {
                    u.touch || this.params.watchOverflow && this.isLocked || (this.el.style.cursor = "")
                }
            },
            y = {
                appendSlide: function(e) {
                    var t = this.$wrapperEl,
                        i = this.params;
                    if (i.loop && this.loopDestroy(), "object" == typeof e && "length" in e)
                        for (var n = 0; n < e.length; n += 1) e[n] && t.append(e[n]);
                    else t.append(e);
                    i.loop && this.loopCreate(), i.observer && u.observer || this.update()
                },
                prependSlide: function(e) {
                    var t = this.params,
                        i = this.$wrapperEl,
                        n = this.activeIndex;
                    t.loop && this.loopDestroy();
                    var r = n + 1;
                    if ("object" == typeof e && "length" in e) {
                        for (var a = 0; a < e.length; a += 1) e[a] && i.prepend(e[a]);
                        r = n + e.length
                    } else i.prepend(e);
                    t.loop && this.loopCreate(), t.observer && u.observer || this.update(), this.slideTo(r, 0, !1)
                },
                addSlide: function(e, t) {
                    var i = this.$wrapperEl,
                        n = this.params,
                        r = this.activeIndex;
                    n.loop && (r -= this.loopedSlides, this.loopDestroy(), this.slides = i.children("." + n.slideClass));
                    var a = this.slides.length;
                    if (e <= 0) this.prependSlide(t);
                    else if (e >= a) this.appendSlide(t);
                    else {
                        for (var s = r > e ? r + 1 : r, o = [], l = a - 1; l >= e; l -= 1) {
                            var c = this.slides.eq(l);
                            c.remove(), o.unshift(c)
                        }
                        if ("object" == typeof t && "length" in t) {
                            for (var d = 0; d < t.length; d += 1) t[d] && i.append(t[d]);
                            s = r > e ? r + t.length : r
                        } else i.append(t);
                        for (var p = 0; p < o.length; p += 1) i.append(o[p]);
                        n.loop && this.loopCreate(), n.observer && u.observer || this.update(), n.loop ? this.slideTo(s + this.loopedSlides, 0, !1) : this.slideTo(s, 0, !1)
                    }
                },
                removeSlide: function(e) {
                    var t = this.params,
                        i = this.$wrapperEl,
                        n = this.activeIndex;
                    t.loop && (n -= this.loopedSlides, this.loopDestroy(), this.slides = i.children("." + t.slideClass));
                    var r, a = n;
                    if ("object" == typeof e && "length" in e) {
                        for (var s = 0; s < e.length; s += 1) r = e[s], this.slides[r] && this.slides.eq(r).remove(), r < a && (a -= 1);
                        a = Math.max(a, 0)
                    } else r = e, this.slides[r] && this.slides.eq(r).remove(), r < a && (a -= 1), a = Math.max(a, 0);
                    t.loop && this.loopCreate(), t.observer && u.observer || this.update(), t.loop ? this.slideTo(a + this.loopedSlides, 0, !1) : this.slideTo(a, 0, !1)
                },
                removeAllSlides: function() {
                    for (var e = [], t = 0; t < this.slides.length; t += 1) e.push(t);
                    this.removeSlide(e)
                }
            },
            b = function() {
                var i = t.navigator.userAgent,
                    n = {
                        ios: !1,
                        android: !1,
                        androidChrome: !1,
                        desktop: !1,
                        windows: !1,
                        iphone: !1,
                        ipod: !1,
                        ipad: !1,
                        cordova: t.cordova || t.phonegap,
                        phonegap: t.cordova || t.phonegap
                    },
                    r = i.match(/(Windows Phone);?[\s\/]+([\d.]+)?/),
                    a = i.match(/(Android);?[\s\/]+([\d.]+)?/),
                    s = i.match(/(iPad).*OS\s([\d_]+)/),
                    o = i.match(/(iPod)(.*OS\s([\d_]+))?/),
                    l = !s && i.match(/(iPhone\sOS|iOS)\s([\d_]+)/);
                if (r && (n.os = "windows", n.osVersion = r[2], n.windows = !0), a && !r && (n.os = "android", n.osVersion = a[2], n.android = !0, n.androidChrome = i.toLowerCase().indexOf("chrome") >= 0), (s || l || o) && (n.os = "ios", n.ios = !0), l && !o && (n.osVersion = l[2].replace(/_/g, "."), n.iphone = !0), s && (n.osVersion = s[2].replace(/_/g, "."), n.ipad = !0), o && (n.osVersion = o[3] ? o[3].replace(/_/g, ".") : null, n.iphone = !0), n.ios && n.osVersion && i.indexOf("Version/") >= 0 && "10" === n.osVersion.split(".")[0] && (n.osVersion = i.toLowerCase().split("version/")[1].split(" ")[0]), n.desktop = !(n.os || n.android || n.webView), n.webView = (l || s || o) && i.match(/.*AppleWebKit(?!.*Safari)/i), n.os && "ios" === n.os) {
                    var u = n.osVersion.split("."),
                        c = e.querySelector('meta[name="viewport"]');
                    n.minimalUi = !n.webView && (o || l) && (1 * u[0] == 7 ? 1 * u[1] >= 1 : 1 * u[0] > 7) && c && c.getAttribute("content").indexOf("minimal-ui") >= 0
                }
                return n.pixelRatio = t.devicePixelRatio || 1, n
            }();

        function w() {
            var e = this.params,
                t = this.el;
            if (!t || 0 !== t.offsetWidth) {
                e.breakpoints && this.setBreakpoint();
                var i = this.allowSlideNext,
                    n = this.allowSlidePrev,
                    r = this.snapGrid;
                if (this.allowSlideNext = !0, this.allowSlidePrev = !0, this.updateSize(), this.updateSlides(), e.freeMode) {
                    var a = Math.min(Math.max(this.translate, this.maxTranslate()), this.minTranslate());
                    this.setTranslate(a), this.updateActiveIndex(), this.updateSlidesClasses(), e.autoHeight && this.updateAutoHeight()
                } else this.updateSlidesClasses(), ("auto" === e.slidesPerView || e.slidesPerView > 1) && this.isEnd && !this.params.centeredSlides ? this.slideTo(this.slides.length - 1, 0, !1, !0) : this.slideTo(this.activeIndex, 0, !1, !0);
                this.allowSlidePrev = n, this.allowSlideNext = i, this.params.watchOverflow && r !== this.snapGrid && this.checkOverflow()
            }
        }
        var x, T = {
                attachEvents: function() {
                    var i = this.params,
                        r = this.touchEvents,
                        a = this.el,
                        s = this.wrapperEl;
                    this.onTouchStart = function(i) {
                        var r = this.touchEventsData,
                            a = this.params,
                            s = this.touches;
                        if (!this.animating || !a.preventInteractionOnTransition) {
                            var o = i;
                            if (o.originalEvent && (o = o.originalEvent), r.isTouchEvent = "touchstart" === o.type, (r.isTouchEvent || !("which" in o) || 3 !== o.which) && !(!r.isTouchEvent && "button" in o && o.button > 0 || r.isTouched && r.isMoved))
                                if (a.noSwiping && n(o.target).closest(a.noSwipingSelector ? a.noSwipingSelector : "." + a.noSwipingClass)[0]) this.allowClick = !0;
                                else if (!a.swipeHandler || n(o).closest(a.swipeHandler)[0]) {
                                s.currentX = "touchstart" === o.type ? o.targetTouches[0].pageX : o.pageX, s.currentY = "touchstart" === o.type ? o.targetTouches[0].pageY : o.pageY;
                                var u = s.currentX,
                                    c = s.currentY,
                                    d = a.edgeSwipeDetection || a.iOSEdgeSwipeDetection,
                                    p = a.edgeSwipeThreshold || a.iOSEdgeSwipeThreshold;
                                if (!d || !(u <= p || u >= t.screen.width - p)) {
                                    if (l.extend(r, {
                                            isTouched: !0,
                                            isMoved: !1,
                                            allowTouchCallbacks: !0,
                                            isScrolling: void 0,
                                            startMoving: void 0
                                        }), s.startX = u, s.startY = c, r.touchStartTime = l.now(), this.allowClick = !0, this.updateSize(), this.swipeDirection = void 0, a.threshold > 0 && (r.allowThresholdMove = !1), "touchstart" !== o.type) {
                                        var h = !0;
                                        n(o.target).is(r.formElements) && (h = !1), e.activeElement && n(e.activeElement).is(r.formElements) && e.activeElement !== o.target && e.activeElement.blur();
                                        var f = h && this.allowTouchMove && a.touchStartPreventDefault;
                                        (a.touchStartForcePreventDefault || f) && o.preventDefault()
                                    }
                                    this.emit("touchStart", o)
                                }
                            }
                        }
                    }.bind(this), this.onTouchMove = function(t) {
                        var i = this.touchEventsData,
                            r = this.params,
                            a = this.touches,
                            s = this.rtlTranslate,
                            o = t;
                        if (o.originalEvent && (o = o.originalEvent), i.isTouched) {
                            if (!i.isTouchEvent || "mousemove" !== o.type) {
                                var u = "touchmove" === o.type ? o.targetTouches[0].pageX : o.pageX,
                                    c = "touchmove" === o.type ? o.targetTouches[0].pageY : o.pageY;
                                if (o.preventedByNestedSwiper) return a.startX = u, void(a.startY = c);
                                if (!this.allowTouchMove) return this.allowClick = !1, void(i.isTouched && (l.extend(a, {
                                    startX: u,
                                    startY: c,
                                    currentX: u,
                                    currentY: c
                                }), i.touchStartTime = l.now()));
                                if (i.isTouchEvent && r.touchReleaseOnEdges && !r.loop)
                                    if (this.isVertical()) {
                                        if (c < a.startY && this.translate <= this.maxTranslate() || c > a.startY && this.translate >= this.minTranslate()) return i.isTouched = !1, void(i.isMoved = !1)
                                    } else if (u < a.startX && this.translate <= this.maxTranslate() || u > a.startX && this.translate >= this.minTranslate()) return;
                                if (i.isTouchEvent && e.activeElement && o.target === e.activeElement && n(o.target).is(i.formElements)) return i.isMoved = !0, void(this.allowClick = !1);
                                if (i.allowTouchCallbacks && this.emit("touchMove", o), !(o.targetTouches && o.targetTouches.length > 1)) {
                                    a.currentX = u, a.currentY = c;
                                    var d, p = a.currentX - a.startX,
                                        h = a.currentY - a.startY;
                                    if (!(this.params.threshold && Math.sqrt(Math.pow(p, 2) + Math.pow(h, 2)) < this.params.threshold))
                                        if (void 0 === i.isScrolling && (this.isHorizontal() && a.currentY === a.startY || this.isVertical() && a.currentX === a.startX ? i.isScrolling = !1 : p * p + h * h >= 25 && (d = 180 * Math.atan2(Math.abs(h), Math.abs(p)) / Math.PI, i.isScrolling = this.isHorizontal() ? d > r.touchAngle : 90 - d > r.touchAngle)), i.isScrolling && this.emit("touchMoveOpposite", o), void 0 === i.startMoving && (a.currentX === a.startX && a.currentY === a.startY || (i.startMoving = !0)), i.isScrolling) i.isTouched = !1;
                                        else if (i.startMoving) {
                                        this.allowClick = !1, o.preventDefault(), r.touchMoveStopPropagation && !r.nested && o.stopPropagation(), i.isMoved || (r.loop && this.loopFix(), i.startTranslate = this.getTranslate(), this.setTransition(0), this.animating && this.$wrapperEl.trigger("webkitTransitionEnd transitionend"), i.allowMomentumBounce = !1, !r.grabCursor || !0 !== this.allowSlideNext && !0 !== this.allowSlidePrev || this.setGrabCursor(!0), this.emit("sliderFirstMove", o)), this.emit("sliderMove", o), i.isMoved = !0;
                                        var f = this.isHorizontal() ? p : h;
                                        a.diff = f, f *= r.touchRatio, s && (f = -f), this.swipeDirection = f > 0 ? "prev" : "next", i.currentTranslate = f + i.startTranslate;
                                        var v = !0,
                                            m = r.resistanceRatio;
                                        if (r.touchReleaseOnEdges && (m = 0), f > 0 && i.currentTranslate > this.minTranslate() ? (v = !1, r.resistance && (i.currentTranslate = this.minTranslate() - 1 + Math.pow(-this.minTranslate() + i.startTranslate + f, m))) : f < 0 && i.currentTranslate < this.maxTranslate() && (v = !1, r.resistance && (i.currentTranslate = this.maxTranslate() + 1 - Math.pow(this.maxTranslate() - i.startTranslate - f, m))), v && (o.preventedByNestedSwiper = !0), !this.allowSlideNext && "next" === this.swipeDirection && i.currentTranslate < i.startTranslate && (i.currentTranslate = i.startTranslate), !this.allowSlidePrev && "prev" === this.swipeDirection && i.currentTranslate > i.startTranslate && (i.currentTranslate = i.startTranslate), r.threshold > 0) {
                                            if (!(Math.abs(f) > r.threshold || i.allowThresholdMove)) return void(i.currentTranslate = i.startTranslate);
                                            if (!i.allowThresholdMove) return i.allowThresholdMove = !0, a.startX = a.currentX, a.startY = a.currentY, i.currentTranslate = i.startTranslate, void(a.diff = this.isHorizontal() ? a.currentX - a.startX : a.currentY - a.startY)
                                        }
                                        r.followFinger && ((r.freeMode || r.watchSlidesProgress || r.watchSlidesVisibility) && (this.updateActiveIndex(), this.updateSlidesClasses()), r.freeMode && (0 === i.velocities.length && i.velocities.push({
                                            position: a[this.isHorizontal() ? "startX" : "startY"],
                                            time: i.touchStartTime
                                        }), i.velocities.push({
                                            position: a[this.isHorizontal() ? "currentX" : "currentY"],
                                            time: l.now()
                                        })), this.updateProgress(i.currentTranslate), this.setTranslate(i.currentTranslate))
                                    }
                                }
                            }
                        } else i.startMoving && i.isScrolling && this.emit("touchMoveOpposite", o)
                    }.bind(this), this.onTouchEnd = function(e) {
                        var t = this,
                            i = t.touchEventsData,
                            n = t.params,
                            r = t.touches,
                            a = t.rtlTranslate,
                            s = t.$wrapperEl,
                            o = t.slidesGrid,
                            u = t.snapGrid,
                            c = e;
                        if (c.originalEvent && (c = c.originalEvent), i.allowTouchCallbacks && t.emit("touchEnd", c), i.allowTouchCallbacks = !1, !i.isTouched) return i.isMoved && n.grabCursor && t.setGrabCursor(!1), i.isMoved = !1, void(i.startMoving = !1);
                        n.grabCursor && i.isMoved && i.isTouched && (!0 === t.allowSlideNext || !0 === t.allowSlidePrev) && t.setGrabCursor(!1);
                        var d, p = l.now(),
                            h = p - i.touchStartTime;
                        if (t.allowClick && (t.updateClickedSlide(c), t.emit("tap", c), h < 300 && p - i.lastClickTime > 300 && (i.clickTimeout && clearTimeout(i.clickTimeout), i.clickTimeout = l.nextTick(function() {
                                t && !t.destroyed && t.emit("click", c)
                            }, 300)), h < 300 && p - i.lastClickTime < 300 && (i.clickTimeout && clearTimeout(i.clickTimeout), t.emit("doubleTap", c))), i.lastClickTime = l.now(), l.nextTick(function() {
                                t.destroyed || (t.allowClick = !0)
                            }), !i.isTouched || !i.isMoved || !t.swipeDirection || 0 === r.diff || i.currentTranslate === i.startTranslate) return i.isTouched = !1, i.isMoved = !1, void(i.startMoving = !1);
                        if (i.isTouched = !1, i.isMoved = !1, i.startMoving = !1, d = n.followFinger ? a ? t.translate : -t.translate : -i.currentTranslate, n.freeMode) {
                            if (d < -t.minTranslate()) return void t.slideTo(t.activeIndex);
                            if (d > -t.maxTranslate()) return void(t.slides.length < u.length ? t.slideTo(u.length - 1) : t.slideTo(t.slides.length - 1));
                            if (n.freeModeMomentum) {
                                if (i.velocities.length > 1) {
                                    var f = i.velocities.pop(),
                                        v = i.velocities.pop(),
                                        m = f.position - v.position,
                                        g = f.time - v.time;
                                    t.velocity = m / g, t.velocity /= 2, Math.abs(t.velocity) < n.freeModeMinimumVelocity && (t.velocity = 0), (g > 150 || l.now() - f.time > 300) && (t.velocity = 0)
                                } else t.velocity = 0;
                                t.velocity *= n.freeModeMomentumVelocityRatio, i.velocities.length = 0;
                                var y = 1e3 * n.freeModeMomentumRatio,
                                    b = t.velocity * y,
                                    w = t.translate + b;
                                a && (w = -w);
                                var x, T, S = !1,
                                    C = 20 * Math.abs(t.velocity) * n.freeModeMomentumBounceRatio;
                                if (w < t.maxTranslate()) n.freeModeMomentumBounce ? (w + t.maxTranslate() < -C && (w = t.maxTranslate() - C), x = t.maxTranslate(), S = !0, i.allowMomentumBounce = !0) : w = t.maxTranslate(), n.loop && n.centeredSlides && (T = !0);
                                else if (w > t.minTranslate()) n.freeModeMomentumBounce ? (w - t.minTranslate() > C && (w = t.minTranslate() + C), x = t.minTranslate(), S = !0, i.allowMomentumBounce = !0) : w = t.minTranslate(), n.loop && n.centeredSlides && (T = !0);
                                else if (n.freeModeSticky) {
                                    for (var E, k = 0; k < u.length; k += 1)
                                        if (u[k] > -w) {
                                            E = k;
                                            break
                                        }
                                    w = -(w = Math.abs(u[E] - w) < Math.abs(u[E - 1] - w) || "next" === t.swipeDirection ? u[E] : u[E - 1])
                                }
                                if (T && t.once("transitionEnd", function() {
                                        t.loopFix()
                                    }), 0 !== t.velocity) y = a ? Math.abs((-w - t.translate) / t.velocity) : Math.abs((w - t.translate) / t.velocity);
                                else if (n.freeModeSticky) return void t.slideToClosest();
                                n.freeModeMomentumBounce && S ? (t.updateProgress(x), t.setTransition(y), t.setTranslate(w), t.transitionStart(!0, t.swipeDirection), t.animating = !0, s.transitionEnd(function() {
                                    t && !t.destroyed && i.allowMomentumBounce && (t.emit("momentumBounce"), t.setTransition(n.speed), t.setTranslate(x), s.transitionEnd(function() {
                                        t && !t.destroyed && t.transitionEnd()
                                    }))
                                })) : t.velocity ? (t.updateProgress(w), t.setTransition(y), t.setTranslate(w), t.transitionStart(!0, t.swipeDirection), t.animating || (t.animating = !0, s.transitionEnd(function() {
                                    t && !t.destroyed && t.transitionEnd()
                                }))) : t.updateProgress(w), t.updateActiveIndex(), t.updateSlidesClasses()
                            } else if (n.freeModeSticky) return void t.slideToClosest();
                            (!n.freeModeMomentum || h >= n.longSwipesMs) && (t.updateProgress(), t.updateActiveIndex(), t.updateSlidesClasses())
                        } else {
                            for (var P = 0, M = t.slidesSizesGrid[0], A = 0; A < o.length; A += n.slidesPerGroup) void 0 !== o[A + n.slidesPerGroup] ? d >= o[A] && d < o[A + n.slidesPerGroup] && (P = A, M = o[A + n.slidesPerGroup] - o[A]) : d >= o[A] && (P = A, M = o[o.length - 1] - o[o.length - 2]);
                            var O = (d - o[P]) / M;
                            if (h > n.longSwipesMs) {
                                if (!n.longSwipes) return void t.slideTo(t.activeIndex);
                                "next" === t.swipeDirection && (O >= n.longSwipesRatio ? t.slideTo(P + n.slidesPerGroup) : t.slideTo(P)), "prev" === t.swipeDirection && (O > 1 - n.longSwipesRatio ? t.slideTo(P + n.slidesPerGroup) : t.slideTo(P))
                            } else {
                                if (!n.shortSwipes) return void t.slideTo(t.activeIndex);
                                "next" === t.swipeDirection && t.slideTo(P + n.slidesPerGroup), "prev" === t.swipeDirection && t.slideTo(P)
                            }
                        }
                    }.bind(this), this.onClick = function(e) {
                        this.allowClick || (this.params.preventClicks && e.preventDefault(), this.params.preventClicksPropagation && this.animating && (e.stopPropagation(), e.stopImmediatePropagation()))
                    }.bind(this);
                    var o = "container" === i.touchEventsTarget ? a : s,
                        c = !!i.nested;
                    if (u.touch || !u.pointerEvents && !u.prefixedPointerEvents) {
                        if (u.touch) {
                            var d = !("touchstart" !== r.start || !u.passiveListener || !i.passiveListeners) && {
                                passive: !0,
                                capture: !1
                            };
                            o.addEventListener(r.start, this.onTouchStart, d), o.addEventListener(r.move, this.onTouchMove, u.passiveListener ? {
                                passive: !1,
                                capture: c
                            } : c), o.addEventListener(r.end, this.onTouchEnd, d)
                        }(i.simulateTouch && !b.ios && !b.android || i.simulateTouch && !u.touch && b.ios) && (o.addEventListener("mousedown", this.onTouchStart, !1), e.addEventListener("mousemove", this.onTouchMove, c), e.addEventListener("mouseup", this.onTouchEnd, !1))
                    } else o.addEventListener(r.start, this.onTouchStart, !1), e.addEventListener(r.move, this.onTouchMove, c), e.addEventListener(r.end, this.onTouchEnd, !1);
                    (i.preventClicks || i.preventClicksPropagation) && o.addEventListener("click", this.onClick, !0), this.on(b.ios || b.android ? "resize orientationchange observerUpdate" : "resize observerUpdate", w, !0)
                },
                detachEvents: function() {
                    var t = this.params,
                        i = this.touchEvents,
                        n = this.el,
                        r = this.wrapperEl,
                        a = "container" === t.touchEventsTarget ? n : r,
                        s = !!t.nested;
                    if (u.touch || !u.pointerEvents && !u.prefixedPointerEvents) {
                        if (u.touch) {
                            var o = !("onTouchStart" !== i.start || !u.passiveListener || !t.passiveListeners) && {
                                passive: !0,
                                capture: !1
                            };
                            a.removeEventListener(i.start, this.onTouchStart, o), a.removeEventListener(i.move, this.onTouchMove, s), a.removeEventListener(i.end, this.onTouchEnd, o)
                        }(t.simulateTouch && !b.ios && !b.android || t.simulateTouch && !u.touch && b.ios) && (a.removeEventListener("mousedown", this.onTouchStart, !1), e.removeEventListener("mousemove", this.onTouchMove, s), e.removeEventListener("mouseup", this.onTouchEnd, !1))
                    } else a.removeEventListener(i.start, this.onTouchStart, !1), e.removeEventListener(i.move, this.onTouchMove, s), e.removeEventListener(i.end, this.onTouchEnd, !1);
                    (t.preventClicks || t.preventClicksPropagation) && a.removeEventListener("click", this.onClick, !0), this.off(b.ios || b.android ? "resize orientationchange observerUpdate" : "resize observerUpdate", w)
                }
            },
            S = {
                setBreakpoint: function() {
                    var e = this.activeIndex,
                        t = this.initialized,
                        i = this.loopedSlides;
                    void 0 === i && (i = 0);
                    var n = this.params,
                        r = n.breakpoints;
                    if (r && (!r || 0 !== Object.keys(r).length)) {
                        var a = this.getBreakpoint(r);
                        if (a && this.currentBreakpoint !== a) {
                            var s = a in r ? r[a] : void 0;
                            s && ["slidesPerView", "spaceBetween", "slidesPerGroup"].forEach(function(e) {
                                var t = s[e];
                                void 0 !== t && (s[e] = "slidesPerView" !== e || "AUTO" !== t && "auto" !== t ? "slidesPerView" === e ? parseFloat(t) : parseInt(t, 10) : "auto")
                            });
                            var o = s || this.originalParams,
                                u = n.loop && o.slidesPerView !== n.slidesPerView;
                            l.extend(this.params, o), l.extend(this, {
                                allowTouchMove: this.params.allowTouchMove,
                                allowSlideNext: this.params.allowSlideNext,
                                allowSlidePrev: this.params.allowSlidePrev
                            }), this.currentBreakpoint = a, u && t && (this.loopDestroy(), this.loopCreate(), this.updateSlides(), this.slideTo(e - i + this.loopedSlides, 0, !1)), this.emit("breakpoint", o)
                        }
                    }
                },
                getBreakpoint: function(e) {
                    if (e) {
                        var i = !1,
                            n = [];
                        Object.keys(e).forEach(function(e) {
                            n.push(e)
                        }), n.sort(function(e, t) {
                            return parseInt(e, 10) - parseInt(t, 10)
                        });
                        for (var r = 0; r < n.length; r += 1) {
                            var a = n[r];
                            this.params.breakpointsInverse ? a <= t.innerWidth && (i = a) : a >= t.innerWidth && !i && (i = a)
                        }
                        return i || "max"
                    }
                }
            },
            C = {
                isIE: !!t.navigator.userAgent.match(/Trident/g) || !!t.navigator.userAgent.match(/MSIE/g),
                isEdge: !!t.navigator.userAgent.match(/Edge/g),
                isSafari: (x = t.navigator.userAgent.toLowerCase(), x.indexOf("safari") >= 0 && x.indexOf("chrome") < 0 && x.indexOf("android") < 0),
                isUiWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(t.navigator.userAgent)
            },
            E = {
                init: !0,
                direction: "horizontal",
                touchEventsTarget: "container",
                initialSlide: 0,
                speed: 300,
                preventInteractionOnTransition: !1,
                edgeSwipeDetection: !1,
                edgeSwipeThreshold: 20,
                freeMode: !1,
                freeModeMomentum: !0,
                freeModeMomentumRatio: 1,
                freeModeMomentumBounce: !0,
                freeModeMomentumBounceRatio: 1,
                freeModeMomentumVelocityRatio: 1,
                freeModeSticky: !1,
                freeModeMinimumVelocity: .02,
                autoHeight: !1,
                setWrapperSize: !1,
                virtualTranslate: !1,
                effect: "slide",
                breakpoints: void 0,
                breakpointsInverse: !1,
                spaceBetween: 0,
                slidesPerView: 1,
                slidesPerColumn: 1,
                slidesPerColumnFill: "column",
                slidesPerGroup: 1,
                centeredSlides: !1,
                slidesOffsetBefore: 0,
                slidesOffsetAfter: 0,
                normalizeSlideIndex: !0,
                centerInsufficientSlides: !1,
                watchOverflow: !1,
                roundLengths: !1,
                touchRatio: 1,
                touchAngle: 45,
                simulateTouch: !0,
                shortSwipes: !0,
                longSwipes: !0,
                longSwipesRatio: .5,
                longSwipesMs: 300,
                followFinger: !0,
                allowTouchMove: !0,
                threshold: 0,
                touchMoveStopPropagation: !0,
                touchStartPreventDefault: !0,
                touchStartForcePreventDefault: !1,
                touchReleaseOnEdges: !1,
                uniqueNavElements: !0,
                resistance: !0,
                resistanceRatio: .85,
                watchSlidesProgress: !1,
                watchSlidesVisibility: !1,
                grabCursor: !1,
                preventClicks: !0,
                preventClicksPropagation: !0,
                slideToClickedSlide: !1,
                preloadImages: !0,
                updateOnImagesReady: !0,
                loop: !1,
                loopAdditionalSlides: 0,
                loopedSlides: null,
                loopFillGroupWithBlank: !1,
                allowSlidePrev: !0,
                allowSlideNext: !0,
                swipeHandler: null,
                noSwiping: !0,
                noSwipingClass: "swiper-no-swiping",
                noSwipingSelector: null,
                passiveListeners: !0,
                containerModifierClass: "swiper-container-",
                slideClass: "swiper-slide",
                slideBlankClass: "swiper-slide-invisible-blank",
                slideActiveClass: "swiper-slide-active",
                slideDuplicateActiveClass: "swiper-slide-duplicate-active",
                slideVisibleClass: "swiper-slide-visible",
                slideDuplicateClass: "swiper-slide-duplicate",
                slideNextClass: "swiper-slide-next",
                slideDuplicateNextClass: "swiper-slide-duplicate-next",
                slidePrevClass: "swiper-slide-prev",
                slideDuplicatePrevClass: "swiper-slide-duplicate-prev",
                wrapperClass: "swiper-wrapper",
                runCallbacksOnInit: !0
            },
            k = {
                update: p,
                translate: h,
                transition: f,
                slide: v,
                loop: m,
                grabCursor: g,
                manipulation: y,
                events: T,
                breakpoints: S,
                checkOverflow: {
                    checkOverflow: function() {
                        var e = this.isLocked;
                        this.isLocked = 1 === this.snapGrid.length, this.allowSlideNext = !this.isLocked, this.allowSlidePrev = !this.isLocked, e !== this.isLocked && this.emit(this.isLocked ? "lock" : "unlock"), e && e !== this.isLocked && (this.isEnd = !1, this.navigation.update())
                    }
                },
                classes: {
                    addClasses: function() {
                        var e = this.classNames,
                            t = this.params,
                            i = this.rtl,
                            n = this.$el,
                            r = [];
                        r.push(t.direction), t.freeMode && r.push("free-mode"), u.flexbox || r.push("no-flexbox"), t.autoHeight && r.push("autoheight"), i && r.push("rtl"), t.slidesPerColumn > 1 && r.push("multirow"), b.android && r.push("android"), b.ios && r.push("ios"), (C.isIE || C.isEdge) && (u.pointerEvents || u.prefixedPointerEvents) && r.push("wp8-" + t.direction), r.forEach(function(i) {
                            e.push(t.containerModifierClass + i)
                        }), n.addClass(e.join(" "))
                    },
                    removeClasses: function() {
                        var e = this.$el,
                            t = this.classNames;
                        e.removeClass(t.join(" "))
                    }
                },
                images: {
                    loadImage: function(e, i, n, r, a, s) {
                        var o;

                        function l() {
                            s && s()
                        }
                        e.complete && a ? l() : i ? ((o = new t.Image).onload = l, o.onerror = l, r && (o.sizes = r), n && (o.srcset = n), i && (o.src = i)) : l()
                    },
                    preloadImages: function() {
                        var e = this;

                        function t() {
                            null != e && e && !e.destroyed && (void 0 !== e.imagesLoaded && (e.imagesLoaded += 1), e.imagesLoaded === e.imagesToLoad.length && (e.params.updateOnImagesReady && e.update(), e.emit("imagesReady")))
                        }
                        e.imagesToLoad = e.$el.find("img");
                        for (var i = 0; i < e.imagesToLoad.length; i += 1) {
                            var n = e.imagesToLoad[i];
                            e.loadImage(n, n.currentSrc || n.getAttribute("src"), n.srcset || n.getAttribute("srcset"), n.sizes || n.getAttribute("sizes"), !0, t)
                        }
                    }
                }
            },
            P = {},
            M = function(e) {
                function t() {
                    for (var i, r, a, s = [], o = arguments.length; o--;) s[o] = arguments[o];
                    1 === s.length && s[0].constructor && s[0].constructor === Object ? a = s[0] : (r = (i = s)[0], a = i[1]), a || (a = {}), a = l.extend({}, a), r && !a.el && (a.el = r), e.call(this, a), Object.keys(k).forEach(function(e) {
                        Object.keys(k[e]).forEach(function(i) {
                            t.prototype[i] || (t.prototype[i] = k[e][i])
                        })
                    });
                    var c = this;
                    void 0 === c.modules && (c.modules = {}), Object.keys(c.modules).forEach(function(e) {
                        var t = c.modules[e];
                        if (t.params) {
                            var i = Object.keys(t.params)[0],
                                n = t.params[i];
                            if ("object" != typeof n || null === n) return;
                            if (!(i in a && "enabled" in n)) return;
                            !0 === a[i] && (a[i] = {
                                enabled: !0
                            }), "object" != typeof a[i] || "enabled" in a[i] || (a[i].enabled = !0), a[i] || (a[i] = {
                                enabled: !1
                            })
                        }
                    });
                    var d = l.extend({}, E);
                    c.useModulesParams(d), c.params = l.extend({}, d, P, a), c.originalParams = l.extend({}, c.params), c.passedParams = l.extend({}, a), c.$ = n;
                    var p = n(c.params.el);
                    if (r = p[0]) {
                        if (p.length > 1) {
                            var h = [];
                            return p.each(function(e, i) {
                                var n = l.extend({}, a, {
                                    el: i
                                });
                                h.push(new t(n))
                            }), h
                        }
                        r.swiper = c, p.data("swiper", c);
                        var f, v, m = p.children("." + c.params.wrapperClass);
                        return l.extend(c, {
                            $el: p,
                            el: r,
                            $wrapperEl: m,
                            wrapperEl: m[0],
                            classNames: [],
                            slides: n(),
                            slidesGrid: [],
                            snapGrid: [],
                            slidesSizesGrid: [],
                            isHorizontal: function() {
                                return "horizontal" === c.params.direction
                            },
                            isVertical: function() {
                                return "vertical" === c.params.direction
                            },
                            rtl: "rtl" === r.dir.toLowerCase() || "rtl" === p.css("direction"),
                            rtlTranslate: "horizontal" === c.params.direction && ("rtl" === r.dir.toLowerCase() || "rtl" === p.css("direction")),
                            wrongRTL: "-webkit-box" === m.css("display"),
                            activeIndex: 0,
                            realIndex: 0,
                            isBeginning: !0,
                            isEnd: !1,
                            translate: 0,
                            previousTranslate: 0,
                            progress: 0,
                            velocity: 0,
                            animating: !1,
                            allowSlideNext: c.params.allowSlideNext,
                            allowSlidePrev: c.params.allowSlidePrev,
                            touchEvents: (f = ["touchstart", "touchmove", "touchend"], v = ["mousedown", "mousemove", "mouseup"], u.pointerEvents ? v = ["pointerdown", "pointermove", "pointerup"] : u.prefixedPointerEvents && (v = ["MSPointerDown", "MSPointerMove", "MSPointerUp"]), c.touchEventsTouch = {
                                start: f[0],
                                move: f[1],
                                end: f[2]
                            }, c.touchEventsDesktop = {
                                start: v[0],
                                move: v[1],
                                end: v[2]
                            }, u.touch || !c.params.simulateTouch ? c.touchEventsTouch : c.touchEventsDesktop),
                            touchEventsData: {
                                isTouched: void 0,
                                isMoved: void 0,
                                allowTouchCallbacks: void 0,
                                touchStartTime: void 0,
                                isScrolling: void 0,
                                currentTranslate: void 0,
                                startTranslate: void 0,
                                allowThresholdMove: void 0,
                                formElements: "input, select, option, textarea, button, video",
                                lastClickTime: l.now(),
                                clickTimeout: void 0,
                                velocities: [],
                                allowMomentumBounce: void 0,
                                isTouchEvent: void 0,
                                startMoving: void 0
                            },
                            allowClick: !0,
                            allowTouchMove: c.params.allowTouchMove,
                            touches: {
                                startX: 0,
                                startY: 0,
                                currentX: 0,
                                currentY: 0,
                                diff: 0
                            },
                            imagesToLoad: [],
                            imagesLoaded: 0
                        }), c.useModules(), c.params.init && c.init(), c
                    }
                }
                e && (t.__proto__ = e), t.prototype = Object.create(e && e.prototype), t.prototype.constructor = t;
                var i = {
                    extendedDefaults: {
                        configurable: !0
                    },
                    defaults: {
                        configurable: !0
                    },
                    Class: {
                        configurable: !0
                    },
                    $: {
                        configurable: !0
                    }
                };
                return t.prototype.slidesPerViewDynamic = function() {
                    var e = this.params,
                        t = this.slides,
                        i = this.slidesGrid,
                        n = this.size,
                        r = this.activeIndex,
                        a = 1;
                    if (e.centeredSlides) {
                        for (var s, o = t[r].swiperSlideSize, l = r + 1; l < t.length; l += 1) t[l] && !s && (o += t[l].swiperSlideSize, a += 1, o > n && (s = !0));
                        for (var u = r - 1; u >= 0; u -= 1) t[u] && !s && (o += t[u].swiperSlideSize, a += 1, o > n && (s = !0))
                    } else
                        for (var c = r + 1; c < t.length; c += 1) i[c] - i[r] < n && (a += 1);
                    return a
                }, t.prototype.update = function() {
                    var e = this;
                    if (e && !e.destroyed) {
                        var t = e.snapGrid,
                            i = e.params;
                        i.breakpoints && e.setBreakpoint(), e.updateSize(), e.updateSlides(), e.updateProgress(), e.updateSlidesClasses(), e.params.freeMode ? (n(), e.params.autoHeight && e.updateAutoHeight()) : (("auto" === e.params.slidesPerView || e.params.slidesPerView > 1) && e.isEnd && !e.params.centeredSlides ? e.slideTo(e.slides.length - 1, 0, !1, !0) : e.slideTo(e.activeIndex, 0, !1, !0)) || n(), i.watchOverflow && t !== e.snapGrid && e.checkOverflow(), e.emit("update")
                    }

                    function n() {
                        var t = e.rtlTranslate ? -1 * e.translate : e.translate,
                            i = Math.min(Math.max(t, e.maxTranslate()), e.minTranslate());
                        e.setTranslate(i), e.updateActiveIndex(), e.updateSlidesClasses()
                    }
                }, t.prototype.init = function() {
                    this.initialized || (this.emit("beforeInit"), this.params.breakpoints && this.setBreakpoint(), this.addClasses(), this.params.loop && this.loopCreate(), this.updateSize(), this.updateSlides(), this.params.watchOverflow && this.checkOverflow(), this.params.grabCursor && this.setGrabCursor(), this.params.preloadImages && this.preloadImages(), this.params.loop ? this.slideTo(this.params.initialSlide + this.loopedSlides, 0, this.params.runCallbacksOnInit) : this.slideTo(this.params.initialSlide, 0, this.params.runCallbacksOnInit), this.attachEvents(), this.initialized = !0, this.emit("init"))
                }, t.prototype.destroy = function(e, t) {
                    void 0 === e && (e = !0), void 0 === t && (t = !0);
                    var i = this,
                        n = i.params,
                        r = i.$el,
                        a = i.$wrapperEl,
                        s = i.slides;
                    return void 0 === i.params || i.destroyed ? null : (i.emit("beforeDestroy"), i.initialized = !1, i.detachEvents(), n.loop && i.loopDestroy(), t && (i.removeClasses(), r.removeAttr("style"), a.removeAttr("style"), s && s.length && s.removeClass([n.slideVisibleClass, n.slideActiveClass, n.slideNextClass, n.slidePrevClass].join(" ")).removeAttr("style").removeAttr("data-swiper-slide-index").removeAttr("data-swiper-column").removeAttr("data-swiper-row")), i.emit("destroy"), Object.keys(i.eventsListeners).forEach(function(e) {
                        i.off(e)
                    }), !1 !== e && (i.$el[0].swiper = null, i.$el.data("swiper", null), l.deleteProps(i)), i.destroyed = !0, null)
                }, t.extendDefaults = function(e) {
                    l.extend(P, e)
                }, i.extendedDefaults.get = function() {
                    return P
                }, i.defaults.get = function() {
                    return E
                }, i.Class.get = function() {
                    return e
                }, i.$.get = function() {
                    return n
                }, Object.defineProperties(t, i), t
            }(c),
            A = {
                name: "device",
                proto: {
                    device: b
                },
                static: {
                    device: b
                }
            },
            O = {
                name: "support",
                proto: {
                    support: u
                },
                static: {
                    support: u
                }
            },
            L = {
                name: "browser",
                proto: {
                    browser: C
                },
                static: {
                    browser: C
                }
            },
            N = {
                name: "resize",
                create: function() {
                    var e = this;
                    l.extend(e, {
                        resize: {
                            resizeHandler: function() {
                                e && !e.destroyed && e.initialized && (e.emit("beforeResize"), e.emit("resize"))
                            },
                            orientationChangeHandler: function() {
                                e && !e.destroyed && e.initialized && e.emit("orientationchange")
                            }
                        }
                    })
                },
                on: {
                    init: function() {
                        t.addEventListener("resize", this.resize.resizeHandler), t.addEventListener("orientationchange", this.resize.orientationChangeHandler)
                    },
                    destroy: function() {
                        t.removeEventListener("resize", this.resize.resizeHandler), t.removeEventListener("orientationchange", this.resize.orientationChangeHandler)
                    }
                }
            },
            z = {
                func: t.MutationObserver || t.WebkitMutationObserver,
                attach: function(e, i) {
                    void 0 === i && (i = {});
                    var n = this,
                        r = z.func,
                        a = new r(function(e) {
                            if (1 !== e.length) {
                                var i = function() {
                                    n.emit("observerUpdate", e[0])
                                };
                                t.requestAnimationFrame ? t.requestAnimationFrame(i) : t.setTimeout(i, 0)
                            } else n.emit("observerUpdate", e[0])
                        });
                    a.observe(e, {
                        attributes: void 0 === i.attributes || i.attributes,
                        childList: void 0 === i.childList || i.childList,
                        characterData: void 0 === i.characterData || i.characterData
                    }), n.observer.observers.push(a)
                },
                init: function() {
                    if (u.observer && this.params.observer) {
                        if (this.params.observeParents)
                            for (var e = this.$el.parents(), t = 0; t < e.length; t += 1) this.observer.attach(e[t]);
                        this.observer.attach(this.$el[0], {
                            childList: this.params.observeSlideChildren
                        }), this.observer.attach(this.$wrapperEl[0], {
                            attributes: !1
                        })
                    }
                },
                destroy: function() {
                    this.observer.observers.forEach(function(e) {
                        e.disconnect()
                    }), this.observer.observers = []
                }
            },
            D = {
                name: "observer",
                params: {
                    observer: !1,
                    observeParents: !1,
                    observeSlideChildren: !1
                },
                create: function() {
                    l.extend(this, {
                        observer: {
                            init: z.init.bind(this),
                            attach: z.attach.bind(this),
                            destroy: z.destroy.bind(this),
                            observers: []
                        }
                    })
                },
                on: {
                    init: function() {
                        this.observer.init()
                    },
                    destroy: function() {
                        this.observer.destroy()
                    }
                }
            },
            j = {
                update: function(e) {
                    var t = this,
                        i = t.params,
                        n = i.slidesPerView,
                        r = i.slidesPerGroup,
                        a = i.centeredSlides,
                        s = t.params.virtual,
                        o = s.addSlidesBefore,
                        u = s.addSlidesAfter,
                        c = t.virtual,
                        d = c.from,
                        p = c.to,
                        h = c.slides,
                        f = c.slidesGrid,
                        v = c.renderSlide,
                        m = c.offset;
                    t.updateActiveIndex();
                    var g, y, b, w = t.activeIndex || 0;
                    g = t.rtlTranslate ? "right" : t.isHorizontal() ? "left" : "top", a ? (y = Math.floor(n / 2) + r + o, b = Math.floor(n / 2) + r + u) : (y = n + (r - 1) + o, b = r + u);
                    var x = Math.max((w || 0) - b, 0),
                        T = Math.min((w || 0) + y, h.length - 1),
                        S = (t.slidesGrid[x] || 0) - (t.slidesGrid[0] || 0);

                    function C() {
                        t.updateSlides(), t.updateProgress(), t.updateSlidesClasses(), t.lazy && t.params.lazy.enabled && t.lazy.load()
                    }
                    if (l.extend(t.virtual, {
                            from: x,
                            to: T,
                            offset: S,
                            slidesGrid: t.slidesGrid
                        }), d === x && p === T && !e) return t.slidesGrid !== f && S !== m && t.slides.css(g, S + "px"), void t.updateProgress();
                    if (t.params.virtual.renderExternal) return t.params.virtual.renderExternal.call(t, {
                        offset: S,
                        from: x,
                        to: T,
                        slides: function() {
                            for (var e = [], t = x; t <= T; t += 1) e.push(h[t]);
                            return e
                        }()
                    }), void C();
                    var E = [],
                        k = [];
                    if (e) t.$wrapperEl.find("." + t.params.slideClass).remove();
                    else
                        for (var P = d; P <= p; P += 1)(P < x || P > T) && t.$wrapperEl.find("." + t.params.slideClass + '[data-swiper-slide-index="' + P + '"]').remove();
                    for (var M = 0; M < h.length; M += 1) M >= x && M <= T && (void 0 === p || e ? k.push(M) : (M > p && k.push(M), M < d && E.push(M)));
                    k.forEach(function(e) {
                        t.$wrapperEl.append(v(h[e], e))
                    }), E.sort(function(e, t) {
                        return t - e
                    }).forEach(function(e) {
                        t.$wrapperEl.prepend(v(h[e], e))
                    }), t.$wrapperEl.children(".swiper-slide").css(g, S + "px"), C()
                },
                renderSlide: function(e, t) {
                    var i = this.params.virtual;
                    if (i.cache && this.virtual.cache[t]) return this.virtual.cache[t];
                    var r = i.renderSlide ? n(i.renderSlide.call(this, e, t)) : n('<div class="' + this.params.slideClass + '" data-swiper-slide-index="' + t + '">' + e + "</div>");
                    return r.attr("data-swiper-slide-index") || r.attr("data-swiper-slide-index", t), i.cache && (this.virtual.cache[t] = r), r
                },
                appendSlide: function(e) {
                    this.virtual.slides.push(e), this.virtual.update(!0)
                },
                prependSlide: function(e) {
                    if (this.virtual.slides.unshift(e), this.params.virtual.cache) {
                        var t = this.virtual.cache,
                            i = {};
                        Object.keys(t).forEach(function(e) {
                            i[e + 1] = t[e]
                        }), this.virtual.cache = i
                    }
                    this.virtual.update(!0), this.slideNext(0)
                }
            },
            I = {
                name: "virtual",
                params: {
                    virtual: {
                        enabled: !1,
                        slides: [],
                        cache: !0,
                        renderSlide: null,
                        renderExternal: null,
                        addSlidesBefore: 0,
                        addSlidesAfter: 0
                    }
                },
                create: function() {
                    l.extend(this, {
                        virtual: {
                            update: j.update.bind(this),
                            appendSlide: j.appendSlide.bind(this),
                            prependSlide: j.prependSlide.bind(this),
                            renderSlide: j.renderSlide.bind(this),
                            slides: this.params.virtual.slides,
                            cache: {}
                        }
                    })
                },
                on: {
                    beforeInit: function() {
                        if (this.params.virtual.enabled) {
                            this.classNames.push(this.params.containerModifierClass + "virtual");
                            var e = {
                                watchSlidesProgress: !0
                            };
                            l.extend(this.params, e), l.extend(this.originalParams, e), this.params.initialSlide || this.virtual.update()
                        }
                    },
                    setTranslate: function() {
                        this.params.virtual.enabled && this.virtual.update()
                    }
                }
            },
            $ = {
                handle: function(i) {
                    var n = this.rtlTranslate,
                        r = i;
                    r.originalEvent && (r = r.originalEvent);
                    var a = r.keyCode || r.charCode;
                    if (!this.allowSlideNext && (this.isHorizontal() && 39 === a || this.isVertical() && 40 === a)) return !1;
                    if (!this.allowSlidePrev && (this.isHorizontal() && 37 === a || this.isVertical() && 38 === a)) return !1;
                    if (!(r.shiftKey || r.altKey || r.ctrlKey || r.metaKey || e.activeElement && e.activeElement.nodeName && ("input" === e.activeElement.nodeName.toLowerCase() || "textarea" === e.activeElement.nodeName.toLowerCase()))) {
                        if (this.params.keyboard.onlyInViewport && (37 === a || 39 === a || 38 === a || 40 === a)) {
                            var s = !1;
                            if (this.$el.parents("." + this.params.slideClass).length > 0 && 0 === this.$el.parents("." + this.params.slideActiveClass).length) return;
                            var o = t.innerWidth,
                                l = t.innerHeight,
                                u = this.$el.offset();
                            n && (u.left -= this.$el[0].scrollLeft);
                            for (var c = [
                                    [u.left, u.top],
                                    [u.left + this.width, u.top],
                                    [u.left, u.top + this.height],
                                    [u.left + this.width, u.top + this.height]
                                ], d = 0; d < c.length; d += 1) {
                                var p = c[d];
                                p[0] >= 0 && p[0] <= o && p[1] >= 0 && p[1] <= l && (s = !0)
                            }
                            if (!s) return
                        }
                        this.isHorizontal() ? (37 !== a && 39 !== a || (r.preventDefault ? r.preventDefault() : r.returnValue = !1), (39 === a && !n || 37 === a && n) && this.slideNext(), (37 === a && !n || 39 === a && n) && this.slidePrev()) : (38 !== a && 40 !== a || (r.preventDefault ? r.preventDefault() : r.returnValue = !1), 40 === a && this.slideNext(), 38 === a && this.slidePrev()), this.emit("keyPress", a)
                    }
                },
                enable: function() {
                    this.keyboard.enabled || (n(e).on("keydown", this.keyboard.handle), this.keyboard.enabled = !0)
                },
                disable: function() {
                    this.keyboard.enabled && (n(e).off("keydown", this.keyboard.handle), this.keyboard.enabled = !1)
                }
            },
            H = {
                name: "keyboard",
                params: {
                    keyboard: {
                        enabled: !1,
                        onlyInViewport: !0
                    }
                },
                create: function() {
                    l.extend(this, {
                        keyboard: {
                            enabled: !1,
                            enable: $.enable.bind(this),
                            disable: $.disable.bind(this),
                            handle: $.handle.bind(this)
                        }
                    })
                },
                on: {
                    init: function() {
                        this.params.keyboard.enabled && this.keyboard.enable()
                    },
                    destroy: function() {
                        this.keyboard.enabled && this.keyboard.disable()
                    }
                }
            },
            _ = {
                lastScrollTime: l.now(),
                event: t.navigator.userAgent.indexOf("firefox") > -1 ? "DOMMouseScroll" : function() {
                    var t = "onwheel" in e;
                    if (!t) {
                        var i = e.createElement("div");
                        i.setAttribute("onwheel", "return;"), t = "function" == typeof i.onwheel
                    }
                    return !t && e.implementation && e.implementation.hasFeature && !0 !== e.implementation.hasFeature("", "") && (t = e.implementation.hasFeature("Events.wheel", "3.0")), t
                }() ? "wheel" : "mousewheel",
                normalize: function(e) {
                    var t = 0,
                        i = 0,
                        n = 0,
                        r = 0;
                    return "detail" in e && (i = e.detail), "wheelDelta" in e && (i = -e.wheelDelta / 120), "wheelDeltaY" in e && (i = -e.wheelDeltaY / 120), "wheelDeltaX" in e && (t = -e.wheelDeltaX / 120), "axis" in e && e.axis === e.HORIZONTAL_AXIS && (t = i, i = 0), n = 10 * t, r = 10 * i, "deltaY" in e && (r = e.deltaY), "deltaX" in e && (n = e.deltaX), (n || r) && e.deltaMode && (1 === e.deltaMode ? (n *= 40, r *= 40) : (n *= 800, r *= 800)), n && !t && (t = n < 1 ? -1 : 1), r && !i && (i = r < 1 ? -1 : 1), {
                        spinX: t,
                        spinY: i,
                        pixelX: n,
                        pixelY: r
                    }
                },
                handleMouseEnter: function() {
                    this.mouseEntered = !0
                },
                handleMouseLeave: function() {
                    this.mouseEntered = !1
                },
                handle: function(e) {
                    var i = e,
                        n = this,
                        r = n.params.mousewheel;
                    if (!n.mouseEntered && !r.releaseOnEdges) return !0;
                    i.originalEvent && (i = i.originalEvent);
                    var a = 0,
                        s = n.rtlTranslate ? -1 : 1,
                        o = _.normalize(i);
                    if (r.forceToAxis)
                        if (n.isHorizontal()) {
                            if (!(Math.abs(o.pixelX) > Math.abs(o.pixelY))) return !0;
                            a = o.pixelX * s
                        } else {
                            if (!(Math.abs(o.pixelY) > Math.abs(o.pixelX))) return !0;
                            a = o.pixelY
                        }
                    else a = Math.abs(o.pixelX) > Math.abs(o.pixelY) ? -o.pixelX * s : -o.pixelY;
                    if (0 === a) return !0;
                    if (r.invert && (a = -a), n.params.freeMode) {
                        n.params.loop && n.loopFix();
                        var u = n.getTranslate() + a * r.sensitivity,
                            c = n.isBeginning,
                            d = n.isEnd;
                        if (u >= n.minTranslate() && (u = n.minTranslate()), u <= n.maxTranslate() && (u = n.maxTranslate()), n.setTransition(0), n.setTranslate(u), n.updateProgress(), n.updateActiveIndex(), n.updateSlidesClasses(), (!c && n.isBeginning || !d && n.isEnd) && n.updateSlidesClasses(), n.params.freeModeSticky && (clearTimeout(n.mousewheel.timeout), n.mousewheel.timeout = l.nextTick(function() {
                                n.slideToClosest()
                            }, 300)), n.emit("scroll", i), n.params.autoplay && n.params.autoplayDisableOnInteraction && n.autoplay.stop(), u === n.minTranslate() || u === n.maxTranslate()) return !0
                    } else {
                        if (l.now() - n.mousewheel.lastScrollTime > 60)
                            if (a < 0)
                                if (n.isEnd && !n.params.loop || n.animating) {
                                    if (r.releaseOnEdges) return !0
                                } else n.slideNext(), n.emit("scroll", i);
                        else if (n.isBeginning && !n.params.loop || n.animating) {
                            if (r.releaseOnEdges) return !0
                        } else n.slidePrev(), n.emit("scroll", i);
                        n.mousewheel.lastScrollTime = (new t.Date).getTime()
                    }
                    return i.preventDefault ? i.preventDefault() : i.returnValue = !1, !1
                },
                enable: function() {
                    if (!_.event) return !1;
                    if (this.mousewheel.enabled) return !1;
                    var e = this.$el;
                    return "container" !== this.params.mousewheel.eventsTarged && (e = n(this.params.mousewheel.eventsTarged)), e.on("mouseenter", this.mousewheel.handleMouseEnter), e.on("mouseleave", this.mousewheel.handleMouseLeave), e.on(_.event, this.mousewheel.handle), this.mousewheel.enabled = !0, !0
                },
                disable: function() {
                    if (!_.event) return !1;
                    if (!this.mousewheel.enabled) return !1;
                    var e = this.$el;
                    return "container" !== this.params.mousewheel.eventsTarged && (e = n(this.params.mousewheel.eventsTarged)), e.off(_.event, this.mousewheel.handle), this.mousewheel.enabled = !1, !0
                }
            },
            q = {
                update: function() {
                    var e = this.params.navigation;
                    if (!this.params.loop) {
                        var t = this.navigation,
                            i = t.$nextEl,
                            n = t.$prevEl;
                        n && n.length > 0 && (this.isBeginning ? n.addClass(e.disabledClass) : n.removeClass(e.disabledClass), n[this.params.watchOverflow && this.isLocked ? "addClass" : "removeClass"](e.lockClass)), i && i.length > 0 && (this.isEnd ? i.addClass(e.disabledClass) : i.removeClass(e.disabledClass), i[this.params.watchOverflow && this.isLocked ? "addClass" : "removeClass"](e.lockClass))
                    }
                },
                onPrevClick: function(e) {
                    e.preventDefault(), this.isBeginning && !this.params.loop || this.slidePrev()
                },
                onNextClick: function(e) {
                    e.preventDefault(), this.isEnd && !this.params.loop || this.slideNext()
                },
                init: function() {
                    var e, t, i = this.params.navigation;
                    (i.nextEl || i.prevEl) && (i.nextEl && (e = n(i.nextEl), this.params.uniqueNavElements && "string" == typeof i.nextEl && e.length > 1 && 1 === this.$el.find(i.nextEl).length && (e = this.$el.find(i.nextEl))), i.prevEl && (t = n(i.prevEl), this.params.uniqueNavElements && "string" == typeof i.prevEl && t.length > 1 && 1 === this.$el.find(i.prevEl).length && (t = this.$el.find(i.prevEl))), e && e.length > 0 && e.on("click", this.navigation.onNextClick), t && t.length > 0 && t.on("click", this.navigation.onPrevClick), l.extend(this.navigation, {
                        $nextEl: e,
                        nextEl: e && e[0],
                        $prevEl: t,
                        prevEl: t && t[0]
                    }))
                },
                destroy: function() {
                    var e = this.navigation,
                        t = e.$nextEl,
                        i = e.$prevEl;
                    t && t.length && (t.off("click", this.navigation.onNextClick), t.removeClass(this.params.navigation.disabledClass)), i && i.length && (i.off("click", this.navigation.onPrevClick), i.removeClass(this.params.navigation.disabledClass))
                }
            },
            V = {
                update: function() {
                    var e = this.rtl,
                        t = this.params.pagination;
                    if (t.el && this.pagination.el && this.pagination.$el && 0 !== this.pagination.$el.length) {
                        var i, r = this.virtual && this.params.virtual.enabled ? this.virtual.slides.length : this.slides.length,
                            a = this.pagination.$el,
                            s = this.params.loop ? Math.ceil((r - 2 * this.loopedSlides) / this.params.slidesPerGroup) : this.snapGrid.length;
                        if (this.params.loop ? ((i = Math.ceil((this.activeIndex - this.loopedSlides) / this.params.slidesPerGroup)) > r - 1 - 2 * this.loopedSlides && (i -= r - 2 * this.loopedSlides), i > s - 1 && (i -= s), i < 0 && "bullets" !== this.params.paginationType && (i = s + i)) : i = void 0 !== this.snapIndex ? this.snapIndex : this.activeIndex || 0, "bullets" === t.type && this.pagination.bullets && this.pagination.bullets.length > 0) {
                            var o, l, u, c = this.pagination.bullets;
                            if (t.dynamicBullets && (this.pagination.bulletSize = c.eq(0)[this.isHorizontal() ? "outerWidth" : "outerHeight"](!0), a.css(this.isHorizontal() ? "width" : "height", this.pagination.bulletSize * (t.dynamicMainBullets + 4) + "px"), t.dynamicMainBullets > 1 && void 0 !== this.previousIndex && (this.pagination.dynamicBulletIndex += i - this.previousIndex, this.pagination.dynamicBulletIndex > t.dynamicMainBullets - 1 ? this.pagination.dynamicBulletIndex = t.dynamicMainBullets - 1 : this.pagination.dynamicBulletIndex < 0 && (this.pagination.dynamicBulletIndex = 0)), o = i - this.pagination.dynamicBulletIndex, l = o + (Math.min(c.length, t.dynamicMainBullets) - 1), u = (l + o) / 2), c.removeClass(t.bulletActiveClass + " " + t.bulletActiveClass + "-next " + t.bulletActiveClass + "-next-next " + t.bulletActiveClass + "-prev " + t.bulletActiveClass + "-prev-prev " + t.bulletActiveClass + "-main"), a.length > 1) c.each(function(e, r) {
                                var a = n(r),
                                    s = a.index();
                                s === i && a.addClass(t.bulletActiveClass), t.dynamicBullets && (s >= o && s <= l && a.addClass(t.bulletActiveClass + "-main"), s === o && a.prev().addClass(t.bulletActiveClass + "-prev").prev().addClass(t.bulletActiveClass + "-prev-prev"), s === l && a.next().addClass(t.bulletActiveClass + "-next").next().addClass(t.bulletActiveClass + "-next-next"))
                            });
                            else {
                                var d = c.eq(i);
                                if (d.addClass(t.bulletActiveClass), t.dynamicBullets) {
                                    for (var p = c.eq(o), h = c.eq(l), f = o; f <= l; f += 1) c.eq(f).addClass(t.bulletActiveClass + "-main");
                                    p.prev().addClass(t.bulletActiveClass + "-prev").prev().addClass(t.bulletActiveClass + "-prev-prev"), h.next().addClass(t.bulletActiveClass + "-next").next().addClass(t.bulletActiveClass + "-next-next")
                                }
                            }
                            if (t.dynamicBullets) {
                                var v = Math.min(c.length, t.dynamicMainBullets + 4),
                                    m = (this.pagination.bulletSize * v - this.pagination.bulletSize) / 2 - u * this.pagination.bulletSize,
                                    g = e ? "right" : "left";
                                c.css(this.isHorizontal() ? g : "top", m + "px")
                            }
                        }
                        if ("fraction" === t.type && (a.find("." + t.currentClass).text(t.formatFractionCurrent(i + 1)), a.find("." + t.totalClass).text(t.formatFractionTotal(s))), "progressbar" === t.type) {
                            var y;
                            y = t.progressbarOpposite ? this.isHorizontal() ? "vertical" : "horizontal" : this.isHorizontal() ? "horizontal" : "vertical";
                            var b = (i + 1) / s,
                                w = 1,
                                x = 1;
                            "horizontal" === y ? w = b : x = b, a.find("." + t.progressbarFillClass).transform("translate3d(0,0,0) scaleX(" + w + ") scaleY(" + x + ")").transition(this.params.speed)
                        }
                        "custom" === t.type && t.renderCustom ? (a.html(t.renderCustom(this, i + 1, s)), this.emit("paginationRender", this, a[0])) : this.emit("paginationUpdate", this, a[0]), a[this.params.watchOverflow && this.isLocked ? "addClass" : "removeClass"](t.lockClass)
                    }
                },
                render: function() {
                    var e = this.params.pagination;
                    if (e.el && this.pagination.el && this.pagination.$el && 0 !== this.pagination.$el.length) {
                        var t = this.virtual && this.params.virtual.enabled ? this.virtual.slides.length : this.slides.length,
                            i = this.pagination.$el,
                            n = "";
                        if ("bullets" === e.type) {
                            for (var r = this.params.loop ? Math.ceil((t - 2 * this.loopedSlides) / this.params.slidesPerGroup) : this.snapGrid.length, a = 0; a < r; a += 1) e.renderBullet ? n += e.renderBullet.call(this, a, e.bulletClass) : n += "<" + e.bulletElement + ' class="' + e.bulletClass + '"></' + e.bulletElement + ">";
                            i.html(n), this.pagination.bullets = i.find("." + e.bulletClass)
                        }
                        "fraction" === e.type && (n = e.renderFraction ? e.renderFraction.call(this, e.currentClass, e.totalClass) : '<span class="' + e.currentClass + '"></span> / <span class="' + e.totalClass + '"></span>', i.html(n)), "progressbar" === e.type && (n = e.renderProgressbar ? e.renderProgressbar.call(this, e.progressbarFillClass) : '<span class="' + e.progressbarFillClass + '"></span>', i.html(n)), "custom" !== e.type && this.emit("paginationRender", this.pagination.$el[0])
                    }
                },
                init: function() {
                    var e = this,
                        t = e.params.pagination;
                    if (t.el) {
                        var i = n(t.el);
                        0 !== i.length && (e.params.uniqueNavElements && "string" == typeof t.el && i.length > 1 && 1 === e.$el.find(t.el).length && (i = e.$el.find(t.el)), "bullets" === t.type && t.clickable && i.addClass(t.clickableClass), i.addClass(t.modifierClass + t.type), "bullets" === t.type && t.dynamicBullets && (i.addClass("" + t.modifierClass + t.type + "-dynamic"), e.pagination.dynamicBulletIndex = 0, t.dynamicMainBullets < 1 && (t.dynamicMainBullets = 1)), "progressbar" === t.type && t.progressbarOpposite && i.addClass(t.progressbarOppositeClass), t.clickable && i.on("click", "." + t.bulletClass, function(t) {
                            t.preventDefault();
                            var i = n(this).index() * e.params.slidesPerGroup;
                            e.params.loop && (i += e.loopedSlides), e.slideTo(i)
                        }), l.extend(e.pagination, {
                            $el: i,
                            el: i[0]
                        }))
                    }
                },
                destroy: function() {
                    var e = this.params.pagination;
                    if (e.el && this.pagination.el && this.pagination.$el && 0 !== this.pagination.$el.length) {
                        var t = this.pagination.$el;
                        t.removeClass(e.hiddenClass), t.removeClass(e.modifierClass + e.type), this.pagination.bullets && this.pagination.bullets.removeClass(e.bulletActiveClass), e.clickable && t.off("click", "." + e.bulletClass)
                    }
                }
            },
            F = {
                setTranslate: function() {
                    if (this.params.scrollbar.el && this.scrollbar.el) {
                        var e = this.scrollbar,
                            t = this.rtlTranslate,
                            i = this.progress,
                            n = e.dragSize,
                            r = e.trackSize,
                            a = e.$dragEl,
                            s = e.$el,
                            o = this.params.scrollbar,
                            l = n,
                            c = (r - n) * i;
                        t ? (c = -c) > 0 ? (l = n - c, c = 0) : -c + n > r && (l = r + c) : c < 0 ? (l = n + c, c = 0) : c + n > r && (l = r - c), this.isHorizontal() ? (u.transforms3d ? a.transform("translate3d(" + c + "px, 0, 0)") : a.transform("translateX(" + c + "px)"), a[0].style.width = l + "px") : (u.transforms3d ? a.transform("translate3d(0px, " + c + "px, 0)") : a.transform("translateY(" + c + "px)"), a[0].style.height = l + "px"), o.hide && (clearTimeout(this.scrollbar.timeout), s[0].style.opacity = 1, this.scrollbar.timeout = setTimeout(function() {
                            s[0].style.opacity = 0, s.transition(400)
                        }, 1e3))
                    }
                },
                setTransition: function(e) {
                    this.params.scrollbar.el && this.scrollbar.el && this.scrollbar.$dragEl.transition(e)
                },
                updateSize: function() {
                    if (this.params.scrollbar.el && this.scrollbar.el) {
                        var e = this.scrollbar,
                            t = e.$dragEl,
                            i = e.$el;
                        t[0].style.width = "", t[0].style.height = "";
                        var n, r = this.isHorizontal() ? i[0].offsetWidth : i[0].offsetHeight,
                            a = this.size / this.virtualSize,
                            s = a * (r / this.size);
                        n = "auto" === this.params.scrollbar.dragSize ? r * a : parseInt(this.params.scrollbar.dragSize, 10), this.isHorizontal() ? t[0].style.width = n + "px" : t[0].style.height = n + "px", i[0].style.display = a >= 1 ? "none" : "", this.params.scrollbarHide && (i[0].style.opacity = 0), l.extend(e, {
                            trackSize: r,
                            divider: a,
                            moveDivider: s,
                            dragSize: n
                        }), e.$el[this.params.watchOverflow && this.isLocked ? "addClass" : "removeClass"](this.params.scrollbar.lockClass)
                    }
                },
                setDragPosition: function(e) {
                    var t, i, n = this.scrollbar,
                        r = this.rtlTranslate,
                        a = n.$el,
                        s = n.dragSize,
                        o = n.trackSize;
                    t = this.isHorizontal() ? "touchstart" === e.type || "touchmove" === e.type ? e.targetTouches[0].pageX : e.pageX || e.clientX : "touchstart" === e.type || "touchmove" === e.type ? e.targetTouches[0].pageY : e.pageY || e.clientY, i = (t - a.offset()[this.isHorizontal() ? "left" : "top"] - s / 2) / (o - s), i = Math.max(Math.min(i, 1), 0), r && (i = 1 - i);
                    var l = this.minTranslate() + (this.maxTranslate() - this.minTranslate()) * i;
                    this.updateProgress(l), this.setTranslate(l), this.updateActiveIndex(), this.updateSlidesClasses()
                },
                onDragStart: function(e) {
                    var t = this.params.scrollbar,
                        i = this.scrollbar,
                        n = this.$wrapperEl,
                        r = i.$el,
                        a = i.$dragEl;
                    this.scrollbar.isTouched = !0, e.preventDefault(), e.stopPropagation(), n.transition(100), a.transition(100), i.setDragPosition(e), clearTimeout(this.scrollbar.dragTimeout), r.transition(0), t.hide && r.css("opacity", 1), this.emit("scrollbarDragStart", e)
                },
                onDragMove: function(e) {
                    var t = this.scrollbar,
                        i = this.$wrapperEl,
                        n = t.$el,
                        r = t.$dragEl;
                    this.scrollbar.isTouched && (e.preventDefault ? e.preventDefault() : e.returnValue = !1, t.setDragPosition(e), i.transition(0), n.transition(0), r.transition(0), this.emit("scrollbarDragMove", e))
                },
                onDragEnd: function(e) {
                    var t = this.params.scrollbar,
                        i = this.scrollbar,
                        n = i.$el;
                    this.scrollbar.isTouched && (this.scrollbar.isTouched = !1, t.hide && (clearTimeout(this.scrollbar.dragTimeout), this.scrollbar.dragTimeout = l.nextTick(function() {
                        n.css("opacity", 0), n.transition(400)
                    }, 1e3)), this.emit("scrollbarDragEnd", e), t.snapOnRelease && this.slideToClosest())
                },
                enableDraggable: function() {
                    if (this.params.scrollbar.el) {
                        var t = this.scrollbar,
                            i = this.touchEventsTouch,
                            n = this.touchEventsDesktop,
                            r = this.params,
                            a = t.$el,
                            s = a[0],
                            o = !(!u.passiveListener || !r.passiveListeners) && {
                                passive: !1,
                                capture: !1
                            },
                            l = !(!u.passiveListener || !r.passiveListeners) && {
                                passive: !0,
                                capture: !1
                            };
                        u.touch ? (s.addEventListener(i.start, this.scrollbar.onDragStart, o), s.addEventListener(i.move, this.scrollbar.onDragMove, o), s.addEventListener(i.end, this.scrollbar.onDragEnd, l)) : (s.addEventListener(n.start, this.scrollbar.onDragStart, o), e.addEventListener(n.move, this.scrollbar.onDragMove, o), e.addEventListener(n.end, this.scrollbar.onDragEnd, l))
                    }
                },
                disableDraggable: function() {
                    if (this.params.scrollbar.el) {
                        var t = this.scrollbar,
                            i = this.touchEventsTouch,
                            n = this.touchEventsDesktop,
                            r = this.params,
                            a = t.$el,
                            s = a[0],
                            o = !(!u.passiveListener || !r.passiveListeners) && {
                                passive: !1,
                                capture: !1
                            },
                            l = !(!u.passiveListener || !r.passiveListeners) && {
                                passive: !0,
                                capture: !1
                            };
                        u.touch ? (s.removeEventListener(i.start, this.scrollbar.onDragStart, o), s.removeEventListener(i.move, this.scrollbar.onDragMove, o), s.removeEventListener(i.end, this.scrollbar.onDragEnd, l)) : (s.removeEventListener(n.start, this.scrollbar.onDragStart, o), e.removeEventListener(n.move, this.scrollbar.onDragMove, o), e.removeEventListener(n.end, this.scrollbar.onDragEnd, l))
                    }
                },
                init: function() {
                    if (this.params.scrollbar.el) {
                        var e = this.scrollbar,
                            t = this.$el,
                            i = this.params.scrollbar,
                            r = n(i.el);
                        this.params.uniqueNavElements && "string" == typeof i.el && r.length > 1 && 1 === t.find(i.el).length && (r = t.find(i.el));
                        var a = r.find("." + this.params.scrollbar.dragClass);
                        0 === a.length && (a = n('<div class="' + this.params.scrollbar.dragClass + '"></div>'), r.append(a)), l.extend(e, {
                            $el: r,
                            el: r[0],
                            $dragEl: a,
                            dragEl: a[0]
                        }), i.draggable && e.enableDraggable()
                    }
                },
                destroy: function() {
                    this.scrollbar.disableDraggable()
                }
            },
            R = {
                setTransform: function(e, t) {
                    var i = this.rtl,
                        r = n(e),
                        a = i ? -1 : 1,
                        s = r.attr("data-swiper-parallax") || "0",
                        o = r.attr("data-swiper-parallax-x"),
                        l = r.attr("data-swiper-parallax-y"),
                        u = r.attr("data-swiper-parallax-scale"),
                        c = r.attr("data-swiper-parallax-opacity");
                    if (o || l ? (o = o || "0", l = l || "0") : this.isHorizontal() ? (o = s, l = "0") : (l = s, o = "0"), o = o.indexOf("%") >= 0 ? parseInt(o, 10) * t * a + "%" : o * t * a + "px", l = l.indexOf("%") >= 0 ? parseInt(l, 10) * t + "%" : l * t + "px", null != c) {
                        var d = c - (c - 1) * (1 - Math.abs(t));
                        r[0].style.opacity = d
                    }
                    if (null == u) r.transform("translate3d(" + o + ", " + l + ", 0px)");
                    else {
                        var p = u - (u - 1) * (1 - Math.abs(t));
                        r.transform("translate3d(" + o + ", " + l + ", 0px) scale(" + p + ")")
                    }
                },
                setTranslate: function() {
                    var e = this,
                        t = e.$el,
                        i = e.slides,
                        r = e.progress,
                        a = e.snapGrid;
                    t.children("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function(t, i) {
                        e.parallax.setTransform(i, r)
                    }), i.each(function(t, i) {
                        var s = i.progress;
                        e.params.slidesPerGroup > 1 && "auto" !== e.params.slidesPerView && (s += Math.ceil(t / 2) - r * (a.length - 1)), s = Math.min(Math.max(s, -1), 1), n(i).find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function(t, i) {
                            e.parallax.setTransform(i, s)
                        })
                    })
                },
                setTransition: function(e) {
                    void 0 === e && (e = this.params.speed);
                    var t = this.$el;
                    t.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function(t, i) {
                        var r = n(i),
                            a = parseInt(r.attr("data-swiper-parallax-duration"), 10) || e;
                        0 === e && (a = 0), r.transition(a)
                    })
                }
            },
            B = {
                getDistanceBetweenTouches: function(e) {
                    if (e.targetTouches.length < 2) return 1;
                    var t = e.targetTouches[0].pageX,
                        i = e.targetTouches[0].pageY,
                        n = e.targetTouches[1].pageX,
                        r = e.targetTouches[1].pageY,
                        a = Math.sqrt(Math.pow(n - t, 2) + Math.pow(r - i, 2));
                    return a
                },
                onGestureStart: function(e) {
                    var t = this.params.zoom,
                        i = this.zoom,
                        r = i.gesture;
                    if (i.fakeGestureTouched = !1, i.fakeGestureMoved = !1, !u.gestures) {
                        if ("touchstart" !== e.type || "touchstart" === e.type && e.targetTouches.length < 2) return;
                        i.fakeGestureTouched = !0, r.scaleStart = B.getDistanceBetweenTouches(e)
                    }
                    r.$slideEl && r.$slideEl.length || (r.$slideEl = n(e.target).closest(".swiper-slide"), 0 === r.$slideEl.length && (r.$slideEl = this.slides.eq(this.activeIndex)), r.$imageEl = r.$slideEl.find("img, svg, canvas"), r.$imageWrapEl = r.$imageEl.parent("." + t.containerClass), r.maxRatio = r.$imageWrapEl.attr("data-swiper-zoom") || t.maxRatio, 0 !== r.$imageWrapEl.length) ? (r.$imageEl.transition(0), this.zoom.isScaling = !0) : r.$imageEl = void 0
                },
                onGestureChange: function(e) {
                    var t = this.params.zoom,
                        i = this.zoom,
                        n = i.gesture;
                    if (!u.gestures) {
                        if ("touchmove" !== e.type || "touchmove" === e.type && e.targetTouches.length < 2) return;
                        i.fakeGestureMoved = !0, n.scaleMove = B.getDistanceBetweenTouches(e)
                    }
                    n.$imageEl && 0 !== n.$imageEl.length && (u.gestures ? i.scale = e.scale * i.currentScale : i.scale = n.scaleMove / n.scaleStart * i.currentScale, i.scale > n.maxRatio && (i.scale = n.maxRatio - 1 + Math.pow(i.scale - n.maxRatio + 1, .5)), i.scale < t.minRatio && (i.scale = t.minRatio + 1 - Math.pow(t.minRatio - i.scale + 1, .5)), n.$imageEl.transform("translate3d(0,0,0) scale(" + i.scale + ")"))
                },
                onGestureEnd: function(e) {
                    var t = this.params.zoom,
                        i = this.zoom,
                        n = i.gesture;
                    if (!u.gestures) {
                        if (!i.fakeGestureTouched || !i.fakeGestureMoved) return;
                        if ("touchend" !== e.type || "touchend" === e.type && e.changedTouches.length < 2 && !b.android) return;
                        i.fakeGestureTouched = !1, i.fakeGestureMoved = !1
                    }
                    n.$imageEl && 0 !== n.$imageEl.length && (i.scale = Math.max(Math.min(i.scale, n.maxRatio), t.minRatio), n.$imageEl.transition(this.params.speed).transform("translate3d(0,0,0) scale(" + i.scale + ")"), i.currentScale = i.scale, i.isScaling = !1, 1 === i.scale && (n.$slideEl = void 0))
                },
                onTouchStart: function(e) {
                    var t = this.zoom,
                        i = t.gesture,
                        n = t.image;
                    i.$imageEl && 0 !== i.$imageEl.length && (n.isTouched || (b.android && e.preventDefault(), n.isTouched = !0, n.touchesStart.x = "touchstart" === e.type ? e.targetTouches[0].pageX : e.pageX, n.touchesStart.y = "touchstart" === e.type ? e.targetTouches[0].pageY : e.pageY))
                },
                onTouchMove: function(e) {
                    var t = this.zoom,
                        i = t.gesture,
                        n = t.image,
                        r = t.velocity;
                    if (i.$imageEl && 0 !== i.$imageEl.length && (this.allowClick = !1, n.isTouched && i.$slideEl)) {
                        n.isMoved || (n.width = i.$imageEl[0].offsetWidth, n.height = i.$imageEl[0].offsetHeight, n.startX = l.getTranslate(i.$imageWrapEl[0], "x") || 0, n.startY = l.getTranslate(i.$imageWrapEl[0], "y") || 0, i.slideWidth = i.$slideEl[0].offsetWidth, i.slideHeight = i.$slideEl[0].offsetHeight, i.$imageWrapEl.transition(0), this.rtl && (n.startX = -n.startX, n.startY = -n.startY));
                        var a = n.width * t.scale,
                            s = n.height * t.scale;
                        if (!(a < i.slideWidth && s < i.slideHeight)) {
                            if (n.minX = Math.min(i.slideWidth / 2 - a / 2, 0), n.maxX = -n.minX, n.minY = Math.min(i.slideHeight / 2 - s / 2, 0), n.maxY = -n.minY, n.touchesCurrent.x = "touchmove" === e.type ? e.targetTouches[0].pageX : e.pageX, n.touchesCurrent.y = "touchmove" === e.type ? e.targetTouches[0].pageY : e.pageY, !n.isMoved && !t.isScaling) {
                                if (this.isHorizontal() && (Math.floor(n.minX) === Math.floor(n.startX) && n.touchesCurrent.x < n.touchesStart.x || Math.floor(n.maxX) === Math.floor(n.startX) && n.touchesCurrent.x > n.touchesStart.x)) return void(n.isTouched = !1);
                                if (!this.isHorizontal() && (Math.floor(n.minY) === Math.floor(n.startY) && n.touchesCurrent.y < n.touchesStart.y || Math.floor(n.maxY) === Math.floor(n.startY) && n.touchesCurrent.y > n.touchesStart.y)) return void(n.isTouched = !1)
                            }
                            e.preventDefault(), e.stopPropagation(), n.isMoved = !0, n.currentX = n.touchesCurrent.x - n.touchesStart.x + n.startX, n.currentY = n.touchesCurrent.y - n.touchesStart.y + n.startY, n.currentX < n.minX && (n.currentX = n.minX + 1 - Math.pow(n.minX - n.currentX + 1, .8)), n.currentX > n.maxX && (n.currentX = n.maxX - 1 + Math.pow(n.currentX - n.maxX + 1, .8)), n.currentY < n.minY && (n.currentY = n.minY + 1 - Math.pow(n.minY - n.currentY + 1, .8)), n.currentY > n.maxY && (n.currentY = n.maxY - 1 + Math.pow(n.currentY - n.maxY + 1, .8)), r.prevPositionX || (r.prevPositionX = n.touchesCurrent.x), r.prevPositionY || (r.prevPositionY = n.touchesCurrent.y), r.prevTime || (r.prevTime = Date.now()), r.x = (n.touchesCurrent.x - r.prevPositionX) / (Date.now() - r.prevTime) / 2, r.y = (n.touchesCurrent.y - r.prevPositionY) / (Date.now() - r.prevTime) / 2, Math.abs(n.touchesCurrent.x - r.prevPositionX) < 2 && (r.x = 0), Math.abs(n.touchesCurrent.y - r.prevPositionY) < 2 && (r.y = 0), r.prevPositionX = n.touchesCurrent.x, r.prevPositionY = n.touchesCurrent.y, r.prevTime = Date.now(), i.$imageWrapEl.transform("translate3d(" + n.currentX + "px, " + n.currentY + "px,0)")
                        }
                    }
                },
                onTouchEnd: function() {
                    var e = this.zoom,
                        t = e.gesture,
                        i = e.image,
                        n = e.velocity;
                    if (t.$imageEl && 0 !== t.$imageEl.length) {
                        if (!i.isTouched || !i.isMoved) return i.isTouched = !1, void(i.isMoved = !1);
                        i.isTouched = !1, i.isMoved = !1;
                        var r = 300,
                            a = 300,
                            s = n.x * r,
                            o = i.currentX + s,
                            l = n.y * a,
                            u = i.currentY + l;
                        0 !== n.x && (r = Math.abs((o - i.currentX) / n.x)), 0 !== n.y && (a = Math.abs((u - i.currentY) / n.y));
                        var c = Math.max(r, a);
                        i.currentX = o, i.currentY = u;
                        var d = i.width * e.scale,
                            p = i.height * e.scale;
                        i.minX = Math.min(t.slideWidth / 2 - d / 2, 0), i.maxX = -i.minX, i.minY = Math.min(t.slideHeight / 2 - p / 2, 0), i.maxY = -i.minY, i.currentX = Math.max(Math.min(i.currentX, i.maxX), i.minX), i.currentY = Math.max(Math.min(i.currentY, i.maxY), i.minY), t.$imageWrapEl.transition(c).transform("translate3d(" + i.currentX + "px, " + i.currentY + "px,0)")
                    }
                },
                onTransitionEnd: function() {
                    var e = this.zoom,
                        t = e.gesture;
                    t.$slideEl && this.previousIndex !== this.activeIndex && (t.$imageEl.transform("translate3d(0,0,0) scale(1)"), t.$imageWrapEl.transform("translate3d(0,0,0)"), e.scale = 1, e.currentScale = 1, t.$slideEl = void 0, t.$imageEl = void 0, t.$imageWrapEl = void 0)
                },
                toggle: function(e) {
                    var t = this.zoom;
                    t.scale && 1 !== t.scale ? t.out() : t.in(e)
                },
                in: function(e) {
                    var t, i, r, a, s, o, l, u, c, d, p, h, f, v, m, g, y, b, w = this.zoom,
                        x = this.params.zoom,
                        T = w.gesture,
                        S = w.image;
                    T.$slideEl || (T.$slideEl = this.clickedSlide ? n(this.clickedSlide) : this.slides.eq(this.activeIndex), T.$imageEl = T.$slideEl.find("img, svg, canvas"), T.$imageWrapEl = T.$imageEl.parent("." + x.containerClass)), T.$imageEl && 0 !== T.$imageEl.length && (T.$slideEl.addClass("" + x.zoomedSlideClass), void 0 === S.touchesStart.x && e ? (t = "touchend" === e.type ? e.changedTouches[0].pageX : e.pageX, i = "touchend" === e.type ? e.changedTouches[0].pageY : e.pageY) : (t = S.touchesStart.x, i = S.touchesStart.y), w.scale = T.$imageWrapEl.attr("data-swiper-zoom") || x.maxRatio, w.currentScale = T.$imageWrapEl.attr("data-swiper-zoom") || x.maxRatio, e ? (y = T.$slideEl[0].offsetWidth, b = T.$slideEl[0].offsetHeight, r = T.$slideEl.offset().left, a = T.$slideEl.offset().top, s = r + y / 2 - t, o = a + b / 2 - i, c = T.$imageEl[0].offsetWidth, d = T.$imageEl[0].offsetHeight, p = c * w.scale, h = d * w.scale, f = Math.min(y / 2 - p / 2, 0), v = Math.min(b / 2 - h / 2, 0), m = -f, g = -v, l = s * w.scale, u = o * w.scale, l < f && (l = f), l > m && (l = m), u < v && (u = v), u > g && (u = g)) : (l = 0, u = 0), T.$imageWrapEl.transition(300).transform("translate3d(" + l + "px, " + u + "px,0)"), T.$imageEl.transition(300).transform("translate3d(0,0,0) scale(" + w.scale + ")"))
                },
                out: function() {
                    var e = this.zoom,
                        t = this.params.zoom,
                        i = e.gesture;
                    i.$slideEl || (i.$slideEl = this.clickedSlide ? n(this.clickedSlide) : this.slides.eq(this.activeIndex), i.$imageEl = i.$slideEl.find("img, svg, canvas"), i.$imageWrapEl = i.$imageEl.parent("." + t.containerClass)), i.$imageEl && 0 !== i.$imageEl.length && (e.scale = 1, e.currentScale = 1, i.$imageWrapEl.transition(300).transform("translate3d(0,0,0)"), i.$imageEl.transition(300).transform("translate3d(0,0,0) scale(1)"), i.$slideEl.removeClass("" + t.zoomedSlideClass), i.$slideEl = void 0)
                },
                enable: function() {
                    var e = this.zoom;
                    if (!e.enabled) {
                        e.enabled = !0;
                        var t = !("touchstart" !== this.touchEvents.start || !u.passiveListener || !this.params.passiveListeners) && {
                            passive: !0,
                            capture: !1
                        };
                        u.gestures ? (this.$wrapperEl.on("gesturestart", ".swiper-slide", e.onGestureStart, t), this.$wrapperEl.on("gesturechange", ".swiper-slide", e.onGestureChange, t), this.$wrapperEl.on("gestureend", ".swiper-slide", e.onGestureEnd, t)) : "touchstart" === this.touchEvents.start && (this.$wrapperEl.on(this.touchEvents.start, ".swiper-slide", e.onGestureStart, t), this.$wrapperEl.on(this.touchEvents.move, ".swiper-slide", e.onGestureChange, t), this.$wrapperEl.on(this.touchEvents.end, ".swiper-slide", e.onGestureEnd, t)), this.$wrapperEl.on(this.touchEvents.move, "." + this.params.zoom.containerClass, e.onTouchMove)
                    }
                },
                disable: function() {
                    var e = this.zoom;
                    if (e.enabled) {
                        this.zoom.enabled = !1;
                        var t = !("touchstart" !== this.touchEvents.start || !u.passiveListener || !this.params.passiveListeners) && {
                            passive: !0,
                            capture: !1
                        };
                        u.gestures ? (this.$wrapperEl.off("gesturestart", ".swiper-slide", e.onGestureStart, t), this.$wrapperEl.off("gesturechange", ".swiper-slide", e.onGestureChange, t), this.$wrapperEl.off("gestureend", ".swiper-slide", e.onGestureEnd, t)) : "touchstart" === this.touchEvents.start && (this.$wrapperEl.off(this.touchEvents.start, ".swiper-slide", e.onGestureStart, t), this.$wrapperEl.off(this.touchEvents.move, ".swiper-slide", e.onGestureChange, t), this.$wrapperEl.off(this.touchEvents.end, ".swiper-slide", e.onGestureEnd, t)), this.$wrapperEl.off(this.touchEvents.move, "." + this.params.zoom.containerClass, e.onTouchMove)
                    }
                }
            },
            W = {
                loadInSlide: function(e, t) {
                    void 0 === t && (t = !0);
                    var i = this,
                        r = i.params.lazy;
                    if (void 0 !== e && 0 !== i.slides.length) {
                        var a = i.virtual && i.params.virtual.enabled,
                            s = a ? i.$wrapperEl.children("." + i.params.slideClass + '[data-swiper-slide-index="' + e + '"]') : i.slides.eq(e),
                            o = s.find("." + r.elementClass + ":not(." + r.loadedClass + "):not(." + r.loadingClass + ")");
                        !s.hasClass(r.elementClass) || s.hasClass(r.loadedClass) || s.hasClass(r.loadingClass) || (o = o.add(s[0])), 0 !== o.length && o.each(function(e, a) {
                            var o = n(a);
                            o.addClass(r.loadingClass);
                            var l = o.attr("data-background"),
                                u = o.attr("data-src"),
                                c = o.attr("data-srcset"),
                                d = o.attr("data-sizes");
                            i.loadImage(o[0], u || l, c, d, !1, function() {
                                if (null != i && i && (!i || i.params) && !i.destroyed) {
                                    if (l ? (o.css("background-image", 'url("' + l + '")'), o.removeAttr("data-background")) : (c && (o.attr("srcset", c), o.removeAttr("data-srcset")), d && (o.attr("sizes", d), o.removeAttr("data-sizes")), u && (o.attr("src", u), o.removeAttr("data-src"))), o.addClass(r.loadedClass).removeClass(r.loadingClass), s.find("." + r.preloaderClass).remove(), i.params.loop && t) {
                                        var e = s.attr("data-swiper-slide-index");
                                        if (s.hasClass(i.params.slideDuplicateClass)) {
                                            var n = i.$wrapperEl.children('[data-swiper-slide-index="' + e + '"]:not(.' + i.params.slideDuplicateClass + ")");
                                            i.lazy.loadInSlide(n.index(), !1)
                                        } else {
                                            var a = i.$wrapperEl.children("." + i.params.slideDuplicateClass + '[data-swiper-slide-index="' + e + '"]');
                                            i.lazy.loadInSlide(a.index(), !1)
                                        }
                                    }
                                    i.emit("lazyImageReady", s[0], o[0])
                                }
                            }), i.emit("lazyImageLoad", s[0], o[0])
                        })
                    }
                },
                load: function() {
                    var e = this,
                        t = e.$wrapperEl,
                        i = e.params,
                        r = e.slides,
                        a = e.activeIndex,
                        s = e.virtual && i.virtual.enabled,
                        o = i.lazy,
                        l = i.slidesPerView;

                    function u(e) {
                        if (s) {
                            if (t.children("." + i.slideClass + '[data-swiper-slide-index="' + e + '"]').length) return !0
                        } else if (r[e]) return !0;
                        return !1
                    }

                    function c(e) {
                        return s ? n(e).attr("data-swiper-slide-index") : n(e).index()
                    }
                    if ("auto" === l && (l = 0), e.lazy.initialImageLoaded || (e.lazy.initialImageLoaded = !0), e.params.watchSlidesVisibility) t.children("." + i.slideVisibleClass).each(function(t, i) {
                        var r = s ? n(i).attr("data-swiper-slide-index") : n(i).index();
                        e.lazy.loadInSlide(r)
                    });
                    else if (l > 1)
                        for (var d = a; d < a + l; d += 1) u(d) && e.lazy.loadInSlide(d);
                    else e.lazy.loadInSlide(a);
                    if (o.loadPrevNext)
                        if (l > 1 || o.loadPrevNextAmount && o.loadPrevNextAmount > 1) {
                            for (var p = o.loadPrevNextAmount, h = l, f = Math.min(a + h + Math.max(p, h), r.length), v = Math.max(a - Math.max(h, p), 0), m = a + l; m < f; m += 1) u(m) && e.lazy.loadInSlide(m);
                            for (var g = v; g < a; g += 1) u(g) && e.lazy.loadInSlide(g)
                        } else {
                            var y = t.children("." + i.slideNextClass);
                            y.length > 0 && e.lazy.loadInSlide(c(y));
                            var b = t.children("." + i.slidePrevClass);
                            b.length > 0 && e.lazy.loadInSlide(c(b))
                        }
                }
            },
            X = {
                LinearSpline: function(e, t) {
                    var i, n, r, a, s, o = function(e, t) {
                        for (n = -1, i = e.length; i - n > 1;) e[r = i + n >> 1] <= t ? n = r : i = r;
                        return i
                    };
                    return this.x = e, this.y = t, this.lastIndex = e.length - 1, this.interpolate = function(e) {
                        return e ? (s = o(this.x, e), a = s - 1, (e - this.x[a]) * (this.y[s] - this.y[a]) / (this.x[s] - this.x[a]) + this.y[a]) : 0
                    }, this
                },
                getInterpolateFunction: function(e) {
                    this.controller.spline || (this.controller.spline = this.params.loop ? new X.LinearSpline(this.slidesGrid, e.slidesGrid) : new X.LinearSpline(this.snapGrid, e.snapGrid))
                },
                setTranslate: function(e, t) {
                    var i, n, r = this,
                        a = r.controller.control;

                    function s(e) {
                        var t = r.rtlTranslate ? -r.translate : r.translate;
                        "slide" === r.params.controller.by && (r.controller.getInterpolateFunction(e), n = -r.controller.spline.interpolate(-t)), n && "container" !== r.params.controller.by || (i = (e.maxTranslate() - e.minTranslate()) / (r.maxTranslate() - r.minTranslate()), n = (t - r.minTranslate()) * i + e.minTranslate()), r.params.controller.inverse && (n = e.maxTranslate() - n), e.updateProgress(n), e.setTranslate(n, r), e.updateActiveIndex(), e.updateSlidesClasses()
                    }
                    if (Array.isArray(a))
                        for (var o = 0; o < a.length; o += 1) a[o] !== t && a[o] instanceof M && s(a[o]);
                    else a instanceof M && t !== a && s(a)
                },
                setTransition: function(e, t) {
                    var i, n = this,
                        r = n.controller.control;

                    function a(t) {
                        t.setTransition(e, n), 0 !== e && (t.transitionStart(), t.params.autoHeight && l.nextTick(function() {
                            t.updateAutoHeight()
                        }), t.$wrapperEl.transitionEnd(function() {
                            r && (t.params.loop && "slide" === n.params.controller.by && t.loopFix(), t.transitionEnd())
                        }))
                    }
                    if (Array.isArray(r))
                        for (i = 0; i < r.length; i += 1) r[i] !== t && r[i] instanceof M && a(r[i]);
                    else r instanceof M && t !== r && a(r)
                }
            },
            G = {
                name: "controller",
                params: {
                    controller: {
                        control: void 0,
                        inverse: !1,
                        by: "slide"
                    }
                },
                create: function() {
                    l.extend(this, {
                        controller: {
                            control: this.params.controller.control,
                            getInterpolateFunction: X.getInterpolateFunction.bind(this),
                            setTranslate: X.setTranslate.bind(this),
                            setTransition: X.setTransition.bind(this)
                        }
                    })
                },
                on: {
                    update: function() {
                        this.controller.control && this.controller.spline && (this.controller.spline = void 0, delete this.controller.spline)
                    },
                    resize: function() {
                        this.controller.control && this.controller.spline && (this.controller.spline = void 0, delete this.controller.spline)
                    },
                    observerUpdate: function() {
                        this.controller.control && this.controller.spline && (this.controller.spline = void 0, delete this.controller.spline)
                    },
                    setTranslate: function(e, t) {
                        this.controller.control && this.controller.setTranslate(e, t)
                    },
                    setTransition: function(e, t) {
                        this.controller.control && this.controller.setTransition(e, t)
                    }
                }
            },
            Y = {
                makeElFocusable: function(e) {
                    return e.attr("tabIndex", "0"), e
                },
                addElRole: function(e, t) {
                    return e.attr("role", t), e
                },
                addElLabel: function(e, t) {
                    return e.attr("aria-label", t), e
                },
                disableEl: function(e) {
                    return e.attr("aria-disabled", !0), e
                },
                enableEl: function(e) {
                    return e.attr("aria-disabled", !1), e
                },
                onEnterKey: function(e) {
                    var t = this.params.a11y;
                    if (13 === e.keyCode) {
                        var i = n(e.target);
                        this.navigation && this.navigation.$nextEl && i.is(this.navigation.$nextEl) && (this.isEnd && !this.params.loop || this.slideNext(), this.isEnd ? this.a11y.notify(t.lastSlideMessage) : this.a11y.notify(t.nextSlideMessage)), this.navigation && this.navigation.$prevEl && i.is(this.navigation.$prevEl) && (this.isBeginning && !this.params.loop || this.slidePrev(), this.isBeginning ? this.a11y.notify(t.firstSlideMessage) : this.a11y.notify(t.prevSlideMessage)), this.pagination && i.is("." + this.params.pagination.bulletClass) && i[0].click()
                    }
                },
                notify: function(e) {
                    var t = this.a11y.liveRegion;
                    0 !== t.length && (t.html(""), t.html(e))
                },
                updateNavigation: function() {
                    if (!this.params.loop) {
                        var e = this.navigation,
                            t = e.$nextEl,
                            i = e.$prevEl;
                        i && i.length > 0 && (this.isBeginning ? this.a11y.disableEl(i) : this.a11y.enableEl(i)), t && t.length > 0 && (this.isEnd ? this.a11y.disableEl(t) : this.a11y.enableEl(t))
                    }
                },
                updatePagination: function() {
                    var e = this,
                        t = e.params.a11y;
                    e.pagination && e.params.pagination.clickable && e.pagination.bullets && e.pagination.bullets.length && e.pagination.bullets.each(function(i, r) {
                        var a = n(r);
                        e.a11y.makeElFocusable(a), e.a11y.addElRole(a, "button"), e.a11y.addElLabel(a, t.paginationBulletMessage.replace(/{{index}}/, a.index() + 1))
                    })
                },
                init: function() {
                    this.$el.append(this.a11y.liveRegion);
                    var e, t, i = this.params.a11y;
                    this.navigation && this.navigation.$nextEl && (e = this.navigation.$nextEl), this.navigation && this.navigation.$prevEl && (t = this.navigation.$prevEl), e && (this.a11y.makeElFocusable(e), this.a11y.addElRole(e, "button"), this.a11y.addElLabel(e, i.nextSlideMessage), e.on("keydown", this.a11y.onEnterKey)), t && (this.a11y.makeElFocusable(t), this.a11y.addElRole(t, "button"), this.a11y.addElLabel(t, i.prevSlideMessage), t.on("keydown", this.a11y.onEnterKey)), this.pagination && this.params.pagination.clickable && this.pagination.bullets && this.pagination.bullets.length && this.pagination.$el.on("keydown", "." + this.params.pagination.bulletClass, this.a11y.onEnterKey)
                },
                destroy: function() {
                    var e, t;
                    this.a11y.liveRegion && this.a11y.liveRegion.length > 0 && this.a11y.liveRegion.remove(), this.navigation && this.navigation.$nextEl && (e = this.navigation.$nextEl), this.navigation && this.navigation.$prevEl && (t = this.navigation.$prevEl), e && e.off("keydown", this.a11y.onEnterKey), t && t.off("keydown", this.a11y.onEnterKey), this.pagination && this.params.pagination.clickable && this.pagination.bullets && this.pagination.bullets.length && this.pagination.$el.off("keydown", "." + this.params.pagination.bulletClass, this.a11y.onEnterKey)
                }
            },
            U = {
                init: function() {
                    if (this.params.history) {
                        if (!t.history || !t.history.pushState) return this.params.history.enabled = !1, void(this.params.hashNavigation.enabled = !0);
                        var e = this.history;
                        e.initialized = !0, e.paths = U.getPathValues(), (e.paths.key || e.paths.value) && (e.scrollToSlide(0, e.paths.value, this.params.runCallbacksOnInit), this.params.history.replaceState || t.addEventListener("popstate", this.history.setHistoryPopState))
                    }
                },
                destroy: function() {
                    this.params.history.replaceState || t.removeEventListener("popstate", this.history.setHistoryPopState)
                },
                setHistoryPopState: function() {
                    this.history.paths = U.getPathValues(), this.history.scrollToSlide(this.params.speed, this.history.paths.value, !1)
                },
                getPathValues: function() {
                    var e = t.location.pathname.slice(1).split("/").filter(function(e) {
                            return "" !== e
                        }),
                        i = e.length,
                        n = e[i - 2],
                        r = e[i - 1];
                    return {
                        key: n,
                        value: r
                    }
                },
                setHistory: function(e, i) {
                    if (this.history.initialized && this.params.history.enabled) {
                        var n = this.slides.eq(i),
                            r = U.slugify(n.attr("data-history"));
                        t.location.pathname.includes(e) || (r = e + "/" + r);
                        var a = t.history.state;
                        a && a.value === r || (this.params.history.replaceState ? t.history.replaceState({
                            value: r
                        }, null, r) : t.history.pushState({
                            value: r
                        }, null, r))
                    }
                },
                slugify: function(e) {
                    return e.toString().toLowerCase().replace(/\s+/g, "-").replace(/[^\w-]+/g, "").replace(/--+/g, "-").replace(/^-+/, "").replace(/-+$/, "")
                },
                scrollToSlide: function(e, t, i) {
                    if (t)
                        for (var n = 0, r = this.slides.length; n < r; n += 1) {
                            var a = this.slides.eq(n),
                                s = U.slugify(a.attr("data-history"));
                            if (s === t && !a.hasClass(this.params.slideDuplicateClass)) {
                                var o = a.index();
                                this.slideTo(o, e, i)
                            }
                        } else this.slideTo(0, e, i)
                }
            },
            K = {
                onHashCange: function() {
                    var t = e.location.hash.replace("#", ""),
                        i = this.slides.eq(this.activeIndex).attr("data-hash");
                    if (t !== i) {
                        var n = this.$wrapperEl.children("." + this.params.slideClass + '[data-hash="' + t + '"]').index();
                        if (void 0 === n) return;
                        this.slideTo(n)
                    }
                },
                setHash: function() {
                    if (this.hashNavigation.initialized && this.params.hashNavigation.enabled)
                        if (this.params.hashNavigation.replaceState && t.history && t.history.replaceState) t.history.replaceState(null, null, "#" + this.slides.eq(this.activeIndex).attr("data-hash") || !1);
                        else {
                            var i = this.slides.eq(this.activeIndex),
                                n = i.attr("data-hash") || i.attr("data-history");
                            e.location.hash = n || ""
                        }
                },
                init: function() {
                    if (!(!this.params.hashNavigation.enabled || this.params.history && this.params.history.enabled)) {
                        this.hashNavigation.initialized = !0;
                        var i = e.location.hash.replace("#", "");
                        if (i)
                            for (var r = 0, a = this.slides.length; r < a; r += 1) {
                                var s = this.slides.eq(r),
                                    o = s.attr("data-hash") || s.attr("data-history");
                                if (o === i && !s.hasClass(this.params.slideDuplicateClass)) {
                                    var l = s.index();
                                    this.slideTo(l, 0, this.params.runCallbacksOnInit, !0)
                                }
                            }
                        this.params.hashNavigation.watchState && n(t).on("hashchange", this.hashNavigation.onHashCange)
                    }
                },
                destroy: function() {
                    this.params.hashNavigation.watchState && n(t).off("hashchange", this.hashNavigation.onHashCange)
                }
            },
            Q = {
                run: function() {
                    var e = this,
                        t = e.slides.eq(e.activeIndex),
                        i = e.params.autoplay.delay;
                    t.attr("data-swiper-autoplay") && (i = t.attr("data-swiper-autoplay") || e.params.autoplay.delay), e.autoplay.timeout = l.nextTick(function() {
                        e.params.autoplay.reverseDirection ? e.params.loop ? (e.loopFix(), e.slidePrev(e.params.speed, !0, !0), e.emit("autoplay")) : e.isBeginning ? e.params.autoplay.stopOnLastSlide ? e.autoplay.stop() : (e.slideTo(e.slides.length - 1, e.params.speed, !0, !0), e.emit("autoplay")) : (e.slidePrev(e.params.speed, !0, !0), e.emit("autoplay")) : e.params.loop ? (e.loopFix(), e.slideNext(e.params.speed, !0, !0), e.emit("autoplay")) : e.isEnd ? e.params.autoplay.stopOnLastSlide ? e.autoplay.stop() : (e.slideTo(0, e.params.speed, !0, !0), e.emit("autoplay")) : (e.slideNext(e.params.speed, !0, !0), e.emit("autoplay"))
                    }, i)
                },
                start: function() {
                    return void 0 === this.autoplay.timeout && !this.autoplay.running && (this.autoplay.running = !0, this.emit("autoplayStart"), this.autoplay.run(), !0)
                },
                stop: function() {
                    return !!this.autoplay.running && void 0 !== this.autoplay.timeout && (this.autoplay.timeout && (clearTimeout(this.autoplay.timeout), this.autoplay.timeout = void 0), this.autoplay.running = !1, this.emit("autoplayStop"), !0)
                },
                pause: function(e) {
                    this.autoplay.running && (this.autoplay.paused || (this.autoplay.timeout && clearTimeout(this.autoplay.timeout), this.autoplay.paused = !0, 0 !== e && this.params.autoplay.waitForTransition ? (this.$wrapperEl[0].addEventListener("transitionend", this.autoplay.onTransitionEnd), this.$wrapperEl[0].addEventListener("webkitTransitionEnd", this.autoplay.onTransitionEnd)) : (this.autoplay.paused = !1, this.autoplay.run())))
                }
            },
            J = {
                setTranslate: function() {
                    for (var e = this.slides, t = 0; t < e.length; t += 1) {
                        var i = this.slides.eq(t),
                            n = i[0].swiperSlideOffset,
                            r = -n;
                        this.params.virtualTranslate || (r -= this.translate);
                        var a = 0;
                        this.isHorizontal() || (a = r, r = 0);
                        var s = this.params.fadeEffect.crossFade ? Math.max(1 - Math.abs(i[0].progress), 0) : 1 + Math.min(Math.max(i[0].progress, -1), 0);
                        i.css({
                            opacity: s
                        }).transform("translate3d(" + r + "px, " + a + "px, 0px)")
                    }
                },
                setTransition: function(e) {
                    var t = this,
                        i = t.slides,
                        n = t.$wrapperEl;
                    if (i.transition(e), t.params.virtualTranslate && 0 !== e) {
                        var r = !1;
                        i.transitionEnd(function() {
                            if (!r && t && !t.destroyed) {
                                r = !0, t.animating = !1;
                                for (var e = ["webkitTransitionEnd", "transitionend"], i = 0; i < e.length; i += 1) n.trigger(e[i])
                            }
                        })
                    }
                }
            },
            Z = {
                setTranslate: function() {
                    var e, t = this.$el,
                        i = this.$wrapperEl,
                        r = this.slides,
                        a = this.width,
                        s = this.height,
                        o = this.rtlTranslate,
                        l = this.size,
                        u = this.params.cubeEffect,
                        c = this.isHorizontal(),
                        d = this.virtual && this.params.virtual.enabled,
                        p = 0;
                    u.shadow && (c ? (0 === (e = i.find(".swiper-cube-shadow")).length && (e = n('<div class="swiper-cube-shadow"></div>'), i.append(e)), e.css({
                        height: a + "px"
                    })) : 0 === (e = t.find(".swiper-cube-shadow")).length && (e = n('<div class="swiper-cube-shadow"></div>'), t.append(e)));
                    for (var h = 0; h < r.length; h += 1) {
                        var f = r.eq(h),
                            v = h;
                        d && (v = parseInt(f.attr("data-swiper-slide-index"), 10));
                        var m = 90 * v,
                            g = Math.floor(m / 360);
                        o && (m = -m, g = Math.floor(-m / 360));
                        var y = Math.max(Math.min(f[0].progress, 1), -1),
                            b = 0,
                            w = 0,
                            x = 0;
                        v % 4 == 0 ? (b = 4 * -g * l, x = 0) : (v - 1) % 4 == 0 ? (b = 0, x = 4 * -g * l) : (v - 2) % 4 == 0 ? (b = l + 4 * g * l, x = l) : (v - 3) % 4 == 0 && (b = -l, x = 3 * l + 4 * l * g), o && (b = -b), c || (w = b, b = 0);
                        var T = "rotateX(" + (c ? 0 : -m) + "deg) rotateY(" + (c ? m : 0) + "deg) translate3d(" + b + "px, " + w + "px, " + x + "px)";
                        if (y <= 1 && y > -1 && (p = 90 * v + 90 * y, o && (p = 90 * -v - 90 * y)), f.transform(T), u.slideShadows) {
                            var S = c ? f.find(".swiper-slide-shadow-left") : f.find(".swiper-slide-shadow-top"),
                                E = c ? f.find(".swiper-slide-shadow-right") : f.find(".swiper-slide-shadow-bottom");
                            0 === S.length && (S = n('<div class="swiper-slide-shadow-' + (c ? "left" : "top") + '"></div>'), f.append(S)), 0 === E.length && (E = n('<div class="swiper-slide-shadow-' + (c ? "right" : "bottom") + '"></div>'), f.append(E)), S.length && (S[0].style.opacity = Math.max(-y, 0)), E.length && (E[0].style.opacity = Math.max(y, 0))
                        }
                    }
                    if (i.css({
                            "-webkit-transform-origin": "50% 50% -" + l / 2 + "px",
                            "-moz-transform-origin": "50% 50% -" + l / 2 + "px",
                            "-ms-transform-origin": "50% 50% -" + l / 2 + "px",
                            "transform-origin": "50% 50% -" + l / 2 + "px"
                        }), u.shadow)
                        if (c) e.transform("translate3d(0px, " + (a / 2 + u.shadowOffset) + "px, " + -a / 2 + "px) rotateX(90deg) rotateZ(0deg) scale(" + u.shadowScale + ")");
                        else {
                            var k = Math.abs(p) - 90 * Math.floor(Math.abs(p) / 90),
                                P = 1.5 - (Math.sin(2 * k * Math.PI / 360) / 2 + Math.cos(2 * k * Math.PI / 360) / 2),
                                M = u.shadowScale,
                                A = u.shadowScale / P,
                                O = u.shadowOffset;
                            e.transform("scale3d(" + M + ", 1, " + A + ") translate3d(0px, " + (s / 2 + O) + "px, " + -s / 2 / A + "px) rotateX(-90deg)")
                        }
                    var L = C.isSafari || C.isUiWebView ? -l / 2 : 0;
                    i.transform("translate3d(0px,0," + L + "px) rotateX(" + (this.isHorizontal() ? 0 : p) + "deg) rotateY(" + (this.isHorizontal() ? -p : 0) + "deg)")
                },
                setTransition: function(e) {
                    var t = this.$el,
                        i = this.slides;
                    i.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e), this.params.cubeEffect.shadow && !this.isHorizontal() && t.find(".swiper-cube-shadow").transition(e)
                }
            },
            ee = {
                setTranslate: function() {
                    for (var e = this.slides, t = this.rtlTranslate, i = 0; i < e.length; i += 1) {
                        var r = e.eq(i),
                            a = r[0].progress;
                        this.params.flipEffect.limitRotation && (a = Math.max(Math.min(r[0].progress, 1), -1));
                        var s = r[0].swiperSlideOffset,
                            o = -180 * a,
                            l = o,
                            u = 0,
                            c = -s,
                            d = 0;
                        if (this.isHorizontal() ? t && (l = -l) : (d = c, c = 0, u = -l, l = 0), r[0].style.zIndex = -Math.abs(Math.round(a)) + e.length, this.params.flipEffect.slideShadows) {
                            var p = this.isHorizontal() ? r.find(".swiper-slide-shadow-left") : r.find(".swiper-slide-shadow-top"),
                                h = this.isHorizontal() ? r.find(".swiper-slide-shadow-right") : r.find(".swiper-slide-shadow-bottom");
                            0 === p.length && (p = n('<div class="swiper-slide-shadow-' + (this.isHorizontal() ? "left" : "top") + '"></div>'), r.append(p)), 0 === h.length && (h = n('<div class="swiper-slide-shadow-' + (this.isHorizontal() ? "right" : "bottom") + '"></div>'), r.append(h)), p.length && (p[0].style.opacity = Math.max(-a, 0)), h.length && (h[0].style.opacity = Math.max(a, 0))
                        }
                        r.transform("translate3d(" + c + "px, " + d + "px, 0px) rotateX(" + u + "deg) rotateY(" + l + "deg)")
                    }
                },
                setTransition: function(e) {
                    var t = this,
                        i = t.slides,
                        n = t.activeIndex,
                        r = t.$wrapperEl;
                    if (i.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e), t.params.virtualTranslate && 0 !== e) {
                        var a = !1;
                        i.eq(n).transitionEnd(function() {
                            if (!a && t && !t.destroyed) {
                                a = !0, t.animating = !1;
                                for (var e = ["webkitTransitionEnd", "transitionend"], i = 0; i < e.length; i += 1) r.trigger(e[i])
                            }
                        })
                    }
                }
            },
            te = {
                setTranslate: function() {
                    for (var e = this.width, t = this.height, i = this.slides, r = this.$wrapperEl, a = this.slidesSizesGrid, s = this.params.coverflowEffect, o = this.isHorizontal(), l = this.translate, c = o ? e / 2 - l : t / 2 - l, d = o ? s.rotate : -s.rotate, p = s.depth, h = 0, f = i.length; h < f; h += 1) {
                        var v = i.eq(h),
                            m = a[h],
                            g = v[0].swiperSlideOffset,
                            y = (c - g - m / 2) / m * s.modifier,
                            b = o ? d * y : 0,
                            w = o ? 0 : d * y,
                            x = -p * Math.abs(y),
                            T = o ? 0 : s.stretch * y,
                            S = o ? s.stretch * y : 0;
                        Math.abs(S) < .001 && (S = 0), Math.abs(T) < .001 && (T = 0), Math.abs(x) < .001 && (x = 0), Math.abs(b) < .001 && (b = 0), Math.abs(w) < .001 && (w = 0);
                        var C = "translate3d(" + S + "px," + T + "px," + x + "px)  rotateX(" + w + "deg) rotateY(" + b + "deg)";
                        if (v.transform(C), v[0].style.zIndex = 1 - Math.abs(Math.round(y)), s.slideShadows) {
                            var E = o ? v.find(".swiper-slide-shadow-left") : v.find(".swiper-slide-shadow-top"),
                                k = o ? v.find(".swiper-slide-shadow-right") : v.find(".swiper-slide-shadow-bottom");
                            0 === E.length && (E = n('<div class="swiper-slide-shadow-' + (o ? "left" : "top") + '"></div>'), v.append(E)), 0 === k.length && (k = n('<div class="swiper-slide-shadow-' + (o ? "right" : "bottom") + '"></div>'), v.append(k)), E.length && (E[0].style.opacity = y > 0 ? y : 0), k.length && (k[0].style.opacity = -y > 0 ? -y : 0)
                        }
                    }
                    if (u.pointerEvents || u.prefixedPointerEvents) {
                        var P = r[0].style;
                        P.perspectiveOrigin = c + "px 50%"
                    }
                },
                setTransition: function(e) {
                    this.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e)
                }
            },
            ie = {
                init: function() {
                    var e = this.params,
                        t = e.thumbs,
                        i = this.constructor;
                    t.swiper instanceof i ? (this.thumbs.swiper = t.swiper, l.extend(this.thumbs.swiper.originalParams, {
                        watchSlidesProgress: !0,
                        slideToClickedSlide: !1
                    }), l.extend(this.thumbs.swiper.params, {
                        watchSlidesProgress: !0,
                        slideToClickedSlide: !1
                    })) : l.isObject(t.swiper) && (this.thumbs.swiper = new i(l.extend({}, t.swiper, {
                        watchSlidesVisibility: !0,
                        watchSlidesProgress: !0,
                        slideToClickedSlide: !1
                    })), this.thumbs.swiperCreated = !0), this.thumbs.swiper.$el.addClass(this.params.thumbs.thumbsContainerClass), this.thumbs.swiper.on("tap", this.thumbs.onThumbClick)
                },
                onThumbClick: function() {
                    var e = this.thumbs.swiper;
                    if (e) {
                        var t = e.clickedIndex,
                            i = e.clickedSlide;
                        if (!(i && n(i).hasClass(this.params.thumbs.slideThumbActiveClass) || null == t)) {
                            var r;
                            if (r = e.params.loop ? parseInt(n(e.clickedSlide).attr("data-swiper-slide-index"), 10) : t, this.params.loop) {
                                var a = this.activeIndex;
                                this.slides.eq(a).hasClass(this.params.slideDuplicateClass) && (this.loopFix(), this._clientLeft = this.$wrapperEl[0].clientLeft, a = this.activeIndex);
                                var s = this.slides.eq(a).prevAll('[data-swiper-slide-index="' + r + '"]').eq(0).index(),
                                    o = this.slides.eq(a).nextAll('[data-swiper-slide-index="' + r + '"]').eq(0).index();
                                r = void 0 === s ? o : void 0 === o ? s : o - a < a - s ? o : s
                            }
                            this.slideTo(r)
                        }
                    }
                },
                update: function(e) {
                    var t = this.thumbs.swiper;
                    if (t) {
                        var i = "auto" === t.params.slidesPerView ? t.slidesPerViewDynamic() : t.params.slidesPerView;
                        if (this.realIndex !== t.realIndex) {
                            var n, r = t.activeIndex;
                            if (t.params.loop) {
                                t.slides.eq(r).hasClass(t.params.slideDuplicateClass) && (t.loopFix(), t._clientLeft = t.$wrapperEl[0].clientLeft, r = t.activeIndex);
                                var a = t.slides.eq(r).prevAll('[data-swiper-slide-index="' + this.realIndex + '"]').eq(0).index(),
                                    s = t.slides.eq(r).nextAll('[data-swiper-slide-index="' + this.realIndex + '"]').eq(0).index();
                                n = void 0 === a ? s : void 0 === s ? a : s - r == r - a ? r : s - r < r - a ? s : a
                            } else n = this.realIndex;
                            t.visibleSlidesIndexes.indexOf(n) < 0 && (t.params.centeredSlides ? n = n > r ? n - Math.floor(i / 2) + 1 : n + Math.floor(i / 2) - 1 : n > r && (n = n - i + 1), t.slideTo(n, e ? 0 : void 0))
                        }
                        var o = 1,
                            l = this.params.thumbs.slideThumbActiveClass;
                        if (this.params.slidesPerView > 1 && !this.params.centeredSlides && (o = this.params.slidesPerView), t.slides.removeClass(l), t.params.loop)
                            for (var u = 0; u < o; u += 1) t.$wrapperEl.children('[data-swiper-slide-index="' + (this.realIndex + u) + '"]').addClass(l);
                        else
                            for (var c = 0; c < o; c += 1) t.slides.eq(this.realIndex + c).addClass(l)
                    }
                }
            },
            ne = [A, O, L, N, D, I, H, {
                name: "mousewheel",
                params: {
                    mousewheel: {
                        enabled: !1,
                        releaseOnEdges: !1,
                        invert: !1,
                        forceToAxis: !1,
                        sensitivity: 1,
                        eventsTarged: "container"
                    }
                },
                create: function() {
                    l.extend(this, {
                        mousewheel: {
                            enabled: !1,
                            enable: _.enable.bind(this),
                            disable: _.disable.bind(this),
                            handle: _.handle.bind(this),
                            handleMouseEnter: _.handleMouseEnter.bind(this),
                            handleMouseLeave: _.handleMouseLeave.bind(this),
                            lastScrollTime: l.now()
                        }
                    })
                },
                on: {
                    init: function() {
                        this.params.mousewheel.enabled && this.mousewheel.enable()
                    },
                    destroy: function() {
                        this.mousewheel.enabled && this.mousewheel.disable()
                    }
                }
            }, {
                name: "navigation",
                params: {
                    navigation: {
                        nextEl: null,
                        prevEl: null,
                        hideOnClick: !1,
                        disabledClass: "swiper-button-disabled",
                        hiddenClass: "swiper-button-hidden",
                        lockClass: "swiper-button-lock"
                    }
                },
                create: function() {
                    l.extend(this, {
                        navigation: {
                            init: q.init.bind(this),
                            update: q.update.bind(this),
                            destroy: q.destroy.bind(this),
                            onNextClick: q.onNextClick.bind(this),
                            onPrevClick: q.onPrevClick.bind(this)
                        }
                    })
                },
                on: {
                    init: function() {
                        this.navigation.init(), this.navigation.update()
                    },
                    toEdge: function() {
                        this.navigation.update()
                    },
                    fromEdge: function() {
                        this.navigation.update()
                    },
                    destroy: function() {
                        this.navigation.destroy()
                    },
                    click: function(e) {
                        var t = this.navigation,
                            i = t.$nextEl,
                            r = t.$prevEl;
                        !this.params.navigation.hideOnClick || n(e.target).is(r) || n(e.target).is(i) || (i && i.toggleClass(this.params.navigation.hiddenClass), r && r.toggleClass(this.params.navigation.hiddenClass))
                    }
                }
            }, {
                name: "pagination",
                params: {
                    pagination: {
                        el: null,
                        bulletElement: "span",
                        clickable: !1,
                        hideOnClick: !1,
                        renderBullet: null,
                        renderProgressbar: null,
                        renderFraction: null,
                        renderCustom: null,
                        progressbarOpposite: !1,
                        type: "bullets",
                        dynamicBullets: !1,
                        dynamicMainBullets: 1,
                        formatFractionCurrent: function(e) {
                            return e
                        },
                        formatFractionTotal: function(e) {
                            return e
                        },
                        bulletClass: "swiper-pagination-bullet",
                        bulletActiveClass: "swiper-pagination-bullet-active",
                        modifierClass: "swiper-pagination-",
                        currentClass: "swiper-pagination-current",
                        totalClass: "swiper-pagination-total",
                        hiddenClass: "swiper-pagination-hidden",
                        progressbarFillClass: "swiper-pagination-progressbar-fill",
                        progressbarOppositeClass: "swiper-pagination-progressbar-opposite",
                        clickableClass: "swiper-pagination-clickable",
                        lockClass: "swiper-pagination-lock"
                    }
                },
                create: function() {
                    l.extend(this, {
                        pagination: {
                            init: V.init.bind(this),
                            render: V.render.bind(this),
                            update: V.update.bind(this),
                            destroy: V.destroy.bind(this),
                            dynamicBulletIndex: 0
                        }
                    })
                },
                on: {
                    init: function() {
                        this.pagination.init(), this.pagination.render(), this.pagination.update()
                    },
                    activeIndexChange: function() {
                        this.params.loop ? this.pagination.update() : void 0 === this.snapIndex && this.pagination.update()
                    },
                    snapIndexChange: function() {
                        this.params.loop || this.pagination.update()
                    },
                    slidesLengthChange: function() {
                        this.params.loop && (this.pagination.render(), this.pagination.update())
                    },
                    snapGridLengthChange: function() {
                        this.params.loop || (this.pagination.render(), this.pagination.update())
                    },
                    destroy: function() {
                        this.pagination.destroy()
                    },
                    click: function(e) {
                        this.params.pagination.el && this.params.pagination.hideOnClick && this.pagination.$el.length > 0 && !n(e.target).hasClass(this.params.pagination.bulletClass) && this.pagination.$el.toggleClass(this.params.pagination.hiddenClass)
                    }
                }
            }, {
                name: "scrollbar",
                params: {
                    scrollbar: {
                        el: null,
                        dragSize: "auto",
                        hide: !1,
                        draggable: !1,
                        snapOnRelease: !0,
                        lockClass: "swiper-scrollbar-lock",
                        dragClass: "swiper-scrollbar-drag"
                    }
                },
                create: function() {
                    l.extend(this, {
                        scrollbar: {
                            init: F.init.bind(this),
                            destroy: F.destroy.bind(this),
                            updateSize: F.updateSize.bind(this),
                            setTranslate: F.setTranslate.bind(this),
                            setTransition: F.setTransition.bind(this),
                            enableDraggable: F.enableDraggable.bind(this),
                            disableDraggable: F.disableDraggable.bind(this),
                            setDragPosition: F.setDragPosition.bind(this),
                            onDragStart: F.onDragStart.bind(this),
                            onDragMove: F.onDragMove.bind(this),
                            onDragEnd: F.onDragEnd.bind(this),
                            isTouched: !1,
                            timeout: null,
                            dragTimeout: null
                        }
                    })
                },
                on: {
                    init: function() {
                        this.scrollbar.init(), this.scrollbar.updateSize(), this.scrollbar.setTranslate()
                    },
                    update: function() {
                        this.scrollbar.updateSize()
                    },
                    resize: function() {
                        this.scrollbar.updateSize()
                    },
                    observerUpdate: function() {
                        this.scrollbar.updateSize()
                    },
                    setTranslate: function() {
                        this.scrollbar.setTranslate()
                    },
                    setTransition: function(e) {
                        this.scrollbar.setTransition(e)
                    },
                    destroy: function() {
                        this.scrollbar.destroy()
                    }
                }
            }, {
                name: "parallax",
                params: {
                    parallax: {
                        enabled: !1
                    }
                },
                create: function() {
                    l.extend(this, {
                        parallax: {
                            setTransform: R.setTransform.bind(this),
                            setTranslate: R.setTranslate.bind(this),
                            setTransition: R.setTransition.bind(this)
                        }
                    })
                },
                on: {
                    beforeInit: function() {
                        this.params.parallax.enabled && (this.params.watchSlidesProgress = !0, this.originalParams.watchSlidesProgress = !0)
                    },
                    init: function() {
                        this.params.parallax && this.parallax.setTranslate()
                    },
                    setTranslate: function() {
                        this.params.parallax && this.parallax.setTranslate()
                    },
                    setTransition: function(e) {
                        this.params.parallax && this.parallax.setTransition(e)
                    }
                }
            }, {
                name: "zoom",
                params: {
                    zoom: {
                        enabled: !1,
                        maxRatio: 3,
                        minRatio: 1,
                        toggle: !0,
                        containerClass: "swiper-zoom-container",
                        zoomedSlideClass: "swiper-slide-zoomed"
                    }
                },
                create: function() {
                    var e = this,
                        t = {
                            enabled: !1,
                            scale: 1,
                            currentScale: 1,
                            isScaling: !1,
                            gesture: {
                                $slideEl: void 0,
                                slideWidth: void 0,
                                slideHeight: void 0,
                                $imageEl: void 0,
                                $imageWrapEl: void 0,
                                maxRatio: 3
                            },
                            image: {
                                isTouched: void 0,
                                isMoved: void 0,
                                currentX: void 0,
                                currentY: void 0,
                                minX: void 0,
                                minY: void 0,
                                maxX: void 0,
                                maxY: void 0,
                                width: void 0,
                                height: void 0,
                                startX: void 0,
                                startY: void 0,
                                touchesStart: {},
                                touchesCurrent: {}
                            },
                            velocity: {
                                x: void 0,
                                y: void 0,
                                prevPositionX: void 0,
                                prevPositionY: void 0,
                                prevTime: void 0
                            }
                        };
                    "onGestureStart onGestureChange onGestureEnd onTouchStart onTouchMove onTouchEnd onTransitionEnd toggle enable disable in out".split(" ").forEach(function(i) {
                        t[i] = B[i].bind(e)
                    }), l.extend(e, {
                        zoom: t
                    });
                    var i = 1;
                    Object.defineProperty(e.zoom, "scale", {
                        get: function() {
                            return i
                        },
                        set: function(t) {
                            if (i !== t) {
                                var n = e.zoom.gesture.$imageEl ? e.zoom.gesture.$imageEl[0] : void 0,
                                    r = e.zoom.gesture.$slideEl ? e.zoom.gesture.$slideEl[0] : void 0;
                                e.emit("zoomChange", t, n, r)
                            }
                            i = t
                        }
                    })
                },
                on: {
                    init: function() {
                        this.params.zoom.enabled && this.zoom.enable()
                    },
                    destroy: function() {
                        this.zoom.disable()
                    },
                    touchStart: function(e) {
                        this.zoom.enabled && this.zoom.onTouchStart(e)
                    },
                    touchEnd: function(e) {
                        this.zoom.enabled && this.zoom.onTouchEnd(e)
                    },
                    doubleTap: function(e) {
                        this.params.zoom.enabled && this.zoom.enabled && this.params.zoom.toggle && this.zoom.toggle(e)
                    },
                    transitionEnd: function() {
                        this.zoom.enabled && this.params.zoom.enabled && this.zoom.onTransitionEnd()
                    }
                }
            }, {
                name: "lazy",
                params: {
                    lazy: {
                        enabled: !1,
                        loadPrevNext: !1,
                        loadPrevNextAmount: 1,
                        loadOnTransitionStart: !1,
                        elementClass: "swiper-lazy",
                        loadingClass: "swiper-lazy-loading",
                        loadedClass: "swiper-lazy-loaded",
                        preloaderClass: "swiper-lazy-preloader"
                    }
                },
                create: function() {
                    l.extend(this, {
                        lazy: {
                            initialImageLoaded: !1,
                            load: W.load.bind(this),
                            loadInSlide: W.loadInSlide.bind(this)
                        }
                    })
                },
                on: {
                    beforeInit: function() {
                        this.params.lazy.enabled && this.params.preloadImages && (this.params.preloadImages = !1)
                    },
                    init: function() {
                        this.params.lazy.enabled && !this.params.loop && 0 === this.params.initialSlide && this.lazy.load()
                    },
                    scroll: function() {
                        this.params.freeMode && !this.params.freeModeSticky && this.lazy.load()
                    },
                    resize: function() {
                        this.params.lazy.enabled && this.lazy.load()
                    },
                    scrollbarDragMove: function() {
                        this.params.lazy.enabled && this.lazy.load()
                    },
                    transitionStart: function() {
                        this.params.lazy.enabled && (this.params.lazy.loadOnTransitionStart || !this.params.lazy.loadOnTransitionStart && !this.lazy.initialImageLoaded) && this.lazy.load()
                    },
                    transitionEnd: function() {
                        this.params.lazy.enabled && !this.params.lazy.loadOnTransitionStart && this.lazy.load()
                    }
                }
            }, G, {
                name: "a11y",
                params: {
                    a11y: {
                        enabled: !0,
                        notificationClass: "swiper-notification",
                        prevSlideMessage: "Previous slide",
                        nextSlideMessage: "Next slide",
                        firstSlideMessage: "This is the first slide",
                        lastSlideMessage: "This is the last slide",
                        paginationBulletMessage: "Go to slide {{index}}"
                    }
                },
                create: function() {
                    var e = this;
                    l.extend(e, {
                        a11y: {
                            liveRegion: n('<span class="' + e.params.a11y.notificationClass + '" aria-live="assertive" aria-atomic="true"></span>')
                        }
                    }), Object.keys(Y).forEach(function(t) {
                        e.a11y[t] = Y[t].bind(e)
                    })
                },
                on: {
                    init: function() {
                        this.params.a11y.enabled && (this.a11y.init(), this.a11y.updateNavigation())
                    },
                    toEdge: function() {
                        this.params.a11y.enabled && this.a11y.updateNavigation()
                    },
                    fromEdge: function() {
                        this.params.a11y.enabled && this.a11y.updateNavigation()
                    },
                    paginationUpdate: function() {
                        this.params.a11y.enabled && this.a11y.updatePagination()
                    },
                    destroy: function() {
                        this.params.a11y.enabled && this.a11y.destroy()
                    }
                }
            }, {
                name: "history",
                params: {
                    history: {
                        enabled: !1,
                        replaceState: !1,
                        key: "slides"
                    }
                },
                create: function() {
                    l.extend(this, {
                        history: {
                            init: U.init.bind(this),
                            setHistory: U.setHistory.bind(this),
                            setHistoryPopState: U.setHistoryPopState.bind(this),
                            scrollToSlide: U.scrollToSlide.bind(this),
                            destroy: U.destroy.bind(this)
                        }
                    })
                },
                on: {
                    init: function() {
                        this.params.history.enabled && this.history.init()
                    },
                    destroy: function() {
                        this.params.history.enabled && this.history.destroy()
                    },
                    transitionEnd: function() {
                        this.history.initialized && this.history.setHistory(this.params.history.key, this.activeIndex)
                    }
                }
            }, {
                name: "hash-navigation",
                params: {
                    hashNavigation: {
                        enabled: !1,
                        replaceState: !1,
                        watchState: !1
                    }
                },
                create: function() {
                    l.extend(this, {
                        hashNavigation: {
                            initialized: !1,
                            init: K.init.bind(this),
                            destroy: K.destroy.bind(this),
                            setHash: K.setHash.bind(this),
                            onHashCange: K.onHashCange.bind(this)
                        }
                    })
                },
                on: {
                    init: function() {
                        this.params.hashNavigation.enabled && this.hashNavigation.init()
                    },
                    destroy: function() {
                        this.params.hashNavigation.enabled && this.hashNavigation.destroy()
                    },
                    transitionEnd: function() {
                        this.hashNavigation.initialized && this.hashNavigation.setHash()
                    }
                }
            }, {
                name: "autoplay",
                params: {
                    autoplay: {
                        enabled: !1,
                        delay: 3e3,
                        waitForTransition: !0,
                        disableOnInteraction: !0,
                        stopOnLastSlide: !1,
                        reverseDirection: !1
                    }
                },
                create: function() {
                    var e = this;
                    l.extend(e, {
                        autoplay: {
                            running: !1,
                            paused: !1,
                            run: Q.run.bind(e),
                            start: Q.start.bind(e),
                            stop: Q.stop.bind(e),
                            pause: Q.pause.bind(e),
                            onTransitionEnd: function(t) {
                                e && !e.destroyed && e.$wrapperEl && t.target === this && (e.$wrapperEl[0].removeEventListener("transitionend", e.autoplay.onTransitionEnd), e.$wrapperEl[0].removeEventListener("webkitTransitionEnd", e.autoplay.onTransitionEnd), e.autoplay.paused = !1, e.autoplay.running ? e.autoplay.run() : e.autoplay.stop())
                            }
                        }
                    })
                },
                on: {
                    init: function() {
                        this.params.autoplay.enabled && this.autoplay.start()
                    },
                    beforeTransitionStart: function(e, t) {
                        this.autoplay.running && (t || !this.params.autoplay.disableOnInteraction ? this.autoplay.pause(e) : this.autoplay.stop())
                    },
                    sliderFirstMove: function() {
                        this.autoplay.running && (this.params.autoplay.disableOnInteraction ? this.autoplay.stop() : this.autoplay.pause())
                    },
                    destroy: function() {
                        this.autoplay.running && this.autoplay.stop()
                    }
                }
            }, {
                name: "effect-fade",
                params: {
                    fadeEffect: {
                        crossFade: !1
                    }
                },
                create: function() {
                    l.extend(this, {
                        fadeEffect: {
                            setTranslate: J.setTranslate.bind(this),
                            setTransition: J.setTransition.bind(this)
                        }
                    })
                },
                on: {
                    beforeInit: function() {
                        if ("fade" === this.params.effect) {
                            this.classNames.push(this.params.containerModifierClass + "fade");
                            var e = {
                                slidesPerView: 1,
                                slidesPerColumn: 1,
                                slidesPerGroup: 1,
                                watchSlidesProgress: !0,
                                spaceBetween: 0,
                                virtualTranslate: !0
                            };
                            l.extend(this.params, e), l.extend(this.originalParams, e)
                        }
                    },
                    setTranslate: function() {
                        "fade" === this.params.effect && this.fadeEffect.setTranslate()
                    },
                    setTransition: function(e) {
                        "fade" === this.params.effect && this.fadeEffect.setTransition(e)
                    }
                }
            }, {
                name: "effect-cube",
                params: {
                    cubeEffect: {
                        slideShadows: !0,
                        shadow: !0,
                        shadowOffset: 20,
                        shadowScale: .94
                    }
                },
                create: function() {
                    l.extend(this, {
                        cubeEffect: {
                            setTranslate: Z.setTranslate.bind(this),
                            setTransition: Z.setTransition.bind(this)
                        }
                    })
                },
                on: {
                    beforeInit: function() {
                        if ("cube" === this.params.effect) {
                            this.classNames.push(this.params.containerModifierClass + "cube"), this.classNames.push(this.params.containerModifierClass + "3d");
                            var e = {
                                slidesPerView: 1,
                                slidesPerColumn: 1,
                                slidesPerGroup: 1,
                                watchSlidesProgress: !0,
                                resistanceRatio: 0,
                                spaceBetween: 0,
                                centeredSlides: !1,
                                virtualTranslate: !0
                            };
                            l.extend(this.params, e), l.extend(this.originalParams, e)
                        }
                    },
                    setTranslate: function() {
                        "cube" === this.params.effect && this.cubeEffect.setTranslate()
                    },
                    setTransition: function(e) {
                        "cube" === this.params.effect && this.cubeEffect.setTransition(e)
                    }
                }
            }, {
                name: "effect-flip",
                params: {
                    flipEffect: {
                        slideShadows: !0,
                        limitRotation: !0
                    }
                },
                create: function() {
                    l.extend(this, {
                        flipEffect: {
                            setTranslate: ee.setTranslate.bind(this),
                            setTransition: ee.setTransition.bind(this)
                        }
                    })
                },
                on: {
                    beforeInit: function() {
                        if ("flip" === this.params.effect) {
                            this.classNames.push(this.params.containerModifierClass + "flip"), this.classNames.push(this.params.containerModifierClass + "3d");
                            var e = {
                                slidesPerView: 1,
                                slidesPerColumn: 1,
                                slidesPerGroup: 1,
                                watchSlidesProgress: !0,
                                spaceBetween: 0,
                                virtualTranslate: !0
                            };
                            l.extend(this.params, e), l.extend(this.originalParams, e)
                        }
                    },
                    setTranslate: function() {
                        "flip" === this.params.effect && this.flipEffect.setTranslate()
                    },
                    setTransition: function(e) {
                        "flip" === this.params.effect && this.flipEffect.setTransition(e)
                    }
                }
            }, {
                name: "effect-coverflow",
                params: {
                    coverflowEffect: {
                        rotate: 50,
                        stretch: 0,
                        depth: 100,
                        modifier: 1,
                        slideShadows: !0
                    }
                },
                create: function() {
                    l.extend(this, {
                        coverflowEffect: {
                            setTranslate: te.setTranslate.bind(this),
                            setTransition: te.setTransition.bind(this)
                        }
                    })
                },
                on: {
                    beforeInit: function() {
                        "coverflow" === this.params.effect && (this.classNames.push(this.params.containerModifierClass + "coverflow"), this.classNames.push(this.params.containerModifierClass + "3d"), this.params.watchSlidesProgress = !0, this.originalParams.watchSlidesProgress = !0)
                    },
                    setTranslate: function() {
                        "coverflow" === this.params.effect && this.coverflowEffect.setTranslate()
                    },
                    setTransition: function(e) {
                        "coverflow" === this.params.effect && this.coverflowEffect.setTransition(e)
                    }
                }
            }, {
                name: "thumbs",
                params: {
                    thumbs: {
                        swiper: null,
                        slideThumbActiveClass: "swiper-slide-thumb-active",
                        thumbsContainerClass: "swiper-container-thumbs"
                    }
                },
                create: function() {
                    l.extend(this, {
                        thumbs: {
                            swiper: null,
                            init: ie.init.bind(this),
                            update: ie.update.bind(this),
                            onThumbClick: ie.onThumbClick.bind(this)
                        }
                    })
                },
                on: {
                    beforeInit: function() {
                        var e = this.params,
                            t = e.thumbs;
                        t && t.swiper && (this.thumbs.init(), this.thumbs.update(!0))
                    },
                    slideChange: function() {
                        this.thumbs.swiper && this.thumbs.update()
                    },
                    update: function() {
                        this.thumbs.swiper && this.thumbs.update()
                    },
                    resize: function() {
                        this.thumbs.swiper && this.thumbs.update()
                    },
                    observerUpdate: function() {
                        this.thumbs.swiper && this.thumbs.update()
                    },
                    setTransition: function(e) {
                        var t = this.thumbs.swiper;
                        t && t.setTransition(e)
                    },
                    beforeDestroy: function() {
                        var e = this.thumbs.swiper;
                        e && this.thumbs.swiperCreated && e && e.destroy()
                    }
                }
            }];
        return void 0 === M.use && (M.use = M.Class.use, M.installModule = M.Class.installModule), M.use(ne), M
    }()
}, function(e, t, i) {
    "use strict";
    var n = i(33);
    i(11)({
        target: "RegExp",
        proto: !0,
        forced: n !== /./.exec
    }, {
        exec: n
    })
}, function(e, t, i) {
    "use strict";
    var n = i(5);
    e.exports = function() {
        var e = n(this),
            t = "";
        return e.global && (t += "g"), e.ignoreCase && (t += "i"), e.multiline && (t += "m"), e.unicode && (t += "u"), e.sticky && (t += "y"), t
    }
}, function(e, t, i) {
    e.exports = !i(16) && !i(17)(function() {
        return 7 != Object.defineProperty(i(34)("div"), "a", {
            get: function() {
                return 7
            }
        }).a
    })
}, function(e, t, i) {
    var n = i(6);
    e.exports = function(e, t) {
        if (!n(e)) return e;
        var i, r;
        if (t && "function" == typeof(i = e.toString) && !n(r = i.call(e))) return r;
        if ("function" == typeof(i = e.valueOf) && !n(r = i.call(e))) return r;
        if (!t && "function" == typeof(i = e.toString) && !n(r = i.call(e))) return r;
        throw TypeError("Can't convert object to primitive value")
    }
}, function(e, t, i) {
    e.exports = i(29)("native-function-to-string", Function.toString)
}, function(e, t, i) {
    var n = i(6),
        r = i(9),
        a = i(2)("match");
    e.exports = function(e) {
        var t;
        return n(e) && (void 0 !== (t = e[a]) ? !!t : "RegExp" == r(e))
    }
}, function(e, t) {
    e.exports = function(e, t) {
        return {
            value: t,
            done: !!e
        }
    }
}, function(e, t, i) {
    "use strict";
    var n = i(75),
        r = i(35),
        a = i(39),
        s = {};
    i(7)(s, i(2)("iterator"), function() {
        return this
    }), e.exports = function(e, t, i) {
        e.prototype = n(s, {
            next: r(1, i)
        }), a(e, t + " Iterator")
    }
}, function(e, t, i) {
    var n = i(5),
        r = i(76),
        a = i(52),
        s = i(38)("IE_PROTO"),
        o = function() {},
        l = function() {
            var e, t = i(34)("iframe"),
                n = a.length;
            for (t.style.display = "none", i(53).appendChild(t), t.src = "javascript:", (e = t.contentWindow.document).open(), e.write("<script>document.F=Object<\/script>"), e.close(), l = e.F; n--;) delete l.prototype[a[n]];
            return l()
        };
    e.exports = Object.create || function(e, t) {
        var i;
        return null !== e ? (o.prototype = n(e), i = new o, o.prototype = null, i[s] = e) : i = l(), void 0 === t ? i : r(i, t)
    }
}, function(e, t, i) {
    var n = i(15),
        r = i(5),
        a = i(37);
    e.exports = i(16) ? Object.defineProperties : function(e, t) {
        r(e);
        for (var i, s = a(t), o = s.length, l = 0; o > l;) n.f(e, i = s[l++], t[i]);
        return e
    }
}, function(e, t, i) {
    var n = i(25),
        r = i(36),
        a = i(78)(!1),
        s = i(38)("IE_PROTO");
    e.exports = function(e, t) {
        var i, o = r(e),
            l = 0,
            u = [];
        for (i in o) i != s && n(o, i) && u.push(i);
        for (; t.length > l;) n(o, i = t[l++]) && (~a(u, i) || u.push(i));
        return u
    }
}, function(e, t, i) {
    var n = i(36),
        r = i(8),
        a = i(79);
    e.exports = function(e) {
        return function(t, i, s) {
            var o, l = n(t),
                u = r(l.length),
                c = a(s, u);
            if (e && i != i) {
                for (; u > c;)
                    if ((o = l[c++]) != o) return !0
            } else
                for (; u > c; c++)
                    if ((e || c in l) && l[c] === i) return e || c || 0;
            return !e && -1
        }
    }
}, function(e, t, i) {
    var n = i(24),
        r = Math.max,
        a = Math.min;
    e.exports = function(e, t) {
        return (e = n(e)) < 0 ? r(e + t, 0) : a(e, t)
    }
}, function(e, t, i) {
    var n = i(25),
        r = i(14),
        a = i(38)("IE_PROTO"),
        s = Object.prototype;
    e.exports = Object.getPrototypeOf || function(e) {
        return e = r(e), n(e, a) ? e[a] : "function" == typeof e.constructor && e instanceof e.constructor ? e.constructor.prototype : e instanceof Object ? s : null
    }
}, function(e, t, i) {
    var n = i(14),
        r = i(37);
    i(82)("keys", function() {
        return function(e) {
            return r(n(e))
        }
    })
}, function(e, t, i) {
    var n = i(11),
        r = i(10),
        a = i(17);
    e.exports = function(e, t) {
        var i = (r.Object || {})[e] || Object[e],
            s = {};
        s[e] = t(i), n(n.S + n.F * a(function() {
            i(1)
        }), "Object", s)
    }
}, function(e, t, i) {
    "use strict";
    var n = i(5),
        r = i(84),
        a = i(27);
    i(32)("search", 1, function(e, t, i, s) {
        return [function(i) {
            var n = e(this),
                r = null == i ? void 0 : i[t];
            return void 0 !== r ? r.call(i, n) : new RegExp(i)[t](String(n))
        }, function(e) {
            var t = s(i, e, this);
            if (t.done) return t.value;
            var o = n(e),
                l = String(this),
                u = o.lastIndex;
            r(u, 0) || (o.lastIndex = 0);
            var c = a(o, l);
            return r(o.lastIndex, u) || (o.lastIndex = u), null === c ? -1 : c.index
        }]
    })
}, function(e, t) {
    e.exports = Object.is || function(e, t) {
        return e === t ? 0 !== e || 1 / e == 1 / t : e != e && t != t
    }
}, function(e, t, i) {
    var n = i(12),
        r = i(50),
        a = i(14),
        s = i(8),
        o = i(86);
    e.exports = function(e, t) {
        var i = 1 == e,
            l = 2 == e,
            u = 3 == e,
            c = 4 == e,
            d = 6 == e,
            p = 5 == e || d,
            h = t || o;
        return function(t, o, f) {
            for (var v, m, g = a(t), y = r(g), b = n(o, f, 3), w = s(y.length), x = 0, T = i ? h(t, w) : l ? h(t, 0) : void 0; w > x; x++)
                if ((p || x in y) && (m = b(v = y[x], x, g), e))
                    if (i) T[x] = m;
                    else if (m) switch (e) {
                case 3:
                    return !0;
                case 5:
                    return v;
                case 6:
                    return x;
                case 2:
                    T.push(v)
            } else if (c) return !1;
            return d ? -1 : u || c ? c : T
        }
    }
}, function(e, t, i) {
    var n = i(87);
    e.exports = function(e, t) {
        return new(n(e))(t)
    }
}, function(e, t, i) {
    var n = i(6),
        r = i(88),
        a = i(2)("species");
    e.exports = function(e) {
        var t;
        return r(e) && ("function" != typeof(t = e.constructor) || t !== Array && !r(t.prototype) || (t = void 0), n(t) && null === (t = t[a]) && (t = void 0)), void 0 === t ? Array : t
    }
}, function(e, t, i) {
    var n = i(9);
    e.exports = Array.isArray || function(e) {
        return "Array" == n(e)
    }
}, function(e, t, i) {
    var n = i(40),
        r = i(90),
        a = i(92),
        s = "Expected a function",
        o = Math.max,
        l = Math.min;
    e.exports = function(e, t, i) {
        var u, c, d, p, h, f, v = 0,
            m = !1,
            g = !1,
            y = !0;
        if ("function" != typeof e) throw new TypeError(s);

        function b(t) {
            var i = u,
                n = c;
            return u = c = void 0, v = t, p = e.apply(n, i)
        }

        function w(e) {
            var i = e - f;
            return void 0 === f || i >= t || i < 0 || g && e - v >= d
        }

        function x() {
            var e = r();
            if (w(e)) return T(e);
            h = setTimeout(x, function(e) {
                var i = t - (e - f);
                return g ? l(i, d - (e - v)) : i
            }(e))
        }

        function T(e) {
            return h = void 0, y && u ? b(e) : (u = c = void 0, p)
        }

        function S() {
            var e = r(),
                i = w(e);
            if (u = arguments, c = this, f = e, i) {
                if (void 0 === h) return function(e) {
                    return v = e, h = setTimeout(x, t), m ? b(e) : p
                }(f);
                if (g) return h = setTimeout(x, t), b(f)
            }
            return void 0 === h && (h = setTimeout(x, t)), p
        }
        return t = a(t) || 0, n(i) && (m = !!i.leading, d = (g = "maxWait" in i) ? o(a(i.maxWait) || 0, t) : d, y = "trailing" in i ? !!i.trailing : y), S.cancel = function() {
            void 0 !== h && clearTimeout(h), v = 0, u = f = c = h = void 0
        }, S.flush = function() {
            return void 0 === h ? p : T(r())
        }, S
    }
}, function(e, t, i) {
    var n = i(55);
    e.exports = function() {
        return n.Date.now()
    }
}, function(e, t, i) {
    (function(t) {
        var i = "object" == typeof t && t && t.Object === Object && t;
        e.exports = i
    }).call(this, i(54))
}, function(e, t, i) {
    var n = i(40),
        r = i(93),
        a = NaN,
        s = /^\s+|\s+$/g,
        o = /^[-+]0x[0-9a-f]+$/i,
        l = /^0b[01]+$/i,
        u = /^0o[0-7]+$/i,
        c = parseInt;
    e.exports = function(e) {
        if ("number" == typeof e) return e;
        if (r(e)) return a;
        if (n(e)) {
            var t = "function" == typeof e.valueOf ? e.valueOf() : e;
            e = n(t) ? t + "" : t
        }
        if ("string" != typeof e) return 0 === e ? e : +e;
        e = e.replace(s, "");
        var i = l.test(e);
        return i || u.test(e) ? c(e.slice(2), i ? 2 : 8) : o.test(e) ? a : +e
    }
}, function(e, t, i) {
    var n = i(94),
        r = i(97),
        a = "[object Symbol]";
    e.exports = function(e) {
        return "symbol" == typeof e || r(e) && n(e) == a
    }
}, function(e, t, i) {
    var n = i(56),
        r = i(95),
        a = i(96),
        s = "[object Null]",
        o = "[object Undefined]",
        l = n ? n.toStringTag : void 0;
    e.exports = function(e) {
        return null == e ? void 0 === e ? o : s : l && l in Object(e) ? r(e) : a(e)
    }
}, function(e, t, i) {
    var n = i(56),
        r = Object.prototype,
        a = r.hasOwnProperty,
        s = r.toString,
        o = n ? n.toStringTag : void 0;
    e.exports = function(e) {
        var t = a.call(e, o),
            i = e[o];
        try {
            e[o] = void 0;
            var n = !0
        } catch (e) {}
        var r = s.call(e);
        return n && (t ? e[o] = i : delete e[o]), r
    }
}, function(e, t) {
    var i = Object.prototype.toString;
    e.exports = function(e) {
        return i.call(e)
    }
}, function(e, t) {
    e.exports = function(e) {
        return null != e && "object" == typeof e
    }
}, function(e, t, i) {
    "use strict";
    e.exports = function(e) {
        return encodeURIComponent(e).replace(/[!'()*]/g, function(e) {
            return "%" + e.charCodeAt(0).toString(16).toUpperCase()
        })
    }
}, function(e, t, i) {
    "use strict";
    /*
    object-assign
    (c) Sindre Sorhus
    @license MIT
    */
    var n = Object.getOwnPropertySymbols,
        r = Object.prototype.hasOwnProperty,
        a = Object.prototype.propertyIsEnumerable;

    function s(e) {
        if (null == e) throw new TypeError("Object.assign cannot be called with null or undefined");
        return Object(e)
    }
    e.exports = function() {
        try {
            if (!Object.assign) return !1;
            var e = new String("abc");
            if (e[5] = "de", "5" === Object.getOwnPropertyNames(e)[0]) return !1;
            for (var t = {}, i = 0; i < 10; i++) t["_" + String.fromCharCode(i)] = i;
            if ("0123456789" !== Object.getOwnPropertyNames(t).map(function(e) {
                    return t[e]
                }).join("")) return !1;
            var n = {};
            return "abcdefghijklmnopqrst".split("").forEach(function(e) {
                n[e] = e
            }), "abcdefghijklmnopqrst" === Object.keys(Object.assign({}, n)).join("")
        } catch (e) {
            return !1
        }
    }() ? Object.assign : function(e, t) {
        for (var i, o, l = s(e), u = 1; u < arguments.length; u++) {
            for (var c in i = Object(arguments[u])) r.call(i, c) && (l[c] = i[c]);
            if (n) {
                o = n(i);
                for (var d = 0; d < o.length; d++) a.call(i, o[d]) && (l[o[d]] = i[o[d]])
            }
        }
        return l
    }
}, function(e, t, i) {
    "use strict";
    var n = new RegExp("%[a-f0-9]{2}", "gi"),
        r = new RegExp("(%[a-f0-9]{2})+", "gi");

    function a(e, t) {
        try {
            return decodeURIComponent(e.join(""))
        } catch (e) {}
        if (1 === e.length) return e;
        t = t || 1;
        var i = e.slice(0, t),
            n = e.slice(t);
        return Array.prototype.concat.call([], a(i), a(n))
    }

    function s(e) {
        try {
            return decodeURIComponent(e)
        } catch (r) {
            for (var t = e.match(n), i = 1; i < t.length; i++) t = (e = a(t, i).join("")).match(n);
            return e
        }
    }
    e.exports = function(e) {
        if ("string" != typeof e) throw new TypeError("Expected `encodedURI` to be of type `string`, got `" + typeof e + "`");
        try {
            return e = e.replace(/\+/g, " "), decodeURIComponent(e)
        } catch (t) {
            return function(e) {
                for (var t = {
                        "%FE%FF": "��",
                        "%FF%FE": "��"
                    }, i = r.exec(e); i;) {
                    try {
                        t[i[0]] = decodeURIComponent(i[0])
                    } catch (e) {
                        var n = s(i[0]);
                        n !== i[0] && (t[i[0]] = n)
                    }
                    i = r.exec(e)
                }
                t["%C2"] = "�";
                for (var a = Object.keys(t), o = 0; o < a.length; o++) {
                    var l = a[o];
                    e = e.replace(new RegExp(l, "g"), t[l])
                }
                return e
            }(e)
        }
    }
}, function(e, t) {
    e.exports = function(e, t, i, n) {
        if (!(e instanceof t) || void 0 !== n && n in e) throw TypeError(i + ": incorrect invocation!");
        return e
    }
}, function(e, t, i) {
    var n = i(12),
        r = i(57),
        a = i(58),
        s = i(5),
        o = i(8),
        l = i(59),
        u = {},
        c = {};
    (t = e.exports = function(e, t, i, d, p) {
        var h, f, v, m, g = p ? function() {
                return e
            } : l(e),
            y = n(i, d, t ? 2 : 1),
            b = 0;
        if ("function" != typeof g) throw TypeError(e + " is not iterable!");
        if (a(g)) {
            for (h = o(e.length); h > b; b++)
                if ((m = t ? y(s(f = e[b])[0], f[1]) : y(e[b])) === u || m === c) return m
        } else
            for (v = g.call(e); !(f = v.next()).done;)
                if ((m = r(v, y, f.value, t)) === u || m === c) return m
    }).BREAK = u, t.RETURN = c
}, function(e, t) {
    e.exports = function(e, t, i) {
        var n = void 0 === i;
        switch (t.length) {
            case 0:
                return n ? e() : e.call(i);
            case 1:
                return n ? e(t[0]) : e.call(i, t[0]);
            case 2:
                return n ? e(t[0], t[1]) : e.call(i, t[0], t[1]);
            case 3:
                return n ? e(t[0], t[1], t[2]) : e.call(i, t[0], t[1], t[2]);
            case 4:
                return n ? e(t[0], t[1], t[2], t[3]) : e.call(i, t[0], t[1], t[2], t[3])
        }
        return e.apply(i, t)
    }
}, function(e, t, i) {
    var n = i(4),
        r = i(60).set,
        a = n.MutationObserver || n.WebKitMutationObserver,
        s = n.process,
        o = n.Promise,
        l = "process" == i(9)(s);
    e.exports = function() {
        var e, t, i, u = function() {
            var n, r;
            for (l && (n = s.domain) && n.exit(); e;) {
                r = e.fn, e = e.next;
                try {
                    r()
                } catch (n) {
                    throw e ? i() : t = void 0, n
                }
            }
            t = void 0, n && n.enter()
        };
        if (l) i = function() {
            s.nextTick(u)
        };
        else if (!a || n.navigator && n.navigator.standalone)
            if (o && o.resolve) {
                var c = o.resolve(void 0);
                i = function() {
                    c.then(u)
                }
            } else i = function() {
                r.call(n, u)
            };
        else {
            var d = !0,
                p = document.createTextNode("");
            new a(u).observe(p, {
                characterData: !0
            }), i = function() {
                p.data = d = !d
            }
        }
        return function(n) {
            var r = {
                fn: n,
                next: void 0
            };
            t && (t.next = r), e || (e = r, i()), t = r
        }
    }
}, function(e, t) {
    e.exports = function(e) {
        try {
            return {
                e: !1,
                v: e()
            }
        } catch (e) {
            return {
                e: !0,
                v: e
            }
        }
    }
}, function(e, t, i) {
    var n = i(4).navigator;
    e.exports = n && n.userAgent || ""
}, function(e, t, i) {
    var n = i(5),
        r = i(6),
        a = i(61);
    e.exports = function(e, t) {
        if (n(e), r(t) && t.constructor === e) return t;
        var i = a.f(e);
        return (0, i.resolve)(t), i.promise
    }
}, function(e, t, i) {
    var n = i(18);
    e.exports = function(e, t, i) {
        for (var r in t) n(e, r, t[r], i);
        return e
    }
}, function(e, t, i) {
    "use strict";
    var n = i(4),
        r = i(15),
        a = i(16),
        s = i(2)("species");
    e.exports = function(e) {
        var t = n[e];
        a && t && !t[s] && r.f(t, s, {
            configurable: !0,
            get: function() {
                return this
            }
        })
    }
}, function(e, t, i) {
    "use strict";
    var n = i(12),
        r = i(11),
        a = i(14),
        s = i(57),
        o = i(58),
        l = i(8),
        u = i(111),
        c = i(59);
    r(r.S + r.F * !i(62)(function(e) {
        Array.from(e)
    }), "Array", {
        from: function(e) {
            var t, i, r, d, p = a(e),
                h = "function" == typeof this ? this : Array,
                f = arguments.length,
                v = f > 1 ? arguments[1] : void 0,
                m = void 0 !== v,
                g = 0,
                y = c(p);
            if (m && (v = n(v, f > 2 ? arguments[2] : void 0, 2)), null == y || h == Array && o(y))
                for (i = new h(t = l(p.length)); t > g; g++) u(i, g, m ? v(p[g], g) : p[g]);
            else
                for (d = y.call(p), i = new h; !(r = d.next()).done; g++) u(i, g, m ? s(d, v, [r.value, g], !0) : r.value);
            return i.length = g, i
        }
    })
}, function(e, t, i) {
    "use strict";
    var n = i(15),
        r = i(35);
    e.exports = function(e, t, i) {
        t in e ? n.f(e, t, r(0, i)) : e[t] = i
    }
}, function(e, t, i) {}, function(e, t, i) {
    "use strict";
    i.r(t);
    var n = i(0),
        r = i.n(n),
        a = (i(44), i(47), i(19), function(e) {
            return "".concat(e.charAt(0).toLowerCase()).concat(e.replace(/[\W_]/g, "|").split("|").map(function(e) {
                return "".concat(e.charAt(0).toUpperCase()).concat(e.slice(1))
            }).join("").slice(1))
        });

    function s(e, t) {
        for (var i = 0; i < t.length; i++) {
            var n = t[i];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
        }
    }
    var o = function() {
            function e(t) {
                ! function(e, t) {
                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                }(this, e), this.routes = t
            }
            var t, i, n;
            return t = e, (i = [{
                key: "fire",
                value: function(e) {
                    var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "init",
                        i = arguments.length > 2 ? arguments[2] : void 0;
                    document.dispatchEvent(new CustomEvent("routed", {
                        bubbles: !0,
                        detail: {
                            route: e,
                            fn: t
                        }
                    }));
                    var n = "" !== e && this.routes[e] && "function" == typeof this.routes[e][t];
                    n && this.routes[e][t](i)
                }
            }, {
                key: "loadEvents",
                value: function() {
                    var e = this;
                    this.fire("common"), document.body.className.toLowerCase().replace(/-/g, "_").split(/\s+/).map(a).forEach(function(t) {
                        e.fire(t), e.fire(t, "finalize")
                    }), this.fire("common", "finalize")
                }
            }]) && s(t.prototype, i), n && s(t, n), e
        }(),
        l = (i(20), i(81), i(83), i(22), i(13)),
        u = i.n(l),
        c = i(63),
        d = i.n(c),
        p = i(64),
        h = i.n(p),
        f = i(3),
        v = i.n(f),
        m = i(1),
        g = i.n(m),
        y = i(43),
        b = i.n(y),
        w = i(65),
        x = i.n(w);

    function T() {
        r()(".kg-top-nav__mobile-toggle").on("click", function(e) {
            var t = r()(".kg-header");
            t.toggleClass("open"), r()("body").toggleClass("no-scroll"), r()(e.currentTarget).attr("aria-expanded", t.hasClass("open"))
        });
        var e = r()(".kg-header__wrapper"),
            t = 0,
            i = 15,
            n = 100;

        function a(e, t) {
            return r()(window).scrollTop() < t ? (r()(".kg-header").addClass("kg-header--top"), !0) : (r()(".kg-header").removeClass("kg-header--top"), !1)
        }
        r()(window).scroll(h()(function() {
            var s = r()(window).scrollTop();
            Math.abs(t - s) <= i || (s > t ? function(t, i) {
                e.hasClass("kg-header--hidden") || e.hasClass("velocity-animating") || i + r()(window).height() >= r()(document).height() || i <= 0 || (r()(".kg-top-nav__dropdown, .kg-header__overlay").hide(), g.a.animate(e, {
                    // translateY: "-100px",
                    duration: "50",
                    begin: function() {
                        e.removeClass("kg-header--revealed")
                    }
                }).then(function() {
                    e.addClass("kg-header--hidden"), a(0, n) && g.a.animate(e, {
                        translateY: "0px",
                        duration: "50",
                        begin: function() {
                            e.removeClass("kg-header--hidden")
                        }
                    }).then(function() {
                        e.addClass("kg-header--revealed")
                    })
                }))
            }(0, s) : (a(0, n), function(t, i, n) {
                e.hasClass("kg-header--revealed") || e.hasClass("velocity-animating") || g.a.animate(e, {
                    translateY: "0px",
                    duration: "50",
                    begin: function() {
                        e.removeClass("kg-header--hidden"), a(0, n)
                    }
                }).then(function() {
                    e.addClass("kg-header--revealed"), a(0, n)
                })
            }(0, 0, n)), t = s)
        }))
    }

    function S(e) {
        r()(this).hasClass("sr-only") || (e.preventDefault(), r()("html, body").animate({
            scrollTop: r()(r.a.attr(this, "href")).offset().top
        }))
    }

    function C() {
        r()(".kg-contact input, .kg-contact textarea").each(function(e, t) {
            r()(t).on("focus input", function() {
                r()(this).addClass("modified")
            }), r()(t).on("blur", function() {
                r()(this).toggleClass("modified", !!this.value)
            })
        }).trigger("blur"), r()(".kg-contact textarea").each(function() {
            var e = this.offsetHeight - this.clientHeight;
            r()(this).on("keyup input", function() {
                var t;
                t = this, r()(t).css("height", "auto").css("height", t.scrollHeight + e)
            })
        })
    }
    var E = {
        init: function() {
            var e, t, i;
            T(), e = r()(".kg-header"), (t = r()(".kg-top-nav__with-dropdown")).on("focusin mouseenter", function(t) {
                window.innerWidth <= 850 || (r()(this).find(".kg-top-nav__main-link__with-dropdown").addClass("kg-top-nav__main-link__with-dropdown--open"), r()(this).find(".kg-top-nav__dropdown").css("display", "block"), g.a.animate(r()(this).find(".kg-top-nav__dropdown"), {
                    opacity: 1,
                    duration: "350ms",
                    easing: "linear"
                }), "focusin" !== t.type && g.a.animate(r()(this).find(".kg-top-nav__dropdown__content"), {
                    opacity: 1,
                    translateY: ["0%", "10%"]
                }, {
                    duration: "250ms",
                    delay: "100ms"
                }), e.hasClass("kg-header--fill") || (e.addClass("kg-header--fill"), g.a.animate(r()(".kg-header__overlay"), {
                    opacity: 1,
                    duration: "150ms"
                }, {
                    display: "block"
                })))
            }), t.on("focusout mouseleave", function(t) {
                window.innerWidth <= 850 || r()(t.relatedTarget).closest(this).length || (r()(this).find(".kg-top-nav__main-link__with-dropdown").removeClass("kg-top-nav__main-link__with-dropdown--open"), r()(this).find(".kg-top-nav__dropdown").css("display", ""), r()(this).find(".kg-top-nav__dropdown").css("opacity", ""), r()(this).find(".kg-top-nav__dropdown__content").css("opacity", ""), g()(r()(this).find(".kg-top-nav__dropdown"), "stop"), g()(r()(this).find(".kg-top-nav__dropdown__content"), "stop"), e.hasClass("kg-header--fill") && (e.removeClass("kg-header--fill"), r()(".kg-header__overlay").hide()))
            }), t.on("click", function() {
                window.innerWidth > 850 || (r()(this).find(".kg-top-nav__main-link__with-dropdown").toggleClass("kg-top-nav__main-link__with-dropdown--open"), r()(".kg-top-nav__dropdown").slideToggle(400))
            }), r()("body").hasClass("has-custom-skrollr") || ((i = v.a.init({
                forceHeight: !1
            })).isMobile() ? i.destroy() : r()(window).on("load", i.refresh), (new d.a).init()), u.a.init({
                duration: 800,
                once: !0
            }), C(), r()(document).on("click", 'a[href^="#"]', S), r()(".kg-contact__form").each(function(e, t) {
                return i = r()(t), void((n = b.a.getJSON("utm_data")) && Object.keys(n).forEach(function(e) {
                    i.append('<input name="'.concat(e, '" value="').concat(n[e], '" type="hidden" />'))
                }));
                var i, n
            })
        },
        finalize: function() {
            var e;
            ((e = x.a.parse(location.search)).utm_keyword || e.utm_source || e.utm_campaign) && b.a.set("utm_data", e), console.log("Hey there, taking a look under the hood?"), console.log("Why not join us? ----\x3e  https://www.Website Intels.com/careers")
        }
    };
    i(41), i(42);
    var k = function(e, t) {
        var i = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 3e3,
            n = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 250,
            a = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : 300,
            s = [.25, .1, .25, 1],
            o = r()("." + e + "__progress-fill"),
            l = r()("." + t),
            u = l.eq(0),
            c = u.next();
        setTimeout(function e() {
            g.a.animate(o, {
                translateX: ["0%", "-100%"]
            }, {
                duration: i,
                easing: "linear"
            }).then(function() {
                o.css({
                    transform: "translateX(-100%)"
                }), Promise.all([(u.find("." + t + "__image").each(function(e, t) {
                    g.a.animate(t, {
                        translateY: ["-150px", "0px"],
                        opacity: 0
                    }, {
                        duration: a,
                        easing: s
                    })
                }), g.a.animate(u, {
                    opacity: 0
                }, {
                    duration: a,
                    easing: s,
                    display: "none"
                })), (c.find("." + t + "__image").each(function(e, t) {
                    g.a.animate(t, {
                        translateY: ["0px", "-150px"],
                        opacity: 1
                    }, {
                        duration: 1e3,
                        delay: t.getAttribute("data-custom-animation-in-delay") || 0,
                        easing: s
                    })
                }), g.a.animate(c, {
                    opacity: 1
                }, {
                    duration: 750,
                    easing: s,
                    display: "block"
                }))]).then(function() {
                    u = c, c = c.next().length ? c.next() : l.eq(0), setTimeout(e, n)
                })
            })
        }, n)
    };
    var P = {
            init: function() {
                k("slider", "slide")
            },
            finalize: function() {}
        },
        M = (i(110), {
            init: function() {
                var e = r()("[data-work-index-animation-hack]");
                if (e.length) {
                    var t = Array.from(e).map(function(e) {
                        var t = e.getAttribute("data-aos-delay"),
                            i = e.getAttribute("data-work-index-animation-hack");
                        return new Promise(function(n) {
                            setTimeout(function() {
                                e.setAttribute("data-aos-delay", i), n()
                            }, t)
                        })
                    });
                    Promise.all(t).then(function() {
                        u.a.refreshHard()
                    })
                }
            }
        }),
        A = i(66),
        O = i.n(A);
    var L = function(e, t) {
        var i = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
            n = !(arguments.length > 3 && void 0 !== arguments[3]) || arguments[3],
            a = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : 30,
            s = r()(e);
        s && new O.a(e, {
            slidesPerView: "auto",
            centeredSlides: n,
            autoHeight: !0,
            slideToClickedSlide: !0,
            spaceBetween: a,
            loop: i,
            breakpoints: {
                992: {
                    spaceBetween: 10
                }
            },
            pagination: {
                el: ".swiper-progressbar-custom__dummy-target",
                type: "custom",
                renderCustom: function(e, t, i) {
                    return e.pagination.$el.parent().find(".swiper-progressbar-custom__fill").css({
                        width: 100 / i + "%",
                        transform: "translateX(" + 100 * (t - 1) + "%)"
                    }), null
                }
            },
            navigation: {
                nextEl: t.next,
                prevEl: t.prev
            },
            on: {
                init: function() {
                    var e = this.slides[this.activeIndex].querySelector("video");
                    e && (e.addEventListener("loadeddata", function() {
                        e.height || s.height(e.clientHeight)
                    }), e.play().catch(function() {
                        this.slides.each(function(e, t) {
                            t.querySelector("video").controls = !0
                        })
                    }.bind(this)), v.a.get() && v.a.get().refresh())
                }
            }
        }).on("slideChangeTransitionEnd", function() {
            this.slides.each(function(e, t) {
                var i = t.querySelector("video");
                i && i.pause()
            });
            var e = this.slides[this.activeIndex].querySelector("video");
            e && e.play()
        })
    };
    var N = {
        init: function() {
            var e;
            ! function() {
                var e = r()(".work-hero"),
                    t = e.find(".work-hero__image"),
                    i = r()("body");

                function n() {
                    e.find(".work-hero__overlay").addClass("work-hero__overlay--animated"), i.addClass("kg-transparent-header--animating").removeClass("kg-transparent-header"), setTimeout(function() {
                        i.removeClass("kg-transparent-header--animating")
                    }, 1e3)
                }
                if (t[0].complete) n();
                else {
                    var a = setTimeout(n, 2e3);
                    t.on("load", function() {
                        clearTimeout(a), n()
                    })
                }
            }(), (e = v.a.init({
                forceHeight: !1,
                beforerender: function(e) {
                    if ("up" === e.direction) return !1
                },
                mobileCheck: function() {
                    return r()(window).width() < 992
                }
            })).isMobile() ? e.destroy() : r()(window).on("load", e.refresh), L(".swiper-container", {
                next: ".swiper-button-next",
                prev: ".swiper-button-prev"
            })
        },
        finalize: function() {}
    };

    function z(e) {
        r()(".careers-listing__city-nav-item").removeClass("careers-listing__city-nav-item--active"), e.parent().toggleClass("careers-listing__city-nav-item--active"), r()(".careers-listing__list-item, .careers-listing__department-card").show(), "All" !== e.text() && r()(".careers-listing__list-item-city:not(:contains('" + e.text() + "'))").parent().hide(), r()(".careers-listing__department-card").each(function(e, t) {
            r()(t).toggle(!!r()(t).find(".careers-listing__list-item:visible").length)
        }), r()(".careers-listing__no-open-jobs-card").toggle(!r()(".careers-listing__department-card:visible").length), u.a.refresh()
    }
    var D = {
        init: function() {
            z(r()(".careers-listing__city-nav-item--active .careers-listing__city-nav-button")), r()(".careers-listing__city-nav-button").click(function(e) {
                z(r()(e.currentTarget))
            })
        }
    };
    var j = {
        init: function() {
            var e;
            k("slider", "slide"), (e = v.a.init({
                forceHeight: !1,
                beforerender: function(e) {
                    if ("up" === e.direction) return !1
                }
            })).isMobile() ? e.destroy() : r()(window).on("load", e.refresh)
        },
        finalize: function() {}
    };
    var I = {
            init: function() {
                var e;
                k("slider", "slide"), (e = v.a.init({
                    forceHeight: !1,
                    beforerender: function(e) {
                        if ("up" === e.direction) return !1
                    }
                })).isMobile() ? e.destroy() : r()(window).on("load", e.refresh)
            },
            finalize: function() {}
        },
        $ = 8e3,
        H = 500;

    function _(e, t, i) {
        var n = 0,
            a = 0,
            s = !1,
            o = r()(e + " .wm-slider__progress-fill"),
            l = r()(e + " .wm-slider__step-button"),
            u = r()(e + " .wm-slider__video")[0],
            c = wp.templateUrl + "/assets/videos/futureof/" + t;

        function d() {
            a = s ? a : n, n = (n + 1) % 3;
            var t = o.eq(a),
                i = l.eq(a);
            g.a.animate(t, {
                translateY: ["100%", "0%"]
            }, {
                duration: H,
                easing: "easeInCubic"
            }).then(function() {
                t.css({
                    transform: "translateY(-100%)"
                })
            });
            var d = r()(e + " .wm-slider__transition");
            g.a.animate(d, {
                opacity: ["1", "0"],
                translateX: ["-50%", "-50%"],
                translateY: ["-50%", "-50%"]
            }, {
                duration: H / 2,
                easing: "linear"
            }).then(function() {
                u.setAttribute("src", c + (n + 1) + ".mp4"), u.load(), i.toggleClass("wm-slider__step-button--active"), g.a.animate(d, {
                    opacity: ["0", "1"],
                    translateX: ["-50%", "-50%"],
                    translateY: ["-50%", "-50%"]
                }, {
                    duration: H / 2,
                    easing: "linear"
                }).then(function() {})
            }), u.pause(), s = !1
        }
        l.eq(0).click(function() {
            a = n, n = 2, s = !0, g()(o.eq(a), "stop")
        }), l.eq(1).click(function() {
            a = n, n = 0, s = !0, g()(o.eq(a), "stop")
        }), l.eq(2).click(function() {
            a = n, n = 1, s = !0, g()(o.eq(a), "stop")
        }), setTimeout(function e() {
            var t = o.eq(n);
            l.eq(n).toggleClass("wm-slider__step-button--active"), u.play(), g.a.animate(t, {
                translateY: ["0%", "-100%"]
            }, {
                duration: i,
                easing: "linear"
            }).then(function() {
                Promise.all([d()]).then(function() {
                    setTimeout(e, H + 100)
                })
            })
        }, 1e3)
    }
    var q = {
            init: function() {
                var e;
                (e = v.a.init({
                    forceHeight: !1,
                    beforerender: function(e) {
                        if ("up" === e.direction) return !1
                    }
                })).isMobile() ? e.destroy() : r()(window).on("load", e.refresh),
                    function() {
                        var e = [{
                                title: "Manage Your Portfolios",
                                copy: "Sprout makes it easy to keep track of your goals and see how your investments are growing.",
                                label: "Control Your Goal"
                            }, {
                                title: "Control Your Goal",
                                copy: "Explore the projected growth of a goal and change your contribution at any time.",
                                label: "Customize Risk Tolerance"
                            }, {
                                title: "Customize Risk Tolerance",
                                copy: "Browse through different risk scores and see how they impact your portfolio distribution.",
                                label: "Manage Your Portfolio"
                            }],
                            t = 0,
                            i = r()(".wm-portfolios__progress-fill"),
                            n = r()(".wm-portfolios__video")[0],
                            a = wp.templateUrl + "/assets/videos/futureof/wm-portfolio-0",
                            s = r()(".wm-portfolios__button");

                        function o() {
                            t = (t + 1) % e.length, g.a.animate(i, {
                                translateX: ["100%", "0%"]
                            }, {
                                duration: H,
                                easing: "easeInCubic"
                            }).then(function() {
                                i.css({
                                    transform: "translateX(-100%)"
                                })
                            });
                            var s = r()(".wm-portfolios__counter-text"),
                                o = r()(".wm-portfolios__counter-text--next"),
                                l = r()(".wm-portfolios__title-text"),
                                u = r()(".wm-portfolios__title-text--next"),
                                c = r()(".wm-portfolios__copy-text"),
                                d = r()(".wm-portfolios__copy-text--next"),
                                p = r()(".wm-portfolios__button-label"),
                                h = r()(".wm-portfolios__button-label--next"),
                                f = r()(".wm-portfolios__transition");
                            g.a.animate(s, {
                                translateY: ["-100%", "0%"],
                                opacity: ["0", "1"]
                            }, {
                                duration: H,
                                easing: "easeInCubic"
                            }).then(function() {
                                s.text(t + 1), s.removeAttr("style")
                            }), o.text(t + 1), g.a.animate(o, {
                                translateY: ["0%", "100%"],
                                opacity: ["1", "0"]
                            }, {
                                duration: H,
                                easing: "easeInCubic"
                            }).then(function() {
                                o.removeAttr("style")
                            }), g.a.animate(l, {
                                translateX: ["-10%", "0%"],
                                opacity: ["0", "1"]
                            }, {
                                duration: H,
                                easing: "easeInCubic"
                            }).then(function() {
                                l.text(e[t].title), l.removeAttr("style")
                            }), u.text(e[t].title), g.a.animate(u, {
                                translateX: ["0%", "10%"],
                                opacity: ["1", "0"]
                            }, {
                                duration: H,
                                easing: "easeInCubic"
                            }).then(function() {
                                u.removeAttr("style")
                            }), g.a.animate(c, {
                                opacity: ["0", "1"]
                            }, {
                                duration: H,
                                easing: "easeInCubic"
                            }).then(function() {
                                c.text(e[t].copy), c.removeAttr("style")
                            }), d.text(e[t].copy), g.a.animate(d, {
                                opacity: ["1", "0"]
                            }, {
                                duration: H,
                                easing: "easeInCubic"
                            }).then(function() {
                                d.removeAttr("style")
                            }), g.a.animate(p, {
                                opacity: ["0", "1"]
                            }, {
                                duration: H,
                                easing: "easeInCubic"
                            }).then(function() {
                                p.text(e[t].label), p.removeAttr("style")
                            }), h.text(e[t].label), g.a.animate(h, {
                                opacity: ["1", "0"]
                            }, {
                                duration: H,
                                easing: "easeInCubic"
                            }).then(function() {
                                h.removeAttr("style")
                            }), g.a.animate(f, {
                                opacity: ["1", "0"],
                                translateX: ["-50%", "-50%"],
                                translateY: ["-50%", "-50%"]
                            }, {
                                duration: H / 2,
                                easing: "linear"
                            }).then(function() {
                                n.setAttribute("src", a + (t + 1) + ".mp4"), n.load(), g.a.animate(f, {
                                    opacity: ["0", "1"],
                                    translateX: ["-50%", "-50%"],
                                    translateY: ["-50%", "-50%"]
                                }, {
                                    duration: H / 2,
                                    easing: "linear"
                                }).then(function() {})
                            }), n.pause()
                        }
                        r()(".wm-portfolios__counter-text").text(t + 1), r()(".wm-portfolios__title-text").text(e[t].title), r()(".wm-portfolios__copy-text").text(e[t].copy), r()(".wm-portfolios__button-label").text(e[t].label), s.click(function() {
                            g()(i, "stop")
                        }), setTimeout(function e() {
                            n.play(), g.a.animate(i, {
                                translateX: ["0%", "-100%"]
                            }, {
                                duration: $,
                                easing: "linear"
                            }).then(function() {
                                Promise.all([o()]).then(function() {
                                    setTimeout(e, H + 100)
                                })
                            })
                        }, 1e3)
                    }(), _("#research", "wm-research-0", 8e3), _("#answers", "wm-answers-0", 7e3)
            },
            finalize: function() {}
        },
        V = (i(112), new o({
            common: E,
            home: P,
            pageTemplateWork: M,
            workPage: N,
            careers: D,
            pageTemplateCapabilitiesDesign: j,
            pageTemplateCapabilitiesStrategy: j,
            pageTemplateCapabilitiesTechnology: j,
            pageTemplatePartnerAdobe: I,
            pageTemplatePartnerSitecore: I,
            pageTemplatePartnerSitefinity: I,
            pageTemplateFutureWealthManagement: q
        }));
    r()(document).ready(function() {
        return V.loadEvents()
    })
}]);
//# sourceMappingURL=bundle.js.map