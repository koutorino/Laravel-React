import { atom, useRecoilValue } from "recoil";
import { DataType } from "../types/dataType";

export const dataState = atom<DataType[]>({
  key: "dataState",
  default: [
    { id: 1, title: "sample1", content: "sample content1", image: "" },
    { id: 2, title: "sample1", content: "sample content1", image: "" },
    { id: 3, title: "sample1", content: "sample content1", image: "" },
    { id: 4, title: "sample1", content: "sample content1", image: "" },
    { id: 5, title: "sample1", content: "sample content1", image: "" },
    { id: 6, title: "sample1", content: "sample content1", image: "" },
  ],
});
